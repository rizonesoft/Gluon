---
description: Run individual tasks from the Gluon TODO.md roadmap
---

# Gluon Development Workflow

Execute individual items from the TODO.md roadmap with proper tracking and version control.

## Prerequisites

- Working directory: `R:\isotone\www\gluonwp\wp-content\themes\gluon-theme`
- TODO file: `TODO/TODO.md`
- Rules: `.agent/rules/gluon-rules.md`

## Workflow Steps

### 1. Read Current State
// turbo
Read `TODO/TODO.md` to understand the current progress and identify the target task.

### 2. Review Rules
// turbo
Read `.agent/rules/gluon-rules.md` to ensure compliance with all Gluon standards.

### 3. Identify Target Task
Ask the user which specific task item to work on, or identify the next uncompleted `[ ]` item in priority order:
- 🔴 HIGH PRIORITY items first (Phase 2 core architecture)
- 🟡 MEDIUM PRIORITY items second
- 🟢 LOW PRIORITY items last

### 4. Mark Task In-Progress
Update `TODO/TODO.md`:
- Change `[ ]` to `[/]` for the target task
- Add timestamp comment if helpful

### 5. Execute Task
Implement the task following Gluon rules:
- Use Tailwind CSS v4 (CSS-first, `@theme` block)
- Use oklch color space for brand colors
- Prefix functions with `gluon_`, classes with `Gluon_`, CSS vars with `--gluon-`
- Use Lucide icons (bundled locally)
- Ensure WCAG 2.1 AA accessibility
- Use FSE block theme architecture (HTML templates, no classic PHP)

### 6. Mark Task Complete
Update `TODO/TODO.md`:
- Change `[/]` to `[x]` for the completed task
- Update any related research docs if applicable

### 7. Commit Changes
// turbo
```powershell
git add .
git status
```

### 8. Create Descriptive Commit
Commit with a message describing the completed task:
```powershell
git commit -m "feat(gluon): [task description]"
```

Use conventional commit prefixes:
- `feat:` — New feature or pattern
- `fix:` — Bug fix
- `refactor:` — Code restructuring
- `docs:` — Documentation only
- `style:` — Formatting, CSS changes
- `chore:` — Build, config, tooling

### 9. Push to Remote
// turbo
```powershell
git push origin main
```

### 10. Report Completion
Summarize what was done and confirm the push was successful.

---

## Color Reference

| Role | Hex | oklch |
|------|-----|-------|
| Accent | `#088CDB` | `oklch(0.60 0.15 230)` |
| Secondary | `#04D98B` | `oklch(0.75 0.18 160)` |
| Light Surface | `#fafafa` | Zinc-50 |
| Light Elevated | `#f4f4f5` | Zinc-100 |
| Dark Surface | `#18181b` | Zinc-900 |
| Dark Elevated | `#27272a` | Zinc-800 |

## File Structure Reference

```
gluon-theme/
├── templates/        # HTML block templates
├── parts/            # Template parts (header, footer)
├── patterns/         # Block patterns
├── assets/           # CSS, JS, icons
├── inc/              # PHP includes
├── TODO/             # Roadmap and research
│   ├── TODO.md
│   └── research/
├── theme.json        # v3 schema
├── style.css         # Tailwind + @theme
└── functions.php     # Theme setup
```
