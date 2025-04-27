<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PLP Alumni - Register</title>
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

<div id="modal" class="modal">
  <a href="register.php">Register</a>
  <a href="login.php">Log In</a>
  <a href="landing.php">Back</a>
</div>


<section class="register-section">
  <form class="register-form" action="process_register.php" method="POST">
    <h2>Register</h2>

    <div class="form-grid">
  <div class="form-group">
    <input type="text" name="alumni_id" placeholder="Alumni ID" required>
  </div>

  
  <div class="form-group">
    <input type="text" name="year_graduated" placeholder="Year Graduated" required>
  </div>

  <div class="form-group">
    <input type="email" name="email" placeholder="Email" required>
  </div>


  <div class="form-group">
    <select id="course" name="course" required>
      <option value="">-- Select Course --</option>
    </select>
  </div>

  <div class="form-group">
    <input type="text" name="first_name" placeholder="First Name" required>
  </div>


  <div class="form-group">
    <div class="radio-group">
      <label>Connected to?
        <input type="radio" name="connected" value="Yes" required> Yes
      </label>
      <label>
        <input type="radio" name="connected" value="No" required> No
      </label>
    </div>
  </div>

  <div class="form-group">
    <input type="text" name="middle_name" placeholder="Middle Name">
  </div>


  <div class="form-group">
    <input type="password" name="password" placeholder="Password" required>
  </div>


  <div class="form-group">
    <input type="text" name="last_name" placeholder="Last Name" required>
  </div>

  <div class="form-group">
    <input type="password" name="confirm_password" placeholder="Confirm Password" required>
  </div>

 
  <div class="form-group">
    <div class="radio-group">
      <label>Gender:
        <input type="radio" name="gender" value="Female" required> Female
      </label>
      <label>
        <input type="radio" name="gender" value="Male" required> Male
      </label>
    </div>
  </div>
  <div class="form-group"></div>
</div>


    <div class="form-buttons">
      <button type="submit" class="register-btn">Register</button>
      <button type="reset" class="reset-btn">Reset Form</button>
    </div>

    <div class="login-link">
      Already have an account? <a href="login.php">Login</a>
    </div>
  </form>
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
