<?php
$page_title = "Contact";
$success_message = '';
$error_message = '';
$name = '';
$email = '';
$message = '';

// Include language system first
require_once 'includes/languages.php';

// Include email configuration
require_once 'includes/email_config.php';
require_once 'includes/save_contact_simple.php';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validation
    $errors = [];
    
    if (empty($name)) {
        $errors[] = 'Name is required.';
    } elseif (strlen($name) < 2) {
        $errors[] = 'Name must be at least 2 characters long.';
    }
    
    if (empty($email)) {
        $errors[] = 'Email is required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email address.';
    }
    
    if (empty($message)) {
        $errors[] = 'Message is required.';
    } elseif (strlen($message) < 10) {
        $errors[] = 'Message must be at least 10 characters long.';
    }
    
    // If no errors, process the form
    if (empty($errors)) {
        // Sanitize data
        $name_clean = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
        $email_clean = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $message_clean = htmlspecialchars($message, ENT_QUOTES, 'UTF-8');
        
        // Prepare email
        $email_subject = "New Contact Form Message from " . $name_clean;
        $email_body = "
        <html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
                .container { max-width: 600px; margin: 0 auto; padding: 20px; }
                .header { background: linear-gradient(135deg, #0066cc, #00aaff); color: white; padding: 20px; border-radius: 10px 10px 0 0; }
                .content { background: #f9f9f9; padding: 20px; border-radius: 0 0 10px 10px; }
                .field { margin-bottom: 15px; }
                .label { font-weight: bold; color: #0066cc; }
                .value { margin-top: 5px; padding: 10px; background: white; border-radius: 5px; border-left: 3px solid #00aaff; }
            </style>
        </head>
        <body>
            <div class='container'>
                <div class='header'>
                    <h2>New Contact Form Submission</h2>
                </div>
                <div class='content'>
                    <div class='field'>
                        <div class='label'>Name:</div>
                        <div class='value'>{$name_clean}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Email:</div>
                        <div class='value'>{$email_clean}</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Message:</div>
                        <div class='value'>" . nl2br($message_clean) . "</div>
                    </div>
                    <div class='field'>
                        <div class='label'>Submitted:</div>
                        <div class='value'>" . date('F j, Y, g:i a') . "</div>
                    </div>
                </div>
            </div>
        </body>
        </html>
        ";
        
        // ALWAYS save the contact to file first (so nothing is lost)
        saveContactToFile($name_clean, $email_clean, $message_clean);
        
        // Try to send email
        $email_sent = false;
        $email_error = '';
        
        try {
            $email_sent = sendEmail(
                SMTP_TO_EMAIL,
                $email_subject,
                $email_body,
                SMTP_FROM_EMAIL,
                SMTP_FROM_NAME,
                $email_clean  // Reply-To: user's email so you can reply directly
            );
            
            if (!$email_sent) {
                // Try alternative method - direct mail() with proper headers
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                $headers .= "From: " . SMTP_FROM_NAME . " <" . SMTP_FROM_EMAIL . ">\r\n";
                $headers .= "Reply-To: " . $email_clean . "\r\n";
                $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
                
                $email_sent = @mail(SMTP_TO_EMAIL, $email_subject, $email_body, $headers);
            }
        } catch (Exception $e) {
            $email_error = $e->getMessage();
            error_log("Email sending exception: " . $email_error);
        }
        
        // Always show success message since we saved the contact
        // Email is a bonus, but the form submission is saved
        $success_message = t('contact_success');
        
        // Clear form data
        $name = '';
        $email = '';
        $message = '';
    } else {
        $error_message = implode('<br>', $errors);
    }
}

include 'includes/header.php';
?>

<section class="section">
    <div class="container">
        <h1 class="section-title"><?php echo t('contact_title'); ?></h1>
        <p class="section-subtitle"><?php echo t('contact_subtitle'); ?></p>
        
        <!-- Contact Information at Top -->
        <div class="contact-info-section-top">
            <h3><?php echo t('contact_info'); ?></h3>
            <div class="contact-info-grid">
                <div class="contact-info-item">
                    <div class="contact-icon">📞</div>
                    <h4><?php echo t('contact_phone'); ?></h5>
                    <a href="tel:+22220304683" class="contact-link">+222 20 30 46 83</a>
                    <a href="tel:+22232730432" class="contact-link">+222 32 73 04 32</a>
                    
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-icon">📧</div>
                    <h4><?php echo t('contact_email'); ?></h5>
                    <a href="mailto:talebchrif200@gmail.com" class="contact-link">talebchrif200@gmail.com</a>
                    <a href="mailto:alietud79@gmail.com" class="contact-link">alietud79@gmail.com</a>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-icon"> 💬 </div>
                    <h4><?php echo t('contact_whatsapp'); ?></h5>
                    <a href="https://wa.me/22232730432" target="_blank" class="btn btn-whatsapp">
                        <span>💬</span> <?php echo t('contact_chat_whatsapp'); ?>
                    </a>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-icon"> 📱 </div>
                    <h4><?php echo t('contact_telegram'); ?></h5>
                    <a href="https://t.me/+22232730432" target="_blank" class="btn btn-telegram">
                        <span> 📱 </span> <?php echo t('contact_message_telegram'); ?>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="contact-section">
            <div class="contact-form">
                <?php if ($success_message): ?>
                    <div class="alert alert-success">
                        <?php echo $success_message; ?>
                    </div>
                <?php endif; ?>
                
                <?php if ($error_message): ?>
                    <div class="alert alert-error">
                        <?php echo $error_message; ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="contact.php">
                    <div class="form-group">
                        <label for="name"><?php echo t('contact_form_name'); ?> *</label>
                        <input 
                            type="text" 
                            id="name" 
                            name="name" 
                            required 
                            value="<?php echo isset($name) ? htmlspecialchars($name, ENT_QUOTES, 'UTF-8') : ''; ?>"
                            placeholder="<?php echo t('contact_form_name'); ?>"
                        >
                    </div>
                    
                    <div class="form-group">
                        <label for="email"><?php echo t('contact_form_email'); ?> *</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            required 
                            value="<?php echo isset($email) ? htmlspecialchars($email, ENT_QUOTES, 'UTF-8') : ''; ?>"
                            placeholder="<?php echo t('contact_form_email'); ?>"
                        >
                    </div>
                    
                    <div class="form-group">
                        <label for="message"><?php echo t('contact_form_message'); ?> *</label>
                        <textarea 
                            id="message" 
                            name="message" 
                            required 
                            placeholder="<?php echo t('contact_form_message'); ?>"
                        ><?php echo isset($message) ? htmlspecialchars($message, ENT_QUOTES, 'UTF-8') : ''; ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary" style="width: 100%;"><?php echo t('contact_form_submit'); ?></button>
                </form>
            </div>
            
            <div style="margin-top: 3rem; text-align: center; padding: 2rem; background: linear-gradient(135deg, rgba(21, 26, 40, 0.8) 0%, rgba(21, 26, 40, 0.6) 100%); backdrop-filter: blur(15px); border-radius: 20px; border: 1px solid rgba(0, 170, 255, 0.2);">
                <h3 style="color: var(--accent-blue); margin-bottom: 1rem;"><?php echo t('contact_why_title'); ?></h3>
                <p style="color: var(--text-secondary); line-height: 1.8;">
                    We're committed to delivering high-quality solutions that meet your business needs. 
                    Whether you need a simple website or a complex web application, we're here to help. 
                    Reach out to us and let's discuss how we can bring your ideas to life.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
