<?php 

require 'db_connect.php';

$query = 'delete from national_parks';

$dbc->exec($query);

$parks =  [

	[
		'name'=>'Zion', 
		'location'=>'Utah', 
		'date_established'=>'1919-11-19',
		'area_in_acres'=>'147237.02',
		'description'=>'Zion National Park is located in the Southwestern United States, near Springdale, Utah.'
	],
	[
		'name'=>'Acadia', 
		'location'=>'Maine', 
		'date_established'=>'1919-02-26',
		'area_in_acres'=>'48995.91',
		'description'=>'Acadia National Park is a national park located in the U.S. state of Maine.'
	],
	[
		'name'=>'Wrangell-St. Elias', 
		'location'=>'Alaska', 
		'date_established'=>'1980-12-02',
		'area_in_acres'=>'8323146.48',
		'description'=>'Wrangell–St. Elias National Park and Preserve is a United States national park and national preserve managed by the National Park Service in south central Alaska.'
	],
	[
		'name'=>'Voyageurs', 
		'location'=>'Minnesota', 
		'date_established'=>'1971-01-08',
		'area_in_acres'=>'218200.15',
		'description'=>'Voyageurs National Park is a United States National Park in northern Minnesota near the town of International Falls established in 1975. The park\'\'s name commemorates the voyageurs, French-Canadian fur traders who were the first European settlers to frequently travel through the area.'
	],
	[
		'name'=>'Virgin Islands', 
		'location'=>'U.S. Virgin Islands', 
		'date_established'=>'1956-08-02',
		'area_in_acres'=>'14948.46',
		'description'=>'The Virgin Islands National Park is a United States National Park, covering approximately 60% of the island of Saint John in the United States Virgin Islands, over 5,500 acres of adjacent ocean, plus nearly all of Hassel Island, just off the Charlotte Amalie, Saint Thomas harbor.'
	],
	[
		'name'=>'Theodore Roosevelt', 
		'location'=>'North Dakota', 
		'date_established'=>'1978-11-10',
		'area_in_acres'=>'70446.89',
		'description'=>'Theodore Roosevelt National Park is a United States National Park comprising three geographically separated areas of badlands in western North Dakota.'
	],
	[
		'name'=>'Shenandoah', 
		'location'=>'Virginia', 
		'date_established'=>'1926-05-22',
		'area_in_acres'=>'199116.92',
		'description'=>'Shenandoah National Park is a national park which encompasses part of the Blue Ridge Mountains in the U.S. state of Virginia.'
	],
	[
		'name'=>'Saguaro', 
		'location'=>'Arizona', 
		'date_established'=>'1994-10-14',
		'area_in_acres'=>'91442.42',
		'description'=>'Saguaro National Park in southern Arizona is part of the National Park System in the United States. The park preserves the desert landscape, fauna, and flora in two park districts, one east and the other west of Tucson.'
	],
	[
       'name' => 'Everglades',
       'location' => 'Florida',
       'date_established' => '1934-05-30',
       'area_in_acres' => '1508975.57',
       'description'=>'Everglades National Park is a U.S. National Park in Florida that protects the southern 20 percent of the original Everglades.'
   ],
   [
       'name' => 'Great Sand Dunes',
       'location' => 'Colorado',
       'date_established' => '2004-12-09',
       'area_in_acres' => '107301.87',
       'description'=>'Great Sand Dunes National Park and Preserve is a United States National Park located in the San Luis Valley, in the easternmost parts of Alamosa County and Saguache County, Colorado, United States.'
   ],
   [
       'name' => 'Dry Tortugas',
       'location' => 'Florida',
       'date_established' => '1992-10-26',
       'area_in_acres' => '64701.22',
       'description'=>'Dry Tortugas National Park is a national park in the United States about 68 miles (109 km) west of Key West in the Gulf of Mexico.'
   ],
   [
       'name' => 'Congaree',
       'location' => 'South Carolina',
       'date_established' => '2003-10-11',
       'area_in_acres' => '26275.82',
       'description'=>'Congaree National Park preserves the largest tract of old growth bottomland hardwood forest left in the United States.'
   ],
   [
		'name'=>'American Samoa', 
		'location'=>'American Samoa', 
		'date_established'=>'1988-10-31',
		'area_in_acres'=>'8256.67',
		'description'=>'The National Park of American Samoa is a National Park in the United States Territory of American Samoa, distributed across three separate islands: Tutuila, Ofu, and Ta‘ū.'
	],
	[
		'name'=>'Arches', 
		'location'=>'Utah', 
		'date_established'=>'1971-11-12',
		'area_in_acres'=>'76678.98',
		'description'=>'Arches National Park is a US National Park in eastern Utah. The park is adjacent to the Colorado River, 4 miles (6 km) north of Moab, Utah.'
	],
	[
		'name'=>'Badlands', 
		'location'=>'South Dakota', 
		'date_established'=>'1978-11-10',
		'area_in_acres'=>'242755.94',
		'description'=>'Badlands National Park is a national park in southwestern South Dakota that protects 242,756 acres (379.306 sq mi; 98,240 ha) of sharply eroded buttes, pinnacles, and spires blended with the largest undisturbed mixed grass prairie in the United States.'
	],
	[
		'name'=>'Big Bend', 
		'location'=>'Texas', 
		'date_established'=>'1944-06-12',
		'area_in_acres'=>'801163.21',
		'description'=>'Big Bend National Park is a U.S. national park located in Southern Texas, bordering Mexico. It has national significance as the largest protected area of Chihuahuan Desert topography and ecology in the United States.'
	],
	[
		'name'=>'Biscayne', 
		'location'=>'Florida', 
		'date_established'=>'1980-06-28',
		'area_in_acres'=>'172971.11',
		'description'=>'Biscayne National Park is a U.S. National Park located in southern Florida, south of Miami.'
	],
	[
		'name'=>'Black Canyon of the Gunnison', 
		'location'=>'Colorado', 
		'date_established'=>'1999-10-21',
		'area_in_acres'=>'30749.75',
		'description'=>'Black Canyon of the Gunnison National Park is a United States National Park located in western Colorado and managed by the National Park Service.'
	],
	[
		'name'=>'Bryce Canyon', 
		'location'=>'Utah', 
		'date_established'=>'1928-02-25',
		'area_in_acres'=>'35835.08',
		'description'=>'Bryce Canyon National Park /ˈbraɪs/ is a National Park located in southwestern Utah in the United States.'
	],
	[
		'name'=>'Canyonlands', 
		'location'=>'Utah', 
		'date_established'=>'1964-09-12',
		'area_in_acres'=>'337597.83',
		'description'=>'Canyonlands National Park is a U.S. National Park located in southeastern Utah near the town of Moab.'
	],
	[
		'name'=>'Capitol Reef', 
		'location'=>'Utah', 
		'date_established'=>'1971-12-18',
		'area_in_acres'=>'241904.26',
		'description'=>'Capitol Reef National Park is a United States National Park, in south-central Utah.'
	],
	[
		'name'=>'Carlsbad Caverns', 
		'location'=>'New Mexico', 
		'date_established'=>'1930-05-14',
		'area_in_acres'=>'46766.45',
		'description'=>'Carlsbad Caverns National Park is a United States National Park in the Guadalupe Mountains of southeastern New Mexico.'
	],
	[
		'name'=>'Channel Islands', 
		'location'=>'California', 
		'date_established'=>'1980-03-05',
		'area_in_acres'=>'249561.00',
		'description'=>'Channel Islands National Park is a United States national park that consists of five of the eight Channel Islands off the coast of the U.S. state of California, in the Pacific Ocean.'
	],
	[
		'name'=>'Congaree', 
		'location'=>'South Carolina', 
		'date_established'=>'2003-11-10',
		'area_in_acres'=>'26275.82',
		'description'=>'Congaree National Park preserves the largest tract of old growth bottomland hardwood forest left in the United States.'
	],
	[
		'name'=>'Crater Lake', 
		'location'=>'Oregon', 
		'date_established'=>'1902-05-22',
		'area_in_acres'=>'183224.05',
		'description'=>'Crater Lake National Park is a United States National Park located in southern Oregon.'
	],
	[
		'name'=>'Cuyahoga Valley', 
		'location'=>'Ohio', 
		'date_established'=>'2000-10-11',
		'area_in_acres'=>'32950.00',
		'description'=>'Cuyahoga Valley National Park is a United States national park that preserves and reclaims the rural landscape along the Cuyahoga River between Akron and Cleveland in Northeast Ohio.'
	],
	[
		'name'=>'Death Valley', 
		'location'=>'California, Nevada', 
		'date_established'=>'1994-10-31',
		'area_in_acres'=>'3373063.14',
		'description'=>'Death Valley National Park is a national park in the United States. Straddling the border of California and Nevada, located east of the Sierra Nevada, it occupies an interface zone between the arid Great Basin and Mojave deserts in the United States.'
	],
	[
		'name'=>'Denali', 
		'location'=>'Alaska', 
		'date_established'=>'1917-02-26',
		'area_in_acres'=>'4740911.16',
		'description'=>'Denali National Park and Preserve is a national park and preserve located in Interior Alaska, centered on Denali, the highest mountain in North America.'
	],
	[
		'name'=>'Gates of the Arctic', 
		'location'=>'Alaska', 
		'date_established'=>'1980-12-02',
		'area_in_acres'=>'7523897.45',
		'description'=>'Gates of the Arctic National Park and Preserve is a U.S. National Park in Alaska. It is the northernmost national park in the U.S. (the entirety of the park lies north of the Arctic Circle) and the second largest at 8,472,506 acres (3,428,702 ha), slightly larger in area than Belgium.'
	],
	[
		'name'=>'Glacier', 
		'location'=>'Montana', 
		'date_established'=>'1910-05-11',
		'area_in_acres'=>'1013324.23',
		'description'=>'Glacier National Park is a national park located in the U.S. state of Montana, on the Canada–United States border with the Canadian provinces of Alberta and British Columbia.'
	],
	[
		'name'=>'Glacier Bay', 
		'location'=>'Alaska', 
		'date_established'=>'1980-12-02',
		'area_in_acres'=>'3223383.43',
		'description'=>'Glacier Bay National Park and Preserve is in the Alaska panhandle west of Juneau. President Calvin Coolidge proclaimed the area around Glacier Bay a national monument under the Antiquities Act on February 25, 1925.'
	],
	[
		'name'=>'Grand Canyon', 
		'location'=>'Arizona', 
		'date_established'=>'1919-02-26',
		'area_in_acres'=>'1201647.03',
		'description'=>'Grand Canyon National Park is the United States\'\' 15th oldest national park. Named a UNESCO World Heritage Site in 1979, the park is located in northwestern Arizona.'
	],
	[
		'name'=>'Grand Teton', 
		'location'=>'Wyoming', 
		'date_established'=>'1929-02-26',
		'area_in_acres'=>'310043.96',
		'description'=>'Grand Teton National Park is a United States National Park in northwestern Wyoming. At approximately 310,000 acres (480 sq mi; 130,000 ha; 1,300 km2), the park includes the major peaks of the 40-mile-long (64 km) Teton Range as well as most of the northern sections of the valley known as Jackson Hole.'
	],
	[
		'name'=>'Great Basin', 
		'location'=>'Nevada', 
		'date_established'=>'1986-10-27',
		'area_in_acres'=>'77180.00',
		'description'=>'Great Basin National Park is a United States National Park located in White Pine County in east-central Nevada, near the Utah border. The park was established in 1986.'
	],
	[
		'name'=>'Great Smoky Mountains', 
		'location'=>'Tennessee, North Carolina', 
		'date_established'=>'1934-06-15',
		'area_in_acres'=>'522426.88',
		'description'=>'Great Smoky Mountains National Park is a United States National Park and UNESCO World Heritage Site that straddles the ridgeline of the Great Smoky Mountains, part of the Blue Ridge Mountains, which are a division of the larger Appalachian Mountain chain.'
	],
	[
		'name'=>'Guadalupe Mountains', 
		'location'=>'Texas', 
		'date_established'=>'1966-10-15',
		'area_in_acres'=>'86367.10',
		'description'=>'Guadalupe Mountains National Park is in the Guadalupe Mountains of West Texas and contains Guadalupe Peak, the highest point in Texas at 8,749 feet (2,667 m) in elevation. Located east of El Paso, it also contains El Capitan, long used as a landmark by people traveling along the old route later followed by the Butterfield Overland Mail stagecoach line.'
	],
	[
		'name'=>'Haleakalā', 
		'location'=>'Hawaii', 
		'date_established'=>'1916-08-01',
		'area_in_acres'=>'33264.62',
		'description'=>'Haleakalā National Park is a national park located on the island of Maui in the U.S. state of Hawaiʻi. The park covers an area of 33,265 acres (134.62 km2), of which 19,270 acres (77.98 km2) is a wilderness area.'
	],
	[
		'name'=>'Hawaii Volcanoes', 
		'location'=>'Hawaii', 
		'date_established'=>'1916-08-01',
		'area_in_acres'=>'323431.38',
		'description'=>'Hawaiʻi Volcanoes National Park, established in 1916, is a United States National Park located in the U.S. State of Hawaii on the island of Hawaii.'
	],
	[
		'name'=>'Hot Springs', 
		'location'=>'Arkansas', 
		'date_established'=>'1921-03-04',
		'area_in_acres'=>'5549.10',
		'description'=>'Hot Springs National Park is a United States National Park in central Garland County, Arkansas, adjacent to the city of Hot Springs, the county seat.'
	],
	[
		'name'=>'Isle Royale', 
		'location'=>'Michigan', 
		'date_established'=>'1940-04-03',
		'area_in_acres'=>'571790.11',
		'description'=>'Isle Royale National Park is a U.S. National Park on Isle Royale and adjacent islands in Lake Superior, in the state of Michigan.'
	],
	[
		'name'=>'Joshua Tree', 
		'location'=>'California', 
		'date_established'=>'1994-10-31',
		'area_in_acres'=>'790635.74',
		'description'=>'Joshua Tree National Park is located in southeastern California. Declared a U.S. National Park in 1994 when the U.S. Congress passed the California Desert Protection Act (Public Law 103-433), it had previously been a U.S. National Monument since 1936.'
	],
	[
        'name'=>'Katmai',
        'location'=>'Alaska',
        'date_established'=>'1980-12-02',
        'area_in_acres'=>'3674368.02',
        'description'=>'Katmai National Park and Preserve is a United States National Park and Preserve in southern Alaska,
         notable for the Valley of Ten Thousand Smokes and for its Alaskan brown bears.'
    ],
    [
        'name'=>'Kenai Fjords',
        'location'=>'Alaska',
        'date_established'=>'1980-12-02',
        'area_in_acres'=>'669983.65',
        'description'=>'Kenai Fjords National Park is a United States National Park established in 1980 by the Alaska National Interest Lands Conservation Act.
         The park contains the Harding Icefield, one of the largest ice fields in the United States.'
    ],
    [
        'name'=>'Kings Canyon',
        'location'=>'California',
        'date_established'=>'1940-03-04',
        'area_in_acres'=>'461901.20',
        'description'=>'Kings Canyon National Park is a national park in the southern Sierra Nevada, east of Fresno, California.
         It was established in 1890 to protect the General Grant Grove of giant sequoias.'
    ],
    [
        'name'=>'Kobuk Valley',
        'location'=>'Alaska',
        'date_established'=>'1980-12-02',
        'area_in_acres'=>'1750716.16',
        'description'=>'Kobuk Valley National Park is in northwestern Alaska 25 miles (40 km) north of the Arctic Circle.
         It is noted for the Great Kobuk Sand Dunes and caribou migration routes.'
    ],
    [
        'name'=>'Lake Clark',
        'location'=>'Alaska',
        'date_established'=>'1980-12-02',
        'area_in_acres'=>'2619836.49',
        'description'=>'Lake Clark National Park and Preserve is a United States National Park in Port Alsworth, Alaska.
         The park includes many streams and lakes vital to the Bristol Bay salmon fishery, including its namesake Lake Clark.'
    ],
    [
        'name'=>'Lassen Volcanic',
        'location'=>'California',
        'date_established'=>'1916-08-09',
        'area_in_acres'=>'106589.02',
        'description'=>'Lassen Volcanic National Park is a United States National Park in northeastern California.
         The dominant feature of the park is Lassen Peak, the largest plug dome volcano in the world.'
    ],
    [
        'name'=>'Mammoth Cave',
        'location'=>'Kentucky',
        'date_established'=>'1941-07-01',
        'area_in_acres'=>'52830.19',
        'description'=>'Mammoth Cave National Park is a U.S. national park in central Kentucky, encompassing portions of Mammoth Cave.
         Home to the longest cave system known in the world.'
    ],
    [
        'name'=>'Mesa Verde',
        'location'=>'Colorado',
        'date_established'=>'1906-06-29',
        'area_in_acres'=>'52485.17',
        'description'=>'Mesa Verde National Park is a National Park and World Heritage Site located in Montezuma County, Colorado.
         It protects some of the best preserved Ancestral Puebloan archaeological sites in the United States.'
    ],
    [
        'name'=>'Mount Rainier',
        'location'=>'Washington',
        'date_established'=>'1899-03-02',
        'area_in_acres'=>'236381.49',
        'description'=>'Mount Rainier National Park is a United States National Park located in southeast Pierce County and northeast Lewis County in Washington state.
         It was established on March 2, 1899 as the fifth national park in the United States.
         The park is home to all of Mount Rainier.'
    ],
    [
        'name'=>'North Cascades',
        'location'=>'Washington',
        'date_established'=>'1968-10-02',
        'area_in_acres'=>'504780.94',
        'description'=>'North Cascades National Park is a U.S. National Park located in the state of Washington.
         The park is the largest of the three National Park Service units that comprise the North Cascades National Park Service Complex.
         The park features rugged mountain peaks and protects portions of the North Cascades range.'
    ],
    [
        'name'=>'Olympic',
        'location'=>'Washington',
        'date_established'=>'1938-06-29',
        'area_in_acres'=>'922650.10',
        'description'=>'Olympic National Park is a United States national park located in the state of Washington, on the Olympic Peninsula.
         The park has four basic regions: the Pacific coastline, alpine areas, the west side temperate rainforest and the forests of the drier east side.'
    ]
];

$query = "INSERT INTO national_parks (name, location, date_established, area_in_acres, description)
VALUES (:name, :location, :date_established, :area_in_acres, :description)";
$statement = $dbc->prepare($query);
foreach ($parks as $park) {
    $statement->bindValue(':name', $park['name']);
    $statement->bindValue(':location', $park['location']);
    $statement->bindValue(':date_established', $park['date_established']);
    $statement->bindValue(':area_in_acres', $park['area_in_acres']);
    $statement->bindValue(':description', $park['description']);
    $statement->execute();
};






 ?>