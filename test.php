<?php

include_once 'connection.php';

$sql = "SELECT Cname FROM parts where Ci7=1 ";
$result = mysqli_query( $conn , $sql );

while ($row = $result->fetch_assoc()) {
    echo $row['Cname']."<br>";
}

 ?>
