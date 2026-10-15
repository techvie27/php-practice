<?php
session_start();
$_SESSION = [];       // empty the data
session_destroy();    // delete the session on the server
header('Location: login.php');
exit;