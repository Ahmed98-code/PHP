<?php
include 'db_connection.php';

$conn = OpenCon();

$sql = "SELECT id
        FROM users
        WHERE city = Milan";

$result = $conn->query($sql);

while($row = $result->fetch_array()){
    echo $row['id'];
}

echo "Connected Successfully";

CloseCon($conn);

?>