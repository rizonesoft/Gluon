# Gluon Theme Development Roadmap

> **Mission:** Make Gluon 1,000 lightyears ahead of all competition by incorporating the best features from Astra and Unibiz, enhanced with advanced AI automation via OpenRouter.

> [!IMPORTANT]
> **Design Philosophy:** Adopt **Unibiz's visual aesthetics** (layout, animations, business-focused patterns) while integrating **Astra's feature depth** (customizer options, integrations, performance). Use Gluon's signature color scheme:
> - **Accent:** Gluon Blue (`#088CDB`)
> - **Secondary:** Gluon Green (`#04D98B`)
> - **Dark BG:** Zinc-900 (`#18181b`) / **Light BG:** Zinc-50 (`#fafafa`)
> - **Mode:** Dark/Light toggle required

---

## Phase 1: Competitor Analysis & Feature Extraction ✅ COMPLETE

### 1.1 Astra Theme Deep Dive ✅

> 📄 **Research output:** [`TODO/research/astra-analysis.md`](./research/astra-analysis.md)

- [x] **Scan Astra directory structure** — 5 subdirs, 20 files, modular `inc/` architecture
- [x] **Analyze `theme.json`** — v2, 9 CSS color vars, 4 font sizes, layout via CSS vars
- [x] **Catalog block patterns** — None (relies on customizer/builder)
- [x] **Review customizer options** — 79KB customizer class, custom controls, partials
- [x] **Document header/footer variations** — 16 header components, 9 footer components
- [x] **Extract performance optimizations** — Dynamic CSS (306KB class), modular loading
- [x] **List third-party integrations** — 20+ (WooCommerce, Elementor, Gutenberg, AMP, etc.)
- [x] **📝 Update TODO.md** — Findings converted to Phase 2 tasks below

### 1.2 Unibiz Theme Deep Dive ✅

> 📄 **Research output:** [`TODO/research/unibiz-analysis.md`](./research/unibiz-analysis.md)

- [x] **Scan Unibiz directory structure** — 6 subdirs, 6 files, pure FSE architecture
- [x] **Analyze design system** — 26 colors (purple-heavy), 16 fluid font sizes, Host Grotesk
- [x] **Catalog block patterns** — 45 patterns (Core + Gutenverse dual-mode)
- [x] **Review dynamic content features** — Hero, services, testimonials, clients, about
- [x] **Document mega menu implementation** — Native navigation block with submenus
- [x] **Extract animation patterns** — Minimal (relies on Gutenverse for animations)
- [x] **List premium features** — Dual-mode patterns, dark mode palette, fluid typography
- [x] **📝 Update TODO.md** — Findings converted to Phase 2 tasks below

### 1.3 Feature Comparison Matrix ✅

> 📄 **Research output:** [`TODO/research/feature-matrix.md`](./research/feature-matrix.md)

- [x] **Create comparison matrix** — Astra vs Unibiz vs Gluon (current vs target)
- [x] **Identify feature gaps** — 8 high-priority, 7 medium-priority gaps identified
- [x] **Prioritize features** — Ranked by impact (FSE conversion highest priority)
- [x] **Define Gluon differentiators** — Tailwind v4, oklch colors, AI automation, Lucide

---

## Phase 2: Core Theme Architecture 🔴 HIGH PRIORITY

### 2.1 FSE Block Theme Conversion (from Astra/Unibiz research)
- [x] **Remove PHP templates** — Delete `header.php`, `footer.php`, `index.php`, etc.
- [x] **Create `theme.json` v3** — Full WordPress 6.9 schema with settings + styles
- [x] **Define color palette** — Accent Blue (`#088CDB`), Secondary Green (`#04D98B`), Zinc backgrounds
- [x] **Implement dark/light mode toggle** — Accessible switch in header, respects `prefers-color-scheme`
- [x] **Add fluid font sizes** — 10 sizes using `clamp()` for responsive typography
- [x] **Enable wide/full alignments** — Required for business layouts
- [x] **Configure spacing units** — px, em, rem, vh, vw, %

### 2.2 Template System (from Unibiz architecture)
- [ ] **Create `templates/index.html`** — Blog index
- [ ] **Create `templates/home.html`** — Front page with pattern includes
- [ ] **Create `templates/page.html`** — Default page
- [ ] **Create `templates/page-no-sidebar.html`** — Full-width page
- [ ] **Create `templates/single.html`** — Single post
- [ ] **Create `templates/archive.html`** — Archive pages
- [ ] **Create `templates/search.html`** — Search results
- [ ] **Create `templates/404.html`** — Error page
- [ ] **Create `templates/blank-canvas.html`** — Empty template

### 2.3 Template Parts (from Astra/Unibiz)
- [ ] **Create `parts/header.html`** — Main header with nav
- [ ] **Create `parts/header-transparent.html`** — Overlay header variation
- [ ] **Create `parts/footer.html`** — Main footer with widgets/social
- [ ] **Create `parts/footer-minimal.html`** — Simple copyright bar
- [ ] **Create `parts/sidebar.html`** — Widget sidebar

### 2.3 Block Patterns Library
- [ ] **Hero sections** — Full-width, split, video background, animated
- [ ] **Feature grids** — 2/3/4 column with icons, images, or stats
- [ ] **Testimonials** — Carousel, grid, single featured
- [ ] **Team members** — Grid, carousel, with social links
- [ ] **Pricing tables** — Comparison, tiered, toggle monthly/annual
- [ ] **Call-to-action** — Banner, inline, floating
- [ ] **Contact sections** — Form, map, info cards
- [ ] **FAQ/Accordion** — Native WordPress 6.9 accordion block styling
- [ ] **Portfolio/Gallery** — Masonry, filterable, lightbox

---

## Phase 3: Tailwind CSS v4.1.18 Implementation

### 3.1 Design Token System
- [ ] **Configure `@theme` block** — All colors, fonts, spacing in CSS variables
- [ ] **Define `--gluon-*` custom properties** — Prefixed per WordPress.org standards
- [ ] **Set up dark mode tokens** — Full dark palette with `prefers-color-scheme` and manual toggle override
- [ ] **Create component tokens** — Buttons, cards, forms, navigation

### 3.2 Utility Classes
- [ ] **Audit existing Tailwind usage** — Ensure no deprecated v3 syntax
- [ ] **Implement container queries** — Responsive components without media queries
- [ ] **Configure responsive prefixes** — Mobile-first with `md:`, `lg:`, `xl:`
- [ ] **Replace `outline-none`** — Use `outline-hidden` per v4 standards

### 3.3 CSS-Rendered Backgrounds
- [ ] **Gradient patterns** — Subtle mesh gradients, radial glows
- [ ] **Geometric patterns** — CSS-only dots, lines, grids
- [ ] **Animated backgrounds** — Subtle motion with `@keyframes`
- [ ] **Glassmorphism effects** — Blur, transparency for cards/modals
- [ ] **Noise/grain textures** — SVG-based or CSS filters

---

## Phase 4: Lucide Icons Integration

### 4.1 Icon System Setup
- [ ] **Bundle Lucide icons locally** — No CDN per WordPress.org rules
- [ ] **Create icon sprite** — Single SVG sprite for performance
- [ ] **Implement icon component** — PHP helper for inline SVG insertion
- [ ] **Document icon usage** — List of icons used, naming conventions

### 4.2 Icon Applications
- [ ] **Navigation icons** — Menu, search, close, chevrons
- [ ] **Social icons** — Full social media set
- [ ] **Feature icons** — Business, tech, service categories
- [ ] **UI feedback icons** — Success, error, warning, info
- [ ] **Action icons** — Download, share, copy, edit, delete

---

## Phase 5: AI Automation Features (OpenRouter Integration)

### 5.1 AI Infrastructure
- [ ] **Create Gluon AI settings page** — API key input, model selection
- [ ] **Implement OpenRouter client** — PHP class for API communication
- [ ] **Build response caching layer** — Reduce API calls, improve performance
- [ ] **Add usage tracking** — Token counts, cost estimation display

### 5.2 AI-Powered Content Features
- [ ] **Smart content suggestions** — AI recommends patterns based on page type
- [ ] **Auto-generate meta descriptions** — SEO-optimized descriptions from content
- [ ] **Image alt text generation** — AI-powered accessibility improvement
- [ ] **Content summarization** — Automatic excerpts and TL;DR sections
- [ ] **Translation assistance** — Inline translation suggestions

### 5.3 AI Assistant Panel
- [ ] **Floating assistant button** — Accessible from any admin page
- [ ] **Context-aware help** — AI understands current editing context
- [ ] **Code snippet generation** — Custom CSS, pattern modifications
- [ ] **Troubleshooting assistant** — Diagnose theme conflicts, suggest fixes
- [ ] **Design recommendations** — Color, typography, layout suggestions

### 5.4 AI Block Enhancements
- [ ] **AI-powered testimonial generator** — Create realistic placeholder content
- [ ] **Smart FAQ generation** — Generate FAQs from page content
- [ ] **Dynamic pricing descriptions** — AI-written feature comparisons
- [ ] **Personalized CTAs** — Context-aware call-to-action text

---

## Phase 6: Performance & Optimization

### 6.1 Asset Optimization
- [ ] **Critical CSS extraction** — Inline above-fold styles
- [ ] **Lazy load images** — Native WordPress + enhanced JS
- [ ] **Defer non-critical JS** — Async loading for AI features
- [ ] **Minify CSS/JS** — Production build pipeline
- [ ] **Font optimization** — `font-display: swap`, subset fonts

### 6.2 Core Web Vitals
- [ ] **LCP optimization** — Hero image preloading
- [ ] **CLS prevention** — Reserved space for dynamic content
- [ ] **FID improvement** — Minimize main thread blocking
- [ ] **Target scores** — 90+ on PageSpeed Insights

---

## Phase 7: Accessibility (WCAG 2.1 AA)

- [ ] **Skip to content link** — Visible on focus in header
- [ ] **Focus indicators** — `:focus-visible` on all interactive elements
- [ ] **Color contrast audit** — 4.5:1 minimum for text
- [ ] **Keyboard navigation** — Full site navigable without mouse
- [ ] **Screen reader testing** — NVDA/VoiceOver compatibility
- [ ] **ARIA labels** — All icon-only buttons labeled
- [ ] **Reduced motion support** — `prefers-reduced-motion` handling

---

## Phase 8: WordPress.org Submission Checklist

- [ ] **License headers** — GPLv2+ in all PHP files
- [ ] **Text domain** — `'gluon'` in all translatable strings
- [ ] **Escaping audit** — `esc_html__`, `esc_url`, `wp_kses` everywhere
- [ ] **Sanitization audit** — `sanitize_text_field` on all inputs
- [ ] **Prefix audit** — `gluon_` functions, `Gluon_` classes, `--gluon-` CSS
- [ ] **Screenshot** — 1200x900 PNG, no third-party logos
- [ ] **readme.txt** — Changelog, credits, license, tested versions
- [ ] **Theme Check plugin** — Pass all automated checks
- [ ] **No external resources** — All assets bundled locally

---

## Phase 9: Documentation & Marketing

- [ ] **User documentation** — Getting started, customization guide
- [ ] **Developer documentation** — Hooks, filters, extending Gluon
- [ ] **Demo site** — Showcase all patterns and features
- [ ] **Changelog maintenance** — Semantic versioning
- [ ] **Marketing assets** — Feature comparison graphics, screenshots

---

## Reference Paths

| Theme | Path |
|-------|------|
| **Astra** | `R:\isotone\www\gluonwp\wp-content\themes\astra` |
| **Unibiz** | `R:\isotone\www\gluonwp\wp-content\themes\unibiz` |
| **Gluon** | `R:\isotone\www\gluonwp\wp-content\themes\gluon-theme` |

---

## Design Principles

1. **Gluon Colors** — Accent `#088CDB` (Blue) + Secondary `#04D98B` (Green) + Zinc backgrounds, mandatory dark/light toggle
2. **Utility over Flash** — Performance-first, animations as enhancement
3. **AI as Superpower** — Not just a theme, an intelligent design assistant
4. **CSS over Images** — Render backgrounds, patterns, effects in pure CSS
5. **Tailwind + Lucide** — Consistent, maintainable, modern stack

---

*Last updated: 2026-01-16*
