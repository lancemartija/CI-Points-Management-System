<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="viewmodal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-4xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          View activity
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="p-6 space-y-6">
        <div class="grid grid-cols-9 gap-6">
          <div class="col-span-9 sm:col-span-3">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Activity Title</label>
            <input id="title" type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
            <input id="type" type="text" name="type" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="date" class="block mb-2 text-sm font-medium text-gray-900">Date</label>
            <input id="date" type="text" name="date" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="venue" class="block mb-2 text-sm font-medium text-gray-900">Venue</label>
            <input id="venue" type="text" name="venue" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="department" class="block mb-2 text-sm font-medium text-gray-900">Department</label>
            <input id="department" type="text" name="department" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="division" class="block mb-2 text-sm font-medium text-gray-900">Division</label>
            <input id="division" type="text" name="division" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="supervisor" class="block mb-2 text-sm font-medium text-gray-900">Supervisor</label>
            <input id="supervisor" type="text" name="supervisor" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="duration" class="block mb-2 text-sm font-medium text-gray-900">Duration</label>
            <input id="duration" type="text" name="duration" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="cipoints" class="block mb-2 text-sm font-medium text-gray-900">CI Points Amount</label>
            <input id="cipoints" type="text" name="cipoints" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="year" class="block mb-2 text-sm font-medium text-gray-900">Academic Year</label>
            <input id="year" type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-6 sm:col-span-3">
            <label for="semester" class="block mb-2 text-sm font-medium text-gray-900">Semester</label>
            <input id="semester" type="text" name="semester" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly>
          </div>
          <div class="col-span-9">
            <label for="description" class="block mb-2 text-sm font-medium text-gray-900">Description</label>
            <textarea id="description" name="description" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 focus:outline-none sm:text-sm rounded-lg focus:ring-gray-200 focus:ring-4 block w-full p-2.5" readonly></textarea>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>