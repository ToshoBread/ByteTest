<?php
require "db_connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    $result = registerNewUser($username, $email, $password, $confirmPassword);

    if ($result === "Successfully Registered.") {
        echo json_encode([
            'message' => 'Successfully Registered',
            'success' => true
        ]);
    } else {
        echo json_encode([
            'message' => $result,
            'success' => false
        ]);
    }
    exit();
}

function registerNewUser($username, $email, $password, $confirmPassword)
{
    global $conn;
    $username = trim($username);
    $email = filter_var(trim($email), FILTER_VALIDATE_EMAIL);
    $password = trim($password);
    $confirmPassword = trim($confirmPassword);

    if (strlen($username) < 5 || strlen($username) > 50) {
        return "Username must be between 5 and 50 characters.";
    }
    if (!$email) {
        return "Invalid email address.";
    }
    if (strlen($password) < 8) {
        return "Password must be at least 8 characters long.";
    }
    if ($password !== $confirmPassword) {
        return "Passwords do not match.";
    }

    $checkExistenceQuery = "SELECT * FROM accounts WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($checkExistenceQuery);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        return "Username or email already exists.";
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $insertQuery = "INSERT INTO accounts (username, email, passwordHash, regDate) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($insertQuery);
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        return "Successfully Registered.";
    } else {
        return "Failed to register user.";
    }
}
