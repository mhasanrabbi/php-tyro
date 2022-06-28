<?php
$students = [
	[
		'name' => 'John Doe',
		'age' => 20,
		'email' => 'john.doe@email.com',
		'address' => [
			'country' => 'BD',
			'district' => 'Dhaka'
		]
	],
	[
		'name' => 'Lilly',
		'age' => 19,
		'email' => 'lilly@email.com',
		'address' => [
			'country' => 'BD',
			'district' => 'Chittagong'
		]
	],
	[
		'name' => 'Hasan Ahmed',
		'age' => 19,
		'email' => 'hasan@email.com',
		'address' => [
			'country' => 'BD',
			'district' => 'Barishal'
		]
	],
	[
		'name' => 'Palak Mahmud',
		'age' => 18,
		'email' => 'palak@email.com',
		'address' => [
			'country' => 'BD',
			'district' => 'Dhaka'
		]
	]
];

foreach($students as $student) {
	if($student['address']['district'] == 'Dhaka') {
		echo $student['name'] . " lives in " . $student['address']['district']."<br/>";
	}
}