<?php
session_start();
$data = [
  'title' => 'user',
  'dir' => '../'
];
include_once "layouts/header.php";
?>

<main class="bg-gray-50">
  <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0">
    <div href="#" class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10">
      <img src="../src/images/dlsl-logo.png" class="h-24 mr-4" alt="DLSL logo">
      <h1 class="self-center text-2xl font-bold whitespace-nowrap">CIO Points Web App</h1>
    </div>
    <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-screen-sm xl:p-0">
      <div class="p-6 space-y-8 sm:p-8 lg:p-16">
        <h2 class="text-2xl font-bold text-gray-900 lg:text-3xl">
          Sign in to platform
        </h2>
        <form class="mt-8 space-y-6" action="includes/login.inc.php" method="post">
          <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" placeholder="name@dlsl.edu.ph" required>
          </div>
          <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" required>
          </div>
          <div class="flex items-start">
            <div class="text-sm">
              <span class="text-red-600"><?= (isset($_GET['error']) && $_GET['error'] == 'invalid') ? 'Invalid Username or Password' : ((isset($_GET['error']) && $_GET['error'] == 'usernotfound') ? 'User not found. Please try again.' : ''); ?></span>
            </div>
            <a href="#" class="ml-auto text-sm text-emerald-500 hover:underline">Lost Password?</a>
          </div>
          <button type="submit" name="submit" class="w-full px-5 py-3 text-base font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-200 sm:w-auto">Login to your account</button>
          <div class="text-sm font-medium text-gray-500">
            <div class="mb-2">Not registered? <a href=" register.php" class="text-emerald-500 hover:underline">Create account</a></div>
            <div>Not user? <a href="../" class="text-emerald-500 hover:underline">Selection Menu</a></div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include_once "layouts/footer.php"; ?>