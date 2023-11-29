<?php
require_once 'config.php';
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jokeId = $_POST['jokeId'];
    $vote = $_POST['vote'];
    $userIdentifier = isset($_COOKIE['user_identifier']) ? $_COOKIE['user_identifier'] : uniqid();

    // Record the user's vote in the jokeInteractions table
    $sql = "INSERT INTO jokeInteractions (jokeId, userIdentifier, vote) VALUES ('$jokeId', '$userIdentifier', '$vote')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(['success' => true, 'message' => 'Vote recorded successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error recording vote: ' . $conn->error]);
    }
}

$conn->close();
?>