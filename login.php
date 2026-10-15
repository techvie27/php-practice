<?php
session_set_cookie_params([
    'lifetime' => 0,          // until browser closes
    'path'     => '/',
    'httponly' => true,
    'samesite' => 'Lax',
    // 'secure' => true,      // turn on for live HTTPS sites
]);
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = $_POST['username'] ?? '';
    $pass = $_POST['password'] ?? '';

    if ($user === 'amit' && $pass === '1234') {
        session_regenerate_id(true);
        $_SESSION['user'] = $user;
        header('Location: dashboard.php');
        exit;
    }
    $error = 'Wrong username or password';
}
?>
<form method="post">
    <input name="username" placeholder="Username">
    <input name="password" type="password" placeholder="Password">
    <button>Login</button>
</form>
<p><?= htmlspecialchars($error) ?></p>