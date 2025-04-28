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
                <div class="profile-name">Marian</div>
            </div>

            <a href="admin-home.php"><img src="images/home.png" alt="Home"><span>Home</span></a>
            <a href="admin-gallery.php" class="active"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
            <a href="#"><img src="images/course-list.png" alt="Course List"><span>Course List</span></a>
            <a href="admin-alumni-list.php"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
            <a href="#"><img src="images/upload.png" alt="Alumni Upload"><span>Alumni Upload</span></a>
            <a href="#"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
            <a href="register.php"><img src="images/calendar.png" alt="Events"><span>Events</span></a>
            <a href="landing.php"><img src="images/forums.png" alt="Forum"><span>Forum</span></a>
            <a href="landing.php"><img src="images/settings.png" alt="System Settings"><span>System Settings</span></a>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="content">
        <div class="table-controls">
            <label>Show 
                <select>
                    <option>5</option>
                    <option>10</option>
                    <option>15</option>
                </select>
                Entries
            </label>

            <input type="text" class="search" placeholder="Search">
        </div>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>IMG</th>
                    <th>Gallery</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td><img src="images/sample.png" alt="Image"></td>
                    <td>wssss</td>
                    <td>
                        <button class="save-btn">Save</button>
                        <label for="modal-toggle-1" class="edit-btn">Edit</label>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><img src="images/sample.png" alt="Image"></td>
                    <td>sssss</td>
                    <td>
                        <button class="save-btn">Save</button>
                        <label for="modal-toggle-2" class="edit-btn">Edit</label>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><img src="images/sample.png" alt="Image"></td>
                    <td>sssss</td>
                    <td>
                        <button class="save-btn">Save</button>
                        <label for="modal-toggle-3" class="edit-btn">Edit</label>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="pagination">
            <span>Page 1 of 1</span>
            <button disabled>&lt;</button>
            <button disabled>&gt;</button>
        </div>
    </div>

    
    <input type="checkbox" id="modal-toggle-1" class="modal-toggle" hidden>
    <div class="modal">
        <div class="modal-content">
            <label for="modal-toggle-1" class="close-btn">&times;</label>

            <form class="modal-form">
                <div class="form-group">
                    <input type="file" id="file-upload-1">
                </div>

                <div class="form-group">
                    <label for="desc-1" class="desc-label">Short Description</label>
                    <textarea id="desc-1" rows="4"></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="save-btn">Save</button>
                    <label for="modal-toggle-1" class="cancel-btn">Cancel</label>
                </div>
            </form>
        </div>
    </div>

   
    <input type="checkbox" id="modal-toggle-2" class="modal-toggle" hidden>
    <div class="modal">
        <div class="modal-content">
            <label for="modal-toggle-2" class="close-btn">&times;</label>

            <form class="modal-form">
                <div class="form-group">
                    <input type="file" id="file-upload-2">
                </div>

                <div class="form-group">
                    <label for="desc-2" class="desc-label">Short Description</label>
                    <textarea id="desc-2" rows="4"></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="save-btn">Save</button>
                    <label for="modal-toggle-2" class="cancel-btn">Cancel</label>
                </div>
            </form>
        </div>
    </div>


    <input type="checkbox" id="modal-toggle-3" class="modal-toggle" hidden>
    <div class="modal">
        <div class="modal-content">
            <label for="modal-toggle-3" class="close-btn">&times;</label>

            <form class="modal-form">
                <div class="form-group">
                    <input type="file" id="file-upload-3">
                </div>

                <div class="form-group">
                    <label for="desc-3" class="desc-label">Short Description</label>
                    <textarea id="desc-3" rows="4"></textarea>
                </div>

                <div class="form-actions">
                    <button type="submit" class="save-btn">Save</button>
                    <label for="modal-toggle-3" class="cancel-btn">Cancel</label>
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
    </script>

</body>

</html>
