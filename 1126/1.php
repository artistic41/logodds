<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'All Runners   '  =>  '10, 3, 6, 9, 14, 1, 11, 13, 2, 8, 5, 7, 4, 12',
		'Total Runners '  =>  14,
		//In first 6 runners!
		'places' => '10, 6, 9, 14, 1',
		'places4' => '9, 14, 1',
	],
	'2' => [
		/**
		Race 2
		*/
		'All Runners   '  =>  '2, 7, 1, 11, 4, 5, 3, 6, 9, 10, 8, 13, 14, 12',
		'Total Runners '  =>  14,
		'places' => '5, 6, 8, 13, 14, 12',
		'places4' => '5, 6, 8, 13, 14, 12',
		'candidate(k = 10, posK = 9)' => '4',
		'candidate(k = 9, posK = 8)' => '5',
	],
	'3' => [
		/**
		Race 3
		*/
		'All Runners   '  =>  '4, 2, 11, 3, 6, 7, 1, 5, 9, 10, 8, 12',
		'Total Runners '  =>  12,
		'WP' => '4',
		'places' => '10, 8, 12',
		'places4' => '10, 8, 12',
		'candidate(k = 12, posK = 11)' => '4',
		'candidate(k = 10, posK = 9)' => '11',
		'candidate(k = 9, posK = 8)' => '3',
		'candidate(k = 2, posK = 1)' => '8',
	],
	'4' => [
		/**
		Race 4
		*/
		'All Runners   '  =>  '4, 2, 6, 8, 3, 10, 7, 12, 9, 1, 5, 11',
		'Total Runners '  =>  12,
		'places' => '3, 10, 7, 12, 9, 1, 5, 11',
		'places4' => '3, 10, 7, 12, 9, 1, 5, 11',
		'candidate(k = 7, posK = 6)' => '10',
		'candidate(k = 2, posK = 1)' => '5',
	],
	'5' => [
		/**
		Race 5
		*/
		'All Runners   '  =>  '3, 14, 10, 12, 5, 2, 7, 13, 1, 6, 9, 11, 4, 8',
		'Total Runners '  =>  14,
		//In first 6 runners!
		'places' => '3, 14, 10, 12',
		'places4' => '12',
	],
	'6' => [
		/**
		Race 6
		*/
		'All Runners   '  =>  '2, 5, 3, 1, 9, 7, 4, 11, 6, 10, 14, 12, 13, 8',
		'Total Runners '  =>  14,
		'places' => '11, 6, 10, 14, 12, 13',
		'places4' => '11, 6, 10, 14, 12, 13',
		'candidate(k = 10, posK = 9)' => '9',
		'candidate(k = 3, posK = 2)' => '12',
	],
	'7' => [
		/**
		Race 7
		*/
		'All Runners   '  =>  '5, 11, 1, 10, 2, 9, 6, 7, 3, 8, 4',
		'Total Runners '  =>  11,
		//In first 6 runners!
		'places' => '5, 11, 1, 10',
		'places4' => '10',
	],
	'8' => [
		/**
		Race 8
		*/
		'All Runners   '  =>  '2, 4, 9, 1, 10, 11, 6, 8, 3, 7, 5',
		'Total Runners '  =>  11,
		//In first 6 runners!
		'places' => '10, 11, 6, 8, 3',
		'places4' => '10, 11, 6, 8, 3',
	],
	'9' => [
		/**
		Race 9
		*/
		'All Runners   '  =>  '2, 10, 7, 6, 8, 4, 5, 1, 12, 13, 14, 11, 3, 9',
		'Total Runners '  =>  14,
		'places' => '12, 13, 14, 11, 3, 9',
		'places4' => '12, 13, 14, 11, 3, 9',
	],
	'10' => [
		/**
		Race 10
		*/
		'All Runners   '  =>  '10, 9, 1, 4, 7, 5, 2, 3, 6, 11, 8, 12',
		'Total Runners '  =>  12,
		'WP' => '10',
		'places' => '7, 2, 3, 11, 8, 12',
		'places4' => '7, 2, 3, 11, 8, 12',
		'candidate(k = 12, posK = 11)' => '10',
		'candidate(k = 4, posK = 3)' => '6',
	],
];
