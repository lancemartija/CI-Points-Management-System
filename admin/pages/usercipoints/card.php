<div class="flex flex-wrap pt-4 pb-4 m-3">
  <?php foreach ($cip as $data) : ?>
    <div class="overflow-x-auto">
      <div class="inline-block min-w-full align-middle">
        <div class="overflow-hidden shadow">
          <div class="max-w-sm p-6 mr-3 rounded-lg shadow-sm bg-amber-400">
            <div class="flex items-center space-x-2">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
              </svg>
              <h5 class="text-2xl font-bold tracking-tight text-gray-900"><?= $data['total_cip']; ?> CI Points</h5>
            </div>
            <div class="flex space-x-2">
              <p class="font-normal text-gray-700"><?= $data['semester']; ?></p>
              <p class="font-normal text-gray-700"><?= $data['year']; ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>