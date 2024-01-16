<?php
$name=$_POST["nm"];
$email=$_POST["email"];
$gender=$_POST["r1"];
$contact=$_POST["contact"];
$city=$_POST["city"];
$con=new mysqli("localhost","root", "","college");
$r=$con->query("insert into student(name,email,gender,contact,city) values('$name','$email','$gender','$contact','$city')");
if($r)
echo"data inserted successfully";
else
echo"not inserted";
?>