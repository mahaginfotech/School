<?php
include 'home.php';

mysql_connect('localhost','root','');
mysql_select_db('school');
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$sql="SELECT * FROM `school-officials` WHERE username='$user' AND password='$pass' ";
$res=mysql_query($sql);
$num=mysql_num_rows($res);

if($num==1)
{
print"
<html>
<center>
<br><br>
<table>
<td>
<form action='top_list.php'>
<button class='button1'><span>TOP-LIST </span></button>
</form></td>


<td><form action='student_report.php'>
<button class='button1'><span>STUDENT-REPORT </span></button>
</form></td>


</table>
</center>
</html>";
}
else
header('Location:school-entry.php');
?>
<html>
<style> 
.button1 {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
<html>