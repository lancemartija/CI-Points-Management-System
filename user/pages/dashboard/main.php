<div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64">
  <main>
    <div class="p-4">
      <div class="grid w-full grid-cols-1 gap-4 xl:grid-cols-2 2xl:grid-cols-3">
        <?php
        include_once 'usercard.php';
        include_once 'cipcard.php';
        include_once 'activitylist.php';
        ?>
      </div>
      <div class="p-4">
        <p class="mt-6 mb-4 text-xl font-semibold leading-none text-gray-900 sm:text-2xl">Requests</p>
        <div class="grid w-full grid-cols-1 gap-4 xl:grid-cols-2 2xl:grid-cols-3">
          <?php
          include_once 'pendinglist.php';
          include_once 'approvedlist.php';
          include_once 'rejectedlist.php';
          ?>
        </div>
      </div>
    </div>
  </main>
</div>