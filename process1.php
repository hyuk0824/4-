<?php

if($_POST['textValue2']==""){
  echo "<script>alert('game number를 선택하시고 select 버튼을 눌러주세요.');history.back();</script>";
  exit;
}
else{
  $conn = mysqli_connect("localhost", "root", 9851518);
  mysqli_select_db($conn, "jojung");

  $sql = "CREATE TABLE ".$_POST['date2']."_".$_POST['textValue2']." (rank varchar(5) NOT NULL PRIMARY KEY , rane varchar(5) NOT NULL , nation varchar(20) NOT NULL, record varchar(20) NOT NULL, created varchar(20) NOT NULL)ENGINE=innodb DEFAULT CHARSET = utf8;";
  $result = mysqli_query($conn, $sql);

  //if($result) echo "테이블 Create 성공!!";

  $sql = "INSERT INTO  ".$_POST['date2']."_".$_POST['textValue2']."(rank,rane,nation,record,created) VALUES('1', '".$_POST['b1']."', '".$_POST['tex1']."', '".$_POST['time1']."', now())";
  $result = mysqli_query($conn, $sql);
  $sql = "INSERT INTO  ".$_POST['date2']."_".$_POST['textValue2']."(rank,rane,nation,record,created) VALUES('2', '".$_POST['b2']."', '".$_POST['tex2']."', '".$_POST['time2']."', now())";
  $result = mysqli_query($conn, $sql);
  $sql = "INSERT INTO  ".$_POST['date2']."_".$_POST['textValue2']."(rank,rane,nation,record,created) VALUES('3', '".$_POST['b3']."', '".$_POST['tex3']."', '".$_POST['time3']."', now())";
  $result = mysqli_query($conn, $sql);
  $sql = "INSERT INTO  ".$_POST['date2']."_".$_POST['textValue2']."(rank,rane,nation,record,created) VALUES('4', '".$_POST['b4']."', '".$_POST['tex4']."', '".$_POST['time4']."', now())";
  $result = mysqli_query($conn, $sql);
  $sql = "INSERT INTO  ".$_POST['date2']."_".$_POST['textValue2']."(rank,rane,nation,record,created) VALUES('5', '".$_POST['b5']."', '".$_POST['tex5']."', '".$_POST['time5']."', now())";
  $result = mysqli_query($conn, $sql);
  $sql = "INSERT INTO  ".$_POST['date2']."_".$_POST['textValue2']."(rank,rane,nation,record,created) VALUES('6', '".$_POST['b6']."', '".$_POST['tex6']."', '".$_POST['time6']."', now())";
  $result = mysqli_query($conn, $sql);

  echo "<script>alert('경기결과 저장이 완료되었습니다.');history.back();</script>";
  exit;
}
?>
