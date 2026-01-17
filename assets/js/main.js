/**
 * ImpexusOne Main JavaScript
 *
 * @package ImpexusOne
 */

(function () {
    'use strict';

    /**
     * Mobile Menu Toggle
     */
    function initMobileMenu() {
        const toggle = document.querySelector('.mobile-menu-toggle');
        const mobileNav = document.getElementById('mobile-nav');

        if (!toggle || !mobileNav) return;

        toggle.addEventListener('click', function () {
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';

            toggle.setAttribute('aria-expanded', !isExpanded);
            mobileNav.classList.toggle('is-open');

            // Update icon
            const icon = toggle.querySelector('.material-symbols-outlined');
            if (icon) {
                icon.textContent = isExpanded ? 'menu' : 'close';
            }

            // Prevent body scroll when menu is open
            document.body.style.overflow = isExpanded ? '' : 'hidden';
        });

        // Close menu when clicking outside
        document.addEventListener('click', function (e) {
            if (!toggle.contains(e.target) && !mobileNav.contains(e.target)) {
                toggle.setAttribute('aria-expanded', 'false');
                mobileNav.classList.remove('is-open');
                document.body.style.overflow = '';

                const icon = toggle.querySelector('.material-symbols-outlined');
                if (icon) {
                    icon.textContent = 'menu';
                }
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && mobileNav.classList.contains('is-open')) {
                toggle.setAttribute('aria-expanded', 'false');
                mobileNav.classList.remove('is-open');
                document.body.style.overflow = '';
                toggle.focus();
            }
        });
    }

    /**
     * Search Modal/Dropdown Toggle (Pilot 3 - Fixed)
     */
    function initSearch() {
        const searchToggle = document.getElementById('search-toggle');
        const searchModal = document.getElementById('search-modal');
        const searchDropdown = document.getElementById('search-dropdown');
        const searchModalClose = document.getElementById('search-modal-close');
        const searchModalContent = searchModal ? searchModal.querySelector('.search-modal-content') : null;

        // Helper to close modal
        function closeModal() {
            if (searchModal) {
                searchModal.classList.remove('is-open');
                document.body.style.overflow = '';
            }
        }

        // Helper to close dropdown
        function closeDropdown() {
            if (searchDropdown) {
                searchDropdown.classList.remove('is-open');
            }
        }

        if (!searchToggle) return;

        const searchType = searchToggle.dataset.searchType || 'modal';

        // Toggle button click
        searchToggle.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            if (searchType === 'modal' && searchModal) {
                searchModal.classList.add('is-open');
                document.body.style.overflow = 'hidden';
                const input = searchModal.querySelector('input[type="search"]');
                if (input) {
                    setTimeout(() => input.focus(), 150);
                }
            } else if (searchType === 'dropdown' && searchDropdown) {
                searchDropdown.classList.toggle('is-open');
                const input = searchDropdown.querySelector('input[type="search"]');
                if (input && searchDropdown.classList.contains('is-open')) {
                    input.focus();
                }
            }
        });

        // Close modal on X button click
        if (searchModalClose) {
            searchModalClose.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                closeModal();
            });
        }

        // Prevent clicks on modal wrapper (contains close btn + content) from closing modal
        const searchModalWrapper = searchModal ? searchModal.querySelector('.search-modal-wrapper') : null;
        if (searchModalWrapper) {
            searchModalWrapper.addEventListener('click', function (e) {
                // Only stop propagation if not clicking the close button
                if (!e.target.closest('.search-modal-close')) {
                    e.stopPropagation();
                }
            });
        }

        // Close modal on backdrop (overlay) click
        if (searchModal) {
            searchModal.addEventListener('click', function (e) {
                // Close when clicking on the modal backdrop (not children)
                if (e.target === searchModal) {
                    closeModal();
                }
            });
        }

        // Close dropdown on outside click
        if (searchDropdown) {
            document.addEventListener('click', function (e) {
                if (!searchDropdown.contains(e.target) && !searchToggle.contains(e.target)) {
                    closeDropdown();
                }
            });
        }

        // Close on escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') {
                if (searchModal && searchModal.classList.contains('is-open')) {
                    closeModal();
                    if (searchToggle) searchToggle.focus();
                }
                if (searchDropdown && searchDropdown.classList.contains('is-open')) {
                    closeDropdown();
                    if (searchToggle) searchToggle.focus();
                }
            }
        });
    }

    /**
     * FAQ Accordion
     */
    function initFaqAccordion() {
        const faqItems = document.querySelectorAll('.faq-item');

        faqItems.forEach(function (item) {
            const trigger = item.querySelector('.faq-question');
            const answer = item.querySelector('.faq-answer');

            if (!trigger || !answer) return;

            trigger.addEventListener('click', function () {
                const isOpen = item.classList.contains('is-open');

                // Close all other items in the same container
                const container = item.closest('.faq-list');
                if (container) {
                    container.querySelectorAll('.faq-item.is-open').forEach(function (openItem) {
                        if (openItem !== item) {
                            openItem.classList.remove('is-open');
                            openItem.querySelector('.faq-answer').style.maxHeight = null;
                        }
                    });
                }

                // Toggle current item
                item.classList.toggle('is-open');

                if (!isOpen) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                } else {
                    answer.style.maxHeight = null;
                }
            });
        });
    }

    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');

                // Skip if it's just "#" or if it's a tab/accordion trigger
                if (href === '#' || this.hasAttribute('data-toggle')) return;

                const target = document.querySelector(href);

                if (target) {
                    e.preventDefault();

                    const headerHeight = document.querySelector('.site-header')?.offsetHeight || 0;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });

                    // Update URL without triggering scroll
                    history.pushState(null, null, href);
                }
            });
        });
    }

    /**
     * Header Scroll Behavior
     */
    function initHeaderScroll() {
        const header = document.querySelector('.site-header');
        if (!header) return;

        let lastScrollY = window.scrollY;
        let ticking = false;

        window.addEventListener('scroll', function () {
            if (!ticking) {
                window.requestAnimationFrame(function () {
                    if (window.scrollY > 100) {
                        header.classList.add('is-scrolled');
                    } else {
                        header.classList.remove('is-scrolled');
                    }

                    lastScrollY = window.scrollY;
                    ticking = false;
                });

                ticking = true;
            }
        });
    }

    /**
     * Table of Contents Active State
     */
    function initTocHighlight() {
        const toc = document.querySelector('.toc-nav');
        if (!toc) return;

        const tocLinks = toc.querySelectorAll('a');
        const sections = [];

        tocLinks.forEach(function (link) {
            const href = link.getAttribute('href');
            if (href && href.startsWith('#')) {
                const section = document.querySelector(href);
                if (section) {
                    sections.push({
                        link: link,
                        section: section
                    });
                }
            }
        });

        if (sections.length === 0) return;

        function highlightToc() {
            const scrollPosition = window.scrollY + 150;

            let currentSection = sections[0];

            sections.forEach(function (item) {
                if (item.section.offsetTop <= scrollPosition) {
                    currentSection = item;
                }
            });

            tocLinks.forEach(function (link) {
                link.classList.remove('is-active');
            });

            currentSection.link.classList.add('is-active');
        }

        window.addEventListener('scroll', highlightToc);
        highlightToc();
    }

    /**
     * Copy to Clipboard
     */
    function initCopyButtons() {
        document.querySelectorAll('[data-copy]').forEach(function (button) {
            button.addEventListener('click', function () {
                const textToCopy = this.getAttribute('data-copy') || window.location.href;

                navigator.clipboard.writeText(textToCopy).then(function () {
                    const originalText = button.innerHTML;
                    button.innerHTML = '<span class="material-symbols-outlined">check</span>';
                    button.classList.add('copied');

                    setTimeout(function () {
                        button.innerHTML = originalText;
                        button.classList.remove('copied');
                    }, 2000);
                });
            });
        });
    }

    /**
     * Initialize all functions on DOM ready
     */
    document.addEventListener('DOMContentLoaded', function () {
        initMobileMenu();
        initSearch();
        initFaqAccordion();
        initSmoothScroll();
        initHeaderScroll();
        initTocHighlight();
        initCopyButtons();
    });

})();
