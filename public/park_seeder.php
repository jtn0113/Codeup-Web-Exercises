<?php 

require 'db_connect.php';

$query = 'delete from national_parks';

$dbc->exec($query);

$parks =  [

	[
		'name'=>'Zion', 
		'location'=>'Utah', 
		'date_established'=>'1919-11-19',
		'area_in_acres'=>'147237.02'
	],
	[
		'name'=>'Wrangell-St. Elias', 
		'location'=>'Alaska', 
		'date_established'=>'1980-12-02',
		'area_in_acres'=>'8323146.48'
	],
	[
		'name'=>'Voyageurs', 
		'location'=>'Minnesota', 
		'date_established'=>'1971-01-08',
		'area_in_acres'=>'218200.15'
	],
	[
		'name'=>'Virgin Islands', 
		'location'=>'U.S. Virgin Islands', 
		'date_established'=>'1956-08-02',
		'area_in_acres'=>'14948.46'
	],
	[
		'name'=>'Theodore Roosevelt', 
		'location'=>'North Dakota', 
		'date_established'=>'1978-11-10',
		'area_in_acres'=>'70446.89'
	],
	[
		'name'=>'Shenandoah', 
		'location'=>'Virginia', 
		'date_established'=>'1926-05-22',
		'area_in_acres'=>'199116.92'
	],
	[
		'name'=>'Saguaro', 
		'location'=>'Arizona', 
		'date_established'=>'1994-10-14',
		'area_in_acres'=>'91442.42'
	],
	[
       'name' => 'Everglades',
       'location' => 'Florida',
       'date_established' => '1934-05-30',
       'area_in_acres' => '1508975.57'
   ],
   [
       'name' => 'Great Sand Dunes',
       'location' => 'Colorado',
       'date_established' => '2004-12-09',
       'area_in_acres' => '107301.87'
   ],
   [
       'name' => 'Dry Tortugas',
       'location' => 'Florida',
       'date_established' => '1992-10-26',
       'area_in_acres' => '64701.22'
   ],
   [
       'name' => 'Congaree',
       'location' => 'South Carolina',
       'date_established' => '2003-10-11',
       'area_in_acres' => '26275.82'
   ]
];

foreach($parks as $park) {
	$query = "INSERT INTO national_parks(name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";
	$dbc->exec($query);
};






 ?>