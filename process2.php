<?php
$conn = mysqli_connect("localhost", "root", 9851518);
mysqli_select_db($conn, "jojung");

$sql = "SELECT * FROM game";
$result = mysqli_query($conn, $sql);

while($row=mysqli_fetch_assoc($result)){
  echo "nation=".$row['nation']."&nbsp;&nbsp;&nbsp;&nbsp;record=".$row['record']."&nbsp;&nbsp;&nbsp;&nbsp;race=".$row['race']."&nbsp;&nbsp&nbsp;&nbsp;;created=".$row['created'].'</br>';
}
?>
