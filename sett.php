<?php
  $tablename = $_POST['zipcode'];
  $conn = mysqli_connect("localhost", "root", 9851518);
  mysqli_select_db($conn, "race_info");

  $sql = "SELECT * FROM $tablename";
  $result = mysqli_query($conn, $sql);

  $info="";
  while($row=mysqli_fetch_assoc($result)){
    $info = $info.$row['nation'].",";
  }
  echo $info;
?>
