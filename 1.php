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

	<link href='http://localhost/project/1.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/1.css">
    <style type="text/css">
		body {
			background: cc.JPG;
                padding:3px 0;
            text-align:center;
        }
    </style>
</head>
<body background="cc.jpg" >
    <div class="container12 examples">
      <br><br>
<div class="row">
        <?php
          session_start();
          if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
             echo "<meta http-equiv='refresh' content='0;url=login.php'>";
              exit;
          }
        ?>
            <div class="column6"><h2 font-size="30px" id="time_out">00:00:00</h2></div>
            <div class="column2"  ><input type="image" src="nok1.JPG" value="nokk" id="nokjung" onclick="nok()"  style="height:60px"></div>
            <div class="column2" ><input type="image"  src="jae.JPG" value="jae" id="button0" style=" height:60px" onclick=""/></div>
            <div class="column3">
              <br>
                <?php
                $user_id = $_SESSION['user_id'];
                $user_name = $_SESSION['user_name'];
                echo "<tr><td>안녕하세요. $user_name($user_id)님&nbsp</td></tr>";
                echo "<tr><td><a href='logout.php'>로그아웃</a></td></tr>";
                ?>
              </div>
        </div>
<br><br>
<Strong>
<article>
  <form action="process.php" method="post">
        <div class="row">


        <div class="column1">
        <input type="button" style="width:40%"   value="1"  id="button1" class = "btn" onclick="location.href='process.php?but1=".this.value /></div>

        <div class="column4">
            <input type="text"  style="width:90%" id="input" class = "inputtext" name = "tex1" /></div>
            <div class="column5">
              <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti1" name = "time1" /></div>

</div>

<div class="row">


<div class="column1">
<input type="button" style="width:40%"   value="1"  id="button2" class = "btn" onclick="location.href='process.php?but2=".this.value /></div>

<div class="column4">
    <input type="text"  style="width:90%" id="input" class = "inputtext" name = "tex1" /></div>
    <div class="column5">
      <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti2" name = "time1" /></div>

</div>


<div class="row">


<div class="column1">
<input type="button" style="width:40%"   value="1"  id="button3" class = "btn" onclick="location.href='process.php?but3=".this.value /></div>

<div class="column4">
    <input type="text"  style="width:90%" id="input" class = "inputtext" name = "tex1" /></div>
    <div class="column5">
      <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti3" name = "time1" /></div>

</div>


<div class="row">


<div class="column1">
<input type="button" style="width:40%"   value="1"  id="button4" class = "btn" onclick="location.href='process.php?but4=".this.value /></div>

<div class="column4">
    <input type="text"  style="width:90%" id="input" class = "inputtext" name = "tex1" /></div>
    <div class="column5">
      <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti4" name = "time2" /></div>

</div>


<div class="row">


<div class="column1">
<input type="button" style="width:40%"   value="1"  id="button5" class = "btn" onclick="location.href='process.php?but5=".this.value /></div>

<div class="column4">
    <input type="text"  style="width:90%" id="input" class = "inputtext" name = "tex1" /></div>
    <div class="column5">
      <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti5" name = "time1" /></div>

</div>


<div class="row">


<div class="column1">
<input type="button" style="width:40%"   value="1"  id="button6" class = "btn" onclick="location.href='process.php?but6=".this.value /></div>

<div class="column4">
    <input type="text"  style="width:90%" id="input" class = "inputtext" name = "tex1" /></div>
    <div class="column5">
      <input type="text"  style="width:90%" class = "timeinput" value="00:00:00" id = "ti6" name = "time1" /></div>

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

<div  class="column4">
  <input type="image" src="gi.JPG" style="width:20%;height:8mm" name="input_data">
</div>
</form>
<form action="process2.php" method="post">
  <div class="column4">
<input type="image" style="width:20%;height:8mm" src="de.JPG"  name="output_data">
</form>
</div>
  <div class="column4">
<form action ="race_info.php" method= "post">
  <input type="submit" style="width:20%;height:8mm" name = "race_info" value = "race_info">
</form>
 </div>
</div>
</article>



</strong>
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
