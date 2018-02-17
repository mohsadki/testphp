<html>
<head>
<title>test openshift mysql </title>
</head>
<body>
        <h3>MySQL<h3>
          <?php
          $conn = new mysqli("172.30.24.45","userI4C","172.30.24.45","GSEAAHLQx1mP8nCy","3306");
          // Check connection
          if ($conn->connect_error) {
              echo "Connection failed !";
              echo $conn->connect_error;
              die("Connection failed: " . $conn->connect_error);
          }
          echo "Connected successfully o yee";

          ?>

</body>
</html>
