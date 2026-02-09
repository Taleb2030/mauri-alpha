# GitHub Pages Deployment - Mauri-Alpha Website

## 🚀 Quick Setup Guide

### Step 1: Set Up Formspree (Free Contact Form Service)

1. **Sign up**: Go to https://formspree.io and create a free account
2. **Create a form**: Click "New Form"
3. **Get your form ID**: Copy your form endpoint URL
   - It looks like: `https://formspree.io/f/YOUR_FORM_ID`
   - Example: `https://formspree.io/f/xpzgkqyw`
4. **Update contact.html**: 
   - Open `static/contact.html`
   - Find: `action="https://formspree.io/f/YOUR_FORMSPREE_ID"`
   - Replace `YOUR_FORMSPREE_ID` with your actual form ID
5. **Configure Formspree**:
   - In Formspree dashboard, add your GitHub Pages URL to allowed domains
   - Set email notifications to: `taleb.chrif200@gmail.com`

**Formspree Free Tier:**
- ✅ 50 submissions per month
- ✅ Email notifications
- ✅ Spam protection
- ✅ No credit card required

### Step 2: Create GitHub Repository

1. Go to https://github.com
2. Click "New repository"
3. Name it (e.g., `mauri-alpha-website`)
4. Make it **Public** (required for free GitHub Pages)
5. Click "Create repository"

### Step 3: Upload Files to GitHub

**Option A: Using GitHub Web Interface**
1. Go to your repository
2. Click "uploading an existing file"
3. Upload all files from the `static/` folder:
   - `index.html` (or create from index.php)
   - `about.html` (or create from about.php)
   - `services.html` (or create from services.php)
   - `projects.html` (or create from projects.php)
   - `contact.html` ✅ (already created)
   - `css/` folder
   - `assets/` folder
   - `js/` folder (with languages.js)

**Option B: Using Git Command Line**
```bash
cd static
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin https://github.com/YOUR_USERNAME/REPO_NAME.git
git push -u origin main
```

### Step 4: Enable GitHub Pages

1. Go to your repository on GitHub
2. Click **Settings** (top menu)
3. Scroll down to **Pages** section (left sidebar)
4. Under **Source**, select:
   - Branch: `main` (or `master`)
   - Folder: `/ (root)`
5. Click **Save**
6. Wait 1-2 minutes for GitHub to build your site
7. Your site will be live at:
   - `https://YOUR_USERNAME.github.io/REPO_NAME/`

### Step 5: Test Your Website

1. Visit your GitHub Pages URL
2. Test all pages
3. **Test the contact form**:
   - Fill out the form
   - Submit it
   - Check your email: `taleb.chrif200@gmail.com`
   - You should receive an email from Formspree

## 📁 Files Structure

```
your-repo/
├── index.html
├── about.html
├── services.html
├── projects.html
├── contact.html          ✅ (with Formspree)
├── css/
│   └── style.css
├── assets/
│   └── images/
│       ├── Logo.png
│       └── Taleb.jpg
└── js/
    └── languages.js      ✅ (language switching)
```

## 🔧 Converting PHP to HTML

You need to convert your PHP files to HTML. Here's how:

### For each PHP file (index.php, about.php, etc.):

1. **Remove PHP code**:
   - Remove `<?php ... ?>` blocks
   - Replace `<?php echo t('key'); ?>` with `<span data-translate="key">Text</span>`
   - Replace `include 'includes/header.php';` with the actual HTML from header
   - Replace `include 'includes/footer.php';` with the actual HTML from footer

2. **Add language attributes**:
   - Add `data-translate="key"` to elements that need translation
   - Add `data-translate-placeholder="key"` to input placeholders

3. **Update links**:
   - Change `.php` to `.html` (e.g., `contact.php` → `contact.html`)

4. **Add JavaScript**:
   - Include `<script src="js/languages.js"></script>` before `</body>`

## ✅ What's Already Done

- ✅ `contact.html` - Fully functional with Formspree
- ✅ `js/languages.js` - Language switching system
- ✅ Form validation and error handling
- ✅ Mobile responsive design

## 🎯 Next Steps

1. **Convert other pages**: Convert `index.php`, `about.php`, `services.php`, `projects.php` to HTML
2. **Test locally**: Open `contact.html` in browser and test the form
3. **Deploy to GitHub**: Upload all files
4. **Test live**: Visit your GitHub Pages URL and test everything

## 🆘 Troubleshooting

**Form doesn't work:**
- Check that you replaced `YOUR_FORMSPREE_ID` in contact.html
- Verify Formspree form is active
- Check browser console for errors

**Pages don't load:**
- Make sure all file paths are correct
- Check that `css/style.css` exists
- Verify image paths in `assets/` folder

**Language switching doesn't work:**
- Make sure `js/languages.js` is included
- Check browser console for JavaScript errors
- Verify all elements have `data-translate` attributes

## 📧 Email Configuration

Formspree will send emails to:
- The email you configured in Formspree dashboard
- Default: The email you used to sign up

To change the recipient:
1. Go to Formspree dashboard
2. Click on your form
3. Go to "Settings" → "Email Notifications"
4. Add: `taleb.chrif200@gmail.com`

## 🎉 You're Done!

Once deployed, your website will be live and the contact form will send emails directly to your inbox!

**Need help?** Check the Formspree documentation: https://help.formspree.io
