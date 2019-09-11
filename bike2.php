<?php
$nm=$_GET['nm'];

$h="localhost";
$dbuname="root";
$dbpass="";
$dbname="bike";

$con=new mysqli($h,$dbuname,$dbpass,$dbname);


$sql="SELECT * FROM prac WHERE pname='$nm' ";
$result =$con->query($sql);

if ($result->num_rows>0) {
    while ($row = $result->fetch_assoc()) {
        echo "<table id='tab'> <tr>
             <th>NAME:</th>";
        echo  "<td>" . $row['pname'] . "</td>";
        echo "</tr>
             <tr>
             <th>ENGINEDISPLACEMENT:</th>";
        echo  "<td>" . $row['enginedisp'] . "</td>";
        echo"</tr>
             <tr>
             <th>POWER:</th>";
            echo "<td>" . $row['power'] . "</td>";
        echo"</tr>
             <tr>
             <th>MILEAGE:</th>";
        echo  "<td>" . $row['mileage'] . "</td>";
        echo"</tr>
              <tr>
              <th>HEADLAMP:</th>";
        echo"<td>" . $row['headlamp'] . "</td>";
        echo    "</tr>
              <tr>
             <th>PRICE:</th>";
        echo  "<td>" . $row['price'] . "</td>";
        echo"</tr>
              <tr>
             <th>NUMBEROFGEARS:</th>";
            echo "<td>" . $row['numofgears'] . "</td>";
        echo"</tr>
             <tr>
             <th>ABS:</th>";
            echo "<td>" . $row['ABS'] . "</td>";
        echo"</tr>";               






    }
}
echo "</table>";
$con->close();
?>

