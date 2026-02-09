# 📁 How to Upload Folders to GitHub - 3 Easy Methods

## ❌ Problem: GitHub Web Interface Doesn't Allow Folder Uploads

GitHub's web uploader only accepts individual files, not folders. Here are 3 solutions:

---

## ✅ Method 1: Use Git Command Line (Recommended - Fastest)

### Step 1: Install Git (if you don't have it)
1. Go to: **https://git-scm.com/download/win**
2. Download and install Git for Windows
3. Restart your computer after installation

### Step 2: Open PowerShell in the static folder
1. Press `Windows Key + R`
2. Type: `powershell` and press Enter
3. Type these commands one by one:

```powershell
cd C:\Users\Administrator\Desktop\Mauri_Dev\static
```

### Step 3: Initialize Git and Upload
Copy and paste these commands one by one (replace YOUR_USERNAME and REPO_NAME):

```powershell
git init
git add .
git commit -m "Initial commit - Mauri-Alpha website"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/REPO_NAME.git
git push -u origin main
```

**Note:** Replace:
- `YOUR_USERNAME` with your GitHub username
- `REPO_NAME` with your repository name (e.g., `mauri-alpha-website`)

**Example:**
```powershell
git remote add origin https://github.com/johndoe/mauri-alpha-website.git
```

---

## ✅ Method 2: Upload Files Manually (Create Folders First)

### Step 1: Create Folders in GitHub
1. In your GitHub repository, click **"Add file"** → **"Create new file"**
2. Type: `css/style.css` (this creates the css folder)
3. Don't add any content, just click **"Cancel"**
4. Repeat for:
   - `assets/images/logo.png`
   - `js/languages.js`

### Step 2: Upload Files to Folders
1. Click **"Add file"** → **"Upload files"**
2. Upload `css/style.css` (it will go into the css folder)
3. Upload all files from `assets/images/` folder
4. Upload `js/languages.js`
5. Upload all HTML files (index.html, about.html, etc.)

**This method is tedious but works!**

---

## ✅ Method 3: Use GitHub Desktop (Easiest GUI)

### Step 1: Download GitHub Desktop
1. Go to: **https://desktop.github.com/**
2. Download and install GitHub Desktop
3. Sign in with your GitHub account

### Step 2: Add Your Repository
1. Open GitHub Desktop
2. Click **"File"** → **"Add local repository"**
3. Click **"Create a repository"**
4. **Local path**: `C:\Users\Administrator\Desktop\Mauri_Dev\static`
5. Click **"Create repository"**

### Step 3: Publish to GitHub
1. In GitHub Desktop, you'll see all your files
2. At the bottom, type commit message: "Initial commit"
3. Click **"Commit to main"**
4. Click **"Publish repository"**
5. Choose your repository name
6. Make sure **"Keep this code private"** is UNCHECKED (so it's public)
7. Click **"Publish repository"**

**Done! All folders and files are uploaded!**

---

## 🎯 Which Method Should You Use?

- **Method 1 (Git Command Line)**: Fastest, but requires installing Git
- **Method 2 (Manual Upload)**: Works immediately, but tedious
- **Method 3 (GitHub Desktop)**: Easiest GUI, requires installing GitHub Desktop

**I recommend Method 3 (GitHub Desktop)** - it's the easiest!

---

## 🆘 Need Help?

If you get stuck, tell me which method you're trying and I'll help you!
