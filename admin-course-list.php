<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Course List - Alumni Portal</title>
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

    <div id="al-content">
        <div class="sidebar" id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">&#x25C0;</div>
            <div class="sidebar-content">
                <div class="profile-section">
                    <a href="profile.html" class="profile-pic">
                        <img src="images/avatar.png" alt="Profile Picture"></a>
                    <div class="profile-name">ADMIN</div>
                </div>

                <a href="admin-home.php"><img src="images/home.png" alt="Home"><span>Home</span></a>
            <a href="admin-gallery.php"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
            <a href="admin-course-list.php" class="active"><img src="images/course-list.png" alt="Course List"><span>Course List</span></a>
            <a href="admin-alumni-list.php"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
            <a href="admin-alumni-upload.php"><img src="images/upload.png" alt="Alumni Upload"><span>Alumni Upload</span></a>
            <a href="admin-job.php"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
            <a href="admin-event.php"><img src="images/calendar.png" alt="Events"><span>Events</span></a>
            <a href="admin-forums.php"><img src="images/forums.png" alt="Forum"><span>Forum</span></a>
            <a href="admin-system-setting.php"><img src="images/settings.png" alt="System Settings"><span>System Settings</span></a>
            <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
            </div>
        </div>

 <div class="al-main-content">
            <header>List of Courses</header> <hr>

<div class="alist-search">
                <form onsubmit="event.preventDefault(); filterCourses();">
                    <label class="alist-label">Search: </label>
                    <input type="text" id="searchInput">
                    <button type="submit" class="alist-filter">Filter</button>
                    <button type="button" onclick="openAddCourseModal()">Add Course</button>
                </form>
            </div>

            <div class="table-alist">
             <table id="courseTable">
            
    <thead>
         <tr>
                <th>#</th>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Department</th>
                <th>Action</th>
                        </tr>
    </thead>
    <tbody>
        <tr>
                <td>1</td>
                <td>BSIT</td>
                <td>Bachelor of Science in Information Technology</td>
                <td>College of Computing and Information Sciences</td>
                <td>
                <button type="button" class="admin-course-list-btn edit" onclick="editCourse(this)">Edit</button>
                <button type="button" class="admin-course-list-btn delete" onclick="deleteCourse(this)">Delete</button>

                </td>
        </tr>
        <tr>
                <td>2</td>
                <td>BSEd</td>
                <td>Bachelor of Secondary Education</td>
                <td>College of Education</td>
                <td>
                <button type="button" class="admin-course-list-btn edit" onclick="editCourse(this)">Edit</button>
                <button type="button" class="admin-course-list-btn delete" onclick="deleteCourse(this)">Delete</button>

                 </td>
        </tr>
    </tbody>
    </table>
    </div>

        <div class="list-foot">
        <div>
            <form>
            <label>Page 1 of 1</label>
            <div class="previous-next">
             <label>Previous</label>
                <button type="button"><</button>
                <button type="button">></button>
                <label>Next</label>
        </div>
            </form>
            </div>
        </div>
        </div>
    </div>
    <div class="admin-course-list-modal-overlay" id="courseEditModal">
  <div class="admin-course-list-modal">
    <h2>Edit Course</h2>
    <form id="editCourseForm">
      <label for="courseCode">Course Code</label>
      <input type="text" id="courseCode" name="courseCode" required>

      <label for="courseName">Course Name</label>
      <input type="text" id="courseName" name="courseName" required>

      <label for="department">Department</label>
      <input type="text" id="department" name="department" required>

      <div class="admin-course-list-modal-buttons">
        <button type="submit" class="save">Save</button>
        <button type="button" class="cancel" onclick="closeCourseModal()">Cancel</button>
      </div>
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


function editCourse(button) {
  const row = button.closest('tr');
  const code = row.cells[1].textContent;
  const name = row.cells[2].textContent;
  const dept = row.cells[3].textContent;

  document.getElementById('courseCode').value = code;
  document.getElementById('courseName').value = name;
  document.getElementById('department').value = dept;

  document.getElementById('courseEditModal').style.display = 'flex';
}

function closeCourseModal() {
  document.getElementById('courseEditModal').style.display = 'none';
}

// Optional: Handle form submission
document.getElementById('editCourseForm').addEventListener('submit', function (e) {
  e.preventDefault();
  // Add saving logic here
  alert('Course updated!');
  closeCourseModal();
});

    </script>
</body>
</html>
