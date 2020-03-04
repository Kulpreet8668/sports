<?php require_once('../_config.php') ?>
<?php include_once('_partials/_header.php') ?>

<!--
  OBJECTIVE:
    1: Include the header and footer files (I have provided you the _config.php).
    2: Select the row using the provided ID.
    3: Add the missing hidden field.
    4: Pre-populate the form with the values from the selected row.
    5: Ensure you're sending the form data to the update.php page.
-->
<?php
  $conn = connect();
//  $id = $_GET['id']; 

// 	$sql = "SELECT * FROM sports WHERE id=$id";
$result = mysqli_query($conn, "SELECT * FROM sports WHERE id = {$_GET['id']}");
	// $result = mysqli_query($conn,$sql);
	// if(!$result){
	// 	echo mysqli_error($conn);
	
    $row = mysqli_fetch_assoc($result);
 ?>


<header>
  <h1 class="display-1">Edit Sports</h1>
  <hr>
</header>

<form action='<?= BASE_PATH ?>/sports/update.php' method='post'>

      <input type="hidden" name="id" value="<?= $_GET['id']; ?>">
	<div class='form-group'>
		<label>Team Name</label>
		<input class="form-control" type="text" name="team_name" value="<?= $row['team_name'] ?>">
	</div>

	<div class='form-group'>
		<label>Mvp</label>
		<input class="form-control" type="text" name="mvp"  value="<?= $row['mvp'] ?>">
	</div>

	<div class='form-group'>
		<label>Sport Type</label>
		<input class="form-control" type="text" name="sport_type"  value="<?= $row['sport_type'] ?>">
	</div>

	<!--<div class='form-group'>
		
		<input class="form-control" type="hidden" name="id" value="<?= $row['id']?>">
	</div>-->

	<button class="btn btn-primary" type="submit">Update</button>
</form>

<?php include_once('_partials/_footer.php') ?>