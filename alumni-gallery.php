<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
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
                <a href="profile.html" class="profile-pic">
                    <img src="images/avatar.png" alt="Profile Picture">
                </a>
                <div class="profile-name">Marian</div>
            </div>

            <a href="alumni-home.php"><img src="images/home.png" alt="Home"><span>Home</span></a>
            <a href="alumni-gallery.php" class="active"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
            <a href="#"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
            <a href="#"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
            <a href="#"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
            <a href="#"><img src="images/about.png" alt="About"><span>About</span></a>
            <a href="register.php"><img src="images/signup.png" alt="Sign up"><span>Sign Up</span></a>
            <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
        </div>
    </div>

    <div class="gallery-content">
        <section class="gallery-section">
            <div class="gallery-container">

                <div class="gallery-box">
                    <img src="images/gawad_parangal.jpg" alt="Gallery Image" />
                    <div class="gallery-text">
                        <h3>PLP Celebrates 25th Founding Anniversary with Gawad Parangal 2025</h3>
                        <p>
                        Pasig City – March 20, 2025- The Pamantasan ng Lungsod ng Pasig (PLP) proudly celebrated a 
                        historic milestone with its 25th Founding Anniversary
                        </p>
                        <a href="gallery_rreadmore.php">
                        <button class="read-more-btn">Read More</button>
                            </a>
                    </div>
                </div>

                <div class="gallery-box">
                    <img src="images/plpanniv.jpg" alt="Gallery Image" />
                    <div class="gallery-text">
                        <h3>PLP 25th Founding Anniversary</h3>
                        <p>
                            short description short description short description short description
                            short description short description
                        </p>
                        <a href="gallery_rreadmore.php">
                        <button class="read-more-btn">Read More</button>
                            </a>

                    </div>
                </div>

                <div class="gallery-box">
                    <img src="images/gawad_parangal.jpg" alt="Gallery Image" />
                    <div class="gallery-text">
                        <h3>Pamantasan ng Lungsod ng Pasig Celebrates 25th Founding Anniversary with Gawad Parangal 2025</h3>
                        <p>
                            Pasig City – March 20, 2025- The Pamantasan ng Lungsod ng Pasig (PLP) proudly celebrated a 
                            historic milestone with its 25th Founding Anniversary
                        </p>
                        <a href="gallery_rreadmore.php">
                        <button class="read-more-btn">Read More</button>
                            </a>
                    </div>
                </div>

                <div class="gallery-box">
                    <img src="images/plpanniv.jpg" alt="Gallery Image" />
                    <div class="gallery-text">
                        <h3>PLP 25th Founding Anniversary</h3>
                        <p>
                            short description short description short description short description
                            short description short description short description short description
                        </p>
                        <a href="gallery_rreadmore.php">
                        <button class="read-more-btn">Read More</button>
                            </a>
                    </div>
                </div>

            </div>
        </section>
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
