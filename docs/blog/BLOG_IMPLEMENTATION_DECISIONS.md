# Blog Implementation Decisions

## Image Storage Strategy (2025-06-27)

**Decision:** Store blog images on Zone hosting server, not GitHub or database tables

### Implementation Details:
- Images stored in `public/images/blog/[post-slug]/` 
- Referenced via direct URLs in blog content
- Alt text stored directly in HTML/markdown, not separate database table

### Rationale:
- Simpler implementation for MVP
- Faster loading (same server as website)
- No external dependencies
- Full control over images
- Abundant hosting space available (252GB free)
- Can migrate to GitHub later if needed

## Database Strategy (2025-06-27)

**Decision:** Use separate tables in existing database, not separate database

### Implementation Details:
- Add blog_posts and blog_categories tables to existing database
- Leverage existing users table for authentication
- Use Laravel relationships between tables

### Rationale:
- Avoid unnecessary complexity of separate database
- Laravel handles table relationships easily
- Single database connection and deployment
- Shared authentication with existing user system
- MySQL handles thousands of tables without issues
- Atomic transactions across all application data

## Database Schema (2025-06-27)

**Final table structure covering essential blogging and SEO practices:**

### blog_categories
```sql
- id (auto-increment primary key)
- name (string) -- e.g., "Koodi Kirjutamine"
- slug (string, unique) -- e.g., "koodi-kirjutamine" 
- description (text, nullable) -- intro text for category pages
- created_at, updated_at (Laravel timestamps)
```

### blog_posts
```sql
- id (auto-increment primary key)
- title (string)
- slug (string, unique) -- SEO-friendly URLs
- content (text) -- main article HTML/markdown
- excerpt (text) -- short summary for listings
- category_id (foreign key to blog_categories)
- author (string, default "Anne Ruusmann")
- published_at (timestamp, nullable) -- null = draft, timestamp = published
- meta_title (string, nullable) -- for SEO <title> tag
- meta_description (string, nullable) -- for search results
- reading_time (integer) -- estimated minutes, auto-calculated
- created_at, updated_at (Laravel timestamps)
```

### Features Enabled:
- ✅ SEO optimization (meta tags, clean URLs, categories)
- ✅ Draft/publish workflow
- ✅ Reading time estimates
- ✅ Category landing pages
- ✅ Content organization
- ✅ Author attribution with flexibility

## Publishing Workflow (2025-06-27)

**Decision:** Use simple timestamp-based publishing logic

### Implementation Details:
- `published_at = null` → Draft (hidden from public)
- `published_at = past/current timestamp` → Published immediately
- `published_at = future timestamp` → Scheduled publishing

### Logic:
```sql
-- Only show published posts
WHERE published_at IS NOT NULL AND published_at <= NOW()
```

### Rationale:
- No separate status field needed
- Automatic future post publishing
- Simple logic: one field controls everything
- Laravel handles timestamp comparisons natively
- Clean admin interface (just date picker)