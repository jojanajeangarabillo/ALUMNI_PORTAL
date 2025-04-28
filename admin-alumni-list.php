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

            <div id="al-content">
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
                    <a href="register.php"> <img src="images/signup.png" alt="Sign up"><span>Sign Up</span>
                    <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
                </div>
            </div>

            <div class="al-main-content">
                <header>List of Alumnis</header> <hr>
                <div class="alist-search">
                    <form>
                        <label class="alist-label">Search: </label>
                        <input type="text">
                        <button type="button-filter" class="alist-filter">Filter</button>
                    </form>
                </div>

                <div class="table-alist">
                <table>
                    <tr>
                        <th>#</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Course Graduated</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="images/avatar.PNG" width="125px" height="125px"/></td>
                        <td>Test</td>
                        <td>BS Information Technology</td>
                        <td><button type="button">Save</button></td>
                        <td>
                            <button type="button">Save</button>
                            <button type="button">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td><img src="images/avatar.PNG" width="125px" height="125px"/></td>
                        <td>Test</td>
                        <td>BS Information Technology</td>
                        <td><button type="button">Save</button></td>
                        <td>
                            <button type="button">Save</button>
                            <button type="button">Delete</button>
                        </td>
                    </tr>
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