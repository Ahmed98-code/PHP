<?php
//how to connect and do a query


$conn = new mysqli('localhost', 'jaydeep_mor', 'jaydeep_mor', 'jaydeep_mor');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    echo "error";
} 
else{
    echo "conn successful";
}
$sql = "SELECT app_ref_person_submitted_by
        FROM vacancy_applications
        WHERE app_ref_vacancy = 306";

$result = $conn->query($sql);

while($row = $result->fetch_array()){
    echo $row['app_ref_person_submitted_by'];
}

$conn-> close();
?>