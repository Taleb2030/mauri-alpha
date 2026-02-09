# Deployment Checklist for Mauri-Alpha Website

## Pre-Deployment Steps

### ✅ Files to Upload
- [x] All PHP files (index.php, about.php, services.php, projects.php, contact.php)
- [x] includes/ folder (with email_config.php)
- [x] css/ folder
- [x] assets/ folder
- [x] vendor/ folder (PHPMailer - required for email)
- [x] composer.json and composer.lock (if hosting supports Composer)
- [x] .htaccess file (for security)

### ⚠️ Files to Secure/Remove
- [ ] `test_email.php` - Protected by .htaccess (or remove)
- [ ] `test_email_detailed.php` - Protected by .htaccess (or remove)
- [ ] `debug_email.php` - Protected by .htaccess (or remove)
- [ ] `check_password.php` - Protected by .htaccess (or remove)
- [ ] `view_contacts.php` - Protected by .htaccess (or remove)
- [ ] `email_debug.log` - Protected by .htaccess (or remove)
- [ ] `data/contacts_*.txt` - Protected by .htaccess

### 📧 Email Configuration
- [x] Gmail SMTP configured in `includes/email_config.php`
- [x] PHPMailer installed via Composer
- [ ] Test email sending after deployment
- [ ] Verify app password is correct

### 🔒 Security
- [x] .htaccess file created to protect test files
- [ ] Set proper file permissions (755 for folders, 644 for files)
- [ ] data/ folder should have write permissions (755 or 777)

## Deployment Steps

### Option 1: 000webhost (Free)

1. **Sign Up**: https://www.000webhost.com
2. **Create Website**: Choose subdomain (e.g., `mauri-alpha.000webhostapp.com`)
3. **Upload Files**:
   - Use File Manager in dashboard
   - Upload to `public_html` folder
   - Maintain folder structure
4. **Set Permissions**:
   - data/ folder: 755 or 777
   - All other folders: 755
   - All PHP files: 644
5. **Test**: Visit your subdomain and test all pages

### Option 2: InfinityFree (Free)

1. **Sign Up**: https://infinityfree.net
2. **Create Account**: Choose subdomain
3. **Upload Files**: Use File Manager or FTP to `htdocs` folder
4. **Set Permissions**: Same as above
5. **Test**: Visit your subdomain

### Option 3: Paid Hosting (Recommended for Production)

**Recommended Providers:**
- **Hostinger**: $2.99/month (often has promotions)
- **Namecheap**: $3-5/month
- **SiteGround**: $3.99/month
- **Bluehost**: $3.95/month

**Benefits:**
- Better email support
- More reliable SMTP connections
- Custom domain included
- Better performance
- Customer support

## Post-Deployment Testing

### ✅ Functionality Tests
- [ ] Home page loads correctly
- [ ] All navigation links work
- [ ] Language switching works (EN/AR/FR)
- [ ] About page displays correctly
- [ ] Services page displays correctly
- [ ] Projects page displays correctly
- [ ] Contact form submits successfully
- [ ] Email is received when form is submitted
- [ ] Mobile responsiveness works
- [ ] All images load correctly

### 📧 Email Testing
1. Fill out contact form
2. Submit form
3. Check email at `taleb.chrif200@gmail.com`
4. Check spam folder if not received
5. Verify email contains correct information

### 🔧 Troubleshooting

**If email doesn't work:**
1. Check PHP error logs in hosting control panel
2. Verify SMTP settings in `includes/email_config.php`
3. Some free hosts block SMTP - may need to use their mail() function
4. Consider using a service like SendGrid or Mailgun (free tiers available)

**If pages don't load:**
1. Check file permissions
2. Verify PHP version (needs 7.4+)
3. Check error logs
4. Verify all files uploaded correctly

## Quick Upload Guide

### Using File Manager (Easiest)
1. Log into hosting control panel
2. Open File Manager
3. Navigate to `public_html` or `htdocs`
4. Upload all files maintaining folder structure
5. Set permissions

### Using FTP (Faster for large files)
1. Get FTP credentials from hosting
2. Use FileZilla or similar FTP client
3. Connect to server
4. Upload all files to root directory
5. Set permissions

## Files Structure on Server

```
public_html/ (or htdocs/)
├── index.php
├── about.php
├── services.php
├── projects.php
├── contact.php
├── .htaccess
├── includes/
│   ├── email_config.php
│   ├── header.php
│   ├── footer.php
│   ├── languages.php
│   └── save_contact_simple.php
├── css/
│   └── style.css
├── assets/
│   └── images/
│       ├── Logo.png
│       └── Taleb.jpg
├── vendor/ (PHPMailer)
│   └── ...
├── data/ (will be created automatically)
└── composer.json
```

## Important Notes

1. **Email on Free Hosting**: Some free hosts block SMTP. You may need to:
   - Use their mail() function
   - Or use a third-party email service
   - Or upgrade to paid hosting

2. **PHPMailer**: Make sure to upload the `vendor/` folder or run `composer install` on the server

3. **Data Folder**: The `data/` folder will be created automatically when someone submits the contact form

4. **Custom Domain**: Most hosts allow you to connect a custom domain later

## Support

If you encounter issues:
1. Check hosting provider's documentation
2. Check PHP error logs
3. Test locally first
4. Contact hosting support

Good luck with your deployment! 🚀
