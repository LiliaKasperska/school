<!DOCTYPE html>
<html>
    <head>
        <title>Медівський заклад загальної середньої освіти I-II ступенів</title>
        <link rel="stylesheet" href="my_style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    </head>
    <body >
    <style>
#calendar2 {
  width: 100%;
  font: monospace;
  line-height: 1.2em;
  font-size: 15px;
  text-align: center;
}
#calendar2 thead tr:last-child {
  font-size: small;
  color: rgb(85, 85, 85);
}
#calendar2 thead tr:nth-child(1) td:nth-child(2) {
  color: rgb(50, 50, 50);
}
#calendar2 thead tr:nth-child(1) td:nth-child(1):hover, #calendar2 thead tr:nth-child(1) td:nth-child(3):hover {
  cursor: pointer;
}
#calendar2 tbody td {
  color: rgb(44, 86, 122);
}
#calendar2 tbody td:nth-child(n+6), #calendar2 .holiday {
  color: rgb(231, 140, 92);
}
#calendar2 tbody td.today {
  background: rgb(220, 0, 0);
  color: #fff;
}
</style>

<table id="calendar2">
  <thead>
    <br>
    <tr><td><td colspan="5"><td>
    <tr><td>Пн<td>Вт<td>Ср<td>Чт<td>Пт<td>Сб<td>Нд
  <tbody>
</table>

<script>
function Calendar2(id, year, month) {
var Dlast = new Date(year,month+1,0).getDate(),
    D = new Date(year,month,Dlast),
    DNlast = new Date(D.getFullYear(),D.getMonth(),Dlast).getDay(),
    DNfirst = new Date(D.getFullYear(),D.getMonth(),1).getDay(),
    calendar = '<tr>',
    month=["Січень","Лютий","Березень","Ківтень","Травень","Червень","Липень","Серпень","Вересень","Жовтень","Листопад","Грудень"];
if (DNfirst != 0) {
  for(var  i = 1; i < DNfirst; i++) calendar += '<td>';
}else{
  for(var  i = 0; i < 6; i++) calendar += '<td>';
}
for(var  i = 1; i <= Dlast; i++) {
  if (i == new Date().getDate() && D.getFullYear() == new Date().getFullYear() && D.getMonth() == new Date().getMonth()) {
    calendar += '<td class="today">' + i;
  }else{
    calendar += '<td>' + i;
  }
  if (new Date(D.getFullYear(),D.getMonth(),i).getDay() == 0) {
    calendar += '<tr>';
  }
}
for(var  i = DNlast; i < 7; i++) calendar += '<td>&nbsp;';
document.querySelector('#'+id+' tbody').innerHTML = calendar;
document.querySelector('#'+id+' thead td:nth-child(2)').innerHTML = month[D.getMonth()] +' '+ D.getFullYear();
document.querySelector('#'+id+' thead td:nth-child(2)').dataset.month = D.getMonth();
document.querySelector('#'+id+' thead td:nth-child(2)').dataset.year = D.getFullYear();
if (document.querySelectorAll('#'+id+' tbody tr').length < 6) {  // чтобы при перелистывании месяцев не "подпрыгивала" вся страница, добавляется ряд пустых клеток. Итог: всегда 6 строк для цифр
    document.querySelector('#'+id+' tbody').innerHTML += '<tr><td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;<td>&nbsp;';
}
}
Calendar2("calendar2", new Date().getFullYear(), new Date().getMonth());
// переключатель минус месяц
document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(1)').onclick = function() {
  Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month)-1);
}
// переключатель плюс месяц
document.querySelector('#calendar2 thead tr:nth-child(1) td:nth-child(3)').onclick = function() {
  Calendar2("calendar2", document.querySelector('#calendar2 thead td:nth-child(2)').dataset.year, parseFloat(document.querySelector('#calendar2 thead td:nth-child(2)').dataset.month)+1);
}
</script>


      <hr>
      <h6 style="font-weight: bold;">КОРИСНІ ПОСИЛАННЯ<hr></h6>
      <a class="nav-link" target="_blank" href="https://mon.gov.ua/ua" style="color: #181810;">МОН України</a>
      <hr>
      <a class="nav-link" target="_blank" href="http://oblosvita.te.ua/" style="color: #181810;">Управління освіти і науки Тернопільської обласної державної адміністрації</a>
      <hr>
      <a class="nav-link" target="_blank" href="https://imzo.gov.ua/" style="color: #181810;">Державна наукова установа “Інститут модернізації змісту освіти”</a>
      <hr>
      <a class="nav-link" target="_blank" href="https://testportal.gov.ua/" style="color: #181810;">Український центр оцінювання якості освіти</a>
      <hr>
      <a class="nav-link" target="_blank" href="https://www.test.if.ua/" style="color: #181810;">Івано-Франківський регіональний центр оцінювання якості освіти</a>
      <hr>
    </body>
</html>

