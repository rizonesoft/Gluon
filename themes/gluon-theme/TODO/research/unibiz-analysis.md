# Unibiz Theme Analysis

> **Path:** `R:\isotone\www\gluonwp\wp-content\themes\unibiz`  
> **Type:** Full Site Editing (FSE) Block Theme  
> **theme.json version:** 2 (WP 6.2 schema)

---

## Directory Structure

```
unibiz/
├── assets/
│   ├── css/           # Minimal custom CSS
│   ├── fonts/         # Host Grotesk font family
│   ├── img/           # 40 bundled images
│   └── js/            # Frontend scripts
├── gutenverse-files/  # Enhanced Gutenverse templates
│   ├── parts/
│   └── templates/
├── inc/
│   ├── class/         # PHP classes
│   └── patterns/      # 45 block patterns
├── languages/         # i18n
├── parts/             # Template parts (5)
└── templates/         # Page templates (10)
```

---

## theme.json Analysis

| Setting | Value |
|---------|-------|
| **Version** | 2 |
| **Color Palette** | 26 colors (light + dark mode) |
| **Primary** | `#7722ff` (Purple) ⚠️ |
| **Secondary** | `#5d16da` (Dark Purple) |
| **Font Family** | Host Grotesk (bundled) |
| **Font Sizes** | 16 sizes with fluid `clamp()` |
| **Layout** | 100% width (full-bleed) |

### Color Palette (26 colors)
- Primary/Secondary: Purple tones
- Text: Primary/Secondary/Placeholder
- Backgrounds: Primary/Secondary/Tertiary
- Borders: Standard/Input variants
- **Full dark mode palette included**

**Gluon Takeaway:** Adopt the dual light/dark palette structure, replace purple with Rizone Blue.

---

## Typography System

16 fluid font sizes using `clamp()`:

| Name | Size |
|------|------|
| Mini | clamp(12px, 1.05vw, 12px) |
| Little | clamp(12px, 1.228vw, 14px) |
| Tiny | clamp(14px, 1.111vw, 16px) |
| Normal | clamp(16px, 1.25vw, 18px) |
| Standard | clamp(20px, 1.666vw, 24px) |
| Big | clamp(22px, 1.805vw, 26px) |
| Largest | clamp(26px, 2.222vw, 32px) |
| Jumbo | clamp(32px, 3.333vw, 48px) |
| Mega | clamp(40px, 3.611vw, 52px) |
| Gigantic | clamp(48px, 5vw, 72px) |
| Huge | clamp(48px, 4.166vw, 60px) |
| Massive | clamp(160px, 13.889vw, 200px) |

**Gluon Takeaway:** Implement fluid typography with `clamp()`.

---

## Template Parts (5)

| Part | Purpose |
|------|---------|
| `header.html` | Main header with nav |
| `header-alternate.html` | Transparent/dark header |
| `footer.html` | Main footer |
| `footer-alternate.html` | Minimal footer |
| `sidebar.html` | Widget sidebar |

---

## Page Templates (10)

| Template | Purpose |
|----------|---------|
| `index.html` | Blog index |
| `home.html` | Front page |
| `page.html` | Default page |
| `page-no-sidebar.html` | Full-width page |
| `page-with-sidebar.html` | Sidebar layout |
| `single.html` | Single post |
| `archive.html` | Archive pages |
| `search.html` | Search results |
| `404.html` | Error page |
| `blank-canvas.html` | Empty template |

---

## Block Patterns (45)

### Dual-Mode Architecture
Each pattern has **Core** (native blocks) and **Gutenverse** (enhanced) versions:

### Home Page Patterns
| Pattern | Core | Gutenverse |
|---------|:----:|:----------:|
| Hero | ✅ | ✅ |
| About | ✅ | ✅ |
| Services | ✅ | ✅ |
| Benefits | ✅ | ✅ |
| Authority/Stats | ✅ | ✅ |
| Testimonials | ✅ | ✅ |
| Clients | ✅ | ✅ |
| Blog | ✅ | ✅ |

### Page Patterns
- Page hero + content
- Page no-sidebar variants
- Single post hero + content
- Archive/search heroes
- 404 page

**Gluon Takeaway:** Create comprehensive pattern library with business focus.

---

## Bundled Assets (40 images)

### Backgrounds
- Hero background (webp)
- Banner backgrounds (png)
- CTA background
- Circle/gradient decorations

### Client Logos
- 6 placeholder client logos

### Icons
- Blogging, Business, Portfolio icons
- Loading SVG
- Benefits icons (4)

### Testimonials
- 3 client photos

### Services
- 6 service images

**Gluon Takeaway:** Bundle placeholder assets, use WebP format.

---

## Header Structure

```html
<!-- Native FSE blocks -->
- wp:group (container, 1260px max)
  - wp:group (flex, space-between)
    - wp:site-title
    - wp:group (nav wrapper)
      - wp:navigation
        - wp:navigation-link (×4)
        - wp:navigation-submenu (with children)
```

**Features:**
- Border-bottom separator
- Flexbox layout
- Native navigation block
- Submenu support
- 40px link gap

---

## Visual Design Highlights

### Color Usage ⚠️ AVOID
- Primary: `#7722ff` (Purple) — **Overused in industry**
- All accents are purple variations

### Spacing
- 20px header padding
- 1260px content width
- 40px nav link gap
- 1.2rem block gap

### Animation Potential
- Clean hover states on links
- Gradient backgrounds
- Client logo grid

---

## Features to Adopt in Gluon

- [ ] Fluid typography with `clamp()` and 16 size presets
- [ ] Dual light/dark mode color palette in theme.json
- [ ] Full FSE block theme architecture (no PHP templates)
- [ ] Business-focused pattern library
- [ ] Hero patterns with gradient backgrounds
- [ ] Services grid with icons
- [ ] Testimonials carousel/grid
- [ ] Client logo showcase
- [ ] Statistics/authority section
- [ ] Benefits feature grid
- [ ] About section with image + text
- [ ] Blog post preview grid
- [ ] Multiple header variations (standard + transparent)
- [ ] Sidebar template part
- [ ] Blank canvas template
- [ ] WebP image format for assets
- [ ] Bundled custom font (Host Grotesk → use system stack)

---

## Key Differentiator: Avoid Purple

Unibiz's entire brand is built on `#7722ff` purple. Gluon will use:
- **Rizone Blue:** `oklch(0.55 0.2 250)`
- **System Slate:** `oklch(0.20 0.05 260)`

This immediately differentiates Gluon in the market.

---

*Analysis completed: 2026-01-16*
