<div class="flex pt-16 overflow-hidden bg-white">

  <div class="fixed inset-0 z-10 hidden bg-gray-900 opacity-50" id="sidebarBackdrop"></div>

  <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64">
    <main>
      <!-- HEADER -->
      <div class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5">
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
                    <a href="#" class="ml-1 text-sm font-medium text-gray-700 hover:text-gray-900 md:ml-2">Users</a>
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
            <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl">All users</h1>
          </div>
          <div class="sm:flex">
            <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0">
              <form class="lg:pr-3" action="#" method="GET">
                <label for="users-search" class="sr-only">Search</label>
                <div class="relative mt-1 lg:w-64 xl:w-96">
                  <input type="text" name="search" id="users-search" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5" placeholder="Search for users">
                </div>
              </form>
              <div class="flex pl-0 mt-3 space-x-1 sm:pl-2 sm:mt-0">
                <a href="users.php" class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2 text-center;">
                  <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
                  <span>View all</span>
                </a>
              </div>
            </div>
            <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
              <a href="../view/addUser.php" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 sm:w-auto">
                <svg class="w-6 h-6 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                </svg>
                Add user
              </a>
              <a href="#" class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-gray-900 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 focus:ring-4 focus:ring-cyan-200 sm:w-auto">
                <svg class="w-6 h-6 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd"></path>
                </svg>
                Export
              </a>
            </div>
          </div>
        </div>
      </div>
      <!-- END OF HEADER -->

      <?php require_once('tabledata.php'); ?>
    </main>
  </div>
</div>