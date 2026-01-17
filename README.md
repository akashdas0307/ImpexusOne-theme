# ImpexusOne WordPress Theme

A modern, professional WordPress theme designed for development consulting organizations, CSR initiatives, and social sector enterprises. Built with clean code, accessibility in mind, and optimized for performance.

## Features

- **Fully Responsive** - Mobile-first design that works on all devices
- **Dark Mode Ready** - CSS custom properties for easy theme switching
- **Accessible** - WCAG 2.1 compliant with semantic HTML and ARIA support
- **SEO Optimized** - Schema markup ready, clean heading structure
- **Performance Focused** - Minimal dependencies, optimized assets
- **Developer Friendly** - Modular PHP, organized file structure

## Requirements

- WordPress 6.0 or higher
- PHP 7.4 or higher
- MySQL 5.7 or higher

## Installation

### Method 1: WordPress Admin

1. Download the theme as a `.zip` file
2. Go to **Appearance > Themes** in your WordPress admin
3. Click **Add New** > **Upload Theme**
4. Choose the `.zip` file and click **Install Now**
5. Activate the theme

### Method 2: Manual Installation

1. Download or clone the theme to `/wp-content/themes/impexusone`
2. Go to **Appearance > Themes** in your WordPress admin
3. Activate **ImpexusOne**

## Setup Guide

### 1. Menus

Navigate to **Appearance > Menus** and create menus for:

| Location | Description |
|----------|-------------|
| Primary Menu | Main header navigation |
| Mobile Menu | Mobile navigation (optional, falls back to Primary) |
| Footer Menu | Footer navigation links |
| Legal Links | Copyright/legal links (Privacy, Terms, etc.) |

### 2. Categories

Create the following categories for optimal theme functionality:

- `rfp-alerts` - RFP/Tender alerts
- `tips-tricks` - Tips and practical advice
- `tutorials` - How-to guides and tutorials
- `newsletter` - Newsletter archives
- `podcast` - Podcast episodes

### 3. Pages

Create pages and assign appropriate templates:

| Page | Template |
|------|----------|
| Home | Set as static front page |
| About | About Page |
| Services | Services Page |
| Insights | Insights Hub |
| Contact | Contact Page |
| Privacy Policy | Legal / Policy Page |
| Terms of Use | Legal / Policy Page |

### 4. Service Detail Pages

For individual service pages:

1. Create a new page (e.g., "Proposal Development")
2. Select **Service Detail** template
3. Optionally add custom fields for `service_icon`
4. Publish under the Services parent page

### 5. Customizer

Navigate to **Appearance > Customize** for:

- Site identity (logo, title, tagline)
- Custom colors (if using child theme)
- Widget areas

### 6. Widget Areas

The theme provides these widget areas:

- **Sidebar** - Default sidebar for posts/pages
- **Insights Sidebar** - For Insights Hub and archive pages
- **Footer Columns 1-4** - Four footer widget areas

## Page Templates

| Template | File | Description |
|----------|------|-------------|
| Default | `page.php` | Standard page layout |
| About Page | `page-about.php` | Mission, methodology, team section |
| Services Page | `page-services.php` | Services overview with cards |
| Contact Page | `page-contact.php` | Contact form and FAQ |
| Service Detail | `template-service-detail.php` | Individual service pages |
| Insights Hub | `page-insights.php` | Blog/insights landing |
| Legal/Policy | `template-legal.php` | Privacy, Terms pages with TOC |

## File Structure

```
impexusone/
├── assets/
│   ├── css/
│   │   └── components.css
│   ├── js/
│   │   └── main.js
│   └── images/
├── inc/
│   ├── enqueue.php          # Scripts & styles
│   ├── menus.php             # Navigation menus
│   ├── template-functions.php # Helper functions
│   └── theme-setup.php       # Theme setup
├── page-templates/
│   ├── page-about.php
│   ├── page-contact.php
│   ├── page-insights.php
│   ├── page-services.php
│   ├── template-legal.php
│   └── template-service-detail.php
├── template-parts/
│   └── single/
│       └── single-rfp.php
├── 404.php
├── category.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── searchform.php
├── single.php
├── style.css
└── README.md
```

## Customization

### CSS Variables

The theme uses CSS custom properties for easy customization. Override in a child theme:

```css
:root {
    /* Primary Colors */
    --color-primary: #0b606b;
    --color-primary-hover: #07464e;
    
    /* Secondary Colors */
    --color-secondary: #d97706;
    --color-tertiary: #15803d;
    
    /* Typography */
    --font-display: 'Manrope', sans-serif;
    --font-body: 'Inter', sans-serif;
}
```

### Adding New Service Pages

1. Create page with **Service Detail** template
2. Content is pulled from page content
3. Customize sections by editing the template or using custom fields

### Creating a Child Theme

1. Create folder `/wp-content/themes/impexusone-child`
2. Add `style.css` with:

```css
/*
Theme Name: ImpexusOne Child
Template: impexusone
*/

/* Your customizations here */
```

3. Add `functions.php` to enqueue parent styles

## Template Functions

### Available Functions

```php
// Get primary category
impexusone_get_primary_category($post_id);

// Display category badge
impexusone_category_badge($category);

// Get reading time
impexusone_get_reading_time($post_id);

// Display breadcrumbs
impexusone_breadcrumbs($args);

// Display section header
impexusone_section_header(array(
    'eyebrow'  => 'Eyebrow Text',
    'title'    => 'Section Title',
    'subtitle' => 'Optional subtitle'
));

// Display share buttons
impexusone_share_buttons($post_id);

// Display post meta
impexusone_post_meta(array('date', 'author', 'category'));
```

## Browser Support

- Chrome (latest)
- Firefox (latest)
- Safari (latest)
- Edge (latest)

## Performance Tips

1. **Images**: Use WebP format, enable lazy loading
2. **Caching**: Use a caching plugin (WP Rocket, LiteSpeed Cache)
3. **CDN**: Serve assets via CDN for global visitors
4. **Fonts**: Fonts are preloaded automatically

## Accessibility

The theme follows WCAG 2.1 guidelines:

- Skip links for keyboard navigation
- Semantic HTML structure
- ARIA labels where needed
- Focus indicators
- Screen reader text for icons

## License

This theme is licensed under GPL v2 or later.

## Support

For questions or support:
- Email: hello@impexus.com
- Website: https://impexus.com

## Changelog

### 1.0.0 (January 2026)
- Initial release
- Core templates implemented
- Design system established
- Accessibility features added

Test Final