<?php
session_start();
require "db_connection.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $loginInput = $_POST['loginInput'];
    $password = $_POST['password'];

    $result = fetchUserCredentials($loginInput, $password);

    if ($result === "Successfully Logged In.") {
        echo json_encode([
            'message' => 'Successfully Logged In',
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


function fetchUserCredentials($loginInput, $password)
{
    global $conn;
    $loginInput = trim($loginInput);
    $password = trim($password);

    $isEmail = filter_var($loginInput, FILTER_VALIDATE_EMAIL);

    $fetchLoginQuery = $isEmail ?
        "SELECT * FROM accounts WHERE email = ?" :
        "SELECT * FROM accounts WHERE username = ?";

    $stmt = $conn->prepare($fetchLoginQuery);
    $stmt->bind_param("s", $loginInput);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 0) {
        return "Username or email does not exist.";
    }

    $user = $result->fetch_assoc();

    if (!password_verify($password, $user['passwordHash'])) {
        return "Invalid password.";
    }

    $_SESSION['userId'] = $user['userId'];
    $_SESSION['username'] = $user['username'];

    if ($stmt->execute()) {
        return "Successfully Logged In.";
    } else {
        return "An error occurred. Please try again.";
    }
}
