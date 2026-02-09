# 🚀 Quick Start - Deploy to GitHub Pages

## ✅ What You Have

All static HTML files are ready in the `static/` folder:
- ✅ index.html
- ✅ about.html  
- ✅ services.html
- ✅ projects.html
- ✅ contact.html (with Formspree)
- ✅ js/languages.js

## ⚠️ IMPORTANT: Copy These Folders

Before uploading to GitHub, you need to copy these folders into `static/`:

1. **Copy `css/` folder** → `static/css/`
2. **Copy `assets/` folder** → `static/assets/`

They should be in the same directory as your HTML files.

## 📝 Step-by-Step

### 1. Set Up Formspree (2 minutes)
- Go to https://formspree.io
- Sign up (free)
- Create a form
- Copy your Form ID
- Open `static/contact.html`
- Replace `YOUR_FORMSPREE_ID` with your Form ID

### 2. Copy Folders
```bash
# From your project root:
cp -r css static/
cp -r assets static/
```

### 3. Upload to GitHub
- Create a new GitHub repository (make it **Public**)
- Upload all files from `static/` folder
- Enable GitHub Pages in Settings → Pages
- Your site will be live!

## 🎯 That's It!

Your website will be live on GitHub Pages with a working contact form that sends emails to `taleb.chrif200@gmail.com`!

For detailed instructions, see `DEPLOYMENT_READY.md`
