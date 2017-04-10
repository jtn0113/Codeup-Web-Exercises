<?php 

require 'db_connect.php';

$dropIt = 'drop table if exists national_parks';

$dbc->exec($dropIt);

$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(240) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_established date NOT NULL,
	area_in_acres double NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);










 ?>