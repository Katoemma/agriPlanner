<?php include '../controllers/farm.php'; ?>
<?php include 'includes/session.php' ?>
<?php include 'includes/header.php';?>

<div class="p-6">
  <h2 class="text-2xl font-semibold mb-4">Farms</h2>
  <button data-modal-target="farmModal" data-modal-toggle="farmModal" class="bg-green-600 px-4 py-2 text-white mb-4 rounded">Add New Farm</button>
  
  <!-- Farm List -->
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    <?php $farms = selectAll('farm',['admin'=> $user['id']]);?>
    <?php foreach($farms as $farm):?>
    <!-- Example Farm Card -->
    <div class="bg-white rounded-lg shadow p-4">
      <h3 class="text-lg font-semibold mb-2"><?php echo $farm['name'];?></h3>
      <p class="text-sm text-gray-600 mb-2">Location: <?php echo $farm['location'];?></p>
      <p class="text-sm text-gray-600 mb-2">Total Area: <?php echo $farm['acres'];?></p>
      <a href="farm.php?farm=<?php echo $farm['token'];?>" class="bg-green-600 text-white rounded px-4 py-2">View Details</a>
    </div>
    <?php endforeach;?>
  </div>
</div>
<?php include 'includes/modals.php' ?>

<?php include 'includes/footer.php';?>