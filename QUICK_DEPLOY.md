# Quick Deployment Guide - Mauri-Alpha Website

## 🚀 Ready to Deploy!

Your website is ready to be published. Follow these simple steps:

## Step 1: Choose a Hosting Provider

### Free Options:
1. **000webhost** - https://www.000webhost.com
   - Free subdomain
   - PHP support
   - File Manager included

2. **InfinityFree** - https://infinityfree.net
   - Free subdomain
   - PHP support
   - No ads

### Paid Options (Recommended):
- **Hostinger** - $2.99/month
- **Namecheap** - $3-5/month
- Better email support and reliability

## Step 2: Upload Files

### What to Upload:
✅ All PHP files (index.php, about.php, services.php, projects.php, contact.php)
✅ includes/ folder
✅ css/ folder
✅ assets/ folder
✅ vendor/ folder (PHPMailer - IMPORTANT for email!)
✅ composer.json
✅ .htaccess file

### Where to Upload:
- **000webhost**: `public_html/` folder
- **InfinityFree**: `htdocs/` folder
- **Most hosts**: `public_html/` or `www/` folder

### How to Upload:
1. **File Manager** (Easiest):
   - Log into hosting control panel
   - Open File Manager
   - Upload files maintaining folder structure

2. **FTP** (Faster):
   - Use FileZilla or similar
   - Connect using FTP credentials from hosting
   - Upload all files

## Step 3: Set Permissions

After uploading, set these permissions:
- **Folders**: 755
- **PHP files**: 644
- **data/ folder**: 755 or 777 (needs write permission)

## Step 4: Test Your Website

1. Visit your website URL
2. Test all pages:
   - Home page
   - About page
   - Services page
   - Projects page
   - Contact form

3. **Test Contact Form**:
   - Fill out the form
   - Submit it
   - Check your email: `taleb.chrif200@gmail.com`
   - Also check spam folder

## Step 5: Email Configuration

Your email is already configured with:
- **Gmail SMTP**: smtp.gmail.com
- **Port**: 587 (with fallback to 465)
- **Username**: taleb.chrif200@gmail.com
- **App Password**: Already configured

**Note**: Some free hosts block SMTP. If email doesn't work:
1. Check hosting provider's email restrictions
2. May need to use their mail() function
3. Or use a service like SendGrid (free tier)

## 🔒 Security

Test files are protected by `.htaccess`:
- `test_email.php` - Blocked
- `test_email_detailed.php` - Blocked
- `debug_email.php` - Blocked
- `view_contacts.php` - Password protected (default: `admin123` - CHANGE THIS!)

## 📝 Important Notes

1. **PHPMailer**: Make sure `vendor/` folder is uploaded (required for email)

2. **Data Folder**: Will be created automatically when contact form is submitted

3. **Email on Free Hosting**: May not work due to SMTP restrictions. Consider:
   - Using hosting provider's mail() function
   - Using a third-party email service
   - Upgrading to paid hosting

4. **Custom Domain**: Most hosts allow you to connect a custom domain later

## ✅ Deployment Checklist

- [ ] Sign up for hosting
- [ ] Upload all files
- [ ] Set file permissions
- [ ] Test website loads
- [ ] Test all pages
- [ ] Test language switching
- [ ] Test contact form
- [ ] Verify email received
- [ ] Change view_contacts.php password
- [ ] Test on mobile devices

## 🆘 Troubleshooting

**Website doesn't load:**
- Check file permissions
- Verify PHP version (needs 7.4+)
- Check error logs

**Email doesn't work:**
- Check PHP error logs
- Verify SMTP settings
- Some free hosts block SMTP
- Try using hosting provider's mail() function

**Contact form doesn't submit:**
- Check data/ folder permissions (needs write access)
- Verify PHP error logs

## 📞 Need Help?

1. Check `DEPLOYMENT_CHECKLIST.md` for detailed steps
2. Check hosting provider's documentation
3. Review PHP error logs in hosting control panel

---

**Your website is ready! Good luck with your deployment! 🚀**
