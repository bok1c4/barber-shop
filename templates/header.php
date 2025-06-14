<?php session_start(); ?>
<!DOCTYPE html>
<html lang="sr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Barber Shop</title>
  <link rel="stylesheet" href="/style.css" />
</head>
<body>
<header>
  <h1>Barber shop</h1>
  <nav>
    <div class="nav-left">
      <a href="/index.php">Home</a>

      <?php if (!empty($_SESSION['username'])): ?>
        <?php if (!empty($_SESSION['is_admin'])): ?>
          <a href="/admin_panel.php">Panel</a>
        <?php else: ?>
          <a href="/rezervacije.php">Rezervacije</a>
        <?php endif; ?>
      <?php endif; ?>
    </div>

    <div class="nav-right">
      <?php if (!empty($_SESSION['username'])): ?>
        <span>Zdravo, <?= htmlspecialchars($_SESSION['username']) ?></span>
        <a href="/logout.php">Odjavi se</a>
      <?php else: ?>
        <a href="/login.php">Sign in</a>
        <a href="/register.php">Register</a>
      <?php endif; ?>
    </div>
</nav>

</header>
<main>

