<?php
mysql_connect('localhost','root','');
mysql_select_db('school');

include 'school-officials-header.php';

print"
<br><br>
<center>
<form action='top_list1.php' method='POST'>
<table><td>
ENTER-TOP-<input type='text' name='num'>
CLASS-<input type='text' name='cls'>";

$sql="SELECT DISTINCT `type-of-test` FROM `tenth-std` WHERE 1";
$res=mysql_query($sql);

print"TYPE-OF-TEST:";
print"<select name='type'>";
while($row=mysql_fetch_array($res))
{
$v=$row['type-of-test'];
print"<option value='$v'>$v</option>";
}
print"</select>";


print"</td>
</table>
<br>
<input type='submit' value='SUBMIT'>
</form>
</center>";



?>