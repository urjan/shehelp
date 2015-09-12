<?php
$con=mysql_connect("localhost","root","") or die("Error1");
$s=mysql_select_db("durga") or die("Error2");
$a=$_POST["t1"];
$b=$_POST["t2"];
$c=$_POST["t4"];
$d=$_POST["t5"];
$e=$_POST["t6"];
$f=$_POST["t7"];
$r=mysql_query("insert into registration(name,phone,c1,c2,area,police) values('$a','$b','$c','$d','$e','$f');") or die("Error2");
header('Location: /first.html');
mysql_close($con);
?>
