<?php
session_start();
include 'admin/db_connect.php';

$alumni_query = "SELECT COUNT(*) as total_alumni FROM alumnus_bio";
$alumni_result = $conn->query($alumni_query);
$alumni_row = $alumni_result->fetch_assoc();
$alumni_count = $alumni_row['total_alumni'];

$forum_query = "SELECT COUNT(*) as total_topics FROM forum_topics";
$forum_result = $conn->query($forum_query);
$forum_row = $forum_result->fetch_assoc();
$forum_count = $forum_row['total_topics'];

$jobs_query = "SELECT COUNT(*) as total_jobs FROM careers";
$jobs_result = $conn->query($jobs_query);
$jobs_row = $jobs_result->fetch_assoc();
$jobs_count = $jobs_row['total_jobs'];

$events_query = "SELECT COUNT(*) as total_events FROM events";
$events_result = $conn->query($events_query);
$events_row = $events_result->fetch_assoc();
$events_count = $events_row['total_events'];

$recent_events_query = "SELECT * FROM events ORDER BY schedule DESC LIMIT 5";
$recent_events_result = $conn->query($recent_events_query);

$recent_topics_query = "SELECT ft.*, COUNT(fc.id) as comment_count FROM forum_topics ft 
                        LEFT JOIN forum_comments fc ON ft.id = fc.topic_id 
                        GROUP BY ft.id 
                        ORDER BY ft.date_created DESC LIMIT 5";
$recent_topics_result = $conn->query($recent_topics_query);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | Alumni Portal</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/admin-dashboard.css">
</head>

<body class="dashboard-body">

    <div class="interface-header">
        <img src="images/logo.png" alt="PLP Logo" class="logo-interface">
        <div class="text">
            <div class="school-name">Pamantasan Ng Lungsod Ng Pasig</div>
            <p class="p-size">Alkade Jose St. Kapasigan, Pasig City</p>
        </div>
    </div>

    <div class="dashboard-container">
        <div class="sidebar" id="sidebar">
            <div class="toggle-btn" onclick="toggleSidebar()">&#x25C0;</div>

            <div class="sidebar-content">
                <div class="profile-section">
                    <a class="profile-pic">
                        <img src="images/avatar.png" alt="Profile Picture">
                    </a>
                    <div class="profile-name">ADMIN</div>
                </div>

                <a href="admin-home.php" class="active"><img src="images/home.png" alt="Home"><span>Home</span></a>
                <a href="admin-gallery.php"><img src="images/gallery.png" alt="Gallery"><span>Gallery</span></a>
                <a href="admin-course-list.php"><img src="images/course-list.png" alt="Course List"><span>Course List</span></a>
                <a href="admin-alumni-list.php"><img src="images/alumni_list.png" alt="Alumni List"><span>Alumni List</span></a>
                <a href="admin-alumni-upload.php"><img src="images/upload.png" alt="Alumni Upload"><span>Alumni Upload</span></a>
                <a href="admin-job.php"><img src="images/jobs.png" alt="Jobs"><span>Jobs</span></a>
                <a href="admin-event.php"> <img src="images/calendar.png" alt="Events"><span>Events</span></a>
                <a href="admin-forums.php"><img src="images/forums.png" alt="Forum"><span>Forum</span></a>
                <a href="admin-system-setting.php"><img src="images/settings.png" alt="System Settings"><span>System Settings</span></a>
                <a href="landing.php"><img src="images/log-out.png" alt="Log Out"><span>Log Out</span></a>
            </div>
        </div>

        <div class="main-dashboard-content">
            <header class="dashboard-header">Dashboard</header>
            <hr class="dashboard-divider">
            
            <div class="dashboard-welcome">
                <h2>Welcome to the Admin Dashboard</h2>
                <p>Here's an overview of your alumni portal statistics</p>
            </div>
            
            <div class="stats-container">
                <div class="stat-card alumni">
                    <div class="stat-icon">
                        <img src="images/avatar.png" alt="Alumni"/>
                    </div>
                    <div class="stat-info">
                        <h3>Alumni</h3>
                        <p class="stat-count"><?php echo $alumni_count; ?></p>
                    </div>
                </div>
                
                <div class="stat-card forum">
                    <div class="stat-icon">
                        <img src="images/forums.png" alt="Forum Topics"/>
                    </div>
                    <div class="stat-info">
                        <h3>Forum Topics</h3>
                        <p class="stat-count"><?php echo $forum_count; ?></p>
                    </div>
                </div>
                
                <div class="stat-card jobs">
                    <div class="stat-icon">
                        <img src="images/jobs.png" alt="Jobs"/>
                    </div>
                    <div class="stat-info">
                        <h3>Jobs</h3>
                        <p class="stat-count"><?php echo $jobs_count; ?></p>
                    </div>
                </div>
                
                <div class="stat-card events">
                    <div class="stat-icon">
                        <img src="images/calendar.png" alt="Events"/>
                    </div>
                    <div class="stat-info">
                        <h3>Events</h3>
                        <p class="stat-count"><?php echo $events_count; ?></p>
                    </div>
                </div>
            </div>
            
            <div class="dashboard-sections">
                <div class="dashboard-section">
                    <h3>Recent Events</h3>
                    <div class="dashboard-content">
                        <?php if($recent_events_result->num_rows > 0): ?>
                            <table class="dashboard-table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Schedule</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($event = $recent_events_result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($event['title']); ?></td>
                                        <td><?php echo date('M d, Y h:i A', strtotime($event['schedule'])); ?></td>
                                        <td><a href="admin-event.php?view=<?php echo $event['id']; ?>" class="dashboard-btn">View</a></td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <p class="no-data">No events found</p>
                        <?php endif; ?>
                        <div class="view-all">
                            <a href="admin-event.php">View All Events</a>
                        </div>
                    </div>
                </div>
                
                <div class="dashboard-section">
                    <h3>Recent Forum Topics</h3>
                    <div class="dashboard-content">
                        <?php if($recent_topics_result->num_rows > 0): ?>
                            <table class="dashboard-table">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Comments</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($topic = $recent_topics_result->fetch_assoc()): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($topic['title']); ?></td>
                                        <td><?php echo $topic['comment_count']; ?></td>
                                        <td><?php echo date('M d, Y', strtotime($topic['date_created'])); ?></td>
                                        <td><a href="admin-forums.php?view=<?php echo $topic['id']; ?>" class="dashboard-btn">View</a></td>
                                    </tr>
                                    <?php endwhile; ?>
                                </tbody>
                            </table>
                        <?php else: ?>
                            <p class="no-data">No forum topics found</p>
                        <?php endif; ?>
                        <div class="view-all">
                            <a href="admin-forums.php">View All Topics</a>
                        </div>
                    </div>
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