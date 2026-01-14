<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the crsf token is passed 
    if(!isset($_POST['csrf-token'])) {
        //redirect back to the login page 
        $_SESSION['error'] = 'CSRF token not found';
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: ../');
        exit;
    }

    // Check if the csrf token is valid
    if($_POST['csrf-token'] !== $_SESSION['csrf-token']) {
        //redirect back to the login page 
        $_SESSION['error'] = 'Invalid CSRF token';
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: ../');
        exit;
    }

    // Check if the token is up to 64 characters 
    if(strlen($_POST['csrf-token']) !== 64) {
        //redirect back to the login page 
        $_SESSION['error'] = 'Invalid CSRF token';
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: ../');
        exit;
    }
    
    //print_r(strlen($_POST['csrf-token'])); //64

    // Check if the email is passed 
    if(!isset($_POST['email'])) {
        //redirect back to the login page 
        $_SESSION['error'] = 'Email is required';
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: ../');
        exit;
    }

    // Check if the password is passed 
    if(!isset($_POST['password'])) {
        //redirect back to the login page 
        $_SESSION['error'] = 'Password is required';
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: ../');
        exit;
    }

    //Let get the details passed 
    $email = $_POST['email'];
    $password = $_POST['password'];
    $csrfToken = $_POST['csrf-token'];

    //Sanitize the passed values 
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $password = filter_var($password, FILTER_SANITIZE_SPECIAL_CHARS);
    $csrfToken = filter_var($csrfToken, FILTER_SANITIZE_SPECIAL_CHARS);

    //Validate the email passed 
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        //redirect back to the login page 
        $_SESSION['error'] = 'Invalid email format';
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: ../');
        exit;
    }


    // if there is no error, let include the database connection file
    require_once '../config/database.php';

    //Check if the email exist in the database 
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$user) {
        //redirect back to the login page 
        $_SESSION['error'] = 'Email not found';
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: ../');
        exit;
    }

    //Let validate the password and be sure it is correct 
    // if(!password_verify($password, $user['password'])) {
    //     //redirect back to the login page 
    //     $_SESSION['error'] = 'Incorrect password';
    //     $_SESSION['email'] = $_POST['email'];
    //     $_SESSION['password'] = $_POST['password'];
    //     header('Location: ../');
    //     exit;
    // }

    //Also let check if the user has the permission to be here (Principal Operator || Platform Director)
    if($user['user_type'] !== 'Principal Operator' && $user['user_type'] !== 'Platform Director') {
        //redirect back to the login page 
        $_SESSION['error'] = 'You do not have permission to access this page';
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        header('Location: ../');
        exit;
    } else {

        //If no problem, let direct the user to the dashboard
        $_SESSION['user_id'] = $user['ID'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['user_type'] = $user['user_type'];
        header('Location: ../pages/dashboard/');
        exit;
    }


} else {
    //redirect back to the login page 
    $_SESSION['error'] = 'An unknown error occurred';
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['password'] = $_POST['password'];
    header('Location: ../');
    exit;
}