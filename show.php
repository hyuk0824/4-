<!DOCTYPE html>
<html>
  <head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <title>검색</title>
    <!--<link href='http://localhost/project/1.css' rel='stylesheet' type='text/css'>-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src = "http://code.jquery.com/jquery-1.10.2.js"></script>
      <link href='http://localhost/project/1.css' rel='stylesheet' type='text/css'>
    <style>
      table{
        border: 1px solid black;
        width:50%;
        text-align: center;
      }

      #ga1{
        display: none;
      }
      #datepicker,#se1,#b1{
        width: 10%;
        height: 40px;
      }

    </style>
  </head>
  <body background="cc.jpg">
<br><br><br><br><br>  <div class="container12 examples">
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
<div class="row">

  <div class="column12" style="height:40px">
    <table style="width:100%;height:40px;color:green;border:0" align="center" background="333.gif">
    <tr>
<td  align="left" style="width:9%"><input type="image" src="111.jpg"/></td>

</tr>
<tr>
  <td style="width:43%">
    <input type="text" style="width:100%;height:40px;border:0"  placeholder="날짜를 선택하세요"  readonly="readonly" id="datepicker" name="schdate">
  </td>
      <td style="width:43%">
      <form name="form">
      <select name="selectBox" style="width:100%; height:40px; border:0" id="se1" onChange="getSelectValue(this.form)">
         <option value="[choose game number]">경기를 선택하세요</option>
         <option value="game1">game1</option>
         <option value="game2">game2</option>
         <option value="game3">game3</option>
         <option value="game4">game4</option>
         <option value="game5">game5</option>
         <option value="game6">game6</option>
      </select>
      <input type="text" id="ga1"  name="textValue">
    </form>
    </td>

  <td style="width:5%">
    <input type="image" src="123.gif" name="" value="select" id = "b" onclick="table_name()" style="width:100%;height:30px">
  </td>
  </tr>
  </table>
</div>
</div>

<div class="row">
  <div class="column1"></div>
  <div class="column12">
      <table style="width:100%;height:500px;border:1 solid black">
        <tr style="width:100%" background="go.jpg" >
          <td background="1111.jpg">순  위</td>
          <td background="1111.jpg">레  인</td>
          <td background="1111.jpg">국  가</td>
          <td background="1111.jpg">기  록</td>
          <td background="1111.jpg">날  짜</td>
        </tr>
        <tr style="width:100%">
          <td background="1112.jpg" id="rank1">1</td>
          <td background="1112.jpg" id="rane1"></td>
          <td background="1112.jpg" id="nation1"></td>
          <td background="1112.jpg" id="record1"></td>
          <td background="1112.jpg" id="created1"></td>
        </tr>
        <tr style="width:100%">
          <td background="1112.jpg" id="rank2">2</td>
          <td background="1112.jpg" id="rane2"></td>
          <td background="1112.jpg" id="nation2"></td>
          <td background="1112.jpg" id="record2"></td>
          <td background="1112.jpg" id="created2"></td>
        </tr>
        <tr style="width:100%">
          <td background="1112.jpg" id="rank3">3</td>
          <td background="1112.jpg" id="rane3"></td>
          <td background="1112.jpg" id="nation3"></td>
          <td background="1112.jpg" id="record3"></td>
          <td background="1112.jpg" id="created3"></td>
        </tr>
        <tr style="width:100%">
          <td background="1112.jpg"  id="rank4">4</td>
          <td background="1112.jpg" id="rane4"></td>
          <td background="1112.jpg" id="nation4"></td>
          <td background="1112.jpg" id="record4"></td>
          <td background="1112.jpg" id="created4"></td>
        </tr>
        <tr style="width:100%">
          <td background="1112.jpg" id="rank5">5</td>
          <td background="1112.jpg" id="rane5"></td>
          <td background="1112.jpg" id="nation5"></td>
          <td background="1112.jpg" id="record5"></td>
          <td background="1112.jpg" id="created5"></td>
        </tr>
        <tr style="width:100%" background="123.gif">
          <td background="1112.jpg" id="rank6">6</td>
          <td background="1112.jpg" id="rane6"></td>
          <td background="1112.jpg" id="nation6"></td>
          <td background="1112.jpg" id="record6"></td>
          <td background="1112.jpg" id="created6"></td>
        </tr>
      </table>
</div>
</div>

    <script>
      function getSelectValue(frm)
      {
        frm.textValue.value = frm.selectBox.options[frm.selectBox.selectedIndex].text;
        //frm.optionValue.value = frm.selectBox.options[frm.selectBox.selectedIndex].value;
      }
      function table_name()
      {
        var name;
        name = document.getElementById('datepicker').value + "_" + document.getElementById('ga1').value;

        $.ajax({
          url: "http://localhost/project/show2.php",
          type: "POST",
          datatype: 'json',
          data: {
            zipcode: name  //테이블 네임을 POST방식으로 전송
          },
          success: function( data ) {  //data를 문자열로 받아온다.
            var item = {};
            item = data.split(',');  //받아온 문자열 data를 스플릿을 이용하여 콤마를 제거하고 배열로 생성

            console.log(data);

            //배열을 인덱스로 구분하여 원하는 html 텍스트로 저장한다.
            document.getElementById('rane1').innerHTML = item[0];
            document.getElementById('rane2').innerHTML = item[4];
            document.getElementById('rane3').innerHTML = item[8];
            document.getElementById('rane4').innerHTML = item[12];
            document.getElementById('rane5').innerHTML = item[16];
            document.getElementById('rane6').innerHTML = item[20];

            document.getElementById('nation1').innerHTML = item[1];
            document.getElementById('nation2').innerHTML = item[5];
            document.getElementById('nation3').innerHTML = item[9];
            document.getElementById('nation4').innerHTML = item[13];
            document.getElementById('nation5').innerHTML = item[17];
            document.getElementById('nation6').innerHTML = item[21];

            document.getElementById('record1').innerHTML = item[2];
            document.getElementById('record2').innerHTML = item[6];
            document.getElementById('record3').innerHTML = item[10];
            document.getElementById('record4').innerHTML = item[14];
            document.getElementById('record5').innerHTML = item[18];
            document.getElementById('record6').innerHTML = item[22];

            document.getElementById('created1').innerHTML = item[3];
            document.getElementById('created2').innerHTML = item[7];
            document.getElementById('created3').innerHTML = item[11];
            document.getElementById('created4').innerHTML = item[15];
            document.getElementById('created5').innerHTML = item[19];
            document.getElementById('created6').innerHTML = item[23];
      }
    })}
    </script>
</div>
  </body>
</html>
