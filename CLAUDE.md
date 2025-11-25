# Claude Instructions

Please read and follow all instructions from the CLAUDE.md file located in the sibling folder:
`../lasteaiapildid-docs/CLAUDE.md`

All tasks, commands, and guidelines specified in that documentation should be applied to this web project.

## Session Start Checklist

**Before starting ANY work:**
1. Read `docs/PROJECT_STATUS.md` - current migration state
2. Check GitHub Issues: `gh issue list`
3. Read issue comments - they contain decisions and context
4. Check open PRs: `gh pr list`
5. Review recent commits: `git log --oneline -10`

GitHub repo is the primary source of truth for:
- Current tasks and priorities (Issues)
- Decisions and discussions (Issue comments)
- Work in progress (PRs)

## Project Overview

Landing page and future web application for lasteaiapildid.ee - helps Estonian parents download kindergarten photos from eliis.eu with one click.

**Tech Stack:**
- Astro 5.x (static site generator)
- Tailwind CSS 4.x
- TypeScript
- astro-icon with Lucide icons

## Project Structure

```
src/
├── components/     # Reusable UI components
│   ├── ui/         # Base UI components (Card, Badge)
│   ├── Header.astro
│   └── Footer.astro
├── content/        # Content Collections (bugs, features)
├── layouts/        # Page layouts (BaseLayout)
├── pages/          # Route pages
└── styles/         # Global CSS
```

## Commands

```bash
npm run dev      # Start dev server (localhost:4321)
npm run build    # Build for production
npm run preview  # Preview production build
```

## Related Repositories

- **lasteaiapildid-docs** - Shared documentation, business docs
- **lasteaiapildid-extension-chrome** - Chrome extension (LIVE)
- **lasteaiapildid-web** (this repo) - Landing page
