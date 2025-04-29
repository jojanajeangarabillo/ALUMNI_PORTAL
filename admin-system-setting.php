<!DOCTYPE html>
<html lang="en">
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
            <a href="admin-forums.php"><img src="images/forums.png" alt="Forum"><span>Forum</span></a>
            <a href="admin-system-setting.php" class="active"><img src="images/settings.png" alt="System Settings"><span>System Settings</span></a>
            <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
           
        </div>
    </div>

    <div class="setting-content">
        <h2>System Settings</h2>
        <form class="settings-form" action="#" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="systemName">System Name</label>
                <input type="text" id="systemName" name="systemName" value="PLP Alumni Portal">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="plp@sample.comm">
            </div>

            <div class="form-group">
                <label for="contact">Contact</label>
                <input type="text" id="contact" name="contact" value="+123 456 789">
            </div>

            <div class="form-group">
                <label for="aboutContent">About Content</label>
                <textarea id="aboutContent" name="aboutContent" rows="8">The quick brown fox jumps over a lazy dog The quick brown fox jumps over a lazy dog The quick brown fox jumps over a lazy dog The quick brown fox jumps over a lazy dog </textarea>
            </div>

            <div class="form-group">
                <label for="imageUpload">Image</label>
                <input type="file" id="imageUpload" name="imageUpload">
                <div class="preview-image">
                    <img src="images/your-uploaded-image.png" alt="Preview">
                </div>
            </div>

            <button type="submit" class="save-button">Save</button>
        </form>
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
