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

?>
