<?php
mysql_connect('localhost','root','');
mysql_select_db('school');
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$sql="SELECT * FROM `mark-entry` WHERE username='$user' AND password='$pass' ";
$res=mysql_query($sql);
$num=mysql_num_rows($res);
if($num==1)
{
include 'home.php';
print"
<br><br>
<html>
<center>
SELECT YOUR CHOICE:
<br><br>
<form action='mark-entry2.php' method='post' name='upload_excel' enctype='multipart/form-data'>
<select name='class'>
<option value='personal'>PERSONAL-DETAILS UPLOAD</option>
<option value='6to10'>6 to 10 MARK UPLOAD</option>
<option value='11to12'>11 to 12 MARK UPLOAD</option>
</select>
<br><br>
 <input type='file' name='file' id='file' class='input-large form-control'>
<br><br>
<input type='submit' value='UPLOAD'>
</form>
</center>
</html>
";
}

else
{
header('Location:mark-entry.php');
}
?>