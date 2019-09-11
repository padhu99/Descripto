<?php
$nm=$_GET['nm'];

$h="localhost";
$dbuname="root";
$dbpass="";
$dbname="hp";

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
             <th>PRICE:</th>";
            echo "<td>" . $row['price'] . "</td>";
        echo"</tr>
             <tr>
             <th>PROCESSOR:</th>";
        echo  "<td>" . $row['Processor'] . "</td>";
        echo"</tr>
              <tr>
              <th>SCREEN SIZE:</th>";
        echo"<td>" . $row['Screen size'] . "</td>";
		 echo"</tr>
             <tr>
             <th>GRAPHICS:</th>";
        echo  "<td>" . $row['Graphics'] . "</td>";
		 echo"</tr>
             <tr>
             <th>OPERATING SYSTEM:</th>";
        echo  "<td>" . $row['OS'] . "</td>";
		 echo"</tr>
             <tr>
             <th>HARD DRIVE:</th>";
        echo  "<td>" . $row['Hard drive'] . "</td>";
        echo    "</tr>";






    }
}
echo "</table>";
$con->close();
?>

