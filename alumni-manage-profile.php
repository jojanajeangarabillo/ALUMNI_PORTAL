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

        <div class="manage-profile">
            <div class="sidebar" id="sidebar">
                    <div class="toggle-btn" onclick="toggleSidebar()">&#x25C0;</div>

                    <div class="sidebar-content">
                        <div class="profile-section">
                            <a href="manage-profile.php" class="profile-pic">
                            <img src="images/avatar.png" alt="Profile Picture">
                            </a>
                        <div class="profile-name">Marian</div>
                        </div>

                        <a href="alumni-home.php" class="active"><img src="images/home.png" alt="Home"><span>Home</span></a>
                        <a href="alumni-gallery.php"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
                        <a href="#"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
                        <a href="#"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
                        <a href="#"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
                        <a href="#"><img src="images/about.png" alt="About"><span>About</span></a>
                        <a href="register.php"> <img src="images/signup.png" alt="Sign up"><span>Sign Up</span>
                        <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
                    </div>
                </div>

                <div class="main-content">
                    <header>Account Details</header>
                    <p>Manage your profile details</p> <hr><br>
                    <div class="profile-container">
                        <div class="pfp">
                            <img src="images/avatar.png" class="pfp-picture">
                            <button type="button" class="change-pfp">Change Picture</button>
                        </div>
                        <div class="info">
                            <form class="profile-form">
                                <div class="form-profile">
                                    <label>Last Name</label>
                                    <input type="text" name="last-name">
                                    <label>First Name</label>
                                    <input type="text" name="first-name">
                                    <label>Middle Name</label>
                                    <input type="text" name="middle-name">
                                </div>
                                <br>
                                
                                <div class="form-profile">
                                    <label>Gender</label>
                                    <input type="radio" name="gender" value="Male"> Male
                                    <input type="radio" name="gender" value="Female"> Female

                                </div>
                                <br>

                                <div class="form-profile">
                                    <label>Batch</label>
                                    <input type="number" min="2004">
                                    <label>Course Graduated</label>
                                    <select>
                                        <option>Select</option>
                                        <option name="IT">BS in Information Technology</option>
                                        <option name="CS">BS in Computer Science</option>
                                    </select>

                                </div>
                                <br>
                                
                                <div class="form-profile">
                                    <label>Currently Connected</label>
                                    <input type="radio" name="connectedto" value="Yes"> Yes
                                    <input type="radio" name="connectedto" value="No"> No

                                </div>
                                <br>

                                <div class="form-profile">
                                    <label>Email</label>
                                    <input type="email" name="email">
                                    <label>Password</label>
                                    <input type="password" name="password">

                                </div>
                                <br>
                                <button type="button">Update Profile</button>
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