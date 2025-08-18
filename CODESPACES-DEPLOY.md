# 🐙 Deploy VoIP AI Website on GitHub Codespaces

## Quick Start (2 minutes)

### 1. **Open in Codespaces**
- Go to your GitHub repository
- Click the green **"<> Code"** button
- Select **"Codespaces"** tab
- Click **"Create codespace on main"**

### 2. **Auto Setup**
The devcontainer will automatically:
- ✅ Install PHP 8.2 and Node.js 18
- ✅ Install Composer and npm dependencies  
- ✅ Configure environment for Codespaces

### 3. **Run Setup Script**
In the Codespaces terminal:
```bash
./scripts/codespaces-start.sh
```

### 4. **Start Laravel Server**
```bash
php artisan serve --host=0.0.0.0 --port=8000
```

### 5. **Make Port Public**
- Go to **"Ports"** tab in Codespaces
- Find port **8000** 
- Right-click → **"Port Visibility"** → **"Public"**

### 6. **Access Your Website**
Your VoIP AI website will be live at:
```
https://[codespace-name]-8000.app.github.dev
```

## 🌐 Live Demo Features

✅ **Full Laravel functionality**
- Contact forms work
- Database operations
- File uploads
- Email notifications (logged)

✅ **Real-time development**
- Hot reload with Vite
- Instant code changes
- Debug toolbar

✅ **Professional presentation**
- SSL certificate included
- Fast loading with CDN
- Mobile responsive

## 🔧 Development Commands

### Frontend Development
```bash
# Start Vite dev server with hot reload
npm run dev

# Build production assets
npm run build
```

### Laravel Commands
```bash
# Clear all caches
php artisan optimize:clear

# Run migrations
php artisan migrate

# Generate app key
php artisan key:generate
```

### Database Management
```bash
# Access SQLite database
php artisan tinker

# Reset database
php artisan migrate:fresh
```

## 📊 Codespaces Limits

- **Free tier**: 60 hours/month
- **Pro tier**: 90 hours/month
- **Perfect for**: Testing, demos, client presentations

## 🚀 Going Live

After testing in Codespaces, deploy to production:

1. **Railway.app** (Recommended)
   ```bash
   ./scripts/deploy-free.sh railway
   ```

2. **Render.com**
   ```bash
   ./scripts/deploy-free.sh render
   ```

## 🎯 Perfect Use Cases

- ✅ **Client demos** - Share live URL instantly
- ✅ **Team collaboration** - Multiple developers
- ✅ **Feature testing** - Test before production
- ✅ **Presentations** - Professional live demo

## 🛠️ Troubleshooting

### Port not accessible?
1. Check port 8000 is running: `php artisan serve --host=0.0.0.0 --port=8000`
2. Make port public in Ports tab
3. Wait 30 seconds for propagation

### Database issues?
```bash
# Reset database
rm database/database.sqlite
touch database/database.sqlite
php artisan migrate --force
```

### Assets not loading?
```bash
npm run build
php artisan storage:link
```

---

## 🎉 Result

Your **VoIP AI Website** will be live on the internet with:
- ✅ **Professional URL**: `https://your-codespace-8000.app.github.dev`
- ✅ **SSL Certificate**: Secure HTTPS connection
- ✅ **Full functionality**: All Laravel features working
- ✅ **Fast performance**: GitHub's global CDN

**Perfect for client presentations and testing!** 🚀