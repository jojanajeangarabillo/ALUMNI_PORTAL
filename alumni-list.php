<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Alumni Portal</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
    <div class="interface-header">
    <img src="images/logo.png" alt="PLP Logo" class="logo-interface">
    <div class="text">
      <div class="school-name">Pamantasan Ng Lungsod Ng Pasig</div>
      <div class="alumni-title">ALUMNI</div>
    </div>
  </div>


  <div class="sidebar" id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">&#x25C0;</div>

    <div class="sidebar-content">
      <div class="profile-section">
        <a href="manage-profile.php" class="profile-pic">
          <img src="images/avatar.png" alt="Profile Picture">
        </a>
        <div class="profile-name">Marian</div>
      </div>

      <a href="alumni-home.php" class="active"><img src="images/home.png" alt="Home"><span>Home</span></a>
      <a href="alumni-gallery.php"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
      <a href="#"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
      <a href="alumni-job.php"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
      <a href="alumni-forums.php"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
      <a href="alumni-about.php"><img src="images/about.png" alt="About"><span>About</span></a>
      <a href="register.php"><img src="images/signup.png" alt="Sign up"><span>Sign Up</span></a>
      <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
    </div>
  </div>

  <div class="main-content">
    <header>Alumni List</header>
    <hr><br>
    <div class="topbar">
        <input type="text" id="search" name="search" placeholder="Search">

        <div class="alumni-filter">
          <input type="radio" name="connected" value="Connected"> Connected
          <input type="radio" name="connected" value=" Not Connected"> Not Connected
            <select placeholder="Course List">
                <option value="IT">BS in Information Technology</option>
                <option value="CS">BS in Computer Science</option>
            </select>
        </div>
    </div>

    <div class="list-alumni">
        <div class="alumni-info">
            <header>Student 1</header>
            <hr>
            <img src="images/avatar.png"/>
        </div>
        <div class="alumni-info">
            <header>Student 1</header>
            <hr>
            <img src="images/avatar.png"/>
        </div>
        <div class="alumni-info">
            <header>Student 1</header>
            <hr>
            <img src="images/avatar.png"/>
        </div>
        <div class="alumni-info">
            <header>Student 1</header>
            <hr>
            <img src="images/avatar.png"/>
        </div>


    </div>
    
  </div>
  <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
            const toggleBtn = document.querySelector('.toggle-btn');
            toggleBtn.innerHTML = sidebar.classList.contains('collapsed') ? '&#x25B6;' : '&#x25C0;';
        }
    </script>


    </body>
</html>