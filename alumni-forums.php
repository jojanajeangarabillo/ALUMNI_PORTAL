<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Forums</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gray-50">

  <!-- HEADER -->
  <div class="interface-header">
    <img src="images/logo.png" alt="PLP Logo" class="logo-interface">
    <div class="text">
      <div class="school-name">Pamantasan Ng Lungsod Ng Pasig</div>
      <div class="alumni-title">ALUMNI</div>
    </div>
  </div>

  <!-- BANNER -->
  <section class="banner">
    <div class="overlay"></div>
    <h1><u>FORUM LIST</u></h1>
  </section>

  <!-- SIDEBAR -->
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
      <a href="alumni-gallery.php"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
      <a href="#"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
      <a href="#"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
      <a href="alumni-forums.php" class="active"><img src="images/forums.png" alt="Forums"><span>Forums</span></a>
      <a href="#"><img src="images/about.png" alt="About"><span>About</span></a>
      <a href="register.php"><img src="images/signup.png" alt="Sign up"><span>Sign Up</span></a>
      <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
    </div>
  </div>

  <!-- MAIN CONTENT -->
  <main class="p-8 ml-64">

    <!-- Search Bar -->
    <div class="flex justify-center mb-10">
      <div class="relative w-2/3">
        <input 
          type="text" 
          placeholder="Search" 
          class="w-full text-center pr-4 py-2 rounded-full border border-blue-300 focus:outline-none focus:ring-2 focus:ring-blue-400 text-gray-700"
        >
        <div class="absolute top-1/2 left-3 transform -translate-y-1/2 text-blue-500 pointer-events-none">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0a7 7 0 10-9.9 0 7 7 0 009.9 0z" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Forum Card -->
    <div class="bg-green-50 p-8 rounded-2xl shadow-lg w-full max-w-3xl mx-auto">
      <h2 class="text-center text-xl font-bold mb-6">Mission of PLP</h2>

      <div class="bg-blue-400 text-white rounded-2xl p-6">
        <p class="mb-4">
          The mission of Pamantasan ng Lungsod ng Pasig (PLP) is to provide quality higher education for the development of students 
          into responsible, competent, and globally competitive individuals.
        </p>

        <hr class="border-t-2 border-blue-300 mb-4">

        <div class="flex items-center justify-between">
          <button onclick="openModal()" class="bg-blue-900 hover:bg-blue-300 text-white font-bold py-1 px-3 rounded-full text-xs">
            POSTED BY: ADMIN 
          </button>

          <button onclick="openModal()" class="bg-blue-900 hover:bg-blue-300 text-white font-bold py-1 px-3 rounded-full text-xs">
            VIEW TOPIC
          </button>
        </div>
      </div>
    </div>

  </main>

  <!-- Modal -->
  <div id="topicModal" class="modal hidden">
    <div class="modal-content">

      <button onclick="closeModal()" class="close-button">&times;</button>

      <div class="text-center">
        <div class="icon-container">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c.638 0 1.25.244 1.707.707A2.414 2.414 0 0114 10c0 .638-.244 1.25-.707 1.707A2.414 2.414 0 0112 12c-.638 0-1.25-.244-1.707-.707A2.414 2.414 0 0110 10c0-.638.244-1.25.707-1.707A2.414 2.414 0 0112 8zM12 14v2m0 4h.01" />
          </svg>
        </div>

        <h2 class="modal-title">Mission of PLP</h2>

        <hr class="modal-divider">

        <p class="modal-description">
          The mission of Pamantasan ng Lungsod ng Pasig (PLP) is to provide quality higher education for the development of students 
          into responsible, competent, and globally competitive individuals.
        </p>

        <!-- Comments Section -->
        <div class="mt-10 text-left">
          <h3 class="comments-title">Comments</h3>

          <div id="commentsList" class="space-y-4 mb-4">
            <!-- Comments will appear here -->
          </div>

          <div class="flex space-x-4">
            <input id="newComment" type="text" placeholder="Write a comment..." class="comment-input" required>
            <button onclick="addComment()" class="comment-button">Post</button>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="script.js"></script>

</body>
</html>
