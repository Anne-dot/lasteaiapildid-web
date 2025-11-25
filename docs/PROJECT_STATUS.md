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

## In Progress

- ⏳ DNS switch (Cloudflare → GitHub Pages)
- ⏳ Zone.ee cancellation
- ⏳ Enable GitHub Pages in repo settings (Settings → Pages → Source: GitHub Actions)

## Completed (Issue #22)

Landing page sections:
- ✅ Privacy section
- ✅ FAQ section (5 FAQs based on real user feedback)
- ✅ Bugs section
- ✅ Features section
- ✅ About section
- ✅ Privacy Policy section
- ✅ Kasutusjuhend (user guide) section with 7 expandable steps
- ✅ GitHub Actions workflow (deploy.yml)
- ✅ Astro config for GitHub Pages
- ✅ Facebook link in footer
- ✅ Lighthouse 100/100

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
