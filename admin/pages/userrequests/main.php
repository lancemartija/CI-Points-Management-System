<div class="flex pt-16 overflow-hidden bg-white">

  <div class="fixed inset-0 z-10 hidden bg-gray-900 opacity-50" id="sidebarBackdrop"></div>

  <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64">
    <main>
      <!-- HEADER -->
      <div class="items-center justify-between block p-4 bg-white border-b border-gray-200 sm:flex">
        <div class="w-full mb-1">
          <div class="mb-4">
            <nav class="flex mb-5" aria-label="Breadcrumb">
              <ol class="inline-flex items-center space-x-1 md:space-x-2">
                <li class="inline-flex items-center">
                  <a href="../view/dashboard.php" class="inline-flex items-center text-gray-700 hover:text-gray-900">
                    <svg class="w-5 h-5 mr-2.5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                    </svg>
                    Home
                  </a>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="ciprequests.php" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">CIP Requests</a>
                  </div>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">User Requests</a>
                  </div>
                </li>
                <li>
                  <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium text-gray-400 md:ml-2" aria-current="page">List</span>
                  </div>
                </li>
              </ol>
            </nav>
            <div class="flex items-center">
              <h1 class="mr-2 text-xl font-semibold text-gray-900 sm:text-2xl"><?= $records[0]['first_name']; ?>'s requests</h1>
              <?php if (isset($_GET['status']) && $_GET['status'] == 'pending') { ?>
                <span class="inline-flex px-3 py-2 text-sm font-medium text-center text-gray-900 capitalize bg-yellow-500 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                  </svg>
                  <?= $_GET['status']; ?>
                </span>
              <?php } else if (isset($_GET['status']) && $_GET['status'] == 'approved') { ?>
                <span class="inline-flex px-3 py-2 text-sm font-medium text-center text-white capitalize bg-green-600 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                  <?= $_GET['status']; ?>
                </span>
              <?php } else if (isset($_GET['status']) && $_GET['status'] == 'rejected') { ?>
                <span class="inline-flex px-3 py-2 text-sm font-medium text-center text-white capitalize bg-red-600 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z" clip-rule="evenodd" />
                  </svg>
                  <?= $_GET['status']; ?>
                </span>
              <?php } else if (!isset($_GET['status'])) { ?>
                <span class="inline-flex px-3 py-2 text-sm font-medium text-center text-gray-900 capitalize bg-gray-200 rounded-full">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd" />
                  </svg>
                  All requests
                </span>
              <?php } ?>
            </div>
          </div>
          <div class="sm:flex">
            <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0">
              <form class="flex lg:pr-2" action="#" method="get">
                <input type="hidden" name="id" value="<?= $_GET['id']; ?>" readonly>
                <?php if (isset($_GET['status'])) { ?>
                  <input type="hidden" name="status" value="<?= $_GET['status']; ?>" readonly>
                <?php } ?>
                <label for=" users-search" class="sr-only">Search</label>
                <div class="relative mr-2 lg:w-64 xl:w-96">
                  <input type="text" name="search" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" placeholder="Search for all requests" required>
                </div>
                <button type="submit" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 sm:w-auto">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                  </svg>
                </button>
              </form>
              <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
                <a href="userrequests.php?id=<?= $_GET['id']; ?><?= (isset($_GET['status'])) ? '&status=' . $_GET['status'] : '' ?>" class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2 text-center;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                  <span>View all</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END OF HEADER -->

      <?php
      if (!empty($records)) {
        if (isset($_GET['search']) && !empty(trim($_GET['search']))) {
          $query = $_GET['search'];
          $records = $request->getRequestSearchData($_GET['id'], $_GET['status'] = '', $query, $start_from, $results_per_page);

          if (empty($records)) {
            echo '<div class="flex flex-col items-center justify-center pt-12"><svg class="w-72 h-72" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 647.63626 632.17383" xmlns:xlink="http://www.w3.org/1999/xlink">
            <path d="M687.3279,276.08691H512.81813a15.01828,15.01828,0,0,0-15,15v387.85l-2,.61005-42.81006,13.11a8.00676,8.00676,0,0,1-9.98974-5.31L315.678,271.39691a8.00313,8.00313,0,0,1,5.31006-9.99l65.97022-20.2,191.25-58.54,65.96972-20.2a7.98927,7.98927,0,0,1,9.99024,5.3l32.5498,106.32Z" transform="translate(-276.18187 -133.91309)" fill="#f2f2f2" />
            <path d="M725.408,274.08691l-39.23-128.14a16.99368,16.99368,0,0,0-21.23-11.28l-92.75,28.39L380.95827,221.60693l-92.75,28.4a17.0152,17.0152,0,0,0-11.28028,21.23l134.08008,437.93a17.02661,17.02661,0,0,0,16.26026,12.03,16.78926,16.78926,0,0,0,4.96972-.75l63.58008-19.46,2-.62v-2.09l-2,.61-64.16992,19.65a15.01489,15.01489,0,0,1-18.73-9.95l-134.06983-437.94a14.97935,14.97935,0,0,1,9.94971-18.73l92.75-28.4,191.24024-58.54,92.75-28.4a15.15551,15.15551,0,0,1,4.40966-.66,15.01461,15.01461,0,0,1,14.32032,10.61l39.0498,127.56.62012,2h2.08008Z" transform="translate(-276.18187 -133.91309)" fill="#3f3d56" />
            <path d="M398.86279,261.73389a9.0157,9.0157,0,0,1-8.61133-6.3667l-12.88037-42.07178a8.99884,8.99884,0,0,1,5.9712-11.24023l175.939-53.86377a9.00867,9.00867,0,0,1,11.24072,5.9707l12.88037,42.07227a9.01029,9.01029,0,0,1-5.9707,11.24072L401.49219,261.33887A8.976,8.976,0,0,1,398.86279,261.73389Z" transform="translate(-276.18187 -133.91309)" fill="#c3c3c3" />
            <circle cx="190.15351" cy="24.95465" r="20" fill="#c3c3c3" />
            <circle cx="190.15351" cy="24.95465" r="12.66462" fill="#fff" />
            <path d="M878.81836,716.08691h-338a8.50981,8.50981,0,0,1-8.5-8.5v-405a8.50951,8.50951,0,0,1,8.5-8.5h338a8.50982,8.50982,0,0,1,8.5,8.5v405A8.51013,8.51013,0,0,1,878.81836,716.08691Z" transform="translate(-276.18187 -133.91309)" fill="#e6e6e6" />
            <path d="M723.31813,274.08691h-210.5a17.02411,17.02411,0,0,0-17,17v407.8l2-.61v-407.19a15.01828,15.01828,0,0,1,15-15H723.93825Zm183.5,0h-394a17.02411,17.02411,0,0,0-17,17v458a17.0241,17.0241,0,0,0,17,17h394a17.0241,17.0241,0,0,0,17-17v-458A17.02411,17.02411,0,0,0,906.81813,274.08691Zm15,475a15.01828,15.01828,0,0,1-15,15h-394a15.01828,15.01828,0,0,1-15-15v-458a15.01828,15.01828,0,0,1,15-15h394a15.01828,15.01828,0,0,1,15,15Z" transform="translate(-276.18187 -133.91309)" fill="#3f3d56" />
            <path d="M801.81836,318.08691h-184a9.01015,9.01015,0,0,1-9-9v-44a9.01016,9.01016,0,0,1,9-9h184a9.01016,9.01016,0,0,1,9,9v44A9.01015,9.01015,0,0,1,801.81836,318.08691Z" transform="translate(-276.18187 -133.91309)" fill="#c3c3c3" />
            <circle cx="433.63626" cy="105.17383" r="20" fill="#c3c3c3" />
            <circle cx="433.63626" cy="105.17383" r="12.18187" fill="#fff" />
            </svg>
            <h1 class="pt-4 pb-2 text-2xl font-normal text-gray-900">No results found!</h1>
            <p class="text-sm font-light text-gray-600">Try adjusting your search to find what you\'re looking for</p>
            </div>';
            exit;
          }
        }

        include_once '../pages/userrequests/tabledata.php';
        include_once '../pages/userrequests/approvemodal.php';
        include_once '../pages/userrequests/rejectmodal.php';
      }
      ?>
    </main>
  </div>
</div>