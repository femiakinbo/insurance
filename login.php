<?php
session_start();
include 'connection.php';
header("Content-Type: application/json");

$username = $_POST["username"];
$password = $_POST["password"];
$hashedPassword = md5(sha1($password));

// Strip slashes
// $email = stripslashes($email);
// $comment = stripslashes($comment);
// $email = mysqli_escape_string($conn, $email);
// $comment = mysqli_escape_string($conn, $comment);

$sql = "SELECT agent_password,is_admin,agent_id from agent where agent_id='$username'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	if ($hashedPassword == $row["agent_password"]) {
		$_SESSION["username"] = $username;
		$_SESSION["is_admin"] = $row['is_admin'];
		echo json_encode(['status' => 200, 'mesage' => "welcome you have successfully logged in", "page" => "home.php"]);
		return;
	} else {
		$error = 'Incorrect password provided!';
	}
}
$sql = "SELECT client_password from client where client_id='$username'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	if ($hashedPassword == $row["client_password"]) {
		echo json_encode(['status' => 200, 'message' => "welcome you have successfully logged in", "page" => "clientHome.php"]);
		$_SESSION["username"] = $username;
		return;
	} else {
		$error = 'Incorrect password provided!';
	}
}


echo json_encode(['status' => 401, 'message' => $error]);

return;
