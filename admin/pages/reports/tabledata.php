<div class="flex flex-col">
  <div class="overflow-x-auto">
    <div class="inline-block min-w-full align-middle">
      <div class="overflow-hidden shadow">
        <table class="min-w-full divide-y divide-gray-200 table-fixed">
          <thead class="bg-gray-100">
            <tr>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                Name
              </th>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                Semester
              </th>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                Academic Year
              </th>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                CI Points
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach ($records as $data) : ?>
              <tr class="hover:bg-gray-100">
                <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap lg:mr-0">
                  <svg class="w-10 h-10 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
                  <div class="text-sm font-normal text-gray-500">
                    <div class="text-base font-semibold text-gray-900"><?= $data['first_name'] . ' ' . $data['middle_name'] . ' ' . $data['last_name']; ?></div>
                    <div class="text-sm font-normal text-gray-500"><?= $data['email'] ?></div>
                  </div>
                </td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap"><?= $data['semester']; ?></td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap"><?= $data['year']; ?></td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap"><?= $data['total_cip']; ?></td>
              <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between">
  <div class="flex items-center mb-4 sm:mb-0">
    <button onclick="location.href='reports.php?page=<?= $page - 1; ?>'" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer disabled:opacity-50 disabled:cursor-default enabled:hover:text-gray-900 enabled:hover:bg-gray-100" <?= ((isset($_GET['page']) && $_GET['page'] == 1) ? 'disabled' : (!isset($_GET['page']))) ? 'disabled' : ''; ?>>
      <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
      </svg>
    </button>
    <button onclick="location.href='reports.php?page=<?= $page + 1; ?>'" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer disabled:opacity-50 disabled:cursor-default enabled:hover:text-gray-900 enabled:hover:bg-gray-100" <?= ((isset($_GET['page']) && $_GET['page'] == $total_pages) ? 'disabled' : ($page == $total_pages)) ? 'disabled' : ''; ?>>
      <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
      </svg>
    </button>
    <span class="text-sm font-normal text-gray-500">Showing <span class="font-semibold text-gray-900"><?= $page; ?></span> of <span class="font-semibold text-gray-900"><?= $total_pages; ?></span></span>
  </div>
  <div class="flex items-center space-x-3">
    <button onclick="location.href='reports.php?page=<?= $page - 1; ?>'" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg disabled:opacity-50 enabled:hover:bg-gray-700 enabled:focus:ring-4 enabled:focus:ring-gray-200" <?= ((isset($_GET['page']) && $_GET['page'] == 1) ? 'disabled' : (!isset($_GET['page']))) ? 'disabled' : ''; ?>>
      <svg class="w-5 h-5 mr-1 -ml-1" "="" fill=" currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
      </svg>
      Previous
    </button>
    <button onclick="location.href='reports.php?page=<?= $page + 1; ?>'" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg disabled:opacity-50 enabled:hover:bg-gray-700 enabled:focus:ring-4 enabled:focus:ring-gray-200" <?= ((isset($_GET['page']) && $_GET['page'] == $total_pages) ? 'disabled' : ($page == $total_pages)) ? 'disabled' : ''; ?>>
      Next
      <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
      </svg>
    </button>
  </div>
</div>