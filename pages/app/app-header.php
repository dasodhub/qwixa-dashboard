<?php session_start();
require_once '../../config/database.php';

$userId = $_SESSION['user_id'];
$email  = $_SESSION['email'];

//Query the user from the database  
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id AND email = :email LIMIT 1");
$stmt->execute(['id' => $userId, 'email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);


if(!$user) {
  //Redirect back to the login page 
  $_SESSION['error'] = 'An unknown error occurred';
  $_SESSION['email'] = $_POST['email'];
  header('Location: ../../');
  exit;
}

// //Also check if the user has the permission to be here 
// if($user['user_type'] !== 'Principal Operator' || $user['user_type'] !== 'Platform Director') {
//   //Redirect back to the login page 
//   $_SESSION['error'] = 'You do not have permission to access this page';
//   $_SESSION['email'] = $_POST['email'];
//   header('Location: ../../');
//   exit;
// }






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qwixapay Dashboard</title>
    <link rel="stylesheet" href="../../src//output.css">
    <link rel="shortcut icon" href="../../images/quixa.jpeg" type="image/x-icon">
  </head>
<body class="bg-grey-100">
  <nav class="bg-[#25ac7f] fixed w-full z-20 top-0 start-0 border-default">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="../../images/logo.png" class="h-7" alt="Qwixapay Logo" />
  </a>
  
  <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="flex text-sm bg-[#25ac7f] rounded-full md:me-0 focus:ring-4 focus:ring-neutral-tertiary" id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown" data-dropdown-placement="bottom">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 rounded-full" src="../../images/quixa.jpeg" alt="user photo">
      </button>
      <!-- Dropdown menu -->
      <div class="z-50 hidden bg-[#25ac7f] border-default-medium rounded-base shadow-lg w-44" id="user-dropdown">
        <div class="px-4 py-3 text-sm border-default">
          <span class="block text-heading font-medium"><?php echo $user['first_name'] . ' ' . $user['last_name'] ?></span>
          <span class="block text-body truncate"><?php echo $user['email'] ?></span>
        </div>
        <ul class="p-2 text-sm text-body font-medium" aria-labelledby="user-menu-button">
          <li>
            <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Dashboard</a>
          </li>
          <li>
            <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Settings</a>
          </li>
          <li>
            <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Earnings</a>
          </li>
          <li>
            <a href="#" class="inline-flex items-center w-full p-2 hover:bg-neutral-tertiary-medium hover:text-heading rounded">Sign out</a>
          </li>
        </ul>
      </div>
      <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-body rounded-base md:hidden hover:bg-neutral-secondary-soft hover:text-heading focus:outline-none focus:ring-2 focus:ring-neutral-tertiary" aria-controls="navbar-user" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h14"/></svg>
      </button>
  </div>
  </div>
</nav>

