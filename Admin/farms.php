<?php include '../controllers/farm.php'; ?>
<?php include 'includes/session.php' ?>
<?php include 'includes/header.php';?>

<div class="p-6">
  <h2 class="text-2xl font-semibold mb-4">Farms</h2>
  <button data-modal-target="farmModal" data-modal-toggle="farmModal" class="bg-green-600 px-4 py-2 text-white mb-4 rounded">Add New Farm</button>
  
  <!-- Farm List -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <?php for($i= 0; $i < 5; $i++):?>
    <!-- Example Farm Card -->
    <div class="bg-white rounded-lg shadow p-4">
      <h3 class="text-lg font-semibold mb-2">Sunshine Farm</h3>
      <p class="text-sm text-gray-600 mb-2">Location: Gulu, kabedpong</p>
      <p class="text-sm text-gray-600 mb-2">Total Area: 50 acres</p>
      <a href="farm.php?farm=<?php echo $i ?>" class="bg-blue-500 text-white rounded px-2 py-1">View Details</a>
    </div>
    <?php endfor;?>
  </div>
  
  <!-- Add New Farm -->
    <div class="mt-6">
        <h3 class="text-lg font-semibold mb-2">Add New Farm</h3>
        <form class="bg-white rounded-lg shadow p-4">
            <label class="block mb-2">
                <span class="text-sm">Farm Name:</span>
                <input type="text" class="border rounded w-full py-1 px-2 mt-1">
            </label>
            <label class="block mb-2">
                <span class="text-sm">Location:</span>
                <input type="text" class="border rounded w-full py-1 px-2 mt-1">
            </label>
            <label class="block mb-2">
                <span class="text-sm">Total Area:</span>
                <input type="text" class="border rounded w-full py-1 px-2 mt-1">
            </label>
            <button class="bg-green-500 text-white rounded px-2 py-1">Add Farm</button>
        </form>
    </div>
</div>
<?php include 'includes/modals.php' ?>

<?php include 'includes/footer.php';?>