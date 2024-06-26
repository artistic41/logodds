<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '3, 11, 8, 4, 1, 6, 7, 5, 12, 9, 2, 10',
		'Total Runners '  =>  12,
		'places' => '7, 5, 12, 9, 2',
		'places4' => '7, 5, 12, 9, 2',
		'candidate(k = 7, posK = 6)' => '6',
		'candidate(k = 6, posK = 5)' => '7',
		'candidate(k = 4, posK = 3)' => '12',
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '5, 11, 2, 1, 3, 7, 9, 6, 4, 10, 8, 12',
		'Total Runners '  =>  12,
		'WP' => '5',
		'places' => '9, 4, 10, 8, 12',
		'places4' => '9, 4, 10, 8, 12',
		'candidate(k = 12, posK = 11)' => '5',
		'candidate(k = 10, posK = 9)' => '2',
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '8, 9, 7, 5, 10, 4, 11, 1, 6, 2, 12, 3',
		'Total Runners '  =>  12,
		'Maybe WP' => '8',
		'places' => '11, 2, 12, 3',
		'places4' => '11, 2, 12, 3',
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '8, 6, 3, 10, 4, 7, 1, 5, 9, 2, 12, 11',
		'Total Runners '  =>  12,
		'Maybe WP' => '8',
		'places' => '10, 5, 9, 2, 12, 11',
		'places4' => '10, 5, 9, 2, 12, 11',
		'candidate(k = 9, posK = 8)' => '10',
		'candidate(k = 3, posK = 2)' => '2',
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '2, 6, 11, 4, 5, 12, 8, 7, 9, 10, 1, 3',
		'Total Runners '  =>  12,
		//In first 6 runners!
		'places' => '4, 5, 12, 8, 7, 9, 1',
		'places4' => '4, 5, 12, 8, 7, 9, 1',
		'candidate(k = 5, posK = 4)' => '7',
		'candidate(k = 4, posK = 3)' => '9',
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '6, 5, 1, 11, 2, 4, 3, 8, 12, 10, 7, 9',
		'Total Runners '  =>  12,
		'places' => '11, 2, 3, 8, 12, 10',
		'places4' => '11, 2, 3, 8, 12, 10',
		'candidate(k = 8, posK = 7)' => '2',
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '12, 3, 1, 2, 10, 6, 5, 11, 8, 9, 7, 4',
		'Total Runners '  =>  12,
		'places' => '2, 10, 8',
		'places4' => '2, 10, 8',
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '10, 6, 5, 3, 1, 8, 7, 2, 4, 12, 11, 9',
		'Total Runners '  =>  12,
		'places' => '1, 7, 4, 12, 11',
		'places4' => '1, 7, 4, 12, 11',
		'candidate(k = 7, posK = 6)' => '8',
	],
];
