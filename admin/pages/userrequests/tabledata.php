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
                Date Requested
              </th>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                Rendered Hours
              </th>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                CI Points
              </th>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                Status
              </th>
              <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                Options
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
                    <div class="text-sm font-normal text-gray-500"><?= $data['type']; ?></div>
                  </div>
                </td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap"><?= $data['date_requested']; ?></td>
                <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap"><?= $data['rendered_hours']; ?> hour(s)</td>
                <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap"><?= $data['ci_points']; ?></td>
                <td class="p-4 text-base font-normal text-gray-900 whitespace-nowrap">
                  <?php if ($data['request_status'] == 'pending') { ?>
                    <span class="inline-flex px-3 py-2 text-sm font-medium text-center text-gray-900 capitalize bg-yellow-500 rounded-full">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                      </svg>
                      <?= $data['request_status']; ?>
                    </span>
                  <?php } else if ($data['request_status'] == 'approved') { ?>
                    <span class="inline-flex px-3 py-2 text-sm font-medium text-center text-white capitalize bg-green-600 rounded-full">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                      </svg>
                      <?= $data['request_status']; ?>
                    </span>
                  <?php } else if ($data['request_status'] == 'rejected') { ?>
                    <span class="inline-flex px-3 py-2 text-sm font-medium text-center text-white capitalize bg-red-600 rounded-full">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                      </svg>
                      <?= $data['request_status']; ?>
                    </span>
                  <?php } ?>
                </td>
                <td class="p-4 space-x-2 whitespace-nowrap">
                  <a title="<?= $data['supporting_docs_name']; ?>" target="_blank" href="../view/cipview.php?id=<?= $data['request_id']; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg hover:bg-gray-700 focus:ring-4 focus:ring-gray-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd" />
                    </svg>
                    View Documents
                  </a>
                </td>
                <td class="p-4 space-x-2 whitespace-nowrap">
                  <?php if ($data['request_status'] == 'pending') { ?>
                    <button type="button" data-approve-button data-id="<?= $data['request_id']; ?>" data-userid="<?= $data['user_id']; ?>" data-cipoints="<?= $data['ci_points']; ?>" data-year="<?= $data['ay_id']; ?>" data-semester="<?= $data['semester']; ?>" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-200 sm:w-auto">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                      </svg>
                      Approve
                    </button>
                    <button type="button" data-reject-button data-id="<?= $data['request_id']; ?>" data-userid="<?= $data['user_id']; ?>" data-cipoints="<?= $data['ci_points']; ?>" data-year="<?= $data['ay_id']; ?>" data-semester="<?= $data['semester']; ?>" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                      Reject
                    </button>
                  <?php } ?>
                </td>
              </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- <div class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between">
  <div class="flex items-center mb-4 sm:mb-0">
    <a href="#" class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
      <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
      </svg>
    </a>
    <a href="#" class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
      <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
      </svg>
    </a>
    <span class="text-sm font-normal text-gray-500">Showing <span class="font-semibold text-gray-900">1-20</span> of <span class="font-semibold text-gray-900">2290</span></span>
  </div>
  <div class="flex items-center space-x-3">
    <a href="#" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200">
      <svg class="w-5 h-5 mr-1 -ml-1" "="" fill=" currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
      </svg>
      Previous
    </a>
    <a href="#" class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200">
      Next
      <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
      </svg>
    </a>
  </div>
</div> -->