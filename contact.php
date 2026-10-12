<?php

declare(strict_types=1);

$maxNameLength = 20;
$minMessageLength = 10;
$maxMessageLength = 100;

$errors = [];
$name = '';
$email = '';
$message = '';
$thanksName = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '') {
        $errors[] = 'Name is required.';
    } elseif (mb_strlen($name) > $maxNameLength) {
        $errors[] = "Name must be at most $maxNameLength characters.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Please enter a valid email.';
    }

    if ($message === '') {
        $errors[] = 'Message is required.';
    } elseif (mb_strlen($message) < $minMessageLength) {
        $errors[] = "Message must be at least $minMessageLength characters.";
    } elseif (mb_strlen($message) > $maxMessageLength) {
        $errors[] = "Message must be at most $maxMessageLength characters.";
    }

    if ($errors === []) {
        $thanksName = $name;
        $name = '';
        $email = '';
        $message = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>
    <h1>Contact</h1>

    <?php if ($thanksName !== '') : ?>
        <p style="color: green;">Thanks, <?php echo htmlspecialchars($thanksName, ENT_QUOTES, 'UTF-8'); ?>!</p>
    <?php endif; ?>

    <?php foreach ($errors as $error) : ?>
        <p style="color: red;"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endforeach; ?>

    <form method="post" action="contact.php">
        <p>
            <label>Name:
                <input type="text" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
            </label>
        </p>
        <p>
            <label>Email:
                <input type="email" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
            </label>
        </p>
        <p>
            <label>Message:
                <textarea name="message"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></textarea>
            </label>
        </p>
        <button type="submit">Send</button>
    </form>
</body>
</html>