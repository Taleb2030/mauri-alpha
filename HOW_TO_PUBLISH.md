# 🚀 How to Publish Your Website for FREE on GitHub Pages

## Step-by-Step Guide (Takes 10 minutes)

### Step 1: Set Up Formspree (Free Contact Form) - 3 minutes

1. **Go to Formspree**: https://formspree.io
2. **Click "Sign Up"** (it's free, no credit card needed)
3. **Create an account** (use your email)
4. **Click "New Form"** button
5. **Copy your Form ID** - it looks like: `xpzgkqyw` or `abc123def`
6. **Open** `contact.html` in the `static/` folder
7. **Find this line** (around line 198):
   ```html
   <form id="contact-form" action="https://formspree.io/f/YOUR_FORMSPREE_ID" method="POST">
   ```
8. **Replace** `YOUR_FORMSPREE_ID` with your actual Form ID
   - Example: `action="https://formspree.io/f/xpzgkqyw"`
9. **In Formspree dashboard**, go to your form settings
10. **Set email notifications** to: `taleb.chrif200@gmail.com`

✅ **Done!** Your contact form will now send emails to your Gmail.

---

### Step 2: Create GitHub Account (If you don't have one) - 2 minutes

1. **Go to**: https://github.com
2. **Click "Sign up"**
3. **Create account** (free)
4. **Verify your email**

---

### Step 3: Create GitHub Repository - 2 minutes

1. **Log into GitHub**
2. **Click the "+" icon** (top right) → **"New repository"**
3. **Repository name**: `mauri-alpha-website` (or any name you like)
4. **Description**: "Mauri-Alpha - Software Engineering Solutions"
5. **Make it PUBLIC** ✅ (required for free GitHub Pages)
6. **DO NOT** check "Initialize with README"
7. **Click "Create repository"**

---

### Step 4: Upload Your Files - 3 minutes

**Option A: Using GitHub Web Interface (Easiest)**

1. **Go to your new repository** on GitHub
2. **Click "uploading an existing file"** button
3. **Open the `static/` folder** on your computer
4. **Select ALL files and folders**:
   - index.html
   - about.html
   - services.html
   - projects.html
   - contact.html
   - css/ (entire folder)
   - assets/ (entire folder)
   - js/ (entire folder)
5. **Drag and drop** all of them into GitHub
6. **Scroll down**, type commit message: "Initial commit"
7. **Click "Commit changes"**

**Option B: Using Git (If you have Git installed)**

```bash
cd C:\Users\Administrator\Desktop\Mauri_Dev\static
git init
git add .
git commit -m "Initial commit - Mauri-Alpha website"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/REPO_NAME.git
git push -u origin main
```

---

### Step 5: Enable GitHub Pages - 1 minute

1. **Go to your repository** on GitHub
2. **Click "Settings"** (top menu, far right)
3. **Click "Pages"** (left sidebar, under "Code and automation")
4. **Under "Source"**:
   - Select: **"Deploy from a branch"**
   - Branch: **"main"** (or "master")
   - Folder: **"/ (root)"**
5. **Click "Save"**
6. **Wait 1-2 minutes** for GitHub to build your site

---

### Step 6: Your Website is Live! 🎉

Your website will be available at:
- **URL**: `https://YOUR_USERNAME.github.io/REPO_NAME/`
- Example: `https://johndoe.github.io/mauri-alpha-website/`

**Share this URL with anyone!**

---

## ✅ Testing Checklist

After publishing, test these:

- [ ] Home page loads correctly
- [ ] All navigation links work
- [ ] Language switching works (EN/AR/FR)
- [ ] Contact form submits successfully
- [ ] You receive email at `taleb.chrif200@gmail.com` when form is submitted
- [ ] All images load correctly
- [ ] Mobile view works (test on phone)

---

## 🎯 Quick Summary

1. ✅ Set up Formspree → Get Form ID → Update `contact.html`
2. ✅ Create GitHub repository (make it Public)
3. ✅ Upload all files from `static/` folder
4. ✅ Enable GitHub Pages in Settings
5. ✅ Your site is live!

---

## 🆘 Need Help?

**If something doesn't work:**

1. **Check file paths** - Make sure all files are in the root of your repository
2. **Check Formspree** - Make sure you replaced `YOUR_FORMSPREE_ID`
3. **Check GitHub Pages** - Wait a few minutes, sometimes it takes time
4. **Check browser console** - Press F12, look for errors

**Common Issues:**

- **404 Error**: Files not uploaded correctly, check repository structure
- **Form doesn't work**: Formspree ID not updated in contact.html
- **Images don't load**: Assets folder not uploaded
- **CSS doesn't work**: CSS folder not uploaded

---

## 🎉 You're Done!

Your website is now live on GitHub Pages for FREE! 

The contact form will send emails directly to your Gmail inbox when someone submits it.

**Congratulations!** 🚀
