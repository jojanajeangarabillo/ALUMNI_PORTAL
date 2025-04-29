<!DOCTYPE html>
<html lang="en">
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
      <a href="#"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
      <a href="#"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
      <a href="#"><img src="images/about.png" alt="About"><span>About</span></a>
      <a href="register.php"><img src="images/signup.png" alt="Sign up"><span>Sign Up</span></a>
      <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
    </div>
  </div>

  <div class="job-main-content">
    <div class="job-header">
      <h1>JOB LIST</h1>
      <button class="post-job-btn">+ POST A JOB OPPORTUNITY</button>
    </div>

    <div class="search-bar">
      <input type="text" id="searchInput" placeholder="Search">
      <img src="images/search_icon.png" alt="search icon" id="searchIcon">
    </div>

    <div class="job-cards">
      <div class="job-card">
        <h2>WEB DEVELOPER</h2>
        <div class="job-meta">
          <div><img src="images/job-company.png" alt="company" class="icon-job">IT COMPANY</div>
          <div><img src="images/job-home.png" alt="Home Icon" class="icon-job">HOME BASED</div>
        </div>
        <p>Job description job description job description job description job description job description job description job description job description.</p>
        <div class="job-footer">
          <span class="posted-by">POSTED BY: ANNOY NIMUS</span>
          <button class="read-more">READ MORE</button>
        </div>
      </div>

      <div class="job-card">
        <h2>WEB DESIGNER</h2>
        <div class="job-meta">
          <div><img src="images/job-company.png" alt="company" class="icon-job">IT COMPANY</div>
          <div><img src="images/job-home.png" alt="Home Icon" class="icon-job">HOME BASED</div>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <div class="job-footer">
          <span class="posted-by">POSTED BY: ANNOY NIMUS</span>
          <button class="read-more">READ MORE</button>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Toggle sidebar visibility
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('collapsed');
      const toggleBtn = document.querySelector('.toggle-btn');
      toggleBtn.innerHTML = sidebar.classList.contains('collapsed') ? '&#x25B6;' : '&#x25C0;';
    }

    // Search functionality
    document.getElementById('searchIcon').addEventListener('click', function() {
      const searchQuery = document.getElementById('searchInput').value.toLowerCase();
      const jobCards = document.querySelectorAll('.job-card');
      
      jobCards.forEach(function(card) {
        const jobTitle = card.querySelector('h2').textContent.toLowerCase();
        const jobDescription = card.querySelector('p').textContent.toLowerCase();

        // Show or hide job card based on the search query
        if (jobTitle.includes(searchQuery) || jobDescription.includes(searchQuery)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });
  </script>

</body>
</html>
