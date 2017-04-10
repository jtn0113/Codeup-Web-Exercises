<?php
require __DIR__ . '/db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS), PHP_EOL;

?>