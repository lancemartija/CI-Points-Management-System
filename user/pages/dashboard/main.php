<div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64">
  <main>
    <div class="p-3">
      <h1 class="mb-4 text-xl font-semibold leading-none text-gray-900 sm:text-2xl">Profile</h1>
      <div class="grid w-full grid-cols-1 gap-4 xl:grid-cols-2 2xl:grid-cols-3">
        <?php
        include_once 'usercard.php';
        include_once 'otherinfo.php';
        ?>
      </div>
    </div>
  </main>
</div>