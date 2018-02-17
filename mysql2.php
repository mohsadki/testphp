<?php
echo "==connection test===<br>";
echo $OPENSHIFT_MYSQL_DB_HOST; // Host name
echo "=<br>";
echo $OPENSHIFT_MYSQL_DB_PORT; // Host port
echo "=<br>";
echo $OPENSHIFT_MYSQL_DB_USERNAME; // MySQL username
echo "=<br>";
echo $OPENSHIFT_MYSQL_DB_PASSWORD; // MySQL password
echo "=<br>";
echo $OPENSHIFT_GEAR_NAME; // Database name
echo "=<br>";
// procedural style
$mysqli = mysqli_connect(
    getenv('OPENSHIFT_MYSQL_DB_HOST'),
    getenv('OPENSHIFT_MYSQL_DB_USERNAME'),
    getenv('OPENSHIFT_MYSQL_DB_HOST'),
    getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
    getenv('OPENSHIFT_MYSQL_DB_PORT')
);

if ($mysqli->connect_error) {
    echo "Connection failed !";
    echo $conn->connect_error;
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$mysqli->close();
?>
