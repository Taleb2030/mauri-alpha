<?php
/**
 * Email Debug Tool
 * This will show detailed error information
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 1);

require_once 'includes/email_config.php';

echo "<h1>Email Debug Information</h1>";
echo "<pre>";

echo "=== Configuration ===\n";
echo "SMTP Host: " . SMTP_HOST . "\n";
echo "SMTP Port: " . SMTP_PORT . "\n";
echo "Username: " . SMTP_USERNAME . "\n";
echo "Password Length: " . strlen(SMTP_PASSWORD) . " characters\n";
echo "Password (masked): " . str_repeat('*', strlen(SMTP_PASSWORD)) . "\n";
echo "To Email: " . SMTP_TO_EMAIL . "\n";
echo "\n";

echo "=== PHP Configuration ===\n";
echo "PHP Version: " . phpversion() . "\n";
echo "mail() function: " . (function_exists('mail') ? 'Available' : 'NOT Available') . "\n";
echo "OpenSSL: " . (extension_loaded('openssl') ? 'Loaded' : 'NOT Loaded') . "\n";
echo "Socket functions: " . (function_exists('fsockopen') ? 'Available' : 'NOT Available') . "\n";
echo "stream_socket_client: " . (function_exists('stream_socket_client') ? 'Available' : 'NOT Available') . "\n";
echo "\n";

echo "=== Testing SMTP Connection ===\n";
$testHost = SMTP_HOST;
$testPort = SMTP_PORT;

// Test if we can connect to SMTP server
$connection = @fsockopen($testHost, $testPort, $errno, $errstr, 5);
if ($connection) {
    echo "✓ Can connect to $testHost:$testPort\n";
    fclose($connection);
} else {
    echo "✗ CANNOT connect to $testHost:$testPort\n";
    echo "  Error: $errstr ($errno)\n";
    echo "  This might mean:\n";
    echo "  - Your server blocks outbound SMTP connections\n";
    echo "  - Firewall is blocking port $testPort\n";
    echo "  - Network connectivity issue\n";
}
echo "\n";

echo "=== Testing Email Sending ===\n";
$testSubject = "Debug Test Email";
$testMessage = "<html><body><h2>Test</h2><p>This is a test email.</p></body></html>";

// Test 1: Simple mail() function
echo "Test 1: mail() function...\n";
$result1 = @mail(SMTP_TO_EMAIL, $testSubject, $testMessage, "From: " . SMTP_FROM_EMAIL);
echo "Result: " . ($result1 ? "SUCCESS" : "FAILED") . "\n";
if (!$result1) {
    $error = error_get_last();
    if ($error) {
        echo "Error: " . $error['message'] . "\n";
    }
}
echo "\n";

// Test 2: Try sendEmail function
echo "Test 2: sendEmail() function...\n";
try {
    $result2 = sendEmail(SMTP_TO_EMAIL, $testSubject, $testMessage, SMTP_FROM_EMAIL, SMTP_FROM_NAME);
    echo "Result: " . ($result2 ? "SUCCESS" : "FAILED") . "\n";
} catch (Exception $e) {
    echo "Exception: " . $e->getMessage() . "\n";
}
echo "\n";

// Test 3: Check if SimpleSMTP class exists
echo "Test 3: SimpleSMTP class...\n";
if (class_exists('SimpleSMTP')) {
    echo "Class exists: YES\n";
    try {
        $passwordNoSpaces = str_replace(' ', '', SMTP_PASSWORD);
        $smtp = new SimpleSMTP(SMTP_HOST, SMTP_PORT, SMTP_USERNAME, $passwordNoSpaces);
        echo "SimpleSMTP object created successfully\n";
    } catch (Exception $e) {
        echo "Error creating SimpleSMTP: " . $e->getMessage() . "\n";
    }
} else {
    echo "Class exists: NO\n";
}
echo "\n";

echo "=== Recommendations ===\n";
if (!function_exists('mail')) {
    echo "✗ mail() function is not available. This is unusual.\n";
}
if (!extension_loaded('openssl')) {
    echo "✗ OpenSSL extension is not loaded. SMTP TLS won't work.\n";
}
if (!$connection) {
    echo "✗ Cannot connect to SMTP server. Check firewall/network settings.\n";
}

echo "\n=== Next Steps ===\n";
echo "1. Check PHP error logs for detailed error messages\n";
echo "2. Verify the app password is correct (16 characters, no spaces)\n";
echo "3. For localhost testing, consider using a service like Mailtrap\n";
echo "4. When deploying to production, ensure the server has mail() configured\n";
echo "5. Consider installing PHPMailer for better SMTP support\n";

echo "</pre>";
?>
