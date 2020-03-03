<?php

  require_once('../_config.php');
  session_start();
  include_once('_utilities/_connect.php'); 
    /*
    OBJECTIVE:
      1: Connect to the database and update the values from the passed form
      data (you must include the _connect.php and use the connect function).
      2: Set a session variable called 'notification' with a success message (if the update was successful)
      or an error message (if it failed).
      3: Redirect to notification.php.
  */

  $id = $_POST['id'];
  $team_name = $_POST['team_name'];
  $mvp = $_POST['mvp'];
  $sport_type = $_POST['sport_type'];

  $sql = "UPDATE spot SET
  team_name ='$team_name',
  mvp ='$mvp',
  sport_type ='$sport_type
  WHERE id = $id";

?>