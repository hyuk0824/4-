<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>조정 기록 관리 시스템</title>

    <style>
      #g2,#g1,#date1{
        display: none;
      }
    </style>
  </head>
  <body background="cc.jpg">
    <br><br><br><br><br>
<center>
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<table><tr><td>
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
    <input type="text" style="width:180px;height:25px" placeholder="날짜를 선택하세요"  readonly="readonly" id="datepicker" name="schdate" align="center"></td><td>
  <form name="form" style="height:30px">
  <select name="selectBox" style="height:30px" onChange="getSelectValue(this.form);">
   <option value="[choose game number]">게임을 선택하세요</option>
   <option value="game1">game1</option>
   <option value="game2">game2</option>
   <option value="game3">game3</option>
   <option value="game4">game4</option>
   <option value="game5">game5</option>
   <option value="game6">game6</option>
  </select>

  <input type="text" style="width:275px;" id="g1" name="textValue"></td><td>
  </form>
  <input type="image" src="hhh.jpg" style="width:50px;height:35px" value="select" onclick="sett();">
</td></tr></table>
    <form class=""  action="process3.php" method="post">

      <input type="button" style="width:100px;height:35px" value="1 레인">
      <input type="text" style="width:500px;height:30px" name="nation1" id = "n1" value =""></br>
      <input type="button" style="width:100px;height:35px" value="2 레인">
      <input type="text" style="width:500px;height:30px" name="nation2" id = "n2" value =""></br>
      <input type="button" style="width:100px;height:35px" value="3 레인">
      <input type="text" style="width:500px;height:30px" name="nation3" id = "n3" value =""></br>
      <input type="button" style="width:100px;height:35px" value="4 레인">
      <input type="text" style="width:500px;height:30px" name="nation4" id = "n4" value =""></br>
      <input type="button" style="width:100px;height:35px" value="5 레인">
      <input type="text" style="width:500px;height:30px" name="nation5" id = "n5" value =""></br>
      <input type="button" style="width:100px;height:35px" value="6 레인">
      <input type="text" style="width:500px;height:30px" name="nation6" id = "n6" value =""></br>

      <input type="text" id="date1" name="date1" value="" style="width:5%">
      <input type="text" id="g2" name="g2" value="">
<br><br>
      <input type="submit" style="width:120px;height:30px" background-color="orange" name="race_info2" value="저장">
      <input type="button" style="width:120px;height:30px" background-color="orange" padding-left="40px" value="새로운 게임" onclick="reset()">
      <input type="button" style="width:120px;height:30px" background-image="cc.JPG" padding-left="40px" value="돌아가기" onclick="history.back()">

    </form>

      <script type="text/javascript">
      function getSelectValue(frm)
      {
        frm.textValue.value = frm.selectBox.options[frm.selectBox.selectedIndex].text;
        frm.optionValue.value = frm.selectBox.options[frm.selectBox.selectedIndex].value;
      }
        function reset(){
          document.getElementById('n1').value = "";
          document.getElementById('n2').value = "";
          document.getElementById('n3').value = "";
          document.getElementById('n4').value = "";
          document.getElementById('n5').value = "";
          document.getElementById('n6').value = "";
        }
        function sett(){
          document.getElementById('g2').value=document.getElementById('g1').value;
          document.getElementById('date1').value=document.getElementById('datepicker').value;
          alert('game 정보가 선택되었습니다.');

        }
      </script>
    </center>
  </body>
</html>
