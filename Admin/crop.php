<?php include '../controllers/farm.php' ?>
<?php include 'includes/session.php' ?>
<?php include 'includes/header.php' ?>


            <div class="p-6">
                <h2 class="text-2xl font-semibold mb-4">Crop Management</h2>
                <button class="bg-green-600 text-white text-lg px-4 py-1 rounded mb-2">New Crop</button>
                
                <!-- Crop List -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                  <!-- Example Crop Card -->
                  <div class="bg-white rounded-lg shadow p-4">
                    <h3 class="text-lg font-semibold mb-2">Tomatoes</h3>
                    <p class="text-sm text-gray-600 mb-2">Planting Date: May 15, 2023</p>
                    <p class="text-sm text-gray-600 mb-2">Expected Harvest: July 30, 2023</p>
                    <p class="text-sm text-gray-600 mb-2">Growth Stage: Flowering</p>
                    <button class="bg-blue-500 text-white rounded px-2 py-1">Update Stage</button>
                  </div>
                  <!-- More Crop Cards... -->
                </div>
                
                <!-- Add New Crop -->
                <div class="mt-6">
                  <h3 class="text-lg font-semibold mb-2">Add New Crop</h3>
                  <form class="bg-white rounded-lg shadow p-4">
                    <label class="block mb-2">
                      <span class="text-sm">Crop Name:</span>
                      <input type="text" class="border rounded w-full py-1 px-2 mt-1">
                    </label>
                    <label class="block mb-2">
                      <span class="text-sm">Planting Date:</span>
                      <input type="date" class="border rounded w-full py-1 px-2 mt-1">
                    </label>
                    <label class="block mb-2">
                      <span class="text-sm">Expected Harvest:</span>
                      <input type="date" class="border rounded w-full py-1 px-2 mt-1">
                    </label>
                    <button class="bg-green-500 text-white rounded px-2 py-1">Add Crop</button>
                  </form>
                </div>
              </div>
              
        </div>
    </div>
    <?php include 'includes/footer.php' ?>