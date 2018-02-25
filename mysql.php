<html>
<head>
<title>test openshift mysql </title>
</head>
<body>
        <h3>MySQL<h3>
          <?php
          $conn = new mysqli("mysql.p8.svc","usrmsed","mysql.p8.svc","paswmsed","3306");
          // Check connection
          if ($conn->connect_error) {
              echo "Connection failed !";
              echo $conn->connect_error;
              die("Connection failed: " . $conn->connect_error);
          }
          echo "Connected successfully o yee";
          echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

          ?>

</body>
</html>
