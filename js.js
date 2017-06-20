
var running = 0; //타이머가 동작중인지 확인
var time = 0 ;   //전체 시스템 시간
var mins = 0;   //분
var secs = 0;   //초
var tenths = 0; //밀리초
var r=0;     //reset확인용 check변수 (리셋 당시 각 모든 시간관련 변수를 0으로 동기화 시키기 위해 사용함)
var a=0;
var check=1;
var item = {};

 function started(){
   r=0;
   if(document.getElementById('start_timer').value == 'Start')
   {
     document.getElementById('start_timer').value = 'Stop';
     document.getElementById('start_timer').src = 'stop.JPG';
     running = 0;
   }
   else {
     document.getElementById('start_timer').value = 'Start';
     document.getElementById('start_timer').src = 'start.JPG';
     running = 1;
   }
   if(running == 1)
   {
     running = 0;
   }
   else{
     running = 1;
     increment();
   }
}

function nok(){

  if(document.getElementById('nokjung').value == 'nok')
  {
    document.getElementById('nokjung').value = 'jung';
    document.getElementById('nokjung').src = 'jung.JPG';

  }
  else {
    document.getElementById('nokjung').value = 'nok';
    document.getElementById('nokjung').src = 'nok1.JPG';

  }
}
function increment(){
  if(running == 1){
   setTimeout(function(){
   time++;
   mins = Math.floor(time/100/60);
   secs = (Math.floor(time/100))%60;
   tenths = time % 100;

   if(mins < 10){
   mins = "0" + mins;
   }
   if(secs < 10){
   secs = "0" + secs;
   }
   if(tenths <10){
     tenths = "0" + tenths;
   }
 document.getElementById('time_out').innerHTML = mins + ":" + secs + ":" + tenths;
 increment();
 }, 10);
 }

 if(r==1)
 {
   document.getElementById('time_out').innerHTML = "00:00:00";
 }

}
function set(){
  if(r==1)
  {
    mins="00";
    secs="00";
    tenths="00";
  }
  if(document.getElementById('ti1').value == "00:00:00"){
  document.getElementById('ti1').value =  mins + ":" + secs + ":" + tenths;
  }
  else if(document.getElementById('ti1').value !="00:00:00" && document.getElementById('ti2').value =="00:00:00"){
  document.getElementById('ti2').value =  mins + ":" + secs + ":" + tenths;
  }
  else if(document.getElementById('ti2').value !="00:00:00" && document.getElementById('ti3').value =="00:00:00"){
  document.getElementById('ti3').value =  mins + ":" + secs + ":" + tenths;
  }
  else if(document.getElementById('ti3').value !="00:00:00" && document.getElementById('ti4').value =="00:00:00"){
  document.getElementById('ti4').value = mins + ":" + secs + ":" + tenths;
  }
  else if(document.getElementById('ti4').value !="00:00:00" && document.getElementById('ti5').value =="00:00:00"){
  document.getElementById('ti5').value =  mins + ":" + secs + ":" + tenths;
  }
  else if(document.getElementById('ti5').value !="00:00:00" && document.getElementById('ti6').value =="00:00:00"){
  document.getElementById('ti6').value =  mins + ":" + secs + ":" + tenths;
  }
}

function reset(){
 i=0;
 r=1;
 running = 0;
 time=0;
 mins=0;
 secs=0;
 tenths=0;

 if(document.getElementById('start_timer').value == 'Stop')
 {
   document.getElementById('start_timer').value = 'Start';
   document.getElementById('start_timer').src = "start.JPG";
 }
 document.getElementById('time_out').innerHTML = "00:00:00";
 document.getElementById('ti1').value = "00:00:00";
 document.getElementById('ti2').value = "00:00:00";
 document.getElementById('ti3').value = "00:00:00";
 document.getElementById('ti4').value = "00:00:00";
 document.getElementById('ti5').value = "00:00:00";
 document.getElementById('ti6').value = "00:00:00";
 document.getElementById('button1').value ='1';
 document.getElementById('button2').value ='1';
 document.getElementById('button3').value ='1';
 document.getElementById('button4').value ='1';
 document.getElementById('button5').value ='1';
 document.getElementById('button6').value ='1';
 document.getElementById('text_none1').value ='1';
 document.getElementById('text_none2').value ='1';
 document.getElementById('text_none3').value ='1';
 document.getElementById('text_none4').value ='1';
 document.getElementById('text_none5').value ='1';
 document.getElementById('text_none6').value ='1';
}

//////////////////////////////////////////////////////////////////

b1 = document.getElementById('button1');
b1.addEventListener('click',function(){
  if(document.getElementById('button1').value == '1'){
    this.value = '2';
    document.getElementById('text_none1').value = '2';
    document.getElementById('input1').value = item[1];
  }
  else if(document.getElementById('button1').value == '2'){
    this.value = '3';
    document.getElementById('text_none1').value = '3';
    document.getElementById('input1').value = item[2];
  }
  else if(document.getElementById('button1').value == '3'){
    this.value = '4';
    document.getElementById('text_none1').value = '4';
    document.getElementById('input1').value = item[3];

  }
  else if(document.getElementById('button1').value == '4'){
    this.value = '5';
    document.getElementById('text_none1').value = '5';
    document.getElementById('input1').value = item[4];

  }
  else if(document.getElementById('button1').value == '5'){
    this.value = '6';
    document.getElementById('text_none1').value = '6';
    document.getElementById('input1').value = item[5];

  }
  else {
    this.value = '1';
    document.getElementById('text_none1').value = '1';
    document.getElementById('input1').value = item[0];
  }
})
b2 = document.getElementById('button2');
b2.addEventListener('click',function(){
  if(document.getElementById('button2').value == '1'){
    this.value = '2';
    document.getElementById('text_none2').value = '2';
    document.getElementById('input2').value = item[1];
  }
  else if(document.getElementById('button2').value == '2'){
    this.value = '3';
    document.getElementById('text_none2').value = '3';
    document.getElementById('input2').value = item[2];
  }
  else if(document.getElementById('button2').value == '3'){
    this.value = '4';
    document.getElementById('text_none2').value = '4';
    document.getElementById('input2').value = item[3];
  }
  else if(document.getElementById('button2').value == '4'){
    this.value = '5';
    document.getElementById('text_none2').value = '5';
    document.getElementById('input2').value = item[4];
  }
  else if(document.getElementById('button2').value == '5'){
    this.value = '6';
    document.getElementById('text_none2').value = '6';
    document.getElementById('input2').value = item[5];
  }
  else {
    this.value = '1';
    document.getElementById('text_none2').value = '1';
    document.getElementById('input2').value = item[0];
  }
})
b3 = document.getElementById('button3');
b3.addEventListener('click',function(){
  if(document.getElementById('button3').value == '1'){
    this.value = '2';
    document.getElementById('text_none3').value = '2';
    document.getElementById('input3').value = item[1];
  }
  else if(document.getElementById('button3').value == '2'){
    this.value = '3';
    document.getElementById('text_none3').value = '3';
    document.getElementById('input3').value = item[2];
  }
  else if(document.getElementById('button3').value == '3'){
    this.value = '4';
    document.getElementById('text_none3').value = '4';
    document.getElementById('input3').value = item[3];
  }
  else if(document.getElementById('button3').value == '4'){
    this.value = '5';
    document.getElementById('text_none3').value = '5';
    document.getElementById('input3').value = item[4];
  }
  else if(document.getElementById('button3').value == '5'){
    this.value = '6';
    document.getElementById('text_none3').value = '6';
    document.getElementById('input3').value = item[5];
  }
  else {
    this.value = '1';
    document.getElementById('text_none3').value = '1';
    document.getElementById('input3').value = item[0];
  }
})
b4 = document.getElementById('button4');
b4.addEventListener('click',function(){
  if(document.getElementById('button4').value == '1'){
    this.value = '2';
    document.getElementById('text_none4').value = '2';
    document.getElementById('input4').value = item[1];
  }
  else if(document.getElementById('button4').value == '2'){
    this.value = '3';
    document.getElementById('text_none4').value = '3';
    document.getElementById('input4').value = item[2];
  }
  else if(document.getElementById('button4').value == '3'){
    this.value = '4';
    document.getElementById('text_none4').value = '4';
    document.getElementById('input4').value = item[3];
  }
  else if(document.getElementById('button4').value == '4'){
    this.value = '5';
    document.getElementById('text_none4').value = '5';
    document.getElementById('input4').value = item[4];
  }
  else if(document.getElementById('button4').value == '5'){
    this.value = '6';
    document.getElementById('text_none4').value = '6';
    document.getElementById('input4').value = item[5];
  }
  else {
    this.value = '1';
    document.getElementById('text_none4').value = '1';
    document.getElementById('input4').value = item[0];
  }
})
b5 = document.getElementById('button5');
b5.addEventListener('click',function(){
  if(document.getElementById('button5').value == '1'){
    this.value = '2';
    document.getElementById('text_none5').value = '2';
    document.getElementById('input5').value = item[1];
  }
  else if(document.getElementById('button5').value == '2'){
    this.value = '3';
    document.getElementById('text_none5').value = '3';
    document.getElementById('input5').value = item[2];
  }
  else if(document.getElementById('button5').value == '3'){
    this.value = '4';
    document.getElementById('text_none5').value = '4';
    document.getElementById('input5').value = item[3];
  }
  else if(document.getElementById('button5').value == '4'){
    this.value = '5';
    document.getElementById('text_none5').value = '5';
    document.getElementById('input5').value = item[4];
  }
  else if(document.getElementById('button5').value == '5'){
    this.value = '6';
    document.getElementById('text_none5').value = '6';
    document.getElementById('input5').value = item[5];
  }
  else {
    this.value = '1';
    document.getElementById('text_none5').value = '1';
    document.getElementById('input5').value = item[0];
  }
})
b6 = document.getElementById('button6');
b6.addEventListener('click',function(){
  if(document.getElementById('button6').value == '1'){
    this.value = '2';
    document.getElementById('text_none6').value = '2';
    document.getElementById('input6').value = item[1];
  }
  else if(document.getElementById('button6').value == '2'){
    this.value = '3';
    document.getElementById('text_none6').value = '3';
    document.getElementById('input6').value = item[2];
  }
  else if(document.getElementById('button6').value == '3'){
    this.value = '4';
    document.getElementById('text_none6').value = '4';
    document.getElementById('input6').value = item[3];
  }
  else if(document.getElementById('button6').value == '4'){
    this.value = '5';
    document.getElementById('text_none6').value = '5';
    document.getElementById('input6').value = item[4];
  }
  else if(document.getElementById('button6').value == '5'){
    this.value = '6';
    document.getElementById('text_none6').value = '6';
    document.getElementById('input6').value = item[5];
  }
  else {
    this.value = '1';
    document.getElementById('text_none6').value = '1';
    document.getElementById('input6').value = item[0];
  }
})
///////////////////////////////////////////////////////////

function getSelectValue(frm)
{
  frm.textValue.value = frm.selectBox.options[frm.selectBox.selectedIndex].text;
  //frm.optionValue.value = frm.selectBox.options[frm.selectBox.selectedIndex].value;
}

function sett(){
  document.getElementById('date2').value=document.getElementById('datepicker').value;
  document.getElementById('textValue2').value=document.getElementById('ga1').value;
  alert('game 선택이 완료되었습니다.');
  var name;
  name = document.getElementById('datepicker').value + "_" + document.getElementById('ga1').value;
  $.ajax({
    url: "http://localhost/project/sett.php",
    type: "POST",
    datatype: 'json',
    data: {
      zipcode: name
    },
    success: function( data ) {  //data를 문자열로 받아온다.
      item = data.split(',');
      document.getElementById('input1').value = item[0];
      document.getElementById('input2').value = item[0];
      document.getElementById('input3').value = item[0];
      document.getElementById('input4').value = item[0];
      document.getElementById('input5').value = item[0];
      document.getElementById('input6').value = item[0];
    }
  })
}
