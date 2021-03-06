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
    $sql = "select * from items";
    $i = 0;
    $json = array();
  if ($result = mysqli_query($conn, $sql)) {
      while ($row = mysqli_fetch_row($result)) {
          $json[$i] = new stdClass(); //the magic
          $json[$i]->id = $row[0];
          $json[$i]->titr = $row[1];
          $json[$i]->det = $row[2];
          $json[$i]->dat = $row[3];
          $i++;
      }
      /* free result set */
      mysqli_free_result($result);
  }
}
$myJSON = json_encode($json);
header('Content-type: application/json');
echo $myJSON;
$conn->close();
?>
