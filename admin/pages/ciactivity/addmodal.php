<?php
class DisplayUsers extends Dbh
{

  public function getUsers()
  {
    $sql = 'SELECT * FROM user;';
    $stmt = $this->connect()->query($sql);
    $result = 0;

    if (!$stmt) {
      $stmt = null;
      exit;
    }

    while ($row = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
      $result = $row;
    }

    $stmt = null;
    return $result;
  }
}

$user = new DisplayUsers();
$users = $user->getUsers();
?>

<div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto bg-gray-900/50 top-4 md:inset-0 h-modal sm:h-full" id="addmodal" aria-modal="true" role="dialog">
  <div class="relative w-full h-full max-w-2xl px-4 md:h-auto">
    <div class="relative bg-white rounded-lg shadow">
      <div class="flex items-start justify-between p-5 border-b rounded-t">
        <h3 class="text-xl font-semibold">
          Add new user
        </h3>
        <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-close-button>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <form action="../includes/ciactivities.inc.php" method="POST">
        <div class="p-6 space-y-6">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-3">
              <label for="title" class="label">Activity Title</label>
              <input type="text" name="title" class="text-gray-900 border border-gray-300 rounded-lg shadow-sm bg-gray-50 sm:text-sm block w-full p-2.5 focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" placeholder="Activity Title" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="type" class="label">Category</label>
              <select name="type" class="text-gray-900 border border-gray-300 rounded-lg shadow-sm bg-gray-50 sm:text-sm block w-full p-2.5 focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none">
                <option disabled selected value>Choose Category</option>
                <option value="Internal Engagement">Internal Engagement</option>
                <option value="External Engagement">External Engagement</option>
                <option value="CIO Sponsored Engagement">CIO Sponsored Engagement</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="date" class="label">Date</label>
              <input type="date" name="date" class="text-gray-900 border border-gray-300 rounded-lg shadow-sm bg-gray-50 sm:text-sm block w-full p-2.5 focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="venue" class="label">Venue</label>
              <input type="text" name="venue" class="text-gray-900 border border-gray-300 rounded-lg shadow-sm bg-gray-50 sm:text-sm block w-full p-2.5 focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" placeholder="Venue" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="department" class="label">Department</label>
              <input type="text" name="department" class="text-gray-900 border border-gray-300 rounded-lg shadow-sm bg-gray-50 sm:text-sm block w-full p-2.5 focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" placeholder="Department" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="division" class="label">Division</label>
              <select name="division" class="text-gray-900 border border-gray-300 rounded-lg shadow-sm bg-gray-50 sm:text-sm block w-full p-2.5 focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none">
                <option disabled selected value>Choose Division</option>
                <option value="Integrated School">Integrated School</option>
                <option value="College">College</option>
                <option value="ASF/ASP">ASF/ASP</option>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="supervisor" class="label">Supervisor</label>
              <select name="supervisor" class="text-gray-900 border border-gray-300 rounded-lg shadow-sm bg-gray-50 sm:text-sm block w-full p-2.5 focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none">
                <option disabled selected value>Choose Supervisor</option>
                <?php foreach ($users as $data) : ?>
                  <option value="<?= $data['user_id'] ?>"><?= $data['first_name'] ?></option>
                <?php endforeach; ?>
              </select>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="duration" class="label">Duration</label>
              <input type="number" name="duration" class="text-gray-900 border border-gray-300 rounded-lg shadow-sm bg-gray-50 sm:text-sm block w-full p-2.5 focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" placeholder="0" required>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label for="cipoints" class="label">CI Points Amount</label>
              <input type="number" name="cipoints" class="text-gray-900 border border-gray-300 rounded-lg shadow-sm bg-gray-50 sm:text-sm block w-full p-2.5 focus:ring-2 focus:ring-cyan-600/50 focus:border-cyan-600 focus:outline-none" placeholder="0" required>
            </div>
            <div class="col-span-6">
              <label for="description" class="label">Description</label>
              <textarea name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-cyan-500 focus:border-cyan-500" placeholder="Description"></textarea>
            </div>
          </div>
        </div>
        <div class="items-center p-6 border-t border-gray-200 rounded-b">
          <button type="submit" name="add" class="text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Add activity</button>
        </div>
      </form>
    </div>
  </div>
</div>