<?php
  $tablename = $_POST['zipcode'];  //POST로 테이블명을 넘겨 받는다
  $conn = mysqli_connect("localhost", "root", 9851518);
  mysqli_select_db($conn, "jojung");

  $sql = "SELECT * FROM $tablename";   //query문 전송
  $result = mysqli_query($conn, $sql);

  $info="";
  while($row=mysqli_fetch_assoc($result)){  //Query문을 실행하고 난 결과 값을 콤마로 구분하고 스트링으로 저장
    $info = $info.$row['rane'].",".$row['nation'].",".$row['record'].",".$row['created'].",";
  }
  echo $info;  //정보를 다시 클라이언트로 전송
?>
