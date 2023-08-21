<?php include '../controllers/users.php'; ?>
<?php include 'includes/session.php' ?>
<?php include 'includes/header.php' ?>

            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-4">Employees</h2>
                <div class="w-96 flex gap-4">

                    <button data-modal-target="newemployeeModal" data-modal-toggle="newemployeeModal" class="block text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center mb-4" type="button">
                        New Employee
                    </button>
                    <button data-modal-target="newJobModal" data-modal-toggle="newJobModal" class="block text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg px-5 py-2.5 text-center mb-4" type="button">
                        Post New Job
                    </button>
                </div>
                
                <!-- Employee List Table -->
                <div class="overflow-x-auto bg-white p-4 rounded-lg">
                    <table class="min-w-full gap-4">
                        <thead class="bg-green-500 text-white">
                            <tr>
                                <th class="text-left">Full Name</th>
                                <th class="text-left">Email</th>
                                <th class="text-left">Position</th>
                                <th class="text-left">Farm </th>
                                <th class="text-left">Field</th>
                                <th class="text-left">Phone</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody >
                            <!-- Example Employee Row -->
                            <tr>
                                <td>John Doe</td>
                                <td>farmer@test.com</td>
                                <td>Farm Supervisor</td>
                                <td>Masindi Farm</td>
                                <td>Field 3</td>
                                <td>(123) 456-7890</td>
                                <td class="text-center py-2">
                                    <button class="bg-blue-500 text-white rounded px-2 py-1">View</button>
                                    <button class="bg-red-500 text-white rounded px-2 py-1 ml-2">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>John Doe</td>
                                <td>farmer@test.com</td>
                                <td>Farm Supervisor</td>
                                <td>Masindi Farm</td>
                                <td>Field 3</td>
                                <td>(123) 456-7890</td>
                                <td class="text-center">
                                    <button class="bg-blue-500 text-white rounded px-2 py-1">View</button>
                                    <button class="bg-red-500 text-white rounded px-2 py-1 ml-2">Delete</button>
                                </td>
                            </tr>
                            <!-- More Employee Rows... -->
                        </tbody>
                    </table>
                </div>
                
                <!-- Add New Employee Form -->
            
                <div id="newemployeeModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow rounded-lg">
                            <div class="p-6 bg-green-500 rounded-t-lg">
                                <h3 class="text-lg font-semibold mb-2 text-white">Add New Employee</h3>
                                <button type="button" class="absolute top-5 right-2.5 text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="newemployeeModal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <div class="px-6 py-6 lg:px-8">
                                <form class="">
                                    <label class="block mb-2">
                                        <span class="text-sm">First Name:</span>
                                        <input type="text" name="fname" class="border rounded w-full py-1 px-2 mt-1">
                                    </label>
                                    <label class="block mb-2">
                                        <span class="text-sm">Last Name:</span>
                                        <input type="text" name="lname" class="border rounded w-full py-1 px-2 mt-1">
                                    </label>
                                    <label class="block mb-2">
                                        <span class="text-sm">Email:</span>
                                        <input type="text" name="email" class="border rounded w-full py-1 px-2 mt-1">
                                    </label>
                                    <label class="block mb-2">
                                        <span class="text-sm">Position:</span>
                                        <input type="text" name="position" class="border rounded w-full py-1 px-2 mt-1">
                                    </label>
                                    <label class="block mb-2">
                                        <span class="text-sm">Farm:</span>
                                        <select type="text" name="farm" class="border rounded w-full py-1 px-2 mt-1">
                                            <option value="1">Masindi Farm</option>
                                        </select>
                                    </label>
                                    <label class="block mb-2">
                                        <span class="text-sm">Field:</span>
                                        <select type="text" name="field" class="border rounded w-full py-1 px-2 mt-1">
                                            <option value="1"> Field two</option>
                                        </select>
                                    </label>
                                    <label class="block mb-2">
                                        <span class="text-sm" >Phone:</span>
                                        <input type="tel" name="phone" class="border rounded w-full py-1 px-2 mt-1">
                                    </label>
                                    <button name="addEmplyee" class="bg-green-500 text-white rounded px-4 py-2 mt-6 w-full">Add Employee</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> 


                <!-- Add New job Form -->
            
                <div id="newJobModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow rounded-lg">
                            <div class="p-6 bg-green-500 rounded-t-lg">
                                <h3 class="text-lg font-semibold mb-2 text-white">Add New Job Posting</h3>
                                <button type="button" class="absolute top-5 right-2.5 text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="newJobModal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <div class="px-6 py-6 lg:px-8">
                                <form class="">
                                    <label class="block mb-2">
                                        <span class="text-sm">Email:</span>
                                        <input type="text" name="email" class="border rounded w-full py-1 px-2 mt-1">
                                    </label>
                                    <label class="block mb-2">
                                        <span class="text-sm">Position:</span>
                                        <input type="text" name="position" class="border rounded w-full py-1 px-2 mt-1">
                                    </label>
                                    <label class="block mb-2">
                                        <span class="text-sm">Farm:</span>
                                        <select type="text" name="farm" class="border rounded w-full py-1 px-2 mt-1">
                                            <option value="1">Masindi Farm</option>
                                        </select>
                                    </label>
                                    <label class="block mb-2">
                                        <span class="text-sm">Field:</span>
                                        <select type="text" name="field" class="border rounded w-full py-1 px-2 mt-1">
                                            <option value="1"> Field two</option>
                                        </select>
                                    </label>
                                    <button name="addEmplyee" class="bg-green-500 text-white rounded px-4 py-2 mt-6 w-full">Add Job Posting</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>     
        </div>
<?php include 'includes/footer.php' ?>
   