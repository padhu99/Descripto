<?php
$nm=$_GET['nm'];

$h="localhost";
$dbuname="root";
$dbpass="";
$dbname="msi";

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
             <th>PROCESSOR:</th>";
        echo  "<td>" . $row['processor'] . "</td>";
        echo"</tr>
             <tr>
             <th>RAM:</th>";
            echo "<td>" . $row['ram'] . "</td>";
        echo"</tr>
             <tr>
             <th>MEMORY:</th>";
        echo  "<td>" . $row['memory'] . "</td>";
        echo"</tr>
              <tr>
              <th>GRAPHICS:</th>";
        echo"<td>" . $row['graphics'] . "</td>";
        echo"</tr>
              <tr>
              <th>SIZE:</th>";
        echo"<td>" . $row['size'] . "</td>";
        echo"</tr>
              <tr>
              <th>PRICE:</th>";
        echo"<td>" . $row['price'] . "</td>";
        echo    "</tr>";






    }
}
echo "</table>";
$con->close();
?>

