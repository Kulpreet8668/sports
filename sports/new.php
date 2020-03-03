<?php require_once('../_config.php') ?>
<?php include_once('_partials/_header.php') ?>

<header>
  <h1 class="display-1">New Sports</h1>
  <hr>
</header>

<form action='<?= BASE_PATH ?>/sports/insert.php' method='post'>
	<div class='form-group'>
		<label>Team Name</label>
		<input class="form-control" type="text" name="team_name">
	</div>

	<div class='form-group'>
		<label>Mvp</label>
		<input class="form-control" type="text" name="mvp">
	</div>

	<div class='form-group'>
		<label>Sport Type</label>
		<input class="form-control" type="text" name="sport_type">
	</div>

	<button class="btn btn-primary" type="submit">Create</button>
</form>

<?php include_once('_partials/_footer.php') ?>