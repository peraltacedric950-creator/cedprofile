<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$message = trim($_POST["message"] ?? "");

if ($name === "" || $email === "" || $message === "") {
    header("Location: contact.php?error=" . urlencode("Please fill in all fields."));
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: contact.php?error=" . urlencode("Please enter a valid email address."));
    exit;
}

if (strlen($name) > 100 || strlen($email) > 150 || strlen($message) > 2000) {
    header("Location: contact.php?error=" . urlencode("One or more fields are too long."));
    exit;
}

/*
 * Localhost demo:
 * The form is validated successfully without MySQL.
 * To keep the project beginner-friendly, this demo does not send real email.
 * A real email system would require SMTP/mail configuration.
 */

header("Location: contact.php?success=1");
exit;
?>
