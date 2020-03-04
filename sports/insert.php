<?php

  require_once('../_config.php');
  // session_start();
  include_once('_utilities/_connect.php'); 

  /*
    OBJECTIVE:
      1: Connect to the database and insert the values from the passed form
      data (you must include the _connect.php and use the connect function).
      2: Set a session variable called 'notification' with a success message (if the insert was successful)
      or an error message (if it failed).
      3: Redirect to notification.php.
  */

    $conn = connect();
  $sql = "INSERT INTO sports (
    team_name,
    mvp,
    sport_type

    ) 
    VALUES (
      '{$_POST['team_name']}',
      '{$_POST['mvp']}',
      '{$_POST['sport_type']}'

    )";

    $result = mysqli_query($conn, $sql);
    session_start();

    if($result){
      $_SESSION['notification'] = "your data is inserted successfully";
      
    }
    else{
      $_SESSION['notification'] = "your data is not inserted ";
      

    }
    header("Location:../notification.php");
    exit;
?>