# 🚀 Final Steps to Publish Your Website

## ✅ Good News!
I've already prepared all your files with Git! Now you just need to:

---

## Step 1: Create GitHub Repository (2 minutes)

1. Go to: **https://github.com**
2. Log in (or sign up if you don't have an account)
3. Click the **"+"** icon (top right) → **"New repository"**
4. **Repository name**: `mauri-alpha-website` (or any name you like)
5. **Description**: "Mauri-Alpha - Software Engineering Solutions"
6. Make it **PUBLIC** ✅ (required for free hosting)
7. **DO NOT** check "Initialize with README" or any other options
8. Click **"Create repository"**

---

## Step 2: Connect and Upload (Copy these commands)

After creating the repository, GitHub will show you a page with instructions.

**Instead, copy and paste these commands in PowerShell:**

1. Open PowerShell (Press `Windows Key + R`, type `powershell`, press Enter)
2. Type: `cd C:\Users\Administrator\Desktop\Mauri_Dev\static`
3. Copy and paste this command (replace YOUR_USERNAME and REPO_NAME):

```powershell
git remote add origin https://github.com/YOUR_USERNAME/REPO_NAME.git
```

**Example:**
If your username is `johndoe` and repository is `mauri-alpha-website`:
```powershell
git remote add origin https://github.com/johndoe/mauri-alpha-website.git
```

4. Then run:
```powershell
git push -u origin main
```

5. If it asks for username/password:
   - **Username**: Your GitHub username
   - **Password**: Use a **Personal Access Token** (see below)

---

## Step 3: Create Personal Access Token (If needed)

If Git asks for a password, you need a Personal Access Token:

1. Go to: **https://github.com/settings/tokens**
2. Click **"Generate new token"** → **"Generate new token (classic)"**
3. **Note**: "Website Upload"
4. **Expiration**: 90 days (or your choice)
5. Check **"repo"** checkbox (this gives access to repositories)
6. Click **"Generate token"**
7. **COPY THE TOKEN** (you won't see it again!)
8. Use this token as your password when Git asks

---

## Step 4: Enable GitHub Pages (1 minute)

1. Go to your repository on GitHub
2. Click **"Settings"** (top menu)
3. Click **"Pages"** (left sidebar)
4. Under **"Source"**:
   - Select: **"Deploy from a branch"**
   - Branch: **"main"**
   - Folder: **"/ (root)"**
5. Click **"Save"**
6. Wait 1-2 minutes

---

## Step 5: Your Website is LIVE! 🎉

Your website will be at:
**`https://YOUR_USERNAME.github.io/REPO_NAME/`**

Example: `https://johndoe.github.io/mauri-alpha-website/`

---

## 🆘 Need Help?

**If you get an error:**
- Make sure you replaced `YOUR_USERNAME` and `REPO_NAME` in the git remote command
- Make sure the repository is PUBLIC
- If password doesn't work, use Personal Access Token

**Tell me:**
- Your GitHub username
- Your repository name
- And I'll give you the exact command to copy!
