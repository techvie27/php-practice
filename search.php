<?php

declare(strict_types=1);

$query = trim($_GET['q'] ?? '');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search</title>
</head>
<body>
    <form method="get" action="search.php">
        <label for="q">Search:</label>
        <input type="text" id="q" name="q" value="<?php echo htmlspecialchars($query, ENT_QUOTES, 'UTF-8'); ?>">
        <button type="submit">Search</button>
    </form>

    <?php if ($query !== '') : ?>
        <p>You searched for: <?php echo htmlspecialchars($query, ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endif; ?>
</body>
</html>