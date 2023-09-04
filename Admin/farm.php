<?php include '../controllers/farm.php'; ?>
<?php include 'includes/session.php' ?>
<?php 
  if(!isset($_GET['farm'])){
    header('location:../login.php');
    exit();
  }

  $farmToken = $_GET['farm'];
  $farm = selectOne('farm',['token'=> $farmToken]);
  if($farm['admin'] != $user['id']){
    header('location:farms.php');
  }
  $fields = selectAll('fields',['farm'=> $farm['id']]);

?>
<?php include 'includes/header.php';?>

<div class="p-6">
  <button id="backButton" class="text-white mb-2 bg-red-600 px-4 py-1"> <i class="fa fa-long-arrow-left"></i> Back</button>
  <h2 class="text-2xl font-semibold mb-4">Farm Details - <?php echo $farm['name'] ?></h2>
  
  <!-- Farm Information -->
  <div class="bg-white rounded-lg shadow p-4">
    <h3 class="text-lg font-semibold mb-2">Farm Name: <?php echo $farm['name'] ;?></h3>
    <p class="text-sm text-gray-600 mb-2">Location: <?php echo $farm['location']; ?></p>
    <p class="text-sm text-gray-600 mb-2">Total Area: <?php echo $farm['acres']; ?></p>
    <p class="text-sm text-gray-600 mb-2">Crop Types: Wheat, Corn, Soybeans</p>
    <p class="text-sm text-gray-600 mb-2">Number of Employees: 10 </p>
    <p class="text-sm text-gray-600 mb-2">Number of Fields: <?php echo count($fields);?></p>
  </div>
  
  <!-- Fields List -->
  <div class="mt-6">
    <h3 class="text-lg font-semibold mb-2">Fields</h3>
    <!-- button to add field -->
    <button onclick="openFieldModal()" class="bg-green-600 text-white px-4 py-1 mb-4 rounded">Add Field</button>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
      <!-- Example Field Card -->
      <?php foreach($fields as $field):?>
      <div class="bg-white rounded-lg shadow p-4">
        <h4 class="text-md font-semibold mb-2"><?php echo $field['name'] ?></h4>
        <p class="text-sm text-gray-600 mb-2">Crop: Wheat</p>
        <p class="text-sm text-gray-600 mb-2">Size: <?php echo $field['area'] ?></p>
        <p class="text-sm text-gray-600 mb-2">Irrigation: Yes</p>
      </div>
      <?php endforeach;?>
    </div>
  </div>
</div>
<?php include 'includes/modals.php';?>
<script>
  var backButton = document.getElementById("backButton");

backButton.addEventListener("click", () => {
  history.back();
});
</script>
<?php include 'includes/footer.php';?>