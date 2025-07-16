<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Us - VisionSage</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- 🔝 Navigation Bar -->
  <header>
    <div class="logo">VisionSage</div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About Us</a></li>
        <li><a href="contact.php">Contact</a></li>
        <?php if (isset($_SESSION['user'])): ?>
          <li><a href="logout.php">Logout (<?= $_SESSION['user'] ?>)</a></li>
        <?php else: ?>
          <li><a href="#" onclick="openModal()">Register/Login</a></li>
        <?php endif; ?>
      </ul>
    </nav>
  </header>

  <!-- 📄 About Section -->
  <section class="about-section">
    <div class="about-container">
      <h1>About VisionSage</h1> <br> 
      <p>
        <strong>VisionSage</strong> is an advanced AI-powered software solution designed to analyze and interpret images to detect potential crime scenes. Using deep learning and computer vision, VisionSage can identify suspicious activities, dangerous objects, or unlawful scenarios simply by analyzing an uploaded photo.
      </p>
      <p>
        The system processes visual data in real time and generates intelligent predictions and descriptions, helping authorities or organizations take prompt action. Whether used for law enforcement, surveillance monitoring, or public safety, VisionSage offers a powerful tool to enhance situational awareness and reduce response time.
      </p>
      <p>
        By automating image analysis, VisionSage not only improves accuracy and consistency but also reduces the need for manual monitoring. It’s a smart assistant for safety-focused industries aiming to prevent incidents before they escalate — making communities smarter and safer through technology.
      </p> <br> <br>
    </div>
  </section>

  <!-- 📄 Footer -->
  <footer>
    <p>© 2025 VisionSage. All rights reserved.</p>
  </footer>

</body>
</html>
