<?php

$pname=$_POST["search"];
$pr=trim($pname);
$h="localhost";
$dbuname="root";
$dbpass="";
$dbname="vj";

$conn=new mysqli ($h,$dbuname,$dbpass,$dbname);



 
    $sql1 = "SELECT html FROM product WHERE name='$pr'";
    $result = $conn->query($sql1);

if ($result->num_rows > 0) 
{
 
    while($row = $result->fetch_assoc())
    {
        include($row["html"]);
    }
}      



$conn->close();


?>


