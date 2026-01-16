# Feature Comparison Matrix

> **Astra vs Unibiz vs Gluon (Current)**

---

## Architecture Comparison

| Feature | Astra | Unibiz | Gluon (Current) | Gluon (Target) |
|---------|:-----:|:------:|:---------------:|:--------------:|
| Theme Type | Classic + FSE | FSE Block | Hybrid (Classic) | FSE Block |
| theme.json version | v2 | v2 | ❌ None | v3 |
| PHP Templates | ✅ Yes | ❌ No | ✅ Yes | ❌ No |
| HTML Templates | ❌ No | ✅ Yes | ❌ Empty | ✅ Yes |
| Block Patterns | ❌ No | ✅ 45 patterns | ❌ Empty | ✅ 30+ |
| Template Parts | ✅ PHP | ✅ HTML | ❌ PHP only | ✅ HTML |

---

## Color System

| Feature | Astra | Unibiz | Gluon (Current) | Priority |
|---------|:-----:|:------:|:---------------:|:--------:|
| Primary Color | Blue (configurable) | Purple `#7722ff` | Rizone Blue oklch | ✅ Done |
| CSS Variables | 9 `--ast-*` | 26 `--gv-*` | `--color-rizone-*` | ✅ Done |
| Dark Mode Palette | ✅ Dynamic CSS | ✅ 13 dark colors | ❌ None | 🔴 High |
| Color Space | Hex | Hex | oklch | ✅ Done |

---

## Typography

| Feature | Astra | Unibiz | Gluon (Current) | Priority |
|---------|:-----:|:------:|:---------------:|:--------:|
| Font Sizes | 4 sizes | 16 fluid sizes | 10 sizes | 🟡 Medium |
| Fluid Typography | ❌ No | ✅ clamp() | ❌ No | 🔴 High |
| Custom Font | Google Fonts 201KB | Host Grotesk bundled | System stack | ✅ Done |
| Heading Family | Configurable | Host Grotesk | `--font-heading` | ✅ Done |

---

## Layout System

| Feature | Astra | Unibiz | Gluon (Current) | Priority |
|---------|:-----:|:------:|:---------------:|:--------:|
| Content Width | CSS var | 100% (full-bleed) | 1200px | ✅ Done |
| Wide Alignment | ✅ Yes | ✅ Yes | ❌ No | 🔴 High |
| Full Alignment | ✅ Yes | ✅ Yes | ❌ No | 🔴 High |
| Container Queries | ❌ No | ❌ No | ❌ No | 🟡 Medium |

---

## Header Features

| Feature | Astra | Unibiz | Gluon (Current) | Priority |
|---------|:-----:|:------:|:---------------:|:--------:|
| Header Builder | ✅ 16 components | ❌ Template only | ❌ PHP | 🔴 High |
| Above Header Row | ✅ Yes | ✅ Yes | ❌ No | 🟡 Medium |
| Transparent Header | ✅ Yes | ✅ Alternate | ❌ No | 🟡 Medium |
| Mobile Menu | ✅ Off-canvas | ✅ Native nav | ✅ Responsive | ✅ Done |
| Search Component | ✅ Modal/form | ✅ Native | ✅ Form | ✅ Done |
| Account/Login | ✅ Yes | ❌ No | ❌ No | 🟢 Low |
| WooCommerce Cart | ✅ Yes | ❌ No | ❌ No | 🟢 Low |

---

## Footer Features

| Feature | Astra | Unibiz | Gluon (Current) | Priority |
|---------|:-----:|:------:|:---------------:|:--------:|
| Footer Builder | ✅ 9 components | ❌ Template only | ❌ PHP | 🔴 High |
| Multi-row Footer | ✅ Yes | ✅ Yes | ❌ No | 🟡 Medium |
| Copyright Block | ✅ Yes | ✅ Yes | ❌ Hardcoded | 🟡 Medium |
| Social Icons | ✅ Component | ✅ Yes | ❌ No | 🔴 High |

---

## Block Patterns

| Pattern Category | Astra | Unibiz | Gluon (Current) | Priority |
|------------------|:-----:|:------:|:---------------:|:--------:|
| Hero Sections | ❌ No | ✅ 2 | ❌ None | 🔴 High |
| About Section | ❌ No | ✅ 2 | ❌ None | 🔴 High |
| Services Grid | ❌ No | ✅ 2 | ❌ None | 🔴 High |
| Benefits/Features | ❌ No | ✅ 2 | ❌ None | 🔴 High |
| Testimonials | ❌ No | ✅ 2 | ❌ None | 🔴 High |
| Client Logos | ❌ No | ✅ 2 | ❌ None | 🟡 Medium |
| Stats/Authority | ❌ No | ✅ 2 | ❌ None | 🟡 Medium |
| Blog Grid | ❌ No | ✅ 2 | ❌ None | 🟡 Medium |
| CTA Sections | ❌ No | ❌ No | ❌ None | 🔴 High |
| Pricing Tables | ❌ No | ❌ No | ❌ None | 🟡 Medium |
| FAQ/Accordion | ❌ No | ❌ No | ❌ None | 🟡 Medium |

---

## Third-Party Integrations

| Integration | Astra | Unibiz | Gluon (Current) | Priority |
|-------------|:-----:|:------:|:---------------:|:--------:|
| WooCommerce | ✅ Full | ❌ No | ❌ No | 🟡 Medium |
| Elementor | ✅ Full | ❌ No | ❌ No | 🟢 Low |
| Gutenberg Enhanced | ✅ Yes | ✅ Gutenverse | ❌ No | 🔴 High |
| Yoast SEO | ✅ Yes | ❌ No | ❌ No | 🟢 Low |
| AMP | ✅ Yes | ❌ No | ❌ No | 🟢 Low |

---

## Performance

| Feature | Astra | Unibiz | Gluon (Current) | Priority |
|---------|:-----:|:------:|:---------------:|:--------:|
| Dynamic CSS | ✅ 306KB class | ❌ Static | ❌ No | 🟡 Medium |
| Lazy Loading | ✅ Yes | ❌ Native WP | ❌ Native WP | 🟢 Low |
| Critical CSS | ✅ Pro feature | ❌ No | ❌ No | 🟡 Medium |
| CSS Framework | Custom | Custom | Tailwind v4 | ✅ Done |

---

## Accessibility

| Feature | Astra | Unibiz | Gluon (Current) | Priority |
|---------|:-----:|:------:|:---------------:|:--------:|
| Skip Link | ✅ Yes | ❌ No | ✅ Yes | ✅ Done |
| Focus Visible | ✅ Yes | ❌ Partial | ✅ Yes | ✅ Done |
| Screen Reader Text | ✅ Yes | ❌ No | ✅ Yes | ✅ Done |
| ARIA Labels | ✅ Yes | ❌ Partial | ❌ Partial | 🟡 Medium |

---

## Gluon Differentiators (Unique Features)

| Feature | Astra | Unibiz | Gluon (Target) |
|---------|:-----:|:------:|:--------------:|
| Tailwind CSS v4 | ❌ | ❌ | ✅ Native |
| oklch Color Space | ❌ | ❌ | ✅ Modern |
| AI Automation (OpenRouter) | ❌ | ❌ | ✅ Unique |
| Lucide Icons | ❌ | ❌ | ✅ Bundled |
| CSS-Rendered Backgrounds | ❌ | Image-based | ✅ Pure CSS |
| theme.json v3 | ❌ | ❌ | ✅ Latest |

---

## Priority Summary

### 🔴 High Priority (Must Have)
1. Convert to FSE block theme (HTML templates)
2. Create theme.json v3 with full palette
3. Add wide/full alignment support
4. Build 10+ core block patterns (hero, services, testimonials, etc.)
5. Implement dark mode palette
6. Add fluid typography with clamp()
7. Create social icons component
8. Header/footer as HTML template parts

### 🟡 Medium Priority (Should Have)
1. Multi-row header/footer
2. Transparent/alternate header
3. Dynamic CSS generation
4. Client logos pattern
5. Stats/authority pattern
6. Pricing tables pattern
7. WooCommerce compatibility

### 🟢 Low Priority (Nice to Have)
1. Account/login component
2. Elementor compatibility
3. AMP support
4. Yoast SEO integration

---

*Analysis completed: 2026-01-16*
