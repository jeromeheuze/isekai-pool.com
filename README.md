# Isekai CPU Mining Portal

Marketing-first PHP site that promotes CPU-mineable coins, highlights trustworthy pools, and shares onboarding material for new miners. Styling is powered by Tailwind CSS and core data is stored in JSON for easy iteration.

## Project Structure

```
├─ public/            # Web root (index.php + compiled assets)
├─ src/               # Router, helpers, repositories
├─ views/             # PHP templates (home, coins, pools, guides)
├─ storage/data/      # JSON seed data for coins and pools
├─ resources/css/     # Tailwind input stylesheet
├─ package.json       # Tailwind build scripts
└─ tailwind.config.js # Tailwind configuration
```

## Getting Started

1. **Install dependencies**
   ```bash
   npm install
   ```

2. **Compile Tailwind CSS**
   ```bash
   npm run dev   # watches resources/css/app.css and outputs public/assets/app.css
   # or
   npm run build # single minified build
   ```

3. **Serve the site**
   ```bash
   php -S localhost:8000
   ```

Visit [http://localhost:8000](http://localhost:8000) to explore the site.

## Managing Content

- Update `storage/data/coins.json` to add or edit CPU-friendly coins.
- Update `storage/data/pools.json` for new pools, API metadata, or connection strings.
- Customize page layouts in `views/` — the router supports `/`, `/coins`, `/pools`, `/pools/{slug}`, and `/guides`.

## Roadmap Ideas

- Scheduled jobs to fetch live pool status from public APIs.
- Optional database layer (MySQL/Postgres) to replace JSON when scaling.
- Submission form for pool operators and coin maintainers.

Contributions and feedback are welcome — open an issue or reach out! 🚀
