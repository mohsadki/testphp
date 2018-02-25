<html>
<head>
<title>test openshift mysql </title>
</head>
<body>
        <h3>MySQL<h3>
          <?php
          $PHP_EOL = '<br>';
          $conn = new mysqli("mysql.p8.svc","phpuser","mysql.p8.svc","phppasw","3306");
          // Check connection
          if ($conn->connect_error) {
              echo "Error: Unable to connect to MySQL." . PHP_EOL;
              echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
              echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
              echo "Connection failed !" . PHP_EOL;
              echo $conn->connect_error;
              die("Connection failed: " . $conn->connect_error);
          }
          echo "Connected successfully o yee";
          echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

          ?>

</body>
</html>
