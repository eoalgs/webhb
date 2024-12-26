<?php
include "ketnoi.php";

// Fetch the number of students in each class
$sql = "SELECT lop, COUNT(*) as sohocsinh FROM hocsinh GROUP BY lop";
$result = mysqli_query($conn, $sql);

$students = array();
while($row = mysqli_fetch_assoc($result)) {
    $students[] = $row;
}

echo json_encode($students);
?>