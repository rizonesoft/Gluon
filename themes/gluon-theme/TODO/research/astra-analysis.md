# Astra Theme Analysis

> **Path:** `R:\isotone\www\gluonwp\wp-content\themes\astra`  
> **Type:** Classic Theme with FSE support  
> **theme.json version:** 2

---

## Directory Structure

```
astra/
├── admin/              # Admin panel assets
├── assets/
│   ├── css/           # Compiled styles
│   ├── fonts/         # Bundled fonts
│   ├── js/            # Frontend/admin JS
│   └── svg/           # SVG icons/sprites
├── inc/
│   ├── addons/        # Pro feature stubs
│   ├── builder/       # Header/Footer builder system
│   ├── compatibility/ # 20+ third-party integrations
│   ├── core/          # Core classes, deprecated code
│   ├── customizer/    # Extensive customizer framework
│   ├── dynamic-css/   # Runtime CSS generation
│   ├── metabox/       # Post/page metaboxes
│   ├── modules/       # Related posts, post structures
│   └── schema/        # Structured data markup
├── languages/         # i18n files
└── template-parts/    # Modular template system
```

---

## theme.json Analysis

| Setting | Value |
|---------|-------|
| **Version** | 2 (not v3) |
| **Color Palette** | 9 CSS variable-based colors (`--ast-global-color-0` to `8`) |
| **Font Sizes** | Small (13px), Medium (20px), Large (36px), X-Large (42px) |
| **Spacing Units** | %, px, em, rem, vh, vw |
| **Layout** | contentSize + wideSize via CSS vars |
| **appearanceTools** | Enabled |

**Gluon Takeaway:** Use CSS variables for theming, but upgrade to theme.json v3.

---

## Header Builder Components (16)

| Component | Purpose |
|-----------|---------|
| `above-header` | Secondary nav row |
| `below-header` | Tertiary row |
| `primary-header` | Main header row |
| `menu` | Primary navigation |
| `mobile-menu` | Responsive nav |
| `mobile-trigger` | Hamburger button |
| `off-canvas` | Slide-out menu |
| `search` | Search form/icon |
| `button` | CTA button slot |
| `site-identity` | Logo + site title |
| `social-icon` | Social links |
| `html` | Custom HTML slot |
| `widget` | Widget area |
| `account` | User login/profile |
| `woo-cart` | WooCommerce cart |
| `edd-cart` | Easy Digital Downloads cart |

**Gluon Takeaway:** Implement modular header builder with drag-drop rows.

---

## Footer Builder Components (9)

| Component | Purpose |
|-----------|---------|
| `above-footer` | Top footer row |
| `primary-footer` | Main widgets row |
| `below-footer` | Bottom bar |
| `copyright` | Copyright text |
| `menu` | Footer navigation |
| `social-icon` | Social links |
| `button` | CTA button |
| `html` | Custom HTML |
| `widget` | Widget areas |

---

## Third-Party Integrations (20+)

### Page Builders
- Elementor / Elementor Pro
- Beaver Builder / Beaver Themer
- Divi Builder
- Visual Composer
- Site Origin

### eCommerce
- WooCommerce (full directory)
- Easy Digital Downloads
- SureCart

### LMS
- LearnDash
- LifterLMS

### Misc
- Gutenberg (enhanced)
- AMP (Accelerated Mobile Pages)
- Yoast SEO
- Jetpack
- BuddyPress
- Contact Form 7
- Gravity Forms
- BNE Flyout
- UberMenu
- Web Stories

**Gluon Takeaway:** Core WooCommerce + Gutenberg compatibility essential. Others optional.

---

## Customizer Architecture

- **79KB** main customizer class
- **28KB** sanitization helpers
- **Custom controls:** Color, typography, responsive, slider, etc.
- **Dynamic CSS:** Generated at runtime (306KB class!)
- **Global Palette:** Centralized color management

**Key Features:**
- Live preview with partials
- Responsive controls
- Typography with Google Fonts (201KB font list!)
- Section/panel registration system

---

## Performance Features

1. **Dynamic CSS** — Only loads styles for enabled features
2. **Modular loading** — Components lazy-loaded
3. **No jQuery dependency** (in core)
4. **Schema markup** — Built-in structured data
5. **Dark mode support** — Via dynamic CSS

---

## Features to Adopt in Gluon

- [ ] Modular header/footer builder with row system
- [ ] CSS variable-based global palette
- [ ] Dynamic CSS generation (only what's needed)
- [ ] WooCommerce compatibility layer
- [ ] Scroll-to-top button
- [ ] Archive/single banners
- [ ] Related posts module
- [ ] Mobile off-canvas menu
- [ ] Search modal/overlay
- [ ] Account/login widget
- [ ] Social icons component
- [ ] Custom HTML slots
- [ ] Responsive typography controls
- [ ] Advanced customizer with live preview

---

*Analysis completed: 2026-01-16*
