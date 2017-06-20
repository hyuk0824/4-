<?php
$conn = mysqli_connect("localhost", "root", 9851518);
mysqli_select_db($conn, "race_info");

$sql = "CREATE TABLE ".$_POST['date1']."_".$_POST['g2']." (rane varchar(5) NOT NULL PRIMARY KEY, nation varchar(20) NOT NULL, created varchar(20) NOT NULL)ENGINE=innodb DEFAULT CHARSET = utf8;";
$result = mysqli_query($conn, $sql);

$sql = "INSERT INTO ".$_POST['date1']."_".$_POST['g2']."(rane,nation,created) VALUES('1', '".$_POST['nation1']."', now())";
$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO ".$_POST['date1']."_".$_POST['g2']."(rane,nation,created) VALUES('2', '".$_POST['nation2']."', now())";
$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO ".$_POST['date1']."_".$_POST['g2']."(rane,nation,created) VALUES('3', '".$_POST['nation3']."', now())";
$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO ".$_POST['date1']."_".$_POST['g2']."(rane,nation,created) VALUES('4', '".$_POST['nation4']."', now())";
$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO ".$_POST['date1']."_".$_POST['g2']."(rane,nation,created) VALUES('5', '".$_POST['nation5']."', now())";
$result = mysqli_query($conn, $sql);
$sql = "INSERT INTO ".$_POST['date1']."_".$_POST['g2']."(rane,nation,created) VALUES('6', '".$_POST['nation6']."', now())";
$result = mysqli_query($conn, $sql);

echo "<script>alert('race 정보가 저장이 완료되었습니다.');history.back();</script>";
exit;
?>
