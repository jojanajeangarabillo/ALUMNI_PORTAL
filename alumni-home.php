<<<<<<< HEAD
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
            <div class="alumni-title">ALUMNI</div>
        </div>
    </div>

    <!-- Banner -->
    <div class="banner-interface"></div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">&#x25C0;</div>

        <div class="sidebar-content">
    <div class="profile-section">
        <a href="profile.html" class="profile-pic">
            <img src="images/avatar.png" alt="Profile Picture">
        </a>
        <div class="profile-name">Marian</div>
    </div>

    <a href="#" class="active"><img src="images/home.png" alt="Home"><span>Home</span></a>
    <a href="#"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
    <a href="#"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
    <a href="#"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
    <a href="#"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
    <a href="#"><img src="images/about.png" alt="About"><span>About</span></a>
    <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
</div>


    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Upcoming Events</h2>
        <div class="event">
    <div class="event-img">
        <img src="images/plpasigg.jpg" alt="Event">
    </div>
    <div class="event-details">
        <h3>Title</h3>
        <p>Short description short description short description</p>
        <a href="#" class="read-more">Read more</a>
    </div>
</div>

<div class="event">
    <div class="event-img">
        <img src="images/plpasigg.jpg" alt="Event">
    </div>
    <div class="event-details">
        <h3>Title</h3>
        <p>Short description short description short description</p>
        <a href="#" class="read-more">Read more</a>
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
=======
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
            <div class="alumni-title">ALUMNI</div>
        </div>
    </div>

    <!-- Banner -->
    <div class="banner-interface"></div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="toggle-btn" onclick="toggleSidebar()">&#x25C0;</div>

        <div class="sidebar-content">
    <div class="profile-section">
        <a href="profile.html" class="profile-pic">
            <img src="images/avatar.png" alt="Profile Picture">
        </a>
        <div class="profile-name">Marian</div>
    </div>

    <a href="#" class="active"><img src="images/home.png" alt="Home"><span>Home</span></a>
    <a href="#"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
    <a href="#"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
    <a href="#"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
    <a href="#"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
    <a href="#"><img src="images/about.png" alt="About"><span>About</span></a>
    <a href="register.php"><img src="images/signup.png" alt="Sign up"/><span>Sign up</span>
    <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
</div>


    </div>

    <!-- Main Content -->
    <div class="main-content">
        <h2>Upcoming Events</h2>
        <div class="event">
    <div class="event-img">
        <img src="images/plpasigg.jpg" alt="Event">
    </div>
    <div class="event-details">
        <h3>Title</h3>
        <p>Short description short description short description</p>
        <a href="#" class="read-more">Read more</a>
    </div>
</div>

<div class="event">
    <div class="event-img">
        <img src="images/plpasigg.jpg" alt="Event">
    </div>
    <div class="event-details">
        <h3>Title</h3>
        <p>Short description short description short description</p>
        <a href="#" class="read-more">Read more</a>
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
>>>>>>> 1a88314 (moadified)
