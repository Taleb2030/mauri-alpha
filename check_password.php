<?php
$password = 'wqtx vkll ubxv yogh';
$password_no_spaces = str_replace(' ', '', $password);

echo "Password with spaces: '$password'\n";
echo "Length: " . strlen($password) . " characters\n\n";

echo "Password without spaces: '$password_no_spaces'\n";
echo "Length: " . strlen($password_no_spaces) . " characters\n\n";

if (strlen($password_no_spaces) == 16) {
    echo "✓ Password length is correct (16 characters)\n";
} else {
    echo "✗ Password length is incorrect. Should be 16 characters, but is " . strlen($password_no_spaces) . "\n";
}
?>
