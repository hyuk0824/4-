<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <title>4! project</title>
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "http://code.jquery.com/jquery-1.10.2.js"></script>
	  <link href='http://localhost/project/1.css' rel='stylesheet' type='text/css'>
    <style type="text/css">
		body {
			background: cc.JPG;
                padding:3px 0;
            text-align:center;
        }
    </style>
</head>
<body background="cc.jpg" >
<br><br>
    <div class="container12 examples">

<div class="row">
        <?php
          session_start();
          if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
             echo "<meta http-equiv='refresh' content='0;url=login.php'>";
              exit;
          }

          $conn = mysqli_connect("localhost", "root", 9851518);
          mysqli_select_db($conn, "jojung");

          $sql = "SELECT * FROM race_info";
          $result= mysqli_query($conn, $sql);
        ?>
            <div class="column8"><h2 font-size="45px" id="time_out">00:00:00</h2></div>

            <div class="column3">
              <br>
                <?php
                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['user_name'];
                echo "안녕하세요. $user_name($user_id)님&nbsp<br>";
                echo "<a href='logout.php'>로그아웃</a><br>";
                if($user_id=="admin")
                echo "<a href='login_setting.php'>계정관리</a>";
                ?>
              </div>
        </div>


<article>



      <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
      <script>
          $(function() {
          $( "#datepicker" ).datepicker({
            changeYear: true,
            changeMonth: true,
            yearRange:'c-20:c+20',
            closeText:'닫기',
            dateFormat:"yymmdd",
            showMonthAfterYear: true,
            monthNamesShort:['1월','2월','3월','4월','5월','6월','7월','8월','9월','10월','11월','12월'],
            dayNamesMin:['일','월','화','수','목','금','토']
          });

        });
      </script>

      <div class="row" >
        <div class="column11" >
      <table background="333.gif" style="height:35px; width:100%;border:1" >
        <tr>
          <td  style="width:10%">
            <input type="image" src="ready.jpg">
          </td>
          <form action ="race_info.php" method= "post">
          <td style="width:20%;height:40px">


              <input type="image" src="444.jpg" style="width:100%;height:40px" name = "race_info" value = "race_info">


          </td>
  </form>
        <td style="width:30%; height:28px; border:0">
          <input type="text" placeholder="날짜를 선택하세요"  readonly="readonly" id="datepicker" name="schdate" style="width:95%; height:25px">
        </td>
<form name="form">
<td style="width:30%; height:28px; border:0">

    <select name="selectBox" id="se1" onChange="getSelectValue(this.form)" style="height:31px;width:95%">
     <option value="[choose game number]">경기를 선택하세요</option>
     <option value="game1">game1</option>
     <option value="game2">game2</option>
     <option value="game3">game3</option>
     <option value="game4">game4</option>
     <option value="game5">game5</option>
     <option value="game6">game6</option>
    </select></td>

    <input type="text" id="ga1" name="textValue">


</form>
<td style="width:10%; height:43px; " >
      <input type="image" src="readyok.jpg" name="" value="select" onclick="sett()" style="width:100%; height:43px;">
</td>
</tr>
</table>
  </div>
</div>
<br>
  <form action="process1.php" method="post">
    <input type="text" value="" id="date2" name="date2">
    <input type="text" value="" id="textValue2" name="textValue2">

        <div class="row">
        <div class="column1">
        <input type="button"  style="width:80%"   value="1"  id="button1" class = "btn"></div>
        <div class="column4">
            <input type="text"  style="width:90%" id="input1" class = "inputtext" name = "tex1" /></div>
        <div class="column5">
            <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti1" name = "time1" /></div>


    </div>

<div class="row">
  <div class="column1">
    <input type="button" style="width:80%"   value="1"  id="button2" class = "btn"></div>
  <div class="column4">
    <input type="text"  style="width:90%" id="input2" class = "inputtext" name = "tex2" /></div>
  <div class="column5">
    <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti2" name = "time2" /></div>
</div>

<div class="row">
  <div class="column1">
    <input type="button" style="width:80%"   value="1"  id="button3" class = "btn"></div>
  <div class="column4">
    <input type="text"  style="width:90%" id="input3" class = "inputtext" name = "tex3" /></div>
  <div class="column5">
    <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti3" name = "time3" /></div>
</div>

<div class="row">
  <div class="column1">
    <input type="button" style="width:80%"   value="1"  id="button4" class = "btn"></div>
  <div class="column4">
    <input type="text"  style="width:90%" id="input4" class = "inputtext" name = "tex4" /></div>
  <div class="column5">
    <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti4" name = "time4" /></div>

</div>

<div class="row">
  <div class="column1">
  <input type="button" style="width:80%"   value="1"  id="button5" class = "btn"></div>
  <div class="column4">
    <input type="text"  style="width:90%" id="input5" class = "inputtext" name = "tex5" /></div>
  <div class="column5">
    <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti5" name = "time5" /></div>
</div>

<div class="row">
  <div class="column1">
  <input type="button" style="width:80%"   value="1"  id="button6" class = "btn"></div>
  <div class="column4">
    <input type="text"  style="width:90%" id="input6" class = "inputtext" name = "tex6" /></div>
  <div class="column5">
    <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti6" name = "time6" /></div>
</div>

<div class="row">
<div class="text_non">
  <input type="text" id="text_none1" value="1" name="b1">
  <input type="text" id="text_none2" value="1" name="b2">
  <input type="text" id="text_none3" value="1" name="b3">
  <input type="text" id="text_none4" value="1" name="b4">
  <input type="text" id="text_none5" value="1" name="b5">
  <input type="text" id="text_none6" value="1" name="b6">
</div>

</form>

<div class="row" align-content="center">
<div class="column2" ></div>
  <div class="column4" >
  <table background="ggg.jpg" style="width:70%; height:100px">
<tr style="height:20%"></tr>

    <tr style="width:100%">
<td style="width:10%"></td>
      <td style="width:35%">
  <input type="image" src="nok1.JPG" value="nokk" id="nokjung" onclick="nok()"  style="height:45px;width:100% ">
</td>
<td style="width:10%"></td>


<td style="width:35%">
<input type="image"  src="jae.JPG" value="jae" id="button0" style=" height:45px;width:100% " onclick=""/>
</td>
<td style="width:10%"></td>
</tr>
</table>
</div>
<div class="column1" ></div>

<div class="column4" >

<table background="jjj.jpg" style="width:70%; height:100px">
<tr style="height:20%"></tr>
  <tr style="width:100%">
<td style="width:10%"></td>
    <td style="width:35%">
<input type="image" src="gi.JPG" style="width:100%;height:45px" name="input_data">
</td>
<td style="width:10%"></td>


<td style="width:35%">
  <form action ="show.php" method= "post">
<input type="image" style="width:100%;height:45px" src="de.JPG"  name="output_data"></form>
</td>
<td style="width:10%"></td>
</tr>
</table>
</div>
<div class="column1" ></div>
</div>




</div>
</article>



<br>
<br>
<div class="row">
  <div class="column10">
    <input type="image" src="start.JPG"  id="start_timer" value="Start" onclick = "started()" class="setb"/>
  </div>
  <div class="column10">
    <input type="image" id="set_timer" src="set.JPG" value="Set" onclick="set()"  class="setb"/>
  </div>
  <div class="column10">
    <input type="image" src="reset.JPG" id="reset_timer" onclick="reset()"  class="setb"/>
  </div>
</div>

    </div>




<script src="http://localhost/project/js.js"></script>
</body>
</html>
