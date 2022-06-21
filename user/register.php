<?php
session_start();
$data = [
  'title' => 'register',
  'dir' => '../'
];

require_once("layouts/header.php");
?>

<main class="bg-gray-50">
  <div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
    <div href="#" class="text-2xl font-semibold flex justify-center items-center mb-8 lg:mb-10">
      <img src="../src/images/dlsl-logo.png" class="h-24 mr-4" alt="DLSL logo">
      <h1 class="self-center text-2xl font-bold whitespace-nowrap">CIO Points Web App</h1>
    </div>
    <div class="bg-white shadow rounded-lg md:mt-0 w-full sm:max-w-screen-sm xl:p-0">
      <div class="p-6 sm:p-8 lg:p-16 space-y-8">
        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">
          Create an account
        </h2>
        <form class="mt-8 space-y-6" action="includes/register.inc.php" method="post">
          <div>
            <label for="email" class="text-sm font-medium text-gray-900 block mb-2">Your email
              <span class="ml-2 text-sm text-red-600"><?= (isset($_GET['error']) && $_GET['error'] == 'emailalreadytaken') ? 'Email is already taken' : ((isset($_GET['error']) && $_GET['error'] == 'invalidemail') ? 'Invalid email' : ''); ?></span>
            </label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" placeholder="name@dlsl.edu.ph" required>
          </div>
          <div>
            <label for="password" class="text-sm font-medium text-gray-900 block mb-2">Your password
              <span class="ml-2 text-sm text-red-600"><?= (isset($_GET['error']) && $_GET['error'] == 'weakpassword') ? 'Password is too weak' : ''; ?></span>
            </label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" required>
          </div>
          <div>
            <label for="confirm-password" class="text-sm font-medium text-gray-900 block mb-2">Confirm password
              <span class="ml-2 text-sm text-red-600"><?= (isset($_GET['error']) && $_GET['error'] == 'passwordnotmatched') ? 'Password did not match' : ''; ?></span></label>
            <input type="password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" required>
          </div>
          <ul class="text-sm font-medium text-gray-500 block mb-2">
            <li class="text-sm text-gray-900 font-semibold mb-2">Password should be:</li>
            <li>- At least one lower case letter</li>
            <li>- At least one upper case letter</li>
            <li>- At least one number or symbol</li>
            <li>- Should be between 8 and 20 characters long</li>
          </ul>
          <button type="submit" name="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">Create account</button>
          <div class="text-sm font-medium text-gray-500">
            Already have an account? <a href="./" class="text-emerald-500 hover:underline">Login here</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php require_once("layouts/footer.php"); ?>