<?php
session_start();

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Check if the crsf token is passed 
    if(!isset($_POST['csrf-token'])) {
        //redirect back to the login page 
        $_SESSION['error'] = 'CSRF token not found';
        header('Location: ../');
        exit;
    }

    // Check if the csrf token is valid
    if($_POST['csrf-token'] !== $_SESSION['csrf-token']) {
        //redirect back to the login page 
        $_SESSION['error'] = 'Invalid CSRF token';
        header('Location: ../');
        exit;
    }

    // Check if the token is up to 64 characters 
    if(strlen($_POST['csrf-token']) !== 64) {
        //redirect back to the login page 
        $_SESSION['error'] = 'Invalid CSRF token';
        header('Location: ../');
        exit;
    }
    
    //print_r(strlen($_POST['csrf-token'])); //64

    // Check if the email is passed 
    if(!isset($_POST['email'])) {
        //redirect back to the login page 
        $_SESSION['error'] = 'Email is required';
        header('Location: ../');
        exit;
    }

    // Check if the password is passed 
    if(!isset($_POST['password'])) {
        //redirect back to the login page 
        $_SESSION['error'] = 'Password is required';
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
        header('Location: ../');
        exit;
    }





}