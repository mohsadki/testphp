<html>
  <head>
  <title>test mysql </title>
  </head>
  <body>
              <h3>test apache2 http server at openshift redhat cloud platform<h3>
                <?php
                $servername = "localhost";
                $username = "msedw";
                $password = "msedw";

                // Create connection
                $conn = new mysqli($servername, $username, $password);

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
