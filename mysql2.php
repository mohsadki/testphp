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
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

$sql = "select * from items";

if ($result = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_row($result)) {
        printf("%s (%s,%s)\n", $row[0], $row[1], $row[2]);
    }
    /* free result set */
    mysqli_free_result($result);
}



//$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - title: " . $row["title"]. " - detail: " . $row["detail"].  " -date: " . $row["ts"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
