# 🚨 Automatic Webpack Building Setup

## 📋 Available Auto-Build Commands

### **1. Basic Auto-Build (Recommended)**
```bash
npm run auto-build
```
- **What it does**: Watches CSS/JS files and rebuilds webpack assets on any change
- **Best for**: Standard development workflow
- **Output**: Rebuilds `public/css/app.min.css` and `public/js/app.min.js` automatically

### **2. Auto-Build with Polling**
```bash
npm run auto-build-poll
```
- **What it does**: Same as auto-build but uses file system polling (more reliable on some systems)
- **Best for**: When file changes aren't detected properly
- **Polls every**: 1000ms (1 second)

### **3. Complete Development Server**
```bash
npm run dev-with-mix
```
- **What it does**: Runs Laravel server + auto webpack building simultaneously
- **Serves on**: All network IPs (check terminal output for URLs)
- **Best for**: Complete development environment

### **4. Complete Development Server (Network)**
```bash
npm run dev-with-mix-network
```
- **What it does**: Network server + polling auto-build for mobile testing
- **Serves on**: 0.0.0.0:8000 + all network IPs
- **Best for**: Testing on mobile devices while auto-building

## 📋 Monitored Files

**CSS Files Watched:**
- `public/assets/css/tailwind.css`
- `public/assets/css/voip-home.css` 
- All library CSS files in `public/assets/libs/`

**JS Files Watched:**
- `public/assets/js/app.js`
- `public/assets/js/voip-home.js`
- `public/assets/js/plugins.init.js`
- All library JS files in `public/assets/libs/`

**Output Files Generated:**
- `public/css/app.min.css` (859 KB minified)
- `public/js/app.min.js` (289 KB minified)
- `public/mix-manifest.json` (Laravel Mix manifest)

## 📋 Recommended Workflow

### **For Regular Development:**
```bash
npm run dev-with-mix
```
This gives you:
- Laravel server with network IPs
- Automatic asset rebuilding on file changes
- Real-time CSS/JS updates

### **For Mobile Testing:**
```bash
npm run dev-with-mix-network
```
This gives you:
- Network server accessible on mobile
- File system polling for reliable change detection
- Auto asset rebuilding for instant mobile preview

### **For Asset Building Only:**
```bash
npm run auto-build
```
Use this when you already have Laravel server running and just want webpack watching.

## 📋 Terminal Output Example

When running `npm run dev-with-mix`, you'll see:
```
[0] 🌐 Sawtic Development Server Starting...
[0] 📱 Network URLs for mobile testing:
[0] ➜ Local:    http://127.0.0.1:8000
[0] ➜ Network:  http://192.168.1.100:8000
[1] Laravel Mix v6.0.49
[1] ✅ Compiled Successfully in 2345ms
[1] webpack compiled successfully
[1] 📦 Watching for changes...
```

## 📋 Manual Commands (Alternative)

If you prefer separate terminals:

**Terminal 1 - Laravel Server:**
```bash
npm run serve:network
```

**Terminal 2 - Webpack Watching:**
```bash
npm run auto-build
```

**Terminal 3 - Vite Development (for Tailwind):**
```bash
npm run dev:network
```

## ⚡ Performance Notes

- **File Changes**: Assets rebuild in ~2-3 seconds
- **Build Size**: CSS 859 KB + JS 289 KB (optimized)
- **Memory Usage**: Mix watch uses ~50-100MB RAM
- **Polling Mode**: Uses more CPU but more reliable file detection