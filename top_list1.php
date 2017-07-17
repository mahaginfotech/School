<?php
mysql_connect('localhost','root','');
mysql_select_db('school');

include 'school-officials-header.php';

$limit=$_REQUEST['num'];
$class=$_REQUEST['cls'];
$type=$_REQUEST['type'];

if($class==6)
$c='VI';
if($class==7)
$c='VII';
if($class==8)
$c='VIII';
if($class==9)
$c='IX';
if($class==10)
$c='X';
if($class==11)
$c='XI';
if($class==12)
$c='XII';

if($class>=6&&$class<=10)
{

$sql="SELECT * FROM `tenth-std` WHERE class='$c' AND `type-of-test`='$type' ORDER BY total DESC LIMIT $limit";
$res=mysql_query($sql);
print"
<table border='2'>
<tr>
<th>NAME</th><th>ADMISSION-NO</th><th>CLASS</th><th>SECTION</th>
<th>TAMIL</th><th>ENGLISH</th><th>MATHS</th><th>SCIENCE</th><th>SOCIAL</th>
<th>TOTAL</th>
</tr>
";
while($row=mysql_fetch_array($res))
{
$name=$row['name'];
$admno=$row['admn-no'];
$class=$row['class'];
$sec=$row['section'];
$t=$row['tamil'];
$e=$row['english'];
$m=$row['maths'];
$s=$row['science'];
$ss=$row['social'];
$to=$row['total'];

print"<tr>
<td>$name</td>
<td>$admno</td>
<td>$class</td>
<td>$sec</td>
<td>$t</td>
<td>$e</td>
<td>$m</td>
<td>$s</td>
<td>$ss</td>
<td>$to</td>
</tr>";
}
print"</table>";

}

if($class>=11&&$class<=12)
{


$sql="SELECT * FROM `twelve-std` WHERE class='$c' AND `type-of-test`='$type' ORDER BY total DESC LIMIT $limit";
$res=mysql_query($sql);
print"
<table border='2'>
<tr>
<th>NAME</th><th>ADMISSION-NO</th><th>CLASS</th><th>SECTION</th>
<th>TAMIL</th><th>ENGLISH</th><th>MATHS</th><th>PHYSICS</th><th>CHEMISTRY</th><th>BIOLOGY/COMPUTER</th>
<th>TOTAL</th>
</tr>
";
while($row=mysql_fetch_array($res))
{
$name=$row['name'];
$admno=$row['admn-no'];
$class=$row['class'];
$sec=$row['section'];
$t=$row['tamil'];
$e=$row['english'];
$m=$row['maths'];
$s=$row['physics'];
$ss=$row['chemistry'];
$b=$row['bio/cse'];
$to=$row['total'];

print"<tr>
<td>$name</td>
<td>$admno</td>
<td>$class</td>
<td>$sec</td>
<td>$t</td>
<td>$e</td>
<td>$m</td>
<td>$s</td>
<td>$ss</td>
<td>$b</td>
<td>$to</td>
</tr>";
}
print"</table>";

}
?>