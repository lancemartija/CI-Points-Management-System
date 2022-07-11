<?php foreach ($userInfo as $data) : ?>
  <div class="p-6 bg-white rounded-lg shadow sm:p-6 xl:p-8">
    <h3 class="text-xl font-bold text-gray-900">Other information</h3>
    <div class="grid grid-cols-2 gap-4">
      <div class="mt-4">
        <p class="text-base font-normal text-gray-500">User ID</p>
        <p class="text-base font-semibold leading-none text-gray-900"><?= $data['user_id']; ?></p>
      </div>
      <div class="mt-4 ">
        <p class="text-base font-normal text-gray-500">Account type</p>
        <p class="text-base font-semibold leading-none text-gray-900 capitalize"><?= $data['type']; ?></p>
      </div>
      <div class="mt-4 ">
        <p class="text-base font-normal text-gray-500">Account Updated</p>
        <p class="text-base font-semibold leading-none text-gray-900 capitalize"><?= $data['date_updated']; ?></p>
      </div>
      <div class="mt-4">
        <p class="text-base font-normal text-gray-500">Join Date</p>
        <p class="text-base font-semibold leading-none text-gray-900"><?= $data['date_created']; ?></p>
      </div>
    </div>
  </div>
<?php endforeach; ?>