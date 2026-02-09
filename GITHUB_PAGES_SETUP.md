# GitHub Pages Deployment Guide

## ⚠️ Important: GitHub Pages Only Supports Static HTML

GitHub Pages doesn't support PHP, so I'll create a static HTML version with:
- ✅ JavaScript-based language switching
- ✅ Formspree for contact form (free service)
- ✅ All pages converted to static HTML

## Step 1: Set Up Formspree (Free Contact Form Service)

1. Go to https://formspree.io
2. Sign up for a free account
3. Create a new form
4. Copy your form endpoint URL (looks like: `https://formspree.io/f/YOUR_FORM_ID`)
5. Update the contact form in `contact.html` with your Formspree URL

**Formspree Free Tier:**
- 50 submissions per month
- Email notifications
- Spam protection
- No credit card required

## Step 2: Create GitHub Repository

1. Go to https://github.com
2. Create a new repository (e.g., `mauri-alpha-website`)
3. Make it public (required for free GitHub Pages)

## Step 3: Upload Static Files

Upload these files to your GitHub repository:
- `index.html`
- `about.html`
- `services.html`
- `projects.html`
- `contact.html`
- `css/style.css`
- `assets/` folder
- `js/` folder (for language switching)

## Step 4: Enable GitHub Pages

1. Go to your repository on GitHub
2. Click **Settings**
3. Scroll to **Pages** section
4. Under **Source**, select **main branch** (or your default branch)
5. Click **Save**
6. Your site will be live at: `https://YOUR_USERNAME.github.io/REPO_NAME/`

## Step 5: Configure Formspree

1. In Formspree dashboard, add your GitHub Pages URL to allowed domains
2. Test the contact form
3. Check your email for form submissions

## Alternative: Use Netlify or Vercel

These platforms also support static sites and are easier to set up:
- **Netlify**: Drag and drop your files
- **Vercel**: Connect your GitHub repo

Both offer:
- Free hosting
- Custom domains
- Better form handling options
