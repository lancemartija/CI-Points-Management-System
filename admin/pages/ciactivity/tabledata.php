<div class="flex flex-col">
  <div class="overflow-x-auto">
    <div class="inline-block min-w-full align-middle">
      <div class="overflow-hidden shadow">
        <table class="min-w-full divide-y divide-gray-200 table-fixed">
          <thead class="bg-gray-100">
            <tr>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                Title
              </th>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                Date
              </th>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                Venue
              </th>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                Supervisor
              </th>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                CI Points
              </th>
              <th scope="col" class="p-4">
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <?php foreach ($records as $data) { ?>
              <tr class="hover:bg-gray-100">
                <td class="flex items-center p-4 mr-12 space-x-6 whitespace-nowrap lg:mr-0">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                  </svg>
                  <div class="text-sm font-normal text-gray-500">
                    <div class="text-base font-semibold text-gray-900"><?= $data['title']; ?></div>
                    <div class="text-sm font-normal text-gray-500"><?= $data['type'] ?></div>
                  </div>
                </td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap"><?= $data['date']; ?></td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap"><?= $data['venue']; ?></td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap"><?= $data['first_name'] . ' ' . $data['middle_name'] . ' ' . $data['last_name']; ?></td>
                <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap"><?= $data['ci_points'] ?></td>
                <td class="p-4 space-x-2 whitespace-nowrap">
                  <button type="button" data-view-button data-title="<?= $data['title']; ?>" data-date="<?= $data['date']; ?>" data-venue="<?= $data['venue']; ?>" data-department="<?= $data['department']; ?>" data-division="<?= $data['division']; ?>" data-description="<?= $data['description']; ?>" data-type="<?= $data['type']; ?>" data-duration="<?= $data['duration']; ?>" data-cipoints="<?= $data['ci_points']; ?>" data-year="<?= $data['year']; ?>" data-semester="<?= $data['semester']; ?>" data-supervisor="<?= $data['first_name'] . ' ' . $data['middle_name'] . ' ' . $data['last_name']; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg hover:bg-gray-700 focus:ring-4 focus:ring-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                      <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                      <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                    </svg>
                    View
                  </button>
                  <button type="button" data-edit-button data-id="<?= $data['activity_id']; ?>" data-title="<?= $data['title']; ?>" data-date="<?= $data['date']; ?>" data-venue="<?= $data['venue']; ?>" data-department="<?= $data['department']; ?>" data-division="<?= $data['division']; ?>" data-description="<?= $data['description']; ?>" data-type="<?= $data['type']; ?>" data-duration="<?= $data['duration']; ?>" data-cipoints="<?= $data['ci_points']; ?>" data-year="<?= $data['ay_id']; ?>" data-semester="<?= $data['semester']; ?>" data-supervisor="<?= $data['user_id']; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path>
                      <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path>
                    </svg>
                    Edit activity
                  </button>
                  <button type="button" data-delete-button data-id="<?= $data['activity_id']; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                    </svg>
                    Delete activity
                  </button>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<div class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between">
  <div class="flex items-center mb-4 sm:mb-0">
    <button onclick="location.href='ciactivities.php?page=<?= $page - 1; ?>'" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer disabled:opacity-50 disabled:cursor-default enabled:hover:text-gray-900 enabled:hover:bg-gray-100" <?= ((isset($_GET['page']) && $_GET['page'] == 1) ? 'disabled' : (!isset($_GET['page']))) ? 'disabled' : ''; ?>>
      <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
      </svg>
    </button>
    <button onclick="location.href='ciactivities.php?page=<?= $page + 1; ?>'" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer disabled:opacity-50 disabled:cursor-default enabled:hover:text-gray-900 enabled:hover:bg-gray-100" <?= ((isset($_GET['page']) && $_GET['page'] == $total_pages) ? 'disabled' : ($page == $total_pages)) ? 'disabled' : ''; ?>>
      <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
      </svg>
    </button>
    <span class="text-sm font-normal text-gray-500">Showing page <span class="font-semibold text-gray-900"><?= $page; ?></span> of <span class="font-semibold text-gray-900"><?= $total_pages; ?></span></span>
  </div>
  <div class="flex items-center space-x-3">
    <button onclick="location.href='ciactivities.php?page=<?= $page - 1; ?>'" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg disabled:opacity-50 enabled:hover:bg-gray-700 enabled:focus:ring-4 enabled:focus:ring-gray-200" <?= ((isset($_GET['page']) && $_GET['page'] == 1) ? 'disabled' : (!isset($_GET['page']))) ? 'disabled' : ''; ?>>
      <svg class="w-5 h-5 mr-1 -ml-1" "="" fill=" currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
      </svg>
      Previous
    </button>
    <button onclick="location.href='ciactivities.php?page=<?= $page + 1; ?>'" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg disabled:opacity-50 enabled:hover:bg-gray-700 enabled:focus:ring-4 enabled:focus:ring-gray-200" <?= ((isset($_GET['page']) && $_GET['page'] == $total_pages) ? 'disabled' : ($page == $total_pages)) ? 'disabled' : ''; ?>>
      Next
      <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
      </svg>
    </button>
  </div>
</div>