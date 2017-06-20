<?php
  $user_id = $_POST['user_id2'];
  $user_pw = $_POST['user_pw2'];
  $check = 0;

  $conn = mysqli_connect("localhost", "root", 9851518);
  mysqli_select_db($conn, "login_setting");
  $sql = "SELECT * FROM setting";
  $result = mysqli_query($conn, $sql);

  if($user_id !="admin"){
    while($row=mysqli_fetch_assoc($result)){
      if($row['id'] == $user_id && $row['password']==$user_pw){
        $sql2 = "DELETE FROM setting WHERE id='$user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $check =1;
        echo "<script>alert('계정 삭제가 완료되었습니다.');history.back();</script>";
        break;
      }
    }
    if($check == 0) {
      echo "<script>alert('해당 id의 pw가 일치하지 않습니다.');history.back();</script>";
    }
  }
  else {
      echo "<script>alert('관리자 계정은 삭제가 불가능 합니다.');history.back();</script>";
  }

?>
