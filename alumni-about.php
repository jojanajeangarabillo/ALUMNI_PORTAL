<!DOCTYPE html>
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

        <div class="about">
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
                        <a href="#"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
                         <a href="alumni-job.php"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
                         <a href="alumni-forums.php"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
                         <a href="alumni-about.php" class="active"><img src="images/about.png" alt="About"><span>About</span></a>
                         <a href="register.php"><img src="images/signup.png" alt="Sign up"><span>Sign Up</span></a>
                         <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
                    </div>
            </div>

            <div class="main-content">
                <header>Topic</header>
                <hr><br>
                <div class="topic">
                    <p>
                        content content content content content content content content content content content
                    </p>
                </div>
                <br>
                <div class="topic">
                    <p>
                        ememememmemememmemem
                    </p>
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