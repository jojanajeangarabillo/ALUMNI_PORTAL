<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PLP Alumni</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>


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


<div id="modal" class="modal">
  <a href="register.php">Register</a>
  <a href="login.php">Log In</a>
</div>

<section class="banner">
  <div class="overlay"></div>
  <h1>WELCOME PLP ALUMNI!</h1>
</section>


<section class="info-section">
  <div class="info-card">
    <h3>About</h3>
    <div class="card-content"></div>
  </div>
  <div class="info-card">
    <h3>Upcoming Events</h3>
    <div class="card-content"></div>
  </div>
</section>

<!--Footer-->
<footer class="footer">
  <div class="overlay"></div>
  <div class="contact-us">
    <h3>CONTACT US</h3>
    <p>📞 2-8643-1014</p>
    <p>✉️ inquiry@plpasig.edu.ph</p>
    <p>📍 12-B Alcalde Jose, Pasig, 1600 Metro Manila</p>
  </div>
</footer>

<script>
    
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
