<?php

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'employees');

define('DB_USER', 'james88');

define('DB_PASS', 'underc0ver');

require 'inc/db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$dbc->exec(
	'CREATE TABLE users (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(240) NOT NULL,
    name VARCHAR(50) NOT NULL,
    PRIMARY KEY (id)
	)'
);

?>