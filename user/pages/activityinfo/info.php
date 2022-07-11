<?php foreach ($records as $data) : ?>
  <div class="p-6 mb-4 bg-white rounded-lg shadow sm:p-6 xl:p-8">
    <div>
      <div class="flex items-center">
        <div class="border-4 border-gray-900 rounded-lg">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-20 h-20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
          </svg>
        </div>
        <div class="ml-4">
          <h3 class="mb-2 text-xl font-bold leading-none text-gray-900 "><?= $data['title']; ?></h3>
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg>
            <p class="text-base font-normal text-gray-500"><?= $data['type']; ?></p>
          </div>
          <div class="flex items-center mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
            </svg>
            <p class="text-base font-normal text-gray-500"><?= $data['date']; ?></p>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1 sm:grid-cols-3">
        <div>
          <div class="mt-4">
            <p class="text-base font-normal text-gray-500">CI Points Amount</p>
            <p class="text-base font-semibold leading-none text-gray-900"><?= $data['ci_points']; ?> points</p>
          </div>
          <div class="mt-4">
            <p class="text-base font-normal text-gray-500">Venue</p>
            <p class="text-base font-semibold leading-none text-gray-900"><?= $data['venue']; ?></p>
          </div>
          <div class="mt-4">
            <p class="text-base font-normal text-gray-500">Department</p>
            <p class="text-base font-semibold leading-none text-gray-900"><?= $data['department']; ?></p>
          </div>
          <div class="mt-4">
            <p class="text-base font-normal text-gray-500">Division</p>
            <p class="text-base font-semibold leading-none text-gray-900"><?= $data['division']; ?></p>
          </div>
        </div>
        <div>
          <div class="mt-4">
            <p class="text-base font-normal text-gray-500">Supervisor</p>
            <p class="text-base font-semibold leading-none text-gray-900"><?= $data['first_name'] . ' ' . $data['middle_name'] . ' ' . $data['last_name']; ?></p>
          </div>
          <div class="mt-4">
            <p class="text-base font-normal text-gray-500">Duration</p>
            <p class="text-base font-semibold leading-none text-gray-900"><?= $data['duration']; ?> hour(s)</p>
          </div>
          <div class="mt-4 ">
            <p class="text-base font-normal text-gray-500">Academic year</p>
            <p class="text-base font-semibold leading-none text-gray-900 capitalize"><?= $data['year']; ?></p>
          </div>
          <div class="mt-4">
            <p class="text-base font-normal text-gray-500">Semester</p>
            <p class="text-base font-semibold leading-none text-gray-900"><?= $data['semester']; ?></p>
          </div>
        </div>
        <div>
          <div class="mt-4">
            <p class="text-base font-normal text-gray-500">Activity ID</p>
            <p class="text-base font-semibold leading-none text-gray-900"><?= $data['activity_id']; ?></p>
          </div>
          <div class="mt-4 ">
            <p class="text-base font-normal text-gray-500">Account type</p>
            <p class="text-base font-semibold leading-none text-gray-900 capitalize"><?= $data['type']; ?></p>
          </div>
          <div class="mt-4">
            <p class="text-base font-normal text-gray-500">Date created</p>
            <p class="text-base font-semibold leading-none text-gray-900"><?= $data['date_created']; ?></p>
          </div>
          <div class="mt-4">
            <p class="text-base font-normal text-gray-500">Date udpated</p>
            <p class="text-base font-semibold leading-none text-gray-900"><?= $data['date_updated']; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<p class="mb-4 text-xl font-semibold leading-none text-gray-900 sm:text-2xl">Submit new request</p>
<div class="bg-white rounded-lg shadow">
  <form action="../includes/activityinfo.inc.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $_GET['id']; ?>" readonly>
    <div class="p-6 space-y-6">
      <div class="grid grid-cols-1 gap-0 sm:gap-4 sm:grid-cols-4">
        <div class="col-span-1 mb-4 sm:mb-0">
          <label for="hours" class="block mb-2 text-sm font-medium text-gray-900">Rendered Hours</label>
          <input type="text" name="hours" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:outline-none sm:text-sm focus:ring-gray-200 focus:ring-4" placeholder="0" required>
        </div>
        <div class="col-span-3">
          <label for="file" class="block mb-2 text-sm font-medium text-gray-900">Upload file</label>
          <input type="file" name="file" class="block w-full text-sm text-gray-500 border border-gray-300 rounded-lg bg-gray-50 file:mr-4 file:py-2 file:px-4 file:rounded-r-none file:rounded-lg file:border-0 file:bg-gray-300 file:text-gray-900 hover:file:bg-gray-400 file:cursor-pointer" required>
        </div>
      </div>
      <div class="flex sm:justify-end">
        <button type="submit" name="submit" class="inline-flex items-center justify-center w-full px-4 py-3 text-sm font-medium text-center text-white bg-green-600 rounded-lg hover:bg-green-700 focus:ring-4 focus:ring-green-200 sm:w-auto">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
            <path d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z" />
            <path d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z" />
          </svg>
          Submit request
        </button>
      </div>
    </div>
  </form>
</div>