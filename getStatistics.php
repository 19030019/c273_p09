<?php

include "dbFunctions.php";

// SQL query returns multiple database records.
$results = array();
$query = "SELECT * FROM statistics";
$result = mysqli_query($link, $query);

while($row = mysqli_fetch_assoc($result)){
        $results[] = $row;
}
mysqli_close($link);

echo json_encode($results);
?>

