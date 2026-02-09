<?php
/**
 * View Saved Contacts
 * Simple page to view form submissions saved to file
 * PROTECTED: Requires password to access
 */

// Simple password protection
session_start();
$correct_password = 'admin123'; // CHANGE THIS PASSWORD!

if (!isset($_SESSION['contacts_authenticated'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['password'])) {
        if ($_POST['password'] === $correct_password) {
            $_SESSION['contacts_authenticated'] = true;
        } else {
            $error = 'Incorrect password';
        }
    }
    
    if (!isset($_SESSION['contacts_authenticated'])) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Login Required - View Contacts</title>
            <style>
                body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; background: #f5f5f5; }
                .login-box { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
                input[type="password"] { padding: 10px; width: 200px; margin: 10px 0; }
                button { padding: 10px 20px; background: #0066cc; color: white; border: none; border-radius: 5px; cursor: pointer; }
                .error { color: red; margin: 10px 0; }
            </style>
        </head>
        <body>
            <div class="login-box">
                <h2>Login Required</h2>
                <?php if (isset($error)): ?>
                    <div class="error"><?php echo htmlspecialchars($error); ?></div>
                <?php endif; ?>
                <form method="POST">
                    <input type="password" name="password" placeholder="Enter password" required>
                    <br>
                    <button type="submit">Login</button>
                </form>
            </div>
        </body>
        </html>
        <?php
        exit;
    }
}

$page_title = "View Contacts";
include 'includes/header.php';

$dataDir = __DIR__ . '/data';
$contacts = [];

if (is_dir($dataDir)) {
    $files = glob($dataDir . '/contacts_*.txt');
    rsort($files); // Newest first
    
    foreach ($files as $file) {
        $content = @file_get_contents($file);
        if ($content) {
            $contacts[] = [
                'file' => basename($file),
                'content' => $content
            ];
        }
    }
}
?>

<section class="section">
    <div class="container">
        <h1 class="section-title">Contact Form Submissions</h1>
        
        <?php if (empty($contacts)): ?>
            <div class="intro">
                <p>No contact submissions yet.</p>
            </div>
        <?php else: ?>
            <div class="contact-list">
                <?php foreach ($contacts as $contact): ?>
                    <div class="contact-entry">
                        <h3><?php echo htmlspecialchars($contact['file']); ?></h3>
                        <pre style="background: var(--bg-card); padding: 1.5rem; border-radius: 10px; overflow-x: auto; white-space: pre-wrap; word-wrap: break-word;"><?php echo htmlspecialchars($contact['content']); ?></pre>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
        
        <div style="margin-top: 2rem; text-align: center;">
            <a href="contact.php" class="btn btn-primary">Back to Contact Form</a>
        </div>
    </div>
</section>

<style>
.contact-list {
    display: flex;
    flex-direction: column;
    gap: 2rem;
    margin-top: 2rem;
}

.contact-entry {
    background: linear-gradient(135deg, rgba(21, 26, 40, 0.8) 0%, rgba(21, 26, 40, 0.6) 100%);
    backdrop-filter: blur(15px);
    border: 1px solid rgba(0, 170, 255, 0.2);
    border-radius: 15px;
    padding: 2rem;
}

.contact-entry h3 {
    color: var(--accent-blue);
    margin-bottom: 1rem;
}

.contact-entry pre {
    color: var(--text-secondary);
    font-family: 'Courier New', monospace;
    font-size: 0.9rem;
    line-height: 1.6;
}
</style>

<?php include 'includes/footer.php'; ?>
