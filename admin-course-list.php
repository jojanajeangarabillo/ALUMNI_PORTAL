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
                <a href="#"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
                <a href="#"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
                <a href="#"><img src="images/about.png" alt="About"><span>About</span></a>
                <a href="register.php"><img src="images/signup.png" alt="Sign up"><span>Sign Up</span></a>
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
                        <button type="button" onclick="editCourse(this)">Edit</button>
                        <button type="button" onclick="deleteCourse(this)">Delete</button>
                </td>
        </tr>
        <tr>
                <td>2</td>
                <td>BSEd</td>
                <td>Bachelor of Secondary Education</td>
                <td>College of Education</td>
                <td>
                         <button type="button" onclick="editCourse(this)">Edit</button>
                         <button type="button" onclick="deleteCourse(this)">Delete</button>
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
