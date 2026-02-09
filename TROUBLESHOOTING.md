# Email Troubleshooting Guide

## Common Issues on Localhost

### Problem: "Sorry, there was an error sending your message"

**On localhost (Windows), the `mail()` function typically doesn't work** because there's no mail server configured.

## Solutions

### Solution 1: Use SMTP (Recommended for Localhost)

The system tries SMTP methods automatically. If they fail, check:

1. **Password Format**: 
   - Gmail app passwords are 16 characters WITHOUT spaces
   - If your password was "zoso qdca fgen wyuv", use "zosoqdcafgenwyuv"
   - Update in `includes/email_config.php` line 8

2. **Check if SMTP connection works**:
   - Visit: `http://localhost:8000/debug_email.php`
   - Look for "Testing SMTP Connection" section
   - If it says "CANNOT connect", your server blocks SMTP

3. **Verify App Password**:
   - Go to your Google Account → Security → 2-Step Verification → App passwords
   - Make sure the password is correct
   - App passwords are 16 characters, no spaces

### Solution 2: For Production Server

When you deploy to a real server:

1. The `mail()` function should work if the server has sendmail/postfix configured
2. Or install PHPMailer for reliable SMTP support:
   ```bash
   composer require phpmailer/phpmailer
   ```

### Solution 3: Test with Mailtrap (Development)

For local testing, use Mailtrap (free service):

1. Sign up at https://mailtrap.io
2. Get SMTP credentials
3. Update `includes/email_config.php` with Mailtrap settings
4. Test emails will be captured in Mailtrap inbox

## Current Configuration

- **SMTP Host**: smtp.gmail.com
- **SMTP Port**: 587
- **Username**: taleb.chrif@mifitt.net
- **Password**: zosoqdcafgenwyuv (16 chars, no spaces)

## Debug Steps

1. Visit `http://localhost:8000/debug_email.php` to see detailed diagnostics
2. Check PHP error logs (usually in your server's error log file)
3. Try the test page: `http://localhost:8000/test_email.php`
4. Verify the password is exactly 16 characters without spaces

## Quick Fix

If you want emails to work immediately on localhost:

1. **Verify the password** - Make sure it's exactly: `zosoqdcafgenwyuv` (no spaces)
2. **Check firewall** - Ensure port 587 is not blocked
3. **Test connection** - Use the debug page to see if SMTP connection works

If SMTP still fails, the issue is likely:
- Incorrect password
- Server blocking outbound SMTP connections
- Network/firewall restrictions
