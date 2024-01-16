<?php
$con=new mysqli("localhost","root","","college");

$result=$con->query("select * from student");
echo "<table border='1' align='center' celspacing='0' celpadding='10'>";

echo "<tr> <th>Id</th><th>Name</th><th>Email</th><th>Gender</th><th>Contact</th><th>City</th> </tr>";

while($row=$result->fetch_array()){
    echo "<tr><td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo "<td>$row[5]</td></tr>";
}



?>