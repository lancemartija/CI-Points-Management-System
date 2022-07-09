<?php
if (isset($_GET['filter']) && $_GET['filter'] == 'pending') {
  $style = 'text-black bg-yellow-500 hover:bg-yellow-600 focus:ring-yellow-400/50';
} else if (isset($_GET['filter']) && $_GET['filter'] == 'approved') {
  $style = 'text-white bg-green-600 hover:bg-green-700 focus:ring-green-200';
} else if (isset($_GET['filter']) && $_GET['filter'] == 'rejected') {
  $style = 'text-white bg-red-600 hover:bg-red-800 focus:ring-red-300';
} else {
  $style = 'text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-cyan-200';
}
?>


<div class="flex flex-wrap m-3">
  <?php foreach ($records as $data) : ?>
    <div class="overflow-x-auto">
      <div class="inline-block min-w-full align-middle">
        <div class="overflow-hidden shadow">
          <div class="max-w-sm p-6 mb-3 mr-3 bg-white border border-gray-200 rounded-lg">
            <a href="userrequests.php?id=<?= $data['user_id']; ?><?= (isset($_GET['filter'])) ? '&status=' . $data['request_status'] : '' ?>">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900"><?= $data['last_name'] . ', ' . $data['first_name'] . ' ' . $data['middle_name'][0] . '.'; ?></h5>
            </a>
            <p class="mb-3 font-normal text-gray-700">Has <span class="font-bold"><?= $data['total']; ?></span> <?= (isset($_GET['filter'])) ? $data['request_status'] : 'total'; ?> request(s).</p>
            <a href="userrequests.php?id=<?= $data['user_id']; ?><?= (isset($_GET['filter'])) ? '&status=' . $data['request_status'] : '' ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center rounded-lg focus:ring-4  <?= $style; ?>">
              View request
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
              </svg>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>

<div class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between">
  <div class="flex items-center mb-4 sm:mb-0">
    <button onclick="location.href='ciprequests.php?<?= (isset($_GET['filter'])) ? 'filter=' . $_GET['filter'] : ''; ?>&page=<?= $page - 1; ?>'" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer disabled:opacity-50 disabled:cursor-default enabled:hover:text-gray-900 enabled:hover:bg-gray-100" <?= ((isset($_GET['page']) && $_GET['page'] == 1) ? 'disabled' : (!isset($_GET['page']))) ? 'disabled' : ''; ?>>
      <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
      </svg>
    </button>
    <button onclick="location.href='ciprequests.php?<?= (isset($_GET['filter'])) ? 'filter=' . $_GET['filter'] : ''; ?>&page=<?= $page + 1; ?>'" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer disabled:opacity-50 disabled:cursor-default enabled:hover:text-gray-900 enabled:hover:bg-gray-100" <?= ((isset($_GET['page']) && $_GET['page'] == $total_pages) ? 'disabled' : ($page == $total_pages)) ? 'disabled' : ''; ?>>
      <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
      </svg>
    </button>
    <span class="text-sm font-normal text-gray-500">Showing <span class="font-semibold text-gray-900"><?= $page; ?></span> of <span class="font-semibold text-gray-900"><?= $total_pages; ?></span></span>
  </div>
  <div class="flex items-center space-x-3">
    <button onclick="location.href='ciprequests.php?<?= (isset($_GET['filter'])) ? 'filter=' . $_GET['filter'] : ''; ?>&page=<?= $page - 1; ?>'" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg disabled:opacity-50 enabled:hover:bg-gray-700 enabled:focus:ring-4 enabled:focus:ring-gray-200" <?= ((isset($_GET['page']) && $_GET['page'] == 1) ? 'disabled' : (!isset($_GET['page']))) ? 'disabled' : ''; ?>>
      <svg class="w-5 h-5 mr-1 -ml-1" "="" fill=" currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
      </svg>
      Previous
    </button>
    <button onclick="location.href='ciprequests.php?<?= (isset($_GET['filter'])) ? 'filter=' . $_GET['filter'] : ''; ?>&page=<?= $page + 1; ?>'" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg disabled:opacity-50 enabled:hover:bg-gray-700 enabled:focus:ring-4 enabled:focus:ring-gray-200" <?= ((isset($_GET['page']) && $_GET['page'] == $total_pages) ? 'disabled' : ($page == $total_pages)) ? 'disabled' : ''; ?>>
      Next
      <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
      </svg>
    </button>
  </div>
</div>