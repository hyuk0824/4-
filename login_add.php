<?php
if($_POST['user_id1']=="" || $_POST['user_pw1']=="" || $_POST['user_name1']==""){
  echo "<script>alert('입력이 안된 항목이 있습니다.');history.back();</script>";
}

  $conn = mysqli_connect("localhost", "root", 9851518);
  mysqli_select_db($conn, "login_setting");
  $sql = "SELECT * FROM setting";
  $result = mysqli_query($conn, $sql);
  $check = 0;
  while($row=mysqli_fetch_assoc($result)){
    if($_POST['user_id1'] == $row['id'])
    {
      $check =1;
      echo "<script>alert('해당 id의 계정이 이미 존재합니다.');history.back();</script>";
      break;
      exit;
    }
  }
  if($check !=1){
    $sql = "INSERT INTO setting (id, password, name) VALUES('".$_POST['user_id1']."', '".$_POST['user_pw1']."', '".$_POST['user_name1']."')";
    $result = mysqli_query($conn, $sql);
    echo "<script>alert('계정 등록이 완료되었습니다.');history.back();</script>";
  }
?>
