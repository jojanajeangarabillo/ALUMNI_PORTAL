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

  <div class="banner-interface"></div>

  <div class="sidebar" id="sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">&#x25C0;</div>

    <div class="sidebar-content">
      <div class="profile-section">
        <a href="alumni-manage-profile.php" class="profile-pic">
          <img src="images/avatar.png" alt="Profile Picture">
        </a>
        <div class="profile-name">Marian</div>
      </div>

      <a href="alumni-home.php" class="active"><img src="images/home.png" alt="Home"><span>Home</span></a>
      <a href="alumni-gallery.php"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
      <a href="alumni-list.php"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
      <a href="alumni-job.php"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
      <a href="alumni-forums.php"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
      <a href="alumni-about.php"><img src="images/about.png" alt="About"><span>About</span></a>
      <a href="register.php"><img src="images/signup.png" alt="Sign up"><span>Sign Up</span></a>
      <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
    </div>
  </div>

  <div class="main-content">
    <h2>Upcoming Events</h2>

    <div class="event">
      <div class="event-img">
        <img src="images/plpasigg.jpg" alt="Event">
      </div>
      <div class="event-details">
        <h3>Grand Alumni Homecoming</h3>
        <p>Join us for a day of fun, food, and nostalgia at PLP!</p>
        <a href="#" class="read-more">Read more</a>
      </div>
    </div>

    <div class="event">
      <div class="event-img">
        <img src="images/plpasigg.jpg" alt="Event">
      </div>
      <div class="event-details">
        <h3>Career Fair 2025</h3>
        <p>Explore new job opportunities during our alumni career fair!</p>
        <a href="#" class="read-more">Read more</a>
      </div>
    </div>

  </div>

  <!-- Alumni Home Modal -->
  <div id="alumni-home-modal" class="alumni-home-modal">
    <div class="alumni-home-modal-content">
      <span class="close-btn">&times;</span>
      <h2 id="modal-title">Event Title</h2>
      <p><strong>Date & Schedule:</strong> <span id="modal-date">May 5, 2025, 10:00 AM</span></p>
      <p><strong>Location:</strong> <span id="modal-location">PLP Main Campus</span></p>
      <p id="modal-description">
        Full event description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      </p>
      <button class="join-btn">Join</button>
    </div>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('collapsed');
      const toggleBtn = document.querySelector('.toggle-btn');
      toggleBtn.innerHTML = sidebar.classList.contains('collapsed') ? '&#x25B6;' : '&#x25C0;';
    }

    const modal = document.getElementById('alumni-home-modal');
    const closeBtn = document.querySelector('.close-btn');
    const readMoreLinks = document.querySelectorAll('.read-more');

    readMoreLinks.forEach(link => {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        modal.style.display = 'block';

        document.getElementById('modal-title').innerText = 'Grand Alumni Homecoming';
        document.getElementById('modal-date').innerText = 'May 30, 2025, 10:00 AM';
        document.getElementById('modal-location').innerText = 'PLP Main Campus, Pasig City';
        document.getElementById('modal-description').innerText = 'Join us for a day of fun, food, and nostalgia as we celebrate decades of excellence.';
      });
    });

    closeBtn.onclick = function () {
      modal.style.display = 'none';
    };

    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    };
  </script>

</body>
</html>
