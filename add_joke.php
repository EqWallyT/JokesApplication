<?php
session_start();
if (!isset($_SESSION['username'])) {
    echo "Only logged-in users may access this page. Click <a href='login_form.php'>here</a> to login <br>";
    exit;
}
include "db_connect.php";

$new_username = $_GET['username'];
$new_password1 = $_GET['password'];
$new_password2 = $_GET['password-confirm'];

echo "<h2>Trying to add a new user " . htmlspecialchars($new_username) . " with the provided password.</h2>";

// Check to see if this username has already been registered.
$sql = "SELECT * FROM users WHERE user_name = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $new_username);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows > 0) {
    echo "The username " . htmlspecialchars($new_username) . " is already in use. Try another.";
    exit;
} elseif ($new_password1 != $new_password2) {
    echo "The passwords do not match. Please try again.";
    exit;
} else {
    // Hash the password before storing it
    $hashed_password = password_hash($new_password1, PASSWORD_BCRYPT);

    // Add the new user
    $sql = "INSERT INTO users (user_id, user_name, password) VALUES (null, ?, ?)";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param("ss", $new_username, $hashed_password);

    if ($stmt->execute()) {
        echo "Registration success!";
    } else {
        echo "Something went wrong. Not registered.";
    }
    $stmt->close();
}

echo "<a href='index.php'>Return to main</a>";
$mysqli->close();
?>