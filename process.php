<?php
$conn = mysqli_connect("localhost", "root", 9851518);
mysqli_select_db($conn, "jojung");
$sql = "INSERT INTO game (nation,record,ranked,created) VALUES('".$_POST['tex1']."', '".$_POST['time1']."', '".$_POST['b1']."', now())";
$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO game (nation,record,ranked,created) VALUES('".$_POST['tex2']."', '".$_POST['time2']."', '".$_POST['b2']."', now())";
$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO game (nation,record,ranked,created) VALUES('".$_POST['tex3']."', '".$_POST['time3']."', '".$_POST['b3']."', now())";
$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO game (nation,record,ranked,created) VALUES('".$_POST['tex4']."', '".$_POST['time4']."', '".$_POST['b4']."', now())";
$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO game (nation,record,ranked,created) VALUES('".$_POST['tex5']."', '".$_POST['time5']."', '".$_POST['b5']."', now())";
$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO game (nation,record,ranked,created) VALUES('".$_POST['tex6']."', '".$_POST['time6']."', '".$_POST['b6']."', now())";
$result = mysqli_query($conn, $sql);

echo "<script>alert('DB로 저장이 완료되었습니다.');history.back();</script>";
exit;
?>
