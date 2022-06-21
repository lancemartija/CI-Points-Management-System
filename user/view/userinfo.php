<?php
$data = [
  'title' => 'User Info',
  'dir' => '../../'
];

session_start();

if (!isset($_SESSION['userid'])) {
  header('Location: ../register.php');
  exit;
}

echo $_SESSION['userid'];

require_once("../layouts/header.php");
?>

<main class="bg-gray-50">
  <div class="mx-auto md:h-screen flex flex-col justify-center items-center px-6 pt-8 pt:mt-0">
    <div href="#" class="text-2xl font-semibold flex justify-center items-center mb-8 lg:mb-10">
      <img src="../../src/images/dlsl-logo.png" class="h-24 mr-4" alt="DLSL logo">
      <h1 class="self-center text-2xl font-bold whitespace-nowrap">CIO Points Web App</h1>
    </div>
    <div class="bg-white shadow rounded-lg md:mt-0 w-full sm:max-w-screen-sm xl:p-0">
      <div class="p-6 sm:p-8 lg:p-16 space-y-8">
        <h2 class="text-2xl lg:text-3xl font-bold text-gray-900">
          User Information
        </h2>
        <form class="mt-8 space-y-6" action="../includes/userinfo.inc.php" method="post">
          <input type="hidden" name="id" value="<?= $_SESSION['userid']; ?>">
          <div>
            <label for=" first-name" class="text-sm font-medium text-gray-900 block mb-2">First Name</label>
            <input type="text" name="first-name" id="first-name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" placeholder="Juan" required>
          </div>
          <div>
            <label for="middle-name" class="text-sm font-medium text-gray-900 block mb-2">Middle Name</label>
            <input type="text" name="middle-name" id="middle-name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" placeholder="Bayani" required>
          </div>
          <div>
            <label for="last-name" class="text-sm font-medium text-gray-900 block mb-2">Last Name</label>
            <input type="text" name="last-name" id="last-name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" placeholder="Dela Cruz" required>
          </div>
          <div>
            <label for="address" class="text-sm font-medium text-gray-900 block mb-2">Address</label>
            <input type="text" name="address" id="address" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" placeholder="Barangay, Street, City, Province">
          </div>
          <div>
            <label for="contact-number" class="text-sm font-medium text-gray-900 block mb-2">Contact Number</label>
            <input type="tel" name="contact-number" id="contact-number" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5" placeholder="09123456789" pattern="[0-9]{4}[0-9]{3}[0-9]{4}" required>
          </div>
          <button type="submit" name="submit" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:ring-green-200 font-medium rounded-lg text-base px-5 py-3 w-full sm:w-auto text-center">Save info</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php require_once("../layouts/footer.php"); ?>