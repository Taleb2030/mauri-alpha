# Free Hosting Deployment Guide for Mauri-Alpha Website

## Option 1: 000webhost (Recommended)

### Step 1: Sign Up
1. Go to https://www.000webhost.com
2. Click "Sign Up" and create a free account
3. Verify your email

### Step 2: Create Website
1. Log in to your dashboard
2. Click "Create Website"
3. Choose a subdomain name (e.g., `mauri-alpha.000webhostapp.com`)
4. Select PHP version (PHP 8.0 or higher recommended)

### Step 3: Upload Files
1. Go to "File Manager" in your dashboard
2. Navigate to `public_html` folder
3. Upload all your website files:
   - index.php
   - about.php
   - services.php
   - projects.php
   - contact.php
   - includes/ folder
   - css/ folder
   - assets/ folder

### Step 4: Create Database (if needed)
1. Go to "Databases" in dashboard
2. Create a new MySQL database
3. Note the database name, username, and password
4. Update any database connections in your PHP files

### Step 5: Configure Email (Important!)
Since you're using Gmail SMTP, you may need to:
1. Check if the hosting provider allows SMTP connections
2. Some free hosts block SMTP - you may need to use their mail() function
3. Update `includes/email_config.php` if needed

### Step 6: Test Your Website
1. Visit your subdomain URL
2. Test all pages
3. Test language switching
4. Test contact form

---

## Option 2: InfinityFree

### Step 1: Sign Up
1. Go to https://infinityfree.net
2. Click "Sign Up"
3. Create account and verify email

### Step 2: Create Account
1. Log in to control panel
2. Click "Create Account"
3. Choose subdomain (e.g., `mauri-alpha.infinityfreeapp.com`)
4. Select PHP version

### Step 3: Upload Files
1. Use File Manager or FTP
2. Upload all files to `htdocs` folder
3. Make sure folder structure is maintained

### Step 4: Test Website
1. Visit your subdomain
2. Test all functionality

---

## Option 3: GitHub Pages (Static Only - Not Recommended for PHP)

**Note:** GitHub Pages doesn't support PHP. You would need to convert to static HTML, which means losing PHP functionality like:
- Contact form processing
- Language switching (would need JavaScript)
- Dynamic content

---

## Important Notes Before Deploying

### 1. Update Email Configuration
Free hosting may not support SMTP. You may need to:
- Use the hosting provider's mail() function
- Or use a third-party email service like SendGrid (free tier available)

### 2. File Permissions
Make sure the `data/` folder has write permissions (chmod 755 or 777)

### 3. PHP Version
Check that your hosting supports PHP 7.4 or higher

### 4. Remove Development Files
Before uploading, remove or secure:
- `debug_email.php`
- `test_email.php`
- `view_contacts.php` (or password protect it)
- Any other development/testing files

### 5. Update Paths
Check that all file paths are relative (they should be already):
- `includes/header.php` ✅
- `css/style.css` ✅
- `assets/images/Logo.png` ✅

### 6. Test Contact Form
After deployment, test the contact form. If email doesn't work:
- Check hosting provider's email restrictions
- Consider using a service like Formspree or EmailJS for form submissions

---

## Alternative: Use a Custom Domain (Optional)

If you have a domain name:
1. Most free hosts allow custom domain connection
2. Update DNS settings to point to hosting provider
3. Configure domain in hosting control panel

---

## Recommended: Upgrade to Paid Hosting (Later)

For production use, consider:
- **Shared Hosting**: $3-10/month (Namecheap, Hostinger, etc.)
- **VPS**: $5-20/month (DigitalOcean, Vultr)
- Better email support, more resources, custom domain included

---

## Quick Checklist

- [ ] Sign up for free hosting
- [ ] Upload all files
- [ ] Create database (if needed)
- [ ] Test website functionality
- [ ] Test language switching
- [ ] Test contact form
- [ ] Configure email settings
- [ ] Remove development files
- [ ] Test on mobile devices
- [ ] Share your website URL!

---

## Need Help?

If you encounter issues:
1. Check hosting provider's documentation
2. Check PHP error logs in hosting control panel
3. Test locally first to ensure everything works
4. Contact hosting support

Good luck with your deployment! 🚀
