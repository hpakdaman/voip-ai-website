# Git Workflow for Team Development

## 🌿 4-Branch Structure Overview
```
📊 Sawtic Git Workflow:
main     → Production branch (live website)
dev      → Shared development branch (hamed ↔ ashkan)  
hamed    → Hamed's personal development branch
ashkan   → Ashkan's personal development branch
```

**Flow Direction:** `hamed/ashkan → dev → main → production server`

## 🚨 CRITICAL: Branch-Specific Commands

### **For Hamed & Ashkan (Development Branches)**

**🔄 When user says "sync to dev" or "share work":**
```bash
./scripts/sync-to-dev.sh "commit message"
```
- ✅ Commits changes on current branch (hamed/ashkan)
- ✅ Pushes current branch to origin
- ✅ Merges current branch to dev (shared development)
- ✅ Updates current branch with any dev changes
- ✅ Makes work available to other developer

**⬇️ When user says "pull from dev" or "get updates":**
```bash
./scripts/pull-from-dev.sh
```
- ✅ Stashes uncommitted changes safely
- ✅ Pulls latest dev changes (other developer's work)
- ✅ Merges dev to current branch (hamed/ashkan)
- ✅ Restores stashed changes if any

**📥 When user says "pull" (from production):**
```bash
./scripts/git-pull.sh
```
- ✅ Gets production updates from main branch
- ✅ Same as existing workflow but for any branch

### **For Dev Branch (Shared Development)**

**🚀 When user says "deploy to production" or "merge to main":**
```bash
./scripts/merge-to-production.sh "production release message"
```
- ✅ Merges dev → main (production ready)
- ✅ Updates all branches with production changes
- ✅ Prepares for server deployment

### **For Production Deployment**

**📡 When user says "deploy to server" or "go live":**
```bash
./scripts/deploy-production.sh
```
- ✅ Deploys main branch to production server
- ✅ Same as existing production deployment

**🚀 When user says "complete deployment" or "deploy with merge":**
```bash
./scripts/deploy-with-merge.sh "deployment message"
```
- ✅ Complete pipeline: dev → main → production server
- ✅ One command for full deployment workflow

### **Emergency Procedures**

**🚨 When user says "hotfix" or "emergency fix":**
```bash
./scripts/hotfix-to-main.sh "HOTFIX: critical issue description"
```
- ⚠️ **BYPASS dev workflow** for critical production fixes
- ✅ Direct merge to main from any branch
- ✅ Syncs hotfix back to all branches
- ✅ Interactive confirmation required

## 📊 Branch Status & Navigation

**🔍 When user says "status" or "check branches":**
```bash
./scripts/branch-status.sh
```
- 📈 Shows status of all 4 branches
- 📍 Current branch and working directory status  
- 💡 Available actions based on current branch
- 📋 Commits ahead/behind main for each branch

## 🎯 Workflow Decision Tree

```
👤 Current Branch → Recommended Action
├─ hamed/ashkan   → ./scripts/sync-to-dev.sh (share work)
│                 → ./scripts/pull-from-dev.sh (get updates)  
├─ dev            → ./scripts/merge-to-production.sh (deploy)
├─ main           → ./scripts/deploy-production.sh (server)
└─ any branch     → ./scripts/hotfix-to-main.sh (emergency)
```

## 🔒 Safety Features
- ✅ **Branch Validation**: Scripts only work on appropriate branches
- ✅ **Conflict Detection**: Automatic merge conflict handling
- ✅ **Stash Management**: Auto-stash/restore uncommitted changes
- ✅ **Interactive Confirmation**: For destructive operations
- ✅ **Status Reporting**: Clear success/failure feedback

## Branch Management Rules
- **Always work on feature branches** (never directly on main)
- **Main branch** is protected and always deployable
- **All changes** must go through proper merge workflow
- **Never force push** to main or shared branches
- **Pull before push** to avoid conflicts

## Commit Message Standards
```
[Type] Brief description

- Detailed change 1
- Detailed change 2
- Impact or reasoning

🤖 Generated with [Claude Code](https://claude.ai/code)

Co-Authored-By: Claude <noreply@anthropic.com>
```

**Types**: feat, fix, style, refactor, docs, test, chore

## 🚀 CRITICAL: Production Deployment Protocol

### **When user says "deploy to production" or "deploy live":**
Execute this production deployment workflow:

**Execute production deployment**: `./scripts/deploy-production.sh`

**The deployment script handles:**
- ✅ Builds assets locally (if needed)
- ✅ Deploys main branch to production server (167.235.254.56)
- ✅ Installs production dependencies
- ✅ Optimizes Laravel for production (caches configs, routes, views)
- ✅ Sets proper file permissions
- ✅ Copies fresh build assets to server
- ✅ Tests deployment and confirms website is live

### **For quick production updates (minor changes):**
**Execute quick deployment**: `./scripts/quick-deploy.sh`

**The quick script handles:**
- ✅ Pulls latest changes from main branch
- ✅ Clears Laravel caches
- ✅ Sets permissions
- ✅ Tests deployment

### **Production Server Details:**
- **URL**: http://167.235.254.56
- **Server**: Hetzner CentOS Stream 10
- **Path**: /home/sawtic
- **Web Server**: Nginx + PHP 8.3 + Laravel 12

**IMPORTANT**: Only deploy from main branch after proper testing and merging!