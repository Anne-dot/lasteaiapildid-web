# Lasteaiapildid-Web Project Status

## Current State (November 2025)

**Migration**: Laravel+Zone → Astro+GitHub Pages
**Goal**: Save 168€/year (14€/month Zone hosting → free GitHub Pages)

## Completed

### Infrastructure
- ✅ Email routing via Cloudflare (info@lasteaiapildid.ee → Gmail)
- ✅ Astro 5 project with TypeScript
- ✅ Tailwind CSS 4 with custom theme (Eliis colors)
- ✅ Content Collections (bugs, features)

### Components
- ✅ BaseLayout (dark mode, favicons, meta)
- ✅ Header (sticky, mobile menu, smooth scroll)
- ✅ Footer
- ✅ Card, Badge UI components

### Landing Page Sections
- ✅ Hero section

## In Progress (Issue #22)

Landing page sections remaining:
1. ⏳ Privacy section
2. ⏳ FAQ section
3. ⏳ Bugs section
4. ⏳ Features section
5. ⏳ About section
6. ⏳ Privacy Policy section

## Not Started

- GitHub Pages deployment setup
- GitHub Actions workflow
- DNS switch (Cloudflare → GitHub Pages)
- Zone.ee cancellation

## Tech Stack

| Component | Technology |
|-----------|------------|
| Framework | Astro 5.x |
| Styling | Tailwind CSS 4.x |
| Icons | astro-icon + Lucide |
| Font | Inter (Fontsource) |
| Content | Astro Content Collections |
| Hosting | GitHub Pages (planned) |

## Key Files

```
src/
├── layouts/BaseLayout.astro    # HTML shell, dark mode
├── components/
│   ├── Header.astro            # Navigation
│   ├── Footer.astro            # Footer
│   └── ui/                     # Reusable components
├── pages/index.astro           # Landing page
├── data/                       # Content Collections
│   ├── bugs/*.md
│   └── features/*.md
└── styles/global.css           # Tailwind theme
```

## References

- **Live Laravel site**: https://lasteaiapildid.ee (still on Zone)
- **Archived Laravel code**: `laravel-archived` branch
- **Saved HTML**: `temp/landing.html`
- **Migration issue**: GitHub Issue #17
- **Landing page issue**: GitHub Issue #22

## Architecture Decisions

Decisions documented in Issue #22 comments:

1. **Hybrid approach**: Reusable UI components (Card, Badge) + inline Tailwind for unique sections
2. **Dark mode**: FOUC prevention with `is:inline` script
3. **Icons**: astro-icon with @iconify-json/lucide (dynamic icon names)
4. **Content**: Astro Content Collections with Zod schemas

## Outdated Documentation

These files are from the Laravel era and need updating after migration:
- `docs/DEPLOYMENT_CHECKLIST.md` - Laravel/Deployer workflow
- `docs/WEB_TROUBLESHOOTING_LOG.md` - Laravel issues
- `docs/README.md` - References Laravel

---

**Last updated**: 2025-11-25
