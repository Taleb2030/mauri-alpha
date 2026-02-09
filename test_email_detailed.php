<?php
/**
 * Detailed Email Test and Diagnostics
 * This will help identify why emails are not being sent
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include email config
require_once 'includes/email_config.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Email Diagnostics - Mauri-Alpha</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f5f5f5; }
        .container { max-width: 900px; margin: 0 auto; background: white; padding: 20px; border-radius: 10px; }
        .success { color: green; padding: 10px; background: #e8f5e9; border-radius: 5px; margin: 10px 0; }
        .error { color: red; padding: 10px; background: #ffebee; border-radius: 5px; margin: 10px 0; }
        .info { color: blue; padding: 10px; background: #e3f2fd; border-radius: 5px; margin: 10px 0; }
        .warning { color: orange; padding: 10px; background: #fff3e0; border-radius: 5px; margin: 10px 0; }
        pre { background: #f5f5f5; padding: 10px; border-radius: 5px; overflow-x: auto; font-size: 12px; }
        h2 { color: #333; border-bottom: 2px solid #0066cc; padding-bottom: 5px; }
        .test-section { margin: 20px 0; padding: 15px; background: #fafafa; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Email Diagnostics & Test</h1>
        
        <div class="test-section">
            <h2>1. Configuration Check</h2>
            <div class="info">
                <strong>SMTP Host:</strong> <?php echo SMTP_HOST; ?><br>
                <strong>SMTP Port:</strong> <?php echo SMTP_PORT; ?><br>
                <strong>SMTP Username:</strong> <?php echo SMTP_USERNAME; ?><br>
                <strong>SMTP Password:</strong> <?php echo str_repeat('*', strlen(SMTP_PASSWORD)); ?> (Length: <?php echo strlen(SMTP_PASSWORD); ?>)<br>
                <strong>Password (no spaces):</strong> <?php echo str_repeat('*', strlen(str_replace(' ', '', SMTP_PASSWORD))); ?> (Length: <?php echo strlen(str_replace(' ', '', SMTP_PASSWORD)); ?>)<br>
                <strong>From Email:</strong> <?php echo SMTP_FROM_EMAIL; ?><br>
                <strong>To Email:</strong> <?php echo SMTP_TO_EMAIL; ?><br>
            </div>
        </div>

        <div class="test-section">
            <h2>2. PHP Environment Check</h2>
            <div class="info">
                <strong>PHP Version:</strong> <?php echo phpversion(); ?><br>
                <strong>OpenSSL Extension:</strong> <?php echo extension_loaded('openssl') ? '✓ Loaded' : '✗ Not Loaded'; ?><br>
                <strong>Socket Functions:</strong> <?php echo function_exists('fsockopen') ? '✓ Available' : '✗ Not Available'; ?><br>
                <strong>mail() function:</strong> <?php echo function_exists('mail') ? '✓ Available' : '✗ Not Available'; ?><br>
            </div>
        </div>

        <div class="test-section">
            <h2>3. PHPMailer Check</h2>
            <?php
            $autoloadPath = __DIR__ . '/vendor/autoload.php';
            $autoloadExists = file_exists($autoloadPath);
            
            if ($autoloadExists) {
                require_once $autoloadPath;
                echo '<div class="success">✓ Composer autoloader found and loaded</div>';
            } else {
                echo '<div class="error">✗ Composer autoloader NOT found at: ' . $autoloadPath . '</div>';
            }
            
            if (class_exists('\PHPMailer\PHPMailer\PHPMailer')) {
                echo '<div class="success">✓ PHPMailer class is available</div>';
                try {
                    $mail = new \PHPMailer\PHPMailer\PHPMailer();
                    echo '<div class="success">✓ PHPMailer object can be instantiated</div>';
                } catch (Exception $e) {
                    echo '<div class="error">✗ Error creating PHPMailer: ' . $e->getMessage() . '</div>';
                }
            } else {
                echo '<div class="error">✗ PHPMailer class is NOT available</div>';
            }
            ?>
        </div>

        <div class="test-section">
            <h2>4. SMTP Connection Test</h2>
            <?php
            // Test SMTP connection
            $connection = @fsockopen(SMTP_HOST, SMTP_PORT, $errno, $errstr, 10);
            if ($connection) {
                echo '<div class="success">✓ Can connect to ' . SMTP_HOST . ':' . SMTP_PORT . '</div>';
                fclose($connection);
            } else {
                echo '<div class="error">✗ Cannot connect to ' . SMTP_HOST . ':' . SMTP_PORT . '</div>';
                echo '<div class="warning">Error: ' . $errstr . ' (Code: ' . $errno . ')</div>';
                echo '<div class="info">This might be blocked by firewall or network settings</div>';
            }
            ?>
        </div>

        <div class="test-section">
            <h2>5. Send Test Email</h2>
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['test_email'])) {
                echo '<h3>Test Results:</h3>';
                
                // Clear any previous debug log
                $debugLogFile = __DIR__ . '/email_debug.log';
                if (file_exists($debugLogFile)) {
                    @unlink($debugLogFile);
                }
                
                $test_subject = "Test Email from Mauri-Alpha - " . date('Y-m-d H:i:s');
                $test_message = "
                <html>
                <body style='font-family: Arial, sans-serif; padding: 20px;'>
                    <h2 style='color: #0066cc;'>Test Email</h2>
                    <p>This is a test email sent from the Mauri-Alpha contact form system.</p>
                    <p><strong>Time:</strong> " . date('Y-m-d H:i:s') . "</p>
                    <p><strong>Server:</strong> " . $_SERVER['SERVER_NAME'] . "</p>
                    <p><strong>PHP Version:</strong> " . phpversion() . "</p>
                </body>
                </html>
                ";
                
                echo '<div class="info">Attempting to send test email to: <strong>' . SMTP_TO_EMAIL . '</strong></div>';
                echo '<div class="info">Using password: ' . str_repeat('*', strlen(str_replace(' ', '', SMTP_PASSWORD))) . ' (without spaces)</div>';
                
                // Capture output and debug messages
                ob_start();
                global $phpmailer_debug;
                $phpmailer_debug = [];
                $result = sendEmail(
                    SMTP_TO_EMAIL,
                    $test_subject,
                    $test_message,
                    SMTP_FROM_EMAIL,
                    SMTP_FROM_NAME
                );
                $output = ob_get_clean();
                
                // Show PHPMailer debug messages if available
                if (!empty($phpmailer_debug)) {
                    echo '<h4>PHPMailer Debug Messages:</h4>';
                    echo '<pre style="background: #f0f0f0; padding: 10px; max-height: 400px; overflow-y: auto;">';
                    foreach ($phpmailer_debug as $msg) {
                        echo htmlspecialchars($msg) . "\n";
                    }
                    echo '</pre>';
                }
                
                if ($result) {
                    echo '<div class="success"><strong>✓ SUCCESS!</strong> Email sent successfully!</div>';
                    echo '<div class="info">Please check your inbox at <strong>' . SMTP_TO_EMAIL . '</strong></div>';
                    echo '<div class="warning">Also check your <strong>spam/junk folder</strong> - Gmail may mark test emails as spam initially.</div>';
                } else {
                    echo '<div class="error"><strong>✗ FAILED!</strong> Email sending failed.</div>';
                    
                    // Show debug log if available
                    if (file_exists($debugLogFile)) {
                        echo '<h4>Debug Log:</h4>';
                        echo '<pre>' . htmlspecialchars(file_get_contents($debugLogFile)) . '</pre>';
                    }
                    
                    // Show PHP errors
                    $error = error_get_last();
                    if ($error) {
                        echo '<h4>Last PHP Error:</h4>';
                        echo '<pre>' . print_r($error, true) . '</pre>';
                    }
                    
                    // Check error log
                    $errorLog = ini_get('error_log');
                    if ($errorLog && file_exists($errorLog)) {
                        $recentErrors = tail($errorLog, 20);
                        if ($recentErrors) {
                            echo '<h4>Recent Error Log Entries:</h4>';
                            echo '<pre>' . htmlspecialchars($recentErrors) . '</pre>';
                        }
                    }
                }
                
                if ($output) {
                    echo '<h4>Output:</h4>';
                    echo '<pre>' . htmlspecialchars($output) . '</pre>';
                }
            }
            
            function tail($filename, $lines = 20) {
                $file = file($filename);
                return implode('', array_slice($file, -$lines));
            }
            ?>
            
            <form method="POST" style="margin-top: 20px;">
                <button type="submit" name="test_email" style="padding: 15px 30px; background: #0066cc; color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
                    Send Test Email Now
                </button>
            </form>
        </div>

        <div class="test-section">
            <h2>6. Troubleshooting Tips</h2>
            <div class="info">
                <ul>
                    <li><strong>Check Spam Folder:</strong> Gmail often marks test emails as spam</li>
                    <li><strong>Verify App Password:</strong> Make sure the app password is correct (16 characters, no spaces)</li>
                    <li><strong>Check 2-Step Verification:</strong> App passwords only work if 2-Step Verification is enabled</li>
                    <li><strong>Firewall:</strong> Some networks/firewalls block SMTP port 587</li>
                    <li><strong>Gmail Security:</strong> Google may block sign-ins from "less secure apps" - app passwords bypass this</li>
                    <li><strong>Check Error Logs:</strong> Look at PHP error logs for detailed error messages</li>
                </ul>
            </div>
        </div>

        <div class="test-section">
            <h2>7. Manual Password Verification</h2>
            <div class="info">
                <p>Your configured password: <code><?php echo SMTP_PASSWORD; ?></code></p>
                <p>Password without spaces: <code><?php echo str_replace(' ', '', SMTP_PASSWORD); ?></code></p>
                <p>Password length (with spaces): <?php echo strlen(SMTP_PASSWORD); ?> characters</p>
                <p>Password length (without spaces): <?php echo strlen(str_replace(' ', '', SMTP_PASSWORD)); ?> characters</p>
                <p><strong>Note:</strong> Gmail app passwords should be exactly 16 characters without spaces.</p>
            </div>
        </div>
    </div>
</body>
</html>
