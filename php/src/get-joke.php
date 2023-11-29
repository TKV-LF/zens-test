<?php
require_once 'config.php';
error_reporting(0);


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Check user identifier from cookies or create a temporary one
    $userIdentifier = isset($_COOKIE['user_identifier']) ? $_COOKIE['user_identifier'] : uniqid();

    // Fetch a joke that the user hasn't seen or voted for
    $sql = "SELECT * FROM jokes WHERE id NOT IN (SELECT jokeId FROM jokeInteractions WHERE userIdentifier = '$userIdentifier') ORDER BY RAND() LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $jokeId = $row['Id'];
        $jokeContent = $row['Content'];

        // Return the joke content to the user

        // Set a cookie to track the user's interaction
        setcookie('user_identifier', $userIdentifier, time() + (86400 * 1), '/');
        echo json_encode(['jokeId' => $jokeId, 'jokeContent' => $jokeContent]);

    } else {
        echo json_encode(['jokeId' => 0, 'jokeContent' => "That's all the jokes for today! Come back another day!"]);
    }
}

$conn->close();
?>