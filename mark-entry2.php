<?php
mysql_connect('localhost','root','');
mysql_select_db('school');
include 'home.php';
print"<br><br>";

$choice=$_REQUEST['class'];

echo $filename=$_FILES['file']['tmp_name'];

	if($_FILES['file']['size'] > 0)
{

$file = fopen($filename, "r");

	while (($emapData = fgetcsv($file, 10000, ",")) !== FALSE)
	{
		if($choice=='personal')
		{
		$sql = "INSERT INTO `personal-details`(`name`, `admn-no`, `fathers-name`, `fathers-occupation`, `address`, `phone-number`, `photo`)  values 		('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]','$emapData[5]','$emapData[6]')";
		if(mysql_query($sql))
		print"<h1>entered</h1>";
		}

		if($choice=='6to10')
		{
		$sql = "INSERT INTO `tenth-std`(`name`, `admn-no`, `class`, `section`, `type-of-test`, `tamil`, `english`, `maths`, `science`, `social`, `total`)  values 		('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]',$emapData[5],$emapData[6],$emapData[7],$emapData[8],$emapData[9],		$emapData[10])";
		if(mysql_query($sql))
		print"<h1>entered</h1>";
		}
		
		if($choice=='11to12')
		{
		$sql = "INSERT INTO `twelve-std`(`name`, `admn-no`, `class`, `section`, `type-of-test`, `tamil`, `english`, `maths`, `physics`, `chemistry`, `bio/cse`, `total`) 		values ('$emapData[0]','$emapData[1]','$emapData[2]','$emapData[3]','$emapData[4]',$emapData[5],$emapData[6],$emapData[7],$emapData[8],$emapData[9],		$emapData[10],$emapData[11])";
		if(mysql_query($sql))
		print"<h1>entered</h1>";
		}

	}
}


?>