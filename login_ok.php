<?php
if(!isset($_POST['user_id']) || !isset($_POST['user_pw'])) exit;
$user_id = $_POST['user_id'];
$user_pw = $_POST['user_pw'];
$members = array('kh'=>array('pw'=>'kh', 'name'=>'김혁'),
        'kbs'=>array('pw'=>'kbs', 'name'=>'김범수'),
        'jjy'=>array('pw'=>'jjy', 'name'=>'조재윤'),
        'kck'=>array('pw'=>'kck', 'name'=>'김창기'));

if(!isset($members[$user_id])) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
if($members[$user_id]['pw'] != $user_pw) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
session_start();
$_SESSION['user_id'] = $user_id;
$_SESSION['user_name'] = $members[$user_id]['name'];
?>
<meta http-equiv='refresh' content='0;url=1.php'>
