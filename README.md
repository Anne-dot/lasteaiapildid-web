# 🌐 Lasteaiapildid.ee - Web Application

**Landing page and subscription backend for the Eliis Photo Downloader project.**

## 🎯 Current Status

- ✅ **Live**: [lasteaiapildid.ee](https://lasteaiapildid.ee)
- ✅ **Domain & Hosting**: Zone.ee Estonian servers
- 🔄 **Payment Integration**: Coming August 2025
- ⚠️ **Minor Issues**: Asset loading fixes needed

## 🛠️ Tech Stack

See [Tech Stack Documentation](../docs/company/TECH_STACK.md) for complete technical details.

**Quick Summary**: Laravel + Vue.js + Inertia + Shadcn components

## 🚀 Development

### Setup
```bash
composer install && npm install
cp .env.example .env && php artisan key:generate
php artisan migrate && npm run dev
```

### Commands
```bash
php artisan serve    # Backend server
npm run dev         # Frontend with HMR
php artisan test    # Run tests
```

## 🚢 Deployment

This project uses [Deployer](https://deployer.org/) for deployment to Zone.ee hosting.

### Deploy Command
```bash
vendor/bin/dep deploy production
```

### Other Deployment Commands
```bash
# Rollback to previous release
vendor/bin/dep rollback production

# SSH to server
vendor/bin/dep ssh production

# Unlock deployment (if it gets stuck)
vendor/bin/dep deploy:unlock production
```

### What happens during deployment:
1. Creates a new release directory
2. Pulls latest code from GitHub
3. Installs composer dependencies
4. Builds frontend assets (npm install & npm run build)
5. Runs database migrations
6. Clears all caches
7. Symlinks the new release to `current`
8. Keeps last 3 releases for rollback

## 📁 Key Documentation

- **[Deployment Guide](./docs/DEPLOYMENT_CHECKLIST.md)** - Production deployment
- **[Tech Stack](../docs/company/TECH_STACK.md)** - Technical architecture
- **[Project Overview](../docs/PROJECT_OVERVIEW.md)** - Full project context

## 💳 Payment System (August 2025)

- **Model**: €0.50/month after free period
- **Provider**: TBD (Maksekeskus evaluation)
- **Features**: Unlimited downloads

## 🔐 Privacy

- 🔒 No photo storage on servers
- 🔒 Estonian servers (GDPR compliant)
- 🔒 Minimal data collection

## 📧 Support

**Email**: ruusmann@gmail.com  
**Issues**: GitHub Issues  
**Status**: [Project Status](../docs/PROJECT_STATUS.md)

Built with ❤️ in Estonia for Estonian parents.

