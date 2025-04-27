<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PLP Alumni - Log In</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Header -->
<header class="header">
  <div class="header-left">
    <img src="images/logo.png" alt="PLP Logo" class="logo">
    <div class="text">
      <div class="school-name">Pamantasan Ng Lungsod Ng Pasig</div>
      <div class="alumni-title">ALUMNI</div>
    </div>
  </div>
  <div class="menu" id="menuButton">
    <img src="images/menu.png" alt="Menu">
  </div>
</header>

<!-- Menu Modal -->
<div id="modal" class="modal">
  <a href="register.php">Register</a>
  <a href="login.php">Log In</a>
  <a href="landing.php">Back</a>
</div>

<!-- Login Section -->
<section class="login-section">
  <div class="login-container">
    <div class="login-image">
      <img src="images/plpasigg.jpg" alt="Campus Image">
    </div>
    <form class="login-form" action="user.php" method="POST">
      <h2>Log In</h2>
      <div class="form-group">
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <div class="form-group">
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <button type="submit" class="login-btn">Log In</button>
      <div class="register-link">
        Don't have an account? <a href="register.php">Register</a>
      </div>
    </form>
  </div>
</section>

<script>
  // Modal logic
  const menuButton = document.getElementById('menuButton');
  const modal = document.getElementById('modal');

  menuButton.onclick = function() {
    modal.classList.toggle('show');
  }

  window.onclick = function(event) {
    if (!event.target.closest('.menu') && !event.target.closest('#modal')) {
      modal.classList.remove('show');
    }
  }
</script>

</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PLP Alumni - Log In</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Header -->
<header class="header">
  <div class="header-left">
    <img src="images/logo.png" alt="PLP Logo" class="logo">
    <div class="text">
      <div class="school-name">Pamantasan Ng Lungsod Ng Pasig</div>
      <div class="alumni-title">ALUMNI</div>
    </div>
  </div>
  <div class="menu" id="menuButton">
    <img src="images/menu.png" alt="Menu">
  </div>
</header>

<!-- Menu Modal -->
<div id="modal" class="modal">
  <a href="register.php">Register</a>
  <a href="login.php">Log In</a>
  <a href="landing.php">Back</a>
</div>

<!-- Login Section -->
<section class="login-section">
  <div class="login-container">
    <div class="login-image">
      <img src="images/plpasigg.jpg" alt="Campus Image">
    </div>
    <form class="login-form" action="user.php" method="POST">
      <h2>Log In</h2>
      <div class="form-group">
        <input type="email" name="email" placeholder="Email" required>
      </div>
      <div class="form-group">
        <input type="password" name="password" placeholder="Password" required>
      </div>
      <button type="submit" class="login-btn">Log In</button>
      <div class="register-link">
        Don't have an account? <a href="register.php">Register</a>
      </div>
    </form>
  </div>
</section>

<script>
  // Modal logic
  const menuButton = document.getElementById('menuButton');
  const modal = document.getElementById('modal');

  menuButton.onclick = function() {
    modal.classList.toggle('show');
  }

  window.onclick = function(event) {
    if (!event.target.closest('.menu') && !event.target.closest('#modal')) {
      modal.classList.remove('show');
    }
  }
</script>

</body>
</html>
>>>>>>> 1a88314 (moadified)
