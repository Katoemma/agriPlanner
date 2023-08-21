<?php include '../controllers/farm.php'; ?>
<?php include 'includes/session.php' ?>
<?php include 'includes/header.php';?>
<div class="p-6">
  <h2 class="text-2xl font-semibold mb-4">Farm Details - Sunshine Farm</h2>
  
  <!-- Farm Information -->
  <div class="bg-white rounded-lg shadow p-4">
    <h3 class="text-lg font-semibold mb-2">Farm Name: Sunshine Farm</h3>
    <p class="text-sm text-gray-600 mb-2">Location: Country, State</p>
    <p class="text-sm text-gray-600 mb-2">Total Area: 50 acres</p>
    <p class="text-sm text-gray-600 mb-2">Crop Types: Wheat, Corn, Soybeans</p>
    <p class="text-sm text-gray-600 mb-2">Number of Fields: 10</p>
  </div>
  
  <!-- Fields List -->
  <div class="mt-6">
    <h3 class="text-lg font-semibold mb-2">Fields</h3>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <!-- Example Field Card -->
      <?php for($i= 1; $i <= 6; $i++):?>
      <div class="bg-white rounded-lg shadow p-4">
        <h4 class="text-md font-semibold mb-2">Field <?php echo $i ?></h4>
        <p class="text-sm text-gray-600 mb-2">Crop: Wheat</p>
        <p class="text-sm text-gray-600 mb-2">Size: 5 acres</p>
        <p class="text-sm text-gray-600 mb-2">Irrigation: Yes</p>
      </div>
      <?php endfor;?>
      <!-- More Field Cards... -->
    </div>
  </div>
</div>

<?php include 'includes/footer.php';?>