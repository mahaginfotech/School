
<?php
include 'home.php';
print "<br><br>";
?>
<html>
<style> 
input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #555;
    outline: none;
}

input[type=password]:focus {
    background-color: lightblue;
}
input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 1px solid #555;
    outline: none;
}

input[type=text]:focus {
    background-color: lightblue;
}
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
<center>

<form action='school-officials.php' method='post'>
<table>
<td>USERNAME:<input type='text' name='user'></td>
<td>PASSWORD:<input type='password' name='pass'></td>
</table>
<br><br>
<button class="button1"><span>LOGIN </span></button>
</from>
</center>
</html>