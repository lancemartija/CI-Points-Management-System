<div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64">
  <main>
    <div class="px-4 pt-6">
      <div class="grid w-full grid-cols-1 gap-4 xl:grid-cols-2 2xl:grid-cols-3">
        {{< card class="2xl:col-span-2">}}
        <div class="flex items-center justify-between mb-4">
          <div class="flex-shrink-0">
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">$45,385</span>
            <h3 class="text-base font-normal text-gray-500">Sales this week</h3>
          </div>
          <div class="flex items-center justify-end flex-1 text-base font-bold text-green-500">
            12.5%
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
        <div id="main-chart"></div>
        <!-- {{< /card>}}
    {{< card>}} -->
        <!-- Card Title -->
        <div class="flex items-center justify-between mb-4">
          <div>
            <h3 class="mb-2 text-xl font-bold text-gray-900">Latest Transactions</h3>
            <span class="text-base font-normal text-gray-500">This is a list of latest transactions</span>
          </div>
          <div class="flex-shrink-0">
            <a href="#" class="p-2 text-sm font-medium rounded-lg text-cyan-600 hover:bg-gray-100">View all</a>
          </div>
        </div>
        <!-- Table -->
        <div class="flex flex-col mt-8">
          <div class="overflow-x-auto rounded-lg">
            <div class="inline-block min-w-full align-middle">
              <div class="overflow-hidden shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Transaction
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Date & Time
                      </th>
                      <th scope="col" class="p-4 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Amount
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white">
                    <tr>
                      <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                        Payment from <span class="font-semibold">Bonnie Green</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                        Apr 23 ,2021
                      </td>
                      <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap">
                        $2300
                      </td>
                    </tr>
                    <tr class="bg-gray-50">
                      <td class="p-4 text-sm font-normal text-gray-900 rounded-lg whitespace-nowrap rounded-left">
                        Payment refund to <span class="font-semibold">#00910</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                        Apr 23 ,2021
                      </td>
                      <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap">
                        -$670
                      </td>
                    </tr>
                    <tr>
                      <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                        Payment failed from <span class="font-semibold">#087651</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                        Apr 18 ,2021
                      </td>
                      <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap">
                        $234
                      </td>
                    </tr>
                    <tr class="bg-gray-50">
                      <td class="p-4 text-sm font-normal text-gray-900 rounded-lg whitespace-nowrap rounded-left">
                        Payment from <span class="font-semibold">Lana Byrd</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                        Apr 15 ,2021
                      </td>
                      <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap">
                        $5000
                      </td>
                    </tr>
                    <tr>
                      <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                        Payment from <span class="font-semibold">Jese Leos</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                        Apr 15 ,2021
                      </td>
                      <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap">
                        $2300
                      </td>
                    </tr>
                    <tr class="bg-gray-50">
                      <td class="p-4 text-sm font-normal text-gray-900 rounded-lg whitespace-nowrap rounded-left">
                        Payment from <span class="font-semibold">THEMESBERG LLC</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                        Apr 11 ,2021
                      </td>
                      <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap">
                        $560
                      </td>
                    </tr>

                    <tr>
                      <td class="p-4 text-sm font-normal text-gray-900 whitespace-nowrap">
                        Payment from <span class="font-semibold">Lana Lysle</span>
                      </td>
                      <td class="p-4 text-sm font-normal text-gray-500 whitespace-nowrap">
                        Apr 6 ,2021
                      </td>
                      <td class="p-4 text-sm font-semibold text-gray-900 whitespace-nowrap">
                        $1437
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- {{< /card>}} -->
      </div>

      <div class="grid w-full grid-cols-1 gap-4 mt-4 md:grid-cols-2 xl:grid-cols-3">
        <!-- {{< card>}} -->
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">2,340</span>
            <h3 class="text-base font-normal text-gray-500">New products this week</h3>
          </div>
          <div class="flex items-center justify-end flex-1 w-0 ml-5 text-base font-bold text-green-500">
            14.6%
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
        <!-- {{< /card>}}

    {{< card>}} -->
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">5,355</span>
            <h3 class="text-base font-normal text-gray-500">Visitors this week</h3>
          </div>
          <div class="flex items-center justify-end flex-1 w-0 ml-5 text-base font-bold text-green-500">
            32.9%
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
        <!-- {{< /card>}}

    {{< card>}} -->
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <span class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl">385</span>
            <h3 class="text-base font-normal text-gray-500">User signups this week</h3>
          </div>
          <div class="flex items-center justify-end flex-1 w-0 ml-5 text-base font-bold text-red-500">
            -2.7%
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
        {{< /card>}}
      </div>
      <div class="grid grid-cols-1 my-4 2xl:grid-cols-2 xl:gap-4">
        <!-- Top Sales Card -->
        <div class="h-full p-4 mb-4 bg-white rounded-lg shadow sm:p-6">
          <div class="flex items-center justify-between mb-4">
            <h3 class="text-xl font-bold leading-none text-gray-900">Latest Customers</h3>
            <a href="#" class="inline-flex items-center p-2 text-sm font-medium rounded-lg text-cyan-600 hover:bg-gray-100">
              View all
            </a>
          </div>
          <div class="flow-root">
            <ul role="list" class="divide-y divide-gray-200">
              <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-8 h-8 rounded-full" src="/images/users/neil-sims.png" alt="Neil image">
                  </div>
                  <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate">
                      Neil Sims
                    </p>
                    <p class="text-sm text-gray-500 truncate">
                      email@windster.com
                    </p>
                  </div>
                  <div class="inline-flex items-center text-base font-semibold text-gray-900">
                    $320
                  </div>
                </div>
              </li>
              <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-8 h-8 rounded-full" src="/images/users/bonnie-green.png" alt="Neil image">
                  </div>
                  <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate">
                      Bonnie Green
                    </p>
                    <p class="text-sm text-gray-500 truncate">
                      email@windster.com
                    </p>
                  </div>
                  <div class="inline-flex items-center text-base font-semibold text-gray-900">
                    $3467
                  </div>
                </div>
              </li>
              <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-8 h-8 rounded-full" src="/images/users/michael-gough.png" alt="Neil image">
                  </div>
                  <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate">
                      Michael Gough
                    </p>
                    <p class="text-sm text-gray-500 truncate">
                      email@windster.com
                    </p>
                  </div>
                  <div class="inline-flex items-center text-base font-semibold text-gray-900">
                    $67
                  </div>
                </div>
              </li>
              <li class="py-3 sm:py-4">
                <div class="flex items-center space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-8 h-8 rounded-full" src="/images/users/thomas-lean.png" alt="Neil image">
                  </div>
                  <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate">
                      Thomes Lean
                    </p>
                    <p class="text-sm text-gray-500 truncate">
                      email@windster.com
                    </p>
                  </div>
                  <div class="inline-flex items-center text-base font-semibold text-gray-900">
                    $2367
                  </div>
                </div>
              </li>
              <li class="pt-3 pb-0 sm:pt-4">
                <div class="flex items-center space-x-4">
                  <div class="flex-shrink-0">
                    <img class="w-8 h-8 rounded-full" src="/images/users/lana-byrd.png" alt="Neil image">
                  </div>
                  <div class="flex-1 min-w-0">
                    <p class="text-sm font-medium text-gray-900 truncate">
                      Lana Byrd
                    </p>
                    <p class="text-sm text-gray-500 truncate">
                      email@windster.com
                    </p>
                  </div>
                  <div class="inline-flex items-center text-base font-semibold text-gray-900">
                    $367
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- Sessions by device Card -->
        <!-- {{< card>}} -->
        <!-- Card Title -->
        <h3 class="mb-10 text-xl font-bold leading-none text-gray-900">Acquisition Overview</h3>
        <div class="block w-full overflow-x-auto">
          <table class="items-center w-full bg-transparent border-collapse">
            <thead>
              <tr>
                <th class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap">Top Channels</th>
                <th class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap">Users</th>
                <th class="px-4 py-3 text-xs font-semibold text-left text-gray-700 uppercase align-middle border-l-0 border-r-0 bg-gray-50 whitespace-nowrap min-w-140-px"></th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
              <tr class="text-gray-500">
                <th class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">Organic Search</th>
                <td class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">5,649</td>
                <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                  <div class="flex items-center">
                    <span class="mr-2 text-xs font-medium">30%</span>
                    <div class="relative w-full">
                      <div class="w-full h-2 bg-gray-200 rounded-sm">
                        <div class="h-2 rounded-sm bg-cyan-600" style="width: 30%"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="text-gray-500">
                <th class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">Referral</th>
                <td class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">4,025</td>
                <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                  <div class="flex items-center">
                    <span class="mr-2 text-xs font-medium">24%</span>
                    <div class="relative w-full">
                      <div class="w-full h-2 bg-gray-200 rounded-sm">
                        <div class="h-2 bg-orange-300 rounded-sm" style="width: 24%"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="text-gray-500">
                <th class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">Direct</th>
                <td class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">3,105</td>
                <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                  <div class="flex items-center">
                    <span class="mr-2 text-xs font-medium">18%</span>
                    <div class="relative w-full">
                      <div class="w-full h-2 bg-gray-200 rounded-sm">
                        <div class="h-2 bg-teal-400 rounded-sm" style="width: 18%"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="text-gray-500">
                <th class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">Social</th>
                <td class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">1251</td>
                <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                  <div class="flex items-center">
                    <span class="mr-2 text-xs font-medium">12%</span>
                    <div class="relative w-full">
                      <div class="w-full h-2 bg-gray-200 rounded-sm">
                        <div class="h-2 bg-pink-600 rounded-sm" style="width: 12%"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="text-gray-500">
                <th class="p-4 px-4 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">Other</th>
                <td class="p-4 px-4 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">734</td>
                <td class="p-4 px-4 text-xs align-middle border-t-0 whitespace-nowrap">
                  <div class="flex items-center">
                    <span class="mr-2 text-xs font-medium">9%</span>
                    <div class="relative w-full">
                      <div class="w-full h-2 bg-gray-200 rounded-sm">
                        <div class="h-2 bg-indigo-600 rounded-sm" style="width: 9%"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              <tr class="text-gray-500">
                <th class="p-4 pb-0 text-sm font-normal text-left align-middle border-t-0 whitespace-nowrap">Email</th>
                <td class="p-4 pb-0 text-xs font-medium text-gray-900 align-middle border-t-0 whitespace-nowrap">456</td>
                <td class="p-4 pb-0 text-xs align-middle border-t-0 whitespace-nowrap">
                  <div class="flex items-center">
                    <span class="mr-2 text-xs font-medium">7%</span>
                    <div class="relative w-full">
                      <div class="w-full h-2 bg-gray-200 rounded-sm">
                        <div class="h-2 bg-purple-500 rounded-sm" style="width: 7%"></div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
        <!-- {{< /card>}} -->
      </div>
    </div>
  </main>
</div>