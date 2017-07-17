<?php

mysql_connect('localhost','root','');
mysql_select_db('school');

include 'school-officials-header.php';

$name=$_REQUEST['user'];
$addno=$_REQUEST['admn'];
$class=$_REQUEST['cls'];
$sec=$_REQUEST['sec'];


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


$sql="SELECT * FROM `personal-details` WHERE `admn-no`='$addno'";
$res=mysql_query($sql);
	
	while($row=mysql_fetch_array($res))
	{
		$n=$row['name'];
		$a=$row['admn-no'];
		$f=$row['fathers-name'];
		$fo=$row['fathers-occupation'];
		$ad=$row['address'];
		$p=$row['phone-number'];
		$ph=$row['photo'];
		

		print"<div align='left|justify'>
		<br>
		<br> 
		<table>
		NAME:$n;
		<br>
		ADD-NO:$a;
		<br>
		CLASS:$c;
		<br>
		SECTION:$sec
		<br>
		FATHERS-NAME:$f;
		<br>
		FATHERS-OCCUPATION:$fo;
		<br>
		ADDRESS:$ad;
		<br>
		PHONE-NO:$p;
		</table>
		</div>";

		print"<div align='right' style='position: absolute; top: 185px;left:1150px'>
		<img src='http://localhost/school/images/$ph.jpg' height='120' width='120'></img>
		</div>";
	}

print"<br><br>";
if($class>=6&&$class<=10)
{

$sql="SELECT * FROM `tenth-std` WHERE `admn-no`='$addno'";
$res=mysql_query($sql);
print"
<table border='2'>
<tr>
<th>TYPE-OF-TEST</th>
<th>TAMIL</th>
<th>ENGLISH</th>
<th>MATHS</th>
<th>SCIENCE</th>
<th>SOCIAL</th>
<th>TOTAL</th>
</tr>
";
while($row=mysql_fetch_array($res))
	{
		$t=$row['type-of-test'];
		$ta=$row['tamil'];
		$en=$row['english'];
		$ma=$row['maths'];
		$sc=$row['science'];
		$ss=$row['social'];
		$to=$row['total'];
		print"
		<tr>
		<td>$t</td>
		<td>$ta</td>
		<td>$en</td>
		<td>$ma</td>
		<td>$sc</td>
		<td>$ss</td>
		<td>$to</td>
		</tr>
		";
	}


print"</table>";
}

if($class>=11&&$class<=12)
{

$sql="SELECT * FROM `twelve-std` WHERE `admn-no`='$addno'";
$res=mysql_query($sql);
print"
<table border='2'>
<tr>
<th>TYPE-OF-TEST</th>
<th>TAMIL</th>
<th>ENGLISH</th>
<th>MATHS</th>
<th>PHYSICS</th>
<th>CHEMISTRY</th>
<th>BIO/CSE</th>
<th>TOTAL</th>
</tr>
";
while($row=mysql_fetch_array($res))
	{
		$t=$row['type-of-test'];
		$ta=$row['tamil'];
		$en=$row['english'];
		$ma=$row['maths'];
		$sc=$row['physics'];
		$ss=$row['chemistry'];
		$b=$row['bio/cse'];
		$to=$row['total'];
		print"
		<tr>
		<td>$t</td>
		<td>$ta</td>
		<td>$en</td>
		<td>$ma</td>
		<td>$sc</td>
		<td>$ss</td>
		<td>$b</td>
		<td>$to</td>
		</tr>
		";
	}


print"</table>";
}
?>