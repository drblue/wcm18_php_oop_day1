<?php

$cars = [
	[ // 0
		'manufacturer' => 'Nissan',
		'model' => 'Qashqai',
		'year' => 2008,
		'4wd' => false,
	],
	[ // 1
		'manufacturer' => 'Toyota',
		'model' => 'RAV4',
		'year' => 2018,
		'4wd' => 'Nej',
	],
	false, // 2
	[ // 3
		'manufacturer' => 'Peugeot',
		'model' => '307',
		'year' => 2014,
	],
];


function getAge($year, $manufactured_year) {
	return $year - $manufactured_year;
}

function getAgeInclCurrentYear($year, $manufactured_year) {
	return $year - $manufactured_year + 1;
}

$i = 0;
$current_year = 2019;
foreach ($cars as $car) {
	if ($car) {
		$i++;
		echo "<h1>{$i}. {$car['manufacturer']} {$car['model']}</h1>";
		echo "<p>Tillverkningsår: {$car['year']}.<br />";

		$age = getAge($current_year, $car['year']);
		echo "Bilens ålder: {$age} år<br />";

		echo "Fyrhjulsdriven? ";
		if (isset($car['4wd']) && $car['4wd'] == true) {
			echo "Ja";
		} else if (isset($car['4wd']) && $car['4wd'] == false) {
			echo "Nej";
		} else {
			echo "No one knows!";
		}
		echo "</p>";
	}
}
