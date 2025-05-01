<?php
session_start();
include 'admin/db_connect.php';

if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);
    
    $event_query = "SELECT * FROM events WHERE id = ?";
    $stmt = $conn->prepare($event_query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if($result->num_rows > 0) {
        $event = $result->fetch_assoc();
        
        $formattedDate = date('F d, Y h:i A', strtotime($event['schedule']));
        
        $response = array(
            'id' => $event['id'],
            'title' => $event['title'],
            'content' => html_entity_decode($event['content']),
            'schedule' => $formattedDate,
            'banner' => $event['banner']
        );
        
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        header('HTTP/1.0 404 Not Found');
        echo json_encode(['error' => 'Event not found']);
    }
} else {
    header('HTTP/1.0 400 Bad Request');
    echo json_encode(['error' => 'Invalid request']);
}
?>
