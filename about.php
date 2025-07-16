<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Us - VisionSage</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- 🔝 Navigation -->
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

  <!-- 🧠 About Section -->
  <section class="about-section">
    <div class="about-container">
      <h1>About VisionSage</h1>
      <br><p><strong>VisionSage</strong> is a cutting-edge AI-driven image analysis platform designed to enhance visual intelligence and safety. By leveraging deep learning and the SmolVM AI model, it can detect, classify, and analyze critical aspects of any uploaded image—making it an essential tool for surveillance, forensics, and crime prevention.</p>

     <br><br>
      <h2>🔑 Key Features</h2>

      <ul class="feature-list">
        <li><strong>Auto-Tagging System:</strong> Automatically assigns keywords like “knife,” “car,” “night,” or “multiple people” to improve image indexing and searchability.</li>
        <li><strong>Face Count & Blurring:</strong> Detects the number of faces and optionally blurs them for privacy-sensitive applications.</li>
        <li><strong>Color Dominance Detector:</strong> Highlights the most dominant colors to help identify clothing or environment (e.g., “mostly red and black”).</li>
        <li><strong>Similar Image Finder:</strong> Automatically suggests similar past uploads to identify patterns or repeat visuals.</li>
        <li><strong>Timestamp and EXIF Viewer:</strong> Extracts metadata to show when and where the photo was taken.</li>
        <li><strong>Suspicious Object Filter:</strong> Filters and flags images containing high-risk elements like weapons, blood, fire, or masked individuals.</li>
      </ul>

      <p>VisionSage isn’t just a recognition tool—it’s a powerful AI assistant for analysts, investigators, and safety professionals aiming to make smarter, faster decisions.</p>
    </div><br><br>
  </section>

  <!-- 📄 Footer -->
  <footer>
    <p>© 2025 VisionSage. <br>All rights reserved.</p>
  </footer>

</body>
</html>
