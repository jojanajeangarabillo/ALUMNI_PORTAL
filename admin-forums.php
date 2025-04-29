<!DOCTYPE htm>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Portal</title>
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

    <div class="banner-interface"></div>

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
            <a href="admin-event.php"> <img src="images/calendar.png" alt="Events"><span>Events</span>
            <a href="admin-forums.php" class="active"><img src="images/forums.png" alt="Forum"><span>Forum</span></a>
            <a href="admin-system-setting.php"><img src="images/settings.png" alt="System Settings"><span>System Settings</span></a>
            <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
           
        </div>

    </div>

  <!-- Main content -->
  <main class="content">
  <h2>Forum Topics</h2>

  <div class="table-controls">
    <div class="entries-control">
      <label for="entries">Show</label>
      <select id="entries">
        <option value="5">5</option>
        <option value="10" selected>10</option>
        <option value="25">25</option>
      </select>
      <span>Entries</span>
    </div>

    <div class="search-control">
      <label for="search">Search:</label>
      <input type="text" id="search" placeholder="Search topic..." />
    </div>
  </div>

  <div class="add-topic-forum">
    <button onclick="openCreateModal()" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
    +  Create New Post
</button>
  </div>

  <table class="forum-table">
    <thead>
      <tr>
        <th>#</th>
        <th>Topic</th>
        <th>Description</th>
        <th>Posted By</th>
        <th>Comments</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Topic By Admin</td>
        <td>Lorem ipsum dolor sit amet...</td>
        <td>Admin</td>
        <td>1</td>
        <td>
          <button class="view-btn">View</button>
          <button class="edit-btn">Edit</button>
          <button class="delete-btn">Delete</button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Sample Topic</td>
        <td>Lorem ipsum dolor sit amet...</td>
        <td>Juan Dela Cruz</td>
        <td>0</td>
        <td>
          <button class="view-btn">View</button>
          <button class="edit-btn">Edit</button>
          <button class="delete-btn">Delete</button>
        </td>
      </tr>
    </tbody>
  </table>
</main>

<div id="create-post-modal" class="alumni-forums-modal hidden">
  <div class="alumni-forums-modal-content">
    <button onclick="closeCreateModal()" class="alumni-forums-close-button">&times;</button>

    <h2 class="alumni-forums-modal-title text-center">Create New Forum Post</h2>
    <hr class="alumni-forums-modal-divider mb-4">

    <form id="forumPostForm" class="space-y-4">
      <!-- Topic -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1" for="topic">Topic</label>
        <input id="topic" name="topic" type="text" class="w-full p-2 border border-gray-300 rounded-lg" required>
      </div>

      <!-- Description -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1" for="description">Short Description</label>
        <input id="description" name="description" type="text" class="w-full p-2 border border-gray-300 rounded-lg" required>
      </div>

      <!-- Full Context -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1" for="fullContext">Full Context</label>
        <textarea id="fullContext" name="fullContext" rows="6" class="w-full p-2 border border-gray-300 rounded-lg" required></textarea>
      </div>

      <!-- File Upload -->
      <div>
        <label class="block text-gray-700 font-semibold mb-1" for="attachment">Attach Related File</label>
        <input id="attachment" name="attachment" type="file" class="w-full p-1 border border-gray-300 rounded-lg">
      </div>

      <!-- Submit -->
      <div class="text-center">
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-full">
          Submit Post
        </button>
      </div>
    </form>
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

        function openCreateModal() {
        document.getElementById('create-post-modal').classList.remove('hidden');

        function closeCreateModal() {
        document.getElementById('create-post-modal').classList.add('hidden');
}
}
    </script>

    

</body>
</html>
