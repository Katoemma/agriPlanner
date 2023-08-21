    <!-- Add New Employee Form -->

<div id="farmModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow rounded-lg">
            <div class="p-6 bg-green-500 rounded-t-lg">
                <h3 class="text-lg font-semibold mb-2 text-white">New Farm</h3>
                <button type="button" class="absolute top-5 right-2.5 text-white bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center" data-modal-hide="farmModal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="px-6 py-6 lg:px-8">
                <form action="farms.php" method="post">
                    <label class="block mb-2">
                        <span class="text-sm">Farm Name:</span>
                        <input type="text" name="name" class="border rounded w-full py-1 px-2 mt-1">
                    </label>
                    <input type="hidden" name="admin" value="<?php echo $user['id'];?>" class="border rounded w-full py-1 px-2 mt-1">
                    <label class="block mb-2">
                        <span class="text-sm">Location:</span>
                        <input type="text" name="location" class="border rounded w-full py-1 px-2 mt-1">
                    </label>
                    <label class="block mb-2">
                        <span class="text-sm">Total Area:</span>
                        <input type="text" name="position" class="border rounded w-full py-1 px-2 mt-1">
                    </label>
            
                    <button name="addFarm" class="bg-green-500 text-white rounded px-4 py-2 mt-6 w-full">Add Employee</button>
                </form>
            </div>
        </div>
    </div>
</div> 