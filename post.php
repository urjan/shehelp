<?php
$con=mysql_connect("localhost","root","") or die("Error1");
$s=mysql_select_db("durga") or die("Error2");
$a=$_POST["comment"];
$r=mysql_query("insert into durga2(comment) values('$a');") or die("Error2");
mysql_close($con);
header('Location: /first.html');
?>

