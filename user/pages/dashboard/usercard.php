<?php foreach ($userInfo as $data) : ?>
  <div class="p-6 bg-white rounded-lg shadow sm:p-6 xl:p-8 ">
    <div>
      <div class="flex items-center">
        <div class="border-4 border-gray-900 rounded-lg">
          <svg xmlns=" http://www.w3.org/2000/svg" class="w-20 h-20 text-gray-900" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
        </div>
        <div class="ml-4">
          <h3 class="mb-2 text-xl font-bold leading-none text-gray-900 "><?= $data['first_name'] . ' ' . $data['middle_name'] . ' ' . $data['last_name']; ?></h3>
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd" />
            </svg>
            <p class="text-base font-normal text-gray-500"><?= $data['department'] . ' ' . $data['division']; ?></p>
          </div>
          <div class="flex items-center mr-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mt-1 mr-2 text-gray-800" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            <p class="text-base font-normal text-gray-500"><?= $data['address']; ?></p>
          </div>
        </div>
      </div>
      <div class="mt-4">
        <p class="text-base font-normal text-gray-500">Email address</p>
        <p class="text-base font-semibold leading-none text-gray-900"><?= $data['email']; ?></p>
      </div>
      <div class="mt-4">
        <p class="text-base font-normal text-gray-500">Home address</p>
        <p class="text-base font-semibold leading-none text-gray-900"><?= $data['address']; ?></p>
      </div>
      <div class="mt-4">
        <p class="text-base font-normal text-gray-500">Contact Number</p>
        <p class="text-base font-semibold leading-none text-gray-900"><?= $data['contact_number']; ?></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>