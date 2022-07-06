<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="viewmodal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          View user
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="p-6 space-y-6">
        <div class="grid grid-cols-6 gap-6">
          <div class="col-span-6 sm:col-span-3">
            <label for="firstname" class="label">First Name</label>
            <input id="fname" type="text" name="firstname" value="<?= $data['first_name']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="firstname" class="label">Middle Name</label>
            <input id="mname" type="text" name="middlename" value="<?= $data['middle_name']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="lastname" class="label">Last Name</label>
            <input id="lname" type="text" name="lastname" value="<?= $data['last_name']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="address" class="label">Address</label>
            <input id="address" type="text" name="address" value="<?= $data['address']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="contact" class="label">Contact Number</label>
            <input id="contact" type="text" name="contact" value="<?= $data['contact_number']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="department" class="label">Department</label>
            <input id="department" type="text" name="department" value="<?= $data['department']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="division" class="label">Division</label>
            <input id="division" type="text" name="division" value="<?= $data['division']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="status" class="label">Status</label>
            <input id="status" type="text" name="status" value="<?= $data['status']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="email" class="label">Email</label>
            <input id="email" type="email" name="email" value="<?= $data['email']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="type" class="label">Account Type</label>
            <input id="type" type="text" name="type" value="<?= $data['type']; ?>" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>