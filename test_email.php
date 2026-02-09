<?php
/**
 * Email Test Page
 * Use this to diagnose email sending issues
 * Access: http://yoursite.com/test_email.php
 */

// Include email config
require_once 'includes/email_config.php';

// Disable error display for cleaner output
error_reporting(E_ALL);
ini_set('display_errors', 1);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Email Test - Mauri-Alpha</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f5f5f5; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 20px; border-radius: 10px; }
        .success { color: green; padding: 10px; background: #e8f5e9; border-radius: 5px; margin: 10px 0; }
        .error { color: red; padding: 10px; background: #ffebee; border-radius: 5px; margin: 10px 0; }
        .info { color: blue; padding: 10px; background: #e3f2fd; border-radius: 5px; margin: 10px 0; }
        pre { background: #f5f5f5; padding: 10px; border-radius: 5px; overflow-x: auto; }
        h2 { color: #333; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Email Configuration Test</h1>
        
        <h2>Configuration</h2>
        <div class="info">
            <strong>SMTP Host:</strong> <?php echo SMTP_HOST; ?><br>
            <strong>SMTP Port:</strong> <?php echo SMTP_PORT; ?><br>
            <strong>Username:</strong> <?php echo SMTP_USERNAME; ?><br>
            <strong>Password:</strong> <?php echo str_repeat('*', strlen(SMTP_PASSWORD)); ?> (Length: <?php echo strlen(SMTP_PASSWORD); ?>)<br>
            <strong>From Email:</strong> <?php echo SMTP_FROM_EMAIL; ?><br>
            <strong>To Email:</strong> <?php echo SMTP_TO_EMAIL; ?><br>
        </div>
        
        <h2>PHP Configuration</h2>
        <div class="info">
            <strong>PHP Version:</strong> <?php echo phpversion(); ?><br>
            <strong>mail() function:</strong> <?php echo function_exists('mail') ? 'Available' : 'Not Available'; ?><br>
            <strong>OpenSSL:</strong> <?php echo extension_loaded('openssl') ? 'Loaded' : 'Not Loaded'; ?><br>
            <strong>Socket Support:</strong> <?php echo function_exists('fsockopen') ? 'Available' : 'Not Available'; ?><br>
            <strong>PHPMailer:</strong> <?php 
                $autoloadPath = __DIR__ . '/vendor/autoload.php';
                if (file_exists($autoloadPath)) {
                    require_once $autoloadPath;
                }
                echo class_exists('\PHPMailer\PHPMailer\PHPMailer') ? 'Installed ✓' : 'Not Installed ✗'; 
            ?><br>
            <strong>Composer Autoload:</strong> <?php echo file_exists($autoloadPath) ? 'Found ✓' : 'Not Found ✗'; ?><br>
        </div>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['test_email'])) {
            echo '<h2>Test Results</h2>';
            
            $test_subject = "Test Email from Mauri-Alpha";
            $test_message = "
            <html>
            <body>
                <h2>Test Email</h2>
                <p>This is a test email sent from the Mauri-Alpha contact form system.</p>
                <p><strong>Time:</strong> " . date('Y-m-d H:i:s') . "</p>
                <p><strong>Server:</strong> " . $_SERVER['SERVER_NAME'] . "</p>
            </body>
            </html>
            ";
            
            echo '<div class="info">Attempting to send test email...</div>';
            
            // Test email sending
            $result = sendEmail(
                SMTP_TO_EMAIL,
                $test_subject,
                $test_message,
                SMTP_FROM_EMAIL,
                SMTP_FROM_NAME
            );
            
            if ($result) {
                echo '<div class="success"><strong>SUCCESS!</strong> Test email sent successfully. Please check your inbox at ' . SMTP_TO_EMAIL . '</div>';
                echo '<div class="info">Also check your spam/junk folder if you don\'t see it in your inbox.</div>';
            } else {
                echo '<div class="error"><strong>FAILED!</strong> Email sending failed. Check the error details below.</div>';
                echo '<div class="info">Check PHP error logs for detailed error messages. Common issues:<ul><li>Incorrect app password</li><li>Firewall blocking SMTP port 587</li><li>Gmail security settings blocking the connection</li></ul></div>';
                
                // Try simple mail() as fallback
                echo '<div class="info">Trying fallback method (mail() function)...</div>';
                $headers = "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                $headers .= "From: " . SMTP_FROM_NAME . " <" . SMTP_FROM_EMAIL . ">\r\n";
                
                $fallback_result = @mail(SMTP_TO_EMAIL, $test_subject, $test_message, $headers);
                
                if ($fallback_result) {
                    echo '<div class="success">Fallback method (mail()) succeeded!</div>';
                } else {
                    echo '<div class="error">Fallback method also failed.</div>';
                }
            }
            
            // Show error log if available
            $error_log = error_get_last();
            if ($error_log) {
                echo '<h3>Last PHP Error</h3>';
                echo '<pre>' . print_r($error_log, true) . '</pre>';
            }
        }
        ?>
        
        <h2>Test Email Sending</h2>
        <form method="POST">
            <button type="submit" name="test_email" style="padding: 10px 20px; background: #0066cc; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Send Test Email
            </button>
        </form>
        
        <h2>Recommendations</h2>
        <div class="info">
            <ul>
                <li>If email fails, check your server's PHP error logs</li>
                <li>Verify the app password is correct (16 characters, no spaces for Gmail)</li>
                <li>Ensure your server allows outbound SMTP connections (port 587)</li>
                <li>For Gmail/Google Workspace, you may need to enable "Less secure app access" or use an App Password</li>
                <li>Consider installing PHPMailer via Composer for better reliability</li>
            </ul>
        </div>
        
        <h2>Password Format Check</h2>
        <div class="info">
            <strong>Password with spaces:</strong> "<?php echo SMTP_PASSWORD; ?>"<br>
            <strong>Password without spaces:</strong> "<?php echo str_replace(' ', '', SMTP_PASSWORD); ?>"<br>
            <strong>Length with spaces:</strong> <?php echo strlen(SMTP_PASSWORD); ?> characters<br>
            <strong>Length without spaces:</strong> <?php echo strlen(str_replace(' ', '', SMTP_PASSWORD)); ?> characters<br>
            <br>
            <strong>Note:</strong> Gmail app passwords are typically 16 characters without spaces. If your password has spaces, remove them.
        </div>
    </div>
</body>
</html>
