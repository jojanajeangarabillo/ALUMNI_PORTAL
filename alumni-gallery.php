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
            <a href="manage-profile.PHP" class="profile-pic">
                    <img src="images/avatar.png" alt="Profile Picture">
                </a>
                <div class="profile-name">Marian</div>
            </div>

           
      <a href="alumni-home.php"><img src="images/home.png" alt="Home"><span>Home</span></a>
      <a href="alumni-gallery.php" class="active"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
      <a href="alumni-list.php"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
      <a href="alumni-job.php"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
      <a href="alumni-forums.php"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
      <a href="alumni-about.php"><img src="images/about.png" alt="About"><span>About</span></a>
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



                        <div id="gallery-modal" class="gallery-modal">
    <div class="gallery-modal-content">
        <span class="close-btn">&times;</span>
        <h3 id="modal-title">Event Title</h3>
        <p id="eventDate">Event Date</p>
        <p id="eventDescription">Event Description</p>
    </div>
</div>
</div>



                    </div>
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

    <script>

const galleryModal = document.getElementById("gallery-modal"); 
const closeBtn = document.querySelector(".close-btn");

function openModal(title, date, description) {
    document.getElementById("modal-title").textContent = title;
    document.getElementById("eventDate").textContent = date;
    document.getElementById("eventDescription").textContent = description;
    galleryModal.style.display = "block";
}

closeBtn.onclick = function (event) {  
    galleryModal.style.display = "none";
}

window.onclick = function (event) {  
    if (event.target == galleryModal) {
        galleryModal.style.display = "none";
    }
}


const readMoreButtons = document.querySelectorAll(".read-more-btn");

readMoreButtons.forEach(button => {
    button.addEventListener("click", function (event) {
        event.preventDefault();
        
        
        const title = "Pamantasan ng Lungsod ng Pasig Celebrates 25th Founding Anniversary with Gawad Parangal 2025";
        const date = "Pasig City – March 20, 2025";
        const description = "The Pamantasan ng Lungsod ng Pasig (PLP) proudly celebrated a historic milestone with its 25th Founding Anniversary, highlighted by the prestigious Gawad Parangal 2025." + 
        " Held at the university auditorium, the event recognized outstanding institutional and college partners, as well as dedicated faculty and staff whose contributions have been instrumental in" + 
        "PLP’s growth and success. The ceremony commenced with a warm welcome from PLP’s esteemed school administrators. Dr. Reggie M. Maningas, University President, delivered his opening remarks," + 
        "setting the tone for an afternoon of recognition and gratitude. Notable city officials graced the occasion, including Honorable Congressman Roman T. Romulo, Honorable Vice Mayor Robert Vincent" + 
        "Jude B. Jaworski Jr., and Honorable City Mayor Victor Ma Regis N. Sotto. Also in attendance were City Councilors Maria Luisa De Leon and Simon Gerard R. Tantoco, who joined in celebrating this momentous occasion.";

        openModal(title, date, description);
    });
}); 

        </script>

</body>
</html>