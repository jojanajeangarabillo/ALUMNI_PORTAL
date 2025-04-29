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
                <div class="profile-name">ADMIN</div>
            </div>

            <a href="admin-home.php"><img src="images/home.png" alt="Home"><span>Home</span></a>
            <a href="admin-gallery.php"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
            <a href="#"><img src="images/course-list.png" alt="Course List"><span>Course List</span></a>
            <a href="admin-alumni-list.php"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
            <a href="#"><img src="images/upload.png" alt="Alumni Upload"><span>Alumni Upload</span></a>
            <a href="admin-job.php"class="active"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
            <a href="register.php"> <img src="images/calendar.png" alt="Events"><span>Events</span>
            <a href="landing.php"><img src="images/forums.png" alt="Forum"><span>Forum</span></a>
            <a href="admin-system-setting.php"><img src="images/settings.png" alt="System Settings"><span>System Settings</span></a>
            <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
           
        </div>

    </div>

        <main class="content">

        <div class="admin-job-content">

            
        <div class="top-actions">
  <div class="left-controls">
    <div class="entries-search-wrapper">
      <div class="entries-control">
        Show
        <select>
          <option>10</option>
          <option>25</option>
          <option>50</option>
        </select>
        Entries
      </div>
      <div class="search-control">
        Search: <input type="text" class="search-input">
      </div>
    </div>
  </div>

  <div class="right-controls">
    <button class="new-button" id="openAddModal">+ New</button>
  </div>
</div>




            <!-- Table -->
            <div class="table-wrapper">
                <table class="job-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Company</th>
                            <th>Job Title</th>
                            <th>Posted By</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>ABC Corp</td>
                            <td>Software Engineer</td>
                            <td>Admin</td>
                            <td>
                                <button class="view-btn">View</button>
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>XYZ Ltd</td>
                            <td>Data Analyst</td>
                            <td>Juan Dela Cruz</td>
                            <td>
                                <button class="view-btn">View</button>
                                <button class="edit-btn">Edit</button>
                                <button class="delete-btn">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        </main>
    </div>

    <div class="job-modal" id="jobModal">
  <div class="job-modal-content">
    <h2>Job Opportunity</h2>
    <p><strong>Company:</strong> <span class="modal-company">Sample Company</span></p>
    <p><strong>Job Title:</strong> <span class="modal-title">IT Specialist</span></p>
    <p><strong>Location:</strong> <span class="modal-location">📍 Microsoft</span></p>
    <hr>
    <p>The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.</p>
    <p>The quick brown fox jumps over the lazy dog.</p>
    <button class="close-job-modal">Close</button>
  </div>
</div>

<div class="job-modal" id="editJobModal">
  <div class="job-modal-content">
    <h2>Manage Job Post</h2>

    <label>Company</label>
    <input type="text" id="editCompany" class="edit-input" />

    <label>Job Title</label>
    <input type="text" id="editTitle" class="edit-input" />

    <label>Location</label>
    <input type="text" id="editLocation" class="edit-input" />

    <label>Description</label>
    <textarea id="editDescription" class="edit-textarea"></textarea>

    <div class="modal-buttons">
      <button id="saveEditBtn">Save</button>
      <button id="cancelEditBtn" class="cancel-btn">Cancel</button>
    </div>
  </div>
</div>


<div class="job-modal" id="addJobModal">
  <div class="job-modal-content">
    <h2>New Entry</h2>

    <label>Company</label>
    <input type="text" class="edit-input" placeholder="Enter company name">

    <label>Job Title</label>
    <input type="text" class="edit-input" placeholder="Enter job title">

    <label>Location</label>
    <input type="text" class="edit-input" placeholder="Enter location">

    <label>Description</label>
    <textarea class="edit-textarea" placeholder="Enter job description"></textarea>

    <div class="modal-buttons">
      <button>Save</button>
      <button id="cancelAddBtn" class="cancel-btn">Cancel</button>
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

    const modal = document.getElementById("jobModal");
    const viewButtons = document.querySelectorAll(".view-btn");
    const closeModal = document.querySelector(".close-job-modal");


    viewButtons.forEach(btn => {
        btn.addEventListener("click", () => {
            modal.style.display = "flex";
        });
    });

    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
        if (e.target === modal) {
            modal.style.display = "none";
        }
    });

    const editModal = document.getElementById("editJobModal");
    const editButtons = document.querySelectorAll(".edit-btn");
    const cancelEditBtn = document.getElementById("cancelEditBtn");
    const saveEditBtn = document.getElementById("saveEditBtn");

    const companyInput = document.getElementById("editCompany");
    const titleInput = document.getElementById("editTitle");
    const locationInput = document.getElementById("editLocation");
    const descInput = document.getElementById("editDescription");

    editButtons.forEach((btn, index) => {
        btn.addEventListener("click", () => {
            const row = btn.closest("tr");
            const columns = row.querySelectorAll("td");

            companyInput.value = columns[1].textContent;
            titleInput.value = columns[2].textContent;
            locationInput.value = "Bonifacio Global City"; 
            descInput.value = "The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. "; 

            editModal.style.display = "flex";
        });
    });

    cancelEditBtn.addEventListener("click", () => {
        editModal.style.display = "none";
    });

    saveEditBtn.addEventListener("click", () => {
    
        alert("Changes saved!");
        editModal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
        if (e.target === editModal) {
            editModal.style.display = "none";
        }
    });

    const addModal = document.getElementById("addJobModal");
const openAddModalBtn = document.getElementById("openAddModal");
const cancelAddBtn = document.getElementById("cancelAddBtn");

openAddModalBtn.addEventListener("click", () => {
    addModal.style.display = "flex";
});

cancelAddBtn.addEventListener("click", () => {
    addModal.style.display = "none";
});

window.addEventListener("click", (e) => {
    if (e.target === addModal) {
        addModal.style.display = "none";
    }
}); 
</script>


</body>
</html>
