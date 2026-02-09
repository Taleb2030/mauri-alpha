# Email Setup Instructions

## For Gmail SMTP Authentication

The contact form is configured to send emails to `taleb.chrif@mifitt.net` using Gmail SMTP.

### Option 1: Install PHPMailer (Recommended)

For proper Gmail SMTP authentication, install PHPMailer:

1. Install Composer (if not already installed):
   ```bash
   php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
   php composer-setup.php
   php -r "unlink('composer-setup.php');"
   ```

2. Install PHPMailer:
   ```bash
   composer require phpmailer/phpmailer
   ```

3. The email system will automatically use PHPMailer if it's installed.

### Option 2: Use mail() Function (Fallback)

If PHPMailer is not available, the system will try to use PHP's `mail()` function. 
This may work on some hosting providers but won't work with Gmail SMTP authentication.

### Current Configuration

- **SMTP Host:** smtp.gmail.com
- **SMTP Port:** 587
- **Username:** taleb.chrif@mifitt.net
- **Password:** (App password configured)
- **To Email:** taleb.chrif@mifitt.net

### Testing

1. Fill out the contact form on your website
2. Submit the form
3. Check your email inbox at `taleb.chrif@mifitt.net`

### Troubleshooting

If emails are not being received:

1. Check PHP error logs
2. Verify the app password is correct
3. Ensure PHPMailer is installed for Gmail SMTP
4. Check spam/junk folder
5. Verify SMTP settings in `includes/email_config.php`
