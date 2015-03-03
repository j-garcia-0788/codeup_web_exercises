<?php 

define('DB_HOST', '127.0.0.1');

define('DB_NAME', 'national_parks_db');

define('DB_USER', 'np_user');

define('DB_PASS', 'denali');

require 'inc/db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

$parks = [
    ['name' => 'Acadia', 'location' => 'Maine', 'date_established' => '1919-02-26', 'area_in_acres' => '47389.67', 'description' => 'Woodlands and tallest mountain on North American continent.'],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => '76518.98', 'description' => 'Features more than 2000 natural sandstone arches.'],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => '242755.94', 'description' => 'Features rich fossil beds from the Oligocene Epoch.'],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21', 'description' => 'The bend in the Rio Grande in Texas.'],
    ['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1930-5-14', 'area_in_acres' => '46766.45', 'description' => 'System of caves.'],
    ['name' => 'Channel Islands', 'location' => 'California', 'date_established' => '1980-03-05', 'area_in_acres' => '249561.00', 'description' => 'Islands.'],
    ['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-11', 'area_in_acres' => '530922.00', 'description' => 'A lake in a caldera.'],
    ['name' => 'Denali', 'location' => 'Alaska', 'date_established' => '1917-02-26', 'area_in_acres' => '4740911.72', 'description' => 'Contains Mt. Mckinley and glaciers.'],
    ['name' => 'Everglades', 'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => '1508537.90', 'description' => 'The swamps of Florida.'],
    ['name' => 'Glacier', 'location' => 'Montana', 'date_established' => '1910-05-11', 'area_in_acres' => '1013572.41', 'description' => 'Receding glaciers due to global warming.'],
];

$numparks = $dbc->exec('DELETE FROM national_parks');
    echo "Deleted $numparks rows\n";

$stmt = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) 
                        VALUES (:name, :location, :date_established, :area_in_acres, :description)');

foreach ($parks as $park) {
    $stmt->bindValue(':name', $park['name'], PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'], PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'], PDO::PARAM_STR);

    $stmt->execute();
    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

}

?>