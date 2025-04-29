<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Events</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="interface-header">
        <img src="images/logo.png" alt="PLP Logo" class="logo-interface">
        <div class="text">
            <div class="school-name">Pamantasan Ng Lungsod Ng Pasig</div>
            <p class="p-size">Alkade Jose St. Kapasigan, Pasig City</p>
        </div>
    </div>

  <div class="container">
    <div class="sidebar" id="sidebar">
          <div class="toggle-btn" onclick="toggleSidebar()">&#x25C0;</div>

          <div class="sidebar-content">
              <div class="profile-section">
                  <a href="profile.html" class="profile-pic">
                      <img src="images/avatar.png" alt="Profile Picture">
                  </a>
                  <div class="profile-name">ADMIN</div>
              </div>

              <a href="admin-home.php"><img src="images/home.png" alt="Home"><span>Home</span></a>
              <a href="admin-gallery.php"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
              <a href="admin-course-list.php"><img src="images/course-list.png" alt="Course List"><span>Course List</span></a>
              <a href="admin-alumni-list.php"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
              <a href="admin-alumni-upload.php"><img src="images/upload.png" alt="Alumni Upload"><span>Alumni Upload</span></a>
              <a href="admin-job.php"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
              <a href="admin-event.php" class="active"> <img src="images/calendar.png" alt="Events"><span>Events</span>
              <a href="admin-forums.php"><img src="images/forums.png" alt="Forum"><span>Forum</span></a>
              <a href="admin-system-setting.php"><img src="images/settings.png" alt="System Settings"><span>System Settings</span></a>
              <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
            
          </div>

      </div>

    <main class="admin-event-main-content">
      <div class="controls-bar">
        <div class="entries-container">
          <label for="entries">Show</label>
          <select id="entries" class="entries-select">
            <option value="5">5</option>
            <option value="10" selected>10</option>
            <option value="25">25</option>
            <option value="50">50</option>
          </select>
          <span>Entries</span>
        </div>
        <div class="right-controls">
          <button class="new-button">New +</button>
          <div class="search-container">
            <label>Search: </label>
            <input type="text" placeholder="Search..." class="search-input">
          </div>
        </div>
      </div>

      <div class="events-table">
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Schedule</th>
              <th>Title</th>
              <th>Description</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>mm/dd/yyyy</td>
              <td>ffffffffffff</td>
              <td>sssss</td>
              <td>
          <button class="save-btn">Save</button>
          <button class="edit-btn">Edit</button>
          <button class="delete-btn">Delete</button>
          </td>

            </tr>
          </tbody>
        </table>
      </div>
    </main>
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
