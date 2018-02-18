<?php
$conn = new mysqli(
    getenv('OPENSHIFT_MYSQL_DB_HOST'),
    getenv('OPENSHIFT_MYSQL_DB_USERNAME'),
    getenv('OPENSHIFT_MYSQL_DB_HOST'),
    getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
    getenv('OPENSHIFT_MYSQL_DB_PORT')
);

if ($conn->connect_error) {
    echo "Connection failed !";
    echo $conn->connect_error;
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "select id, title, detail, ts from items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - title: " . $row["title"]. " - detail: " . $row["detail"].  " -date: " . $row["ts"]. "<br>";
    }
} else {
    echo "0 results";
}
$mysqli->close();
?>
