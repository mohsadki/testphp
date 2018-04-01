<?php
$PHP_EOL = '<br>';
$conn = mysqli_connect(
    getenv('MYSQL_SERVICE_HOST'),
    getenv('MYSQL_USER'),
    getenv('MYSQL_PASSWORD'),
    getenv('MYSQL_DATABASE'),
    "3306"
);

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . $PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . $PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . $PHP_EOL;
} else {
    echo "Connected successfully" . $PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($conn) . $PHP_EOL;
    $sql = "select * from items";
  if ($result = mysqli_query($conn, $sql)) {
      while ($row = mysqli_fetch_row($result)) {
          printf("%s (%s,%s,%s)<br>", $row[0], $row[1], $row[2], $row[3]);
      }
      /* free result set */
      mysqli_free_result($result);
  }
}


$conn->close();
?>
