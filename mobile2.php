<?php
$nm=$_GET['nm'];

$h="localhost";
$dbuname="root";
$dbpass="";
$dbname="mobilephone";

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
             <th>RAM:</th>";
        echo  "<td>" . $row['ram'] . "</td>";
        echo"</tr>
             <tr>
             <th>STORAGE:</th>";
            echo "<td>" . $row['storage'] . "</td>";
        echo"</tr>
             <tr>
             <th>CAMERASPEC:</th>";
        echo  "<td>" . $row['cameraspec'] . "</td>";
        echo"</tr>
               <tr>
              <th>PRICE:</th>";
        echo"<td>" . $row['price'] . "</td>";
        echo    "</tr
             <tr>
             <th>COLOUR:</th>";
        echo  "<td>" . $row['colour'] . "</td>";
        echo"</tr>
              <tr>
             <th>DISPLAY:</th>";
        echo  "<td>" . $row['display'] . "</td>";
        echo"</tr>
             <tr>
             <th>PROCESSOR:</th>";
        echo  "<td>" . $row['processor'] . "</td>";
        echo"</tr>";





    }
}
echo "</table>";
$con->close();
?>

