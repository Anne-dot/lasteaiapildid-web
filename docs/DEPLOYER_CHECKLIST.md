# 🚀 Laravel → Zone.ee Deployment Checklist

## ✅ Pre-Flight Check (5 min)
- [x] Open terminal in project folder
- [x] Run: `vendor/bin/dep --version`
- [x] ✓ See version number? Deployer is ready!
- [ ] 🛑 No version? Run: `composer require --dev deployer/deployer`

---

## 📝 Step 1: Create deploy.php (10 min)

### Copy this starter file:
- [x] Create new file: `deploy.php` in project root
- [ ] Copy this code:

```php
<?php
namespace Deployer;

require 'recipe/laravel.php';

// TODO: Update these 4 lines!
set('application', 'lasteaiapildid');
set('repository', 'git@github.com:YOUR_USERNAME/YOUR_REPO.git');
host('production')
    ->setHostname('YOUR_SERVER.zone.ee')
    ->setRemoteUser('virt12345')
    ->setDeployPath('/data01/virt12345/domeenid/www.YOUR_DOMAIN.ee/htdocs')
    ->setIdentityFile('~/.ssh/id_ed25519');

// Don't touch below this line for now!
set('git_tty', true);
add('shared_files', ['.env']);
add('shared_dirs', ['storage', 'bootstrap/cache']);
add('writable_dirs', [
    'storage',
    'storage/app',
    'storage/app/public',
    'storage/framework',
    'storage/framework/cache',
    'storage/framework/sessions',
    'storage/framework/views',
    'storage/logs',
    'bootstrap/cache',
]);

task('build:local', function () {
    runLocally('npm install');
    runLocally('npm run build');
    upload('public/build/', '{{release_path}}/public/build/');
});

before('deploy:symlink', 'build:local');
before('deploy:symlink', 'artisan:migrate');
after('deploy:failed', 'deploy:unlock');
set('keep_releases', 3);
set('http_user', 'virt12345'); // Add this line!
```

### Update YOUR info:
- [x] Find: `YOUR_USERNAME/YOUR_REPO.git`
- [x] Replace with your GitHub repo
- [x] Find: `YOUR_SERVER.zone.ee`
- [x] Replace with Zone.ee server name
- [x] Find: `virt12345`
- [x] Replace with your Zone.ee username
- [x] Find: `YOUR_DOMAIN.ee`
- [x] Replace with your domain
- [x] Save file!

**🎯 Quick Check**: Can you see your GitHub URL in the file? ✓

---

## 🔑 Step 2: SSH Key (5 min)

### Do you have an SSH key?
- [x] Run: `ls ~/.ssh/id_ed25519`
- [x] ✓ See file? Skip to "Add to Zone.ee"
- [ ] ❌ No file? Continue below

### Create SSH key (if needed):
- [ ] Run: `ssh-keygen -t ed25519`
- [ ] Press ENTER (default location)
- [ ] Press ENTER (no password)
- [ ] Press ENTER (confirm)
- [ ] ✓ Done!

### Add to Zone.ee:
- [x] Run: `cat ~/.ssh/id_ed25519.pub`
- [x] Copy the output (starts with ssh-ed25519)
- [x] Open: zone.ee control panel
- [x] Click: SSH Access
- [x] Click: Add SSH Key
- [x] Paste key
- [x] Name: "Deployer"
- [x] Save

### Test it works:
- [x] Run: `ssh virt12345@your-server.zone.ee`
- [x] ✓ Connected? Type: `exit`
- [ ] ❌ Password prompt? Check SSH key steps

**🎯 Quick Check**: Can you SSH without password? ✓

---

## 📁 Step 3: Server Setup (10 min)

### Connect to server:
- [x] Run: `ssh virt12345@your-server.zone.ee`
- [x] ✓ You're in!

### Create folders:
- [x] Run: `cd /domeenid/your-domain/htdocs`
- [x] Run: `mkdir -p shared`
- [x] Run: `cd shared`

### Create .env file:
- [x] Run: `nano .env`
- [x] Paste your production .env content
- [x] Press: Ctrl+X
- [x] Press: Y
- [x] Press: ENTER
- [x] ✓ File saved!

### Set permissions:
- [x] Run: `chmod 755 .`
- [x] Run: `chmod 644 .env`
- [x] Run: `exit`
- [x] ✓ Back to local machine!

**🎯 Quick Check**: .env file created on server? ✓

---

## 🚀 Step 4: First Deploy! (5 min)

### Setup deployment:
- [x] Run: `vendor/bin/dep deploy:setup production`
- [x] ✓ See no error messages? Good!

### Deploy your app:
- [x] Run: `vendor/bin/dep deploy production`
- [x] ⏳ Wait... (2-3 minutes)
- [x] ✓ See "Successfully deployed"? 
- [x] 🎉 YOU DID IT!

### If it failed:
- [ ] Read error message
- [ ] Run: `vendor/bin/dep deploy:unlock production`
- [ ] Fix issue
- [ ] Try deploy again

**🎯 Quick Check**: Site working at your domain? ✓

---

## 🌐 Step 5: Configure Zone.ee (IMPORTANT!)

### Update DocumentRoot:
- [ ] Go to Zone.ee → Webhosting → Webserver
- [ ] Find "Directory on server (DocumentRoot)"
- [ ] Change FROM: `/path/to/htdocs` or `/path/to/htdocs/public`
- [ ] Change TO: `/path/to/htdocs/current/public`
- [ ] ⚠️ MUST include `/current/public` not just `/public`!
- [ ] Save changes
- [ ] Wait 1-2 minutes

### Grant Database Access:
- [ ] Go to Zone.ee → Databases
- [ ] Find your database
- [ ] Find your database user
- [ ] Click "Grant permissions" or "Privileges"
- [ ] Select "All privileges"
- [ ] Save

**🎯 Quick Check**: Can you see your Laravel app? ✓

---

## 🔁 Daily Commands (Keep this handy!)

### Deploy new changes:
```bash
git add .
git commit -m "changes"
git push
vendor/bin/dep deploy production
```

### Something broke?
```bash
vendor/bin/dep rollback production
```

### Need to SSH?
```bash
vendor/bin/dep ssh production
```

### Deploy stuck?
```bash
vendor/bin/dep deploy:unlock production
```

---

## 🆘 Quick Fixes

### "Permission denied"
- [ ] SSH to server
- [ ] Run: `chmod -R 755 storage`
- [ ] Try deploy again

### "Composer out of memory"
- [ ] Add to deploy.php: `set('php', 'php -d memory_limit=512M');`
- [ ] Try deploy again

### "Can't connect to database"
- [ ] Check .env on server has correct DB info
- [ ] Grant database user permissions in Zone.ee:
  - [ ] Go to Databases section
  - [ ] Find your database
  - [ ] Grant user "All privileges"
  - [ ] Save changes
- [ ] Test connection manually

---

## 🎯 Success Indicators

You know it's working when:
- ✅ `dep deploy production` takes 2-3 minutes
- ✅ No password prompts
- ✅ Site updates after deploy
- ✅ Old version still works if deploy fails

---

## 📌 Save These Commands!

```bash
# Deploy
vendor/bin/dep deploy production

# Rollback
vendor/bin/dep rollback production

# SSH
vendor/bin/dep ssh production

# Unlock
vendor/bin/dep deploy:unlock production
```

**💡 Pro tip**: Alias these in your `.bashrc`:
```bash
alias deploy="vendor/bin/dep deploy production"
alias rollback="vendor/bin/dep rollback production"
```

---

🏁 **Done? Your next deploy is just one command away!**