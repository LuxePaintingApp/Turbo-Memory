# Solid Cement Creations WordPress Theme

A bespoke WordPress theme delivering the luxurious, garden-focused experience requested for Solid Cement Creations. The theme implements the full layout plan across dedicated templates, custom post types, and reusable form components so editors can manage content entirely within WordPress.

## Features at a Glance
- Custom front page with hero carousel, signature creations, booking form, testimonial slider, and blog highlights.
- Purpose-built templates for About Us, Gnome World, Fairy Garden, Garden Designs, Restorations, Contact, and the Blog index.
- Custom post types for Collections, Projects, and Testimonials plus related taxonomies to power galleries and sliders.
- Sticky “Book a Quote” button, reusable booking/quote forms, and styled feedback forms across the site.
- Google Fonts integration for the “Breathing” typeface, responsive layout, and accessible markup.

## Repository Structure
```
wp-content/
└── themes/
    └── solid-cement-creations/
        ├── assets/
        │   ├── css/theme.css
        │   ├── js/theme.js
        │   └── images/placeholder-*.svg
        ├── inc/
        │   ├── custom-post-types.php
        │   └── template-tags.php
        ├── template-parts/
        │   ├── components/testimonial-slider.php
        │   └── forms/{booking.php,quote.php}
        ├── front-page.php, home.php, page-*.php, single.php, archive.php, page.php
        ├── header.php, footer.php, functions.php, index.php
        └── style.css
```

Copy the theme directory into your WordPress installation (`wp-content/themes/`) and activate “Solid Cement Creations” from the Appearance → Themes screen.

## Required Content Setup
1. **Pages** – Create pages with the following slugs so automatic templates load:
   - `home` (set as the Front Page under Settings → Reading)
   - `about-us`
   - `gnome-world`
   - `fairy-garden`
   - `garden-designs`
   - `restorations`
   - `contact`
   - Optionally assign another page (e.g., `blog`) as the Posts Page to use `home.php`.
2. **Menus** – Assign a menu to the “Primary Menu” location for the header navigation.
3. **Custom Post Types**
   - **Collections** (`solidcement_collection`): use the “Collection Categories” taxonomy with slugs like `gnome-world`, `fairy-garden`, `garden-designs` so items appear in the relevant sections.
   - **Projects** (`solidcement_project`): categorize with “Project Types” (`customer-gallery`, `gnome-world`, `fairy-garden`, `garden-design`, `restoration`, `highlight`) to feed galleries and before/after showcases.
   - **Testimonials** (`solidcement_testimonial`): add client quotes that feed the sliders and success stories.
4. **Blog Categories** – Tag inspiration posts with the `inspiration` category so they populate the Fairy Garden design inspiration grid.

## Optional Custom Fields
The theme reads several custom fields (accessible via the native “Custom Fields” panel or plugins such as ACF):

| Page | Meta Key | Purpose |
|------|----------|---------|
| About Us | `solidcement_about_tagline` | Short intro tagline under the hero title. |
| About Us | `solidcement_maker_name`, `solidcement_maker_title`, `solidcement_maker_bio` | Content for the “Meet the Maker” panel. |
| About Us | `solidcement_maker_photo` | Attachment ID for the maker portrait. |
| About Us | `solidcement_mission` | Mission statement paragraph. |
| About Us | `solidcement_values` | Line-separated bullet list of brand values. |
| About Us | `solidcement_process_gallery` | Comma-separated attachment IDs that display in the process gallery. |

If the fields are empty, the templates render helpful placeholder messaging.

## Forms & Integrations
All forms submit to `#` and are intentionally unprocessed so you can connect them to your preferred form plugin, CRM, or marketing automation tool. The markup is compatible with common WordPress form plugins should you wish to replace the bundled forms.

## Styling & Scripts
- `style.css` defines the color system, typography, and global utility classes.
- `assets/css/theme.css` adds layout styling for each page section, testimonial slider, galleries, and responsive rules.
- `assets/js/theme.js` powers the hero carousel and testimonial rotation.

## Extending the Theme
- Enqueue additional scripts or styles via `functions.php`.
- Register more custom post types or blocks in `inc/custom-post-types.php`.
- Add new helper render functions in `inc/template-tags.php` for extra sections.
- Include additional template parts under `template-parts/` and import them where needed.

## Development Notes
- The theme avoids page builders; it relies on core WordPress features for easy maintenance.
- All sections are responsive down to 320px viewports.
- Placeholder SVGs ensure the layout remains polished before real photography is uploaded.
- Text domain `solid-cement` is used throughout for translation readiness.

Happy gardening! 🌸
