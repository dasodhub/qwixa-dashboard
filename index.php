<?php include 'layouts/header.php'; 

//Function to generate a crsf token 

function generateCSRFToken() {
    if (empty($_SESSION['csrf-token'])) {
        $_SESSION['csrf-token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf-token'];
}

// print_r($_SESSION);

?>

<main class="">

<section class="bg-gray-50">

  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-37.5 mr-2" src="images/logo.png" alt="logo">
      </a>
      <div class="w-full bg-white rounded-lg md:mt-0 sm:max-w-md xl:p-0">

          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                  Sign in to your account
              </h1>

              <?php if(isset($_SESSION['error'])): ?>
              <div class="error-container bg-red-100 p-2 rounded-md">
                  <p class="text-red-500"><?php echo $_SESSION['error']; ?></p>
              </div>
                
              <?php

                //unset session 
                session_unset();
                endif; 
              ?>

              <form class="space-y-4 md:space-y-6" action="controllers/AdminLoginController.php" method="POST">

                  <input type="hidden" name="csrf-token" value="<?php echo generateCSRFToken(); ?>">

                  <div>
                      <label for="email" class="block mb-2 text-sm font-normal text-gray-900">Your email</label>
                      <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="name@qwixapay.com" required value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email']; ?>">
                  </div>

                  <div>
                      <label for="password" class="block mb-2 text-sm font-normal text-gray-900">Password</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required value="<?php if(isset($_SESSION['password'])) echo $_SESSION['password']; ?>">
                  </div>

                  <button type="submit" class="w-full text-white bg-[#25ac7f] hover:bg-[#25ac8a] focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer">Sign in</button>

                  <p class="text-sm font-light text-grey-400">
                      Need Support? <a href="https://wa.me/2348063175813" class="font-medium text-[#25ac7f] hover:underline" target="_blank">Contact Developer</a>
                  </p>

              </form>

          </div>

      </div>

  </div>

</section>

</main>

<?php include 'layouts/footer.php'; ?>