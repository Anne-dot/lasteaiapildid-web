# 🚀 ADHD-Friendly Deployment Checklist

> **📌 NEW REPOSITORY:** This deployment guide is for the `lasteaiapildid-web` repository only.  
> The Chrome extension has its own separate repository now.
> 
> **Sibling repositories:**
> - `lasteaiapildid-extension-chrome` - Chrome extension
> - `lasteaiapildid-docs` - Business/design documentation

## 🎉 DEPLOYMENT WORKFLOW

### 🤖 How It Works:
1. **Push code to GitHub** → Triggers quality checks
2. **GitHub Actions** → Runs linting and tests only
3. **Local Deployer** → Actually deploys to production
4. Site updates in ~2 minutes

### ✅ To Deploy:
```bash
# 1. Push code to GitHub (triggers quality checks)
git add .
git commit -m "what you changed"
git push origin main

# 2. Wait for GitHub Actions to pass (linting + tests)
# 3. Deploy to production with Deployer
vendor/bin/dep deploy production
```

### 🔄 What Each Tool Does:
- **GitHub Actions**: Code quality only (linting, tests)
- **Deployer**: Actual deployment (composer, migrations, caches, go-live)

### ⏱️ After Pushing:
- Get water 💧
- Check GitHub Actions: https://github.com/Anne-dot/lasteaiapildid-web/actions
- Wait for green checkmark ✅
- Run: `vendor/bin/dep deploy production`
- Stretch 🙆 while deployment runs
- Check site: https://lasteaiapildid.ee

### 🟢 Success Signs:
- GitHub Actions shows green checkmark ✓
- Deployer shows "Successfully deployed!" message
- Homepage loads without 500 errors
- Your changes are live!

## 🔧 Only If Something Breaks

### 😱 If deployment failed:

#### GitHub Actions Failed (Red X):
- **Linting errors**: Fix code style issues locally
- **Test failures**: Fix failing tests locally
- **Re-push** after fixes

#### Deployer Failed:
1. **Database errors**: Check `.env` credentials
   ```bash
   ssh virt139054@lasteaiapildid.ee
   nano ~/deployments/lasteaiapildid/shared/.env
   ```
2. **Permission errors**: Contact Zone.eu support
3. **Manual deployment** (emergency only):
   ```bash
   ssh virt139054@lasteaiapildid.ee
   cd ~/deployments/lasteaiapildid/current
   git pull origin main
   composer install --no-dev
   php artisan migrate --force
   npm run build
   ```

### 🔑 If you see "APP_KEY" error:
```bash
ssh virt139054@lasteaiapildid.ee
cd ~/deployments/lasteaiapildid/current
php artisan config:cache
exit
```

### 💾 If database error:
```bash
ssh virt139054@lasteaiapildid.ee
cd ~/deployments/lasteaiapildid/current
php artisan migrate --force
exit
```

## 📝 When to Update .env

**You DON'T need to update .env for normal deploys!** ❌

**Only update .env when:**
- 🔐 Changing passwords
- 📧 Setting up email
- 🗄️ Changing database
- 🔧 Adding new API keys

### How to update .env:
```bash
ssh virt139054@lasteaiapildid.ee
nano ~/deployments/lasteaiapildid/shared/.env
# Make changes, then: Ctrl+O, Enter, Ctrl+X
cd ~/deployments/lasteaiapildid/current
php artisan config:cache
exit
```

## 🔍 Lighthouse Testing

### Before Deployment (Local):
```bash
# Run local server
php artisan serve

# In Chrome DevTools:
1. Open http://127.0.0.1:8000
2. Right-click → Inspect → Lighthouse tab
3. Run audit for key pages:
   - Landing page (/)
   - Privacy policy (/privaatsuspoliitika)
4. Fix any issues:
   - ❌ Red scores (0-49)
   - 🟡 Yellow scores (50-89)
   - ✅ Green scores (90-100)
```

### After Deployment (Production):
```bash
# Wait 5 minutes after deployment for caches to settle

# Test production site:
1. Open https://lasteaiapildid.ee
2. Run Lighthouse again
3. Compare scores with local
4. Check for:
   - Text compression enabled ✅
   - JS/CSS minified ✅
   - Cache headers set ✅
   - Meta descriptions present ✅
```

### Target Scores:
- 🎯 Performance: 70+ (90+ ideal)
- ♿ Accessibility: 90+ (100 ideal)
- 🏆 Best Practices: 90+
- 🔍 SEO: 90+

### Common Fixes:
- **Low contrast**: Make text colors darker
- **Missing meta**: Add description tags
- **Large assets**: Optimize images
- **No compression**: Check server config

## 🎉 Success Indicators
- ✅ Terminal shows "Successfully deployed!"
- ✅ Website loads without errors
- ✅ No red error screens
- ✅ Lighthouse scores are green/yellow
- ✅ Production scores ≥ local scores

## 🆘 Emergency Contacts
- 🐛 **Laravel errors:** Check `/storage/logs/laravel.log`
- 💬 **Zone.eu support:** support@zone.eu
- 📚 **Laravel docs:** https://laravel.com/docs

## 🧠 Remember
- **One thing at a time** - Deploy first, test second
- **Errors are normal** - Read them, they tell you what's wrong
- **You can always rollback** - Nothing is permanent
- **Take breaks** - Deployment can wait 5 minutes

---

## 🔧 Zone.eu SSH Settings

**IMPORTANT:** Deployment needs SSH access!

1. Go to Zone.eu → Your domain → SSH → IP Whitelisting
2. Make sure "Allow from any IP" is selected
3. Or add GitHub's IPs (changes often, not recommended)

---

**🎯 TL;DR - Two-Step Deploy:**
```bash
# Step 1: Quality check
git push origin main

# Step 2: Deploy (after GitHub Actions pass)
vendor/bin/dep deploy production
```

**GitHub Actions = Quality | Deployer = Deployment** 🎉