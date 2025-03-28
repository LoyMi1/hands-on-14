<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Output 2</title>
  <link rel="stylesheet" href="style.css">
  <?php
  $path = basename($_SERVER['PHP_SELF']);
  $css = [
    'index.php' => 'style.css',
    'register.php' => 'style-register.css',
    'login.php' => 'style-login.css',
    'forgot.php' => 'style-forgot.css'
  ];
  echo '<link rel="stylesheet" href="' . ($css[$path] ?? 'style.css') . '">';
?>
</head>
<body>
  <nav>
    <a href="index.php">Home</a>
    <a href="register.php">Register</a>
    <a href="login.php">Login</a>
    <a href="forgot.php">Forgot Password</a>
  </nav>
  <hr>
