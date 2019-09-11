<?php

$nm=isset($_GET['nm']);


$h="localhost";
$dbuname="root";
$dbpass="";
$dbname="mobilephone";

$con=new mysqli($h,$dbuname,$dbpass,$dbname);


$sql="SELECT * FROM lname ";
$result =$con->query($sql);

if ($result->num_rows>0){

while($row=$result->fetch_assoc())
{
        $n=$row['Lname'];
        $n= preg_replace('/\s+/', '', $n);
        echo "<button class='btn' onclick=f2(this.value) value='$n' >" .$row['Lname']. "</button></br>";
}
}

$con->close();
?>
