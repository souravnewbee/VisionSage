<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>VisionSage</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>

  <!-- 🔝 Navigation Bar -->
  <header>
    <div class="logo">VisionSage</div>
    <nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php" >About Us</a></li>
    <li><a href="contact.php">Contact</a></li>
    <?php if (isset($_SESSION['user'])): ?>
      <li><a href="logout.php">Logout (<?= $_SESSION['user'] ?>)</a></li>
    <?php else: ?>
      <li><a href="#" onclick="openModal()">Register/Login</a></li>
    <?php endif; ?>
  </ul>
</nav>
  </header>

  <!-- 🎯 Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>AI-Powered Image Scene Predictor</h1>
      <p>Upload an image to get a smart description, prediction, and insights using AI.</p>
      <?php if (isset($_SESSION['user'])): ?>
  <label class="upload-btn">
    <input type="file" hidden />
    📤 Upload Image
  </label>
<?php else: ?>
  <p><strong>Please <a href="#" onclick="openModal()">login</a> to upload images.</strong></p>
<?php endif; ?>

    </div>
  </section>

  <!-- 🖼️ VisionSage Banner Image -->
  <section class="banner-image">
    <img src="https://i.ibb.co/YT1TkLxN/cyberpunk-illustration-with-neon-colors-futuristic-technology.jpg" alt="cyberpunk illustration" />
  </section>

  <!-- 📌 Features Section -->
  <section class="features">
    <h2 class="section-title">What VisionSage Can Do</h2>
    <div class="feature-grid">
      <div class="feature-card">
        <img src="https://i.ibb.co/sJmvyZzJ/7718877.jpg" alt="Scene Description" />
        <h3>Scene Description</h3>
        <p>Automatically describe what’s happening in an image using AI-generated captions.</p>
      </div>
      <div class="feature-card">
        <img src="https://i.ibb.co/F4Vk6mMs/danger-alert-sign-with-siren-light.jpg" alt="Risk Prediction" />
        <h3>Risk Prediction</h3>
        <p>Detect risks or hazards from visual input like accidents or unsafe behavior.</p>
      </div>
      <div class="feature-card">
        <img src="https://i.ibb.co/GZcp2S3/8451564.jpg" alt="Future Event" />
        <h3>Future Event Guessing</h3>
        <p>Predict the next likely activity or outcome based on the image content.</p>
      </div>
    </div>
    <p class="coming-soon">✨ More features coming soon...</p>
  </section>

  <!-- 💬 Register/Login Modal -->
  <div id="authModal" class="modal">
    <div class="modal-content">
      <span class="close" onclick="closeModal()">&times;</span>
      <div class="tabs">
        <button onclick="showTab('login')">Login</button>
        <button onclick="showTab('register')">Register</button>
      </div>

      <!-- 🔐 Login Form -->
      <form id="loginForm" class="auth-form" action="login.php" method="POST">
        <input type="tel" name="phone" placeholder="Phone Number" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
      </form>

      <!-- 📝 Register Form -->
      <form id="registerForm" class="auth-form" action="register.php" method="POST" style="display: none;">
        <input type="text" name="name" placeholder="Full Name" required />
        <input type="number" name="age" placeholder="Age" required />
        <input type="date" name="birthdate" required />
        <input type="text" name="nid" placeholder="NID Number" required />
        <input type="tel" name="phone" placeholder="Phone Number" required />
        <input type="password" name="password" placeholder="Create Password" required />
        <button type="submit">Register</button>
      </form>
    </div>
  </div>

  <!-- 📄 Footer -->
  <footer>
    <p>© 2025 VisionSage. All rights reserved.</p>
  </footer>

  <!-- 💡 Modal Script -->
  <script>
    const modal = document.getElementById('authModal');
    const loginForm = document.getElementById('loginForm');
    const registerForm = document.getElementById('registerForm');

    function openModal() {
      modal.style.display = 'block';
      showTab('login');
    }

    function closeModal() {
      modal.style.display = 'none';
    }

    function showTab(tab) {
      if (tab === 'login') {
        loginForm.style.display = 'flex';
        registerForm.style.display = 'none';
      } else {
        loginForm.style.display = 'none';
        registerForm.style.display = 'flex';
      }
    }

    window.onclick = function (event) {
      if (event.target == modal) {
        closeModal();
      }
    }
  </script>
</body>
</html>
