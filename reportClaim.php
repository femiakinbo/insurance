<?php

require 'connection.php';
header("Content-Type: application/json");

$error = $success = "";
// Request form inputs
$email = $_POST['email'];
$comment = $_POST['comment'];
$clientId = $_POST['client_id'];

// Strip slashes
$email = stripslashes($email);
$comment = stripslashes($comment);
$email = mysqli_escape_string($conn, $email);
$comment = mysqli_escape_string($conn, $comment);

if (empty($email) || empty($comment)) {
    $error = 'The fields are required!';
}

if (!empty($_FILES['document']['name'])) {
    $document = basename($_FILES["document"]["name"]);
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["document"]["name"]);
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    
    if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
        // Insert into report claim
        $sql = "INSERT INTO report_claim (email, client_id, comment, document) VALUES ('$email', '$clientId', '$comment', '$target_file')";
        $result = $conn->query($sql);
        if($result) {
            echo json_encode(['status' => 200, 'message' => 'Report claim successfully sent!']);
        } else {
            echo json_encode(['status' => 400, 'message' => 'Sorry, an error occurred. Try again later.']);
        }
    }
} else {
    // Insert into report claim
    $sql = "INSERT INTO report_claim (email, client_id, comment) VALUES ('$email', '$clientId', '$comment')";
    $result = $conn->query($sql);
    if($result) {
        echo json_encode(['status' => 200, 'message' => 'Report claim successfully sent!']);
    } else {
        echo json_encode(['status' => 400, 'message' => 'Sorry, an error occurred. Try again later.']);
    }
}

return;
