<?php require_once('./_config.php') ?>
<?php include_once('_partials/_header.php') ?>
<?php include_once('_utilities/_connect.php'); ?>
<?php

  // OBJECTIVE:
  //   1: Include the header and footer files (I have provided you the _config.php).
  //   2: Fetch all the sports rows from the database and display them in a table.
  //   3: Create two links for each row that point to the edit.php and delete.php files. These links must provide a query parameter called 'id' with the row's id column's value.
$conn = connect();
// $sql ="SELECT * FROM sports";
$result = mysqli_query($conn, "SELECT * FROM sports");
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<header>
  <h1 class="display-1">Sports</h1>
  <hr>
</header>

<table class="table table-striped">
  <thead>
    <tr>
      <th>Team Name</th>
			<th>Mvp</th>
			<th>Sport Type</th>
      <th>Actions</th>
    </tr>
  </thead>

  <tbody>
  <?php
  foreach($rows as $row){
    echo "<tr>";
    echo "<td>{$row['team_name']}</td>";
    echo "<td>{$row['mvp']}</td>";
    echo "<td>{$row['sport_type']}</td>";
    echo "<td>";
    // echo "<td><a href='". BASE_PATH ."/sports/edit.php?id={$row['id']}'>edit</a></td>";
    // echo "|";
    // echo "<td><a href=". BASE_PATH ."'/sports/delete.php?id={$row['id']}'>delete</a></td>";

    echo"<td><a href='./sports/edit.php?id={$row['id']}'>edit</a></td>";
     echo"|";
     echo"<td><a href='./sports/delete.php?id={$row['id']}'>delete</a></td>";
    echo "</td>";
    echo "</tr>";




  }

  ?>
  </tbody>
</table>

<?php include_once('_partials/_footer.php') ?>