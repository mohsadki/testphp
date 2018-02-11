<html>
<head>
<title>test openshift mysql </title>
</head>
<body>
        <h3>test apache2 http server at openshift redhat cloud platform<h3>
          <?php
          $servername = "172.30.19.227";
          $username = "msedw";
          $password = "msedw";

          // Create connection
          // $conn = new mysqli($servername, $username, $password);
          // redhat openshift mysql connection
          echo "=====aaaaaaa=====<br>";
          echo $MYSQL_USER;
          echo $MYSQL_PASSWORD;

          echo getenv('MYSQL_DATABASE');
          echo "=<br>";
          echo getenv('MYSQL_USER');
          echo "=<br>";
          echo getenv('MYSQL_PASSWORD');
          echo "=<br>";

          echo getenv('OPENSHIFT_MYSQL_DB_HOST'); // Host name
          echo "=<br>";
          echo getenv('OPENSHIFT_MYSQL_DB_PORT'); // Host port
          echo "=<br>";
          echo getenv('OPENSHIFT_MYSQL_DB_USERNAME'); // MySQL username
          echo "=<br>";
          echo getenv('OPENSHIFT_MYSQL_DB_PASSWORD'); // MySQL password
          echo "=<br>";
          echo getenv('OPENSHIFT_GEAR_NAME'); // Database name

          echo "================<br>";
          $conn = new mysqli("172.30.19.227","msedw","msedw");
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
