<?php
echo "==connection test===<br>";
echo getenv('OPENSHIFT_MYSQL_DB_HOST'); // Host name
echo "=<br>";
echo getenv('OPENSHIFT_MYSQL_DB_PORT'); // Host port
echo "=<br>";
echo getenv('OPENSHIFT_MYSQL_DB_USERNAME'); // MySQL username
echo "=<br>";
echo getenv('OPENSHIFT_MYSQL_DB_PASSWORD'); // MySQL password
echo "=<br>";
echo getenv('OPENSHIFT_GEAR_NAME'); // Database name
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
echo "Connected successfully o yee";
?>
