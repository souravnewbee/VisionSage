<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact - VisionSage</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <div class="logo">VisionSage</div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php" target="_blank">About Us</a></li>
        <li><a href="contact.php" target="_blank">Contact</a></li>
        <?php if (isset($_SESSION['user'])): ?>
          <li><a href="logout.php">Logout (<?= $_SESSION['user'] ?>)</a></li>
        <?php else: ?>
          <li><a href="#" onclick="openModal()">Register/Login</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <section class="about-section">
    <div class="about-container">
      <h1>Contact Us</h1>
      <p><strong>Email:</strong> support@visionsage.ai</p>
      <p><strong>Phone:</strong> +880-1234-567890</p>
      <p><strong>Office:</strong> North South University, Dhaka, Bangladesh</p>
      <p>You can reach us anytime for technical support, feedback, or collaboration opportunities. VisionSage is committed to improving safety through smart AI innovations.</p>
    </div>
  </section>

  <footer>
    <p>© 2025 VisionSage. All rights reserved.</p>
  </footer>
</body>
</html>
