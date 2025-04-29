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

      <a href="alumni-home.php"><img src="images/home.png" alt="Home"><span>Home</span></a>
      <a href="alumni-gallery.php"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
      <a href="alumni-list.php"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
      <a href="alumni-job.php" class="active"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
      <a href="alumni-forums.php"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
      <a href="alumni-about.php"><img src="images/about.png" alt="About"><span>About</span></a>
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
        <p>Full job description.Full job descriptionFull job descriptionFull job descriptionFull job descriptionFull job descriptionFull job descriptionFull job description</p>
        <div class="job-footer">
          <span class="posted-by">POSTED BY: Dingdong Dantes</span>
          <button class="read-more">READ MORE</button>
        </div>
      </div>

      <div class="job-card">
        <h2>WEB DESIGNER</h2>
        <div class="job-meta">
          <div><img src="images/job-company.png" alt="company" class="icon-job">IT COMPANY</div>
          <div><img src="images/job-home.png" alt="Home Icon" class="icon-job">HOME BASED</div>
        </div>
        <p>Full job description.Full job descriptionFull job descriptionFull job descriptionFull job descriptionFull job descriptionFull job descriptionFull job description</p>
        <div class="job-footer">
          <span class="posted-by">POSTED BY: Dingdong Dantes</span>
          <button class="read-more">READ MORE</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Post Job Modal -->
  <div id="postJobModal" class="alumni-modal">
    <div class="alumni-job-modal-content">
      <span class="close-button" id="closePostJobModal">&times;</span>
      <h2>Post a Job Opportunity</h2>
      
      <form id="postJobForm">
        <label for="jobTitle">Job Position:</label><br>
        <input type="text" id="jobTitle" name="jobTitle" required><br><br>

        <label for="jobCompany">Company:</label><br>
        <input type="text" id="jobCompany" name="jobCompany" required><br><br>

        <label for="shortDescription">Short Description:</label><br>
        <input type="text" id="shortDescription" name="shortDescription" required><br><br>

        <label for="fullDescription">Full Description:</label><br>
        <textarea id="fullDescription" name="fullDescription" rows="6" required></textarea><br><br>

        <label for="jobLocation">Job Location:</label><br>
        <select id="jobLocation" name="jobLocation" required>
          <option value="home-based">Home-based</option>
          <option value="on-site">On-site</option>
        </select><br><br>

        <button type="submit" class="read-more">Submit</button>
      </form>
    </div>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('collapsed');
      const toggleBtn = document.querySelector('.toggle-btn');
      toggleBtn.innerHTML = sidebar.classList.contains('collapsed') ? '&#x25B6;' : '&#x25C0;';
    }

    document.getElementById('searchIcon').addEventListener('click', function() {
      const searchQuery = document.getElementById('searchInput').value.toLowerCase();
      const jobCards = document.querySelectorAll('.job-card');
      
      jobCards.forEach(function(card) {
        const jobTitle = card.querySelector('h2').textContent.toLowerCase();
        const jobDescription = card.querySelector('p').textContent.toLowerCase();

        if (jobTitle.includes(searchQuery) || jobDescription.includes(searchQuery)) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    });

    const postJobModal = document.getElementById("postJobModal");
    const postJobBtn = document.querySelector(".post-job-btn");
    const closePostJobModal = document.getElementById("closePostJobModal");


    postJobBtn.addEventListener("click", () => {
      postJobModal.style.display = "block";
    });


    closePostJobModal.addEventListener("click", () => {
      postJobModal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
      if (e.target === postJobModal) {
        postJobModal.style.display = "none";
      }
    });

    document.getElementById("postJobForm").addEventListener("submit", function(e) {
      e.preventDefault();
      alert("Job post submitted!");
      postJobModal.style.display = "none";
      this.reset();
    });
  </script>

</body>
</html>
