<?php

$conn = mysqli_connect(
    getenv('OPENSHIFT_MYSQL_DB_HOST'),
    getenv('OPENSHIFT_MYSQL_DB_USERNAME'),
    getenv('OPENSHIFT_MYSQL_DB_HOST'),
    getenv('OPENSHIFT_MYSQL_DB_PASSWORD'),
    getenv('OPENSHIFT_MYSQL_DB_PORT')
);

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
}
echo "Connected successfully";
echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

$sql = "select * from items";

if ($result = mysqli_query($conn, $sql)) {
    while ($row = mysqli_fetch_row($result)) {
        printf("%s (%s,%s)\n", $row[0], $row[1], $row[2], $row[3]);
    }
    /* free result set */
    mysqli_free_result($result);
}

$conn->close();
?>
