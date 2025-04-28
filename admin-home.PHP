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
                <div class="profile-name">Marian</div>
            </div>

            <a href="admin-home.php" class="active"><img src="images/home.png" alt="Home"><span>Home</span></a>
            <a href="admin-gallery.php"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
            <a href="#"><img src="images/course-list.png" alt="Course List"><span>Course List</span></a>
            <a href="#"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
            <a href="#"><img src="images/upload.png" alt="Alumni Upload"><span>Alumni Upload</span></a>
            <a href="#"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
            <a href="register.php"> <img src="images/calendar.png" alt="Events"><span>Events</span>
            <a href="landing.php"><img src="images/forums.png" alt="Forum"><span>Forum</span></a>
            <a href="landing.php"><img src="images/settings.png" alt="System Settings"><span>System Settings</span></a>
        </div>

    </div>

    <div class="main-content">
        <header>Dashboard</header> <hr>
        <div class="division">
            <div class="divs">
                <header>Alumni</header>
                <p>0</p>
                <img src="images/avatar.png"/>
            </div>
            <div class="divs">
                <header>Forum Topic</header>
                <p>0</p>
                <img src="images/forums.png"/>
            </div>
            <div class="divs">
                <header>Jobs</header>
                <p>0</p>
                <img src="images/jobs.png"/>
            </div>
            <div class="divs">
                <header>Events</header>
                <p>0</p>
                <img src="images/calendar.png"/>
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