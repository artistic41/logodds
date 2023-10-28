<?php

return [
	'1' => [
		/**
		Race 1
		*/
		//Total runners: 12
		'wins' =>  [[4, 11]] ,
		'qpl/trio'       =>  [[1, 7, 5, 4, 11], [1, 5, 12, 4, 11]] ,
		'new 2 qpl/trio' =>  [[1, 7, 5, 4, 11], [1, 5, 12, 4, 11]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 4, 11, 5, 7, 12',
		'New 2 QPL values'  =>  '1, 4, 11, 5, 7, 12',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '1, 5, 7, 12',//number of primes: 2
		'All wins values' =>  '4, 11',//number of primes: 1
		'Remaining' =>  '8, 3, 6, 9, 2, 10',//number of primes: 2,
		'diff' =>  '12, ',
	],
	'3' => [
		/**
		Race 3
		*/
		//Total runners: 12
		'wins' =>  [[6], [11, 2], [11]] ,
		'qpl/trio'       =>  [[11, 2, 12, 1, 6], [6, 8, 12, 1, 11]] ,
		'new 2 qpl/trio' =>  [[11, 2, 12, 1, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 12, 1, 11, 8, 2',
		'New 2 QPL values'  =>  '6, 12, 1, 11, 2',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '12, 1, 8',//number of primes: 0
		'All wins values' =>  '2, 6, 11',//number of primes: 2
		'Remaining' =>  '3, 5, 7, 4, 10, 9',//number of primes: 3,
		'diff' =>  '8, ',
	],
	'4' => [
		/**
		Race 4
		*/
		//Total runners: 12
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[7, 1, 3, 4, 10], [7, 3, 4, 10, 9]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 4, 10, 3, 1, 9',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '7, 4, 10, 3, 1',//number of primes: 2
		'All wins values' =>  '9',//number of primes: 0
		'Remaining' =>  '8, 5, 11, 2, 6, 12',//number of primes: 3,
		'diff' =>  '9, ',
	],
	'5' => [
		/**
		Race 5
		*/
		//Total runners: 12
		'wins' =>  [[4], [4, 2], [5, 4]] ,
		'qpl/trio'       =>  [[5, 12, 3, 8, 4], [8, 2, 5, 3, 4], [8, 2, 5, 12, 4]] ,
		'new 2 qpl/trio' =>  [[8, 2, 5, 3, 4], [8, 2, 5, 12, 4], [5, 12, 3, 8, 4]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 8, 12, 3, 4, 2',
		'New 2 QPL values'  =>  '5, 8, 12, 3, 4, 2',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '8, 12, 3',//number of primes: 1
		'All wins values' =>  '2, 4, 5',//number of primes: 2
		'Remaining' =>  '11, 9, 1, 7, 6, 10',//number of primes: 2,
		'diff' =>  '2, ',
	],
	'6' => [
		/**
		Race 6
		*/
		//Total runners: 12
		'wins' =>  [[1, 3], [1, 12]] ,
		'qpl/trio'       =>  [[9, 4, 2, 1, 3], [9, 2, 4, 1, 12]] ,
		'new 2 qpl/trio' =>  [[9, 4, 2, 1, 3], [9, 2, 4, 1, 12]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 4, 2, 9, 12, 3',
		'New 2 QPL values'  =>  '1, 4, 2, 9, 12, 3',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '4, 2, 9',//number of primes: 1
		'All wins values' =>  '1, 3, 12',//number of primes: 1
		'Remaining' =>  '11, 6, 10, 5, 7, 8',//number of primes: 3,
		'diff' =>  '12, ',
	],
	'8' => [
		/**
		Race 8
		*/
		//Total runners: 12
		'wins' =>  [[5], [8, 6, 5], [8, 6], [6]] ,
		'qpl/trio'       =>  [[8, 6, 11, 1, 5], [10, 1, 8, 6, 5], [8, 2, 5, 1, 6]] ,
		'new 2 qpl/trio' =>  [[8, 6, 11, 1, 5], [10, 1, 8, 6, 5], [8, 2, 5, 1, 6]] ,
		'new 3 qpl/trio' =>  [[8, 6, 11, 1, 5], [10, 1, 8, 6, 5], [8, 2, 5, 1, 6]] ,
		'All QPL values'    =>  '8, 5, 1, 6, 2, 10, 11',
		'New 2 QPL values'  =>  '8, 5, 1, 6, 2, 10, 11',
		'New 3 QPL values'  =>  '8, 5, 1, 6, 2, 10, 11',
		'For reference  ' =>  '1, 2, 10, 11',//number of primes: 2
		'All wins values' =>  '5, 6, 8',//number of primes: 1
		'Remaining' =>  '7, 12, 3, 9, 4',//number of primes: 2,
		'diff' =>  '2, 10',
		'WIN' =>  '5, 6, 8',
		'tce??' =>  '1, 2, 5, 6, 8, 10',
	],
	'9' => [
		/**
		Race 9
		*/
		//Total runners: 12
		'wins' =>  [[5, 10], [5], [5, 4], [4]] ,
		'qpl/trio'       =>  [[3, 12, 6, 5, 10], [3, 12, 10, 5, 4], [10, 6, 12, 4, 5], [10, 6, 3, 4, 5], [10, 6, 3, 12, 4]] ,
		'new 2 qpl/trio' =>  [[3, 12, 6, 5, 10], [3, 12, 10, 5, 4], [10, 6, 12, 4, 5], [10, 6, 3, 4, 5]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 5, 10, 12, 6, 4',
		'New 2 QPL values'  =>  '3, 5, 10, 12, 6, 4',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '3, 12, 6',//number of primes: 1
		'All wins values' =>  '4, 5, 10',//number of primes: 1
		'Remaining' =>  '1, 8, 9, 2, 7, 11',//number of primes: 3,
		'diff' =>  '4, ',
	],
	'10' => [
		/**
		Race 10
		*/
		//Total runners: 12
		'wins' =>  [[8, 7, 9], [8, 9], [8, 7]] ,
		'qpl/trio'       =>  [[4, 2, 8, 7, 9], [4, 11, 8, 7, 9], [4, 11, 1, 8, 7], [4, 11, 1, 8, 9]] ,
		'new 2 qpl/trio' =>  [[4, 2, 8, 7, 9], [4, 11, 8, 7, 9], [4, 11, 1, 8, 9], [4, 11, 1, 8, 7]] ,
		'new 3 qpl/trio' =>  [[4, 2, 8, 7, 9], [4, 11, 8, 7, 9]] ,
		'All QPL values'    =>  '8, 4, 9, 11, 7, 1, 2',
		'New 2 QPL values'  =>  '8, 4, 9, 11, 7, 1, 2',
		'New 3 QPL values'  =>  '8, 4, 9, 11, 7, 2',
		'For reference  ' =>  '4, 11, 1, 2',//number of primes: 2
		'All wins values' =>  '7, 8, 9',//number of primes: 1
		'Remaining' =>  '6, 10, 12, 3, 5',//number of primes: 2,
		'diff' =>  '1, 11, ',
		'WIN' =>  '7, 8, 9',
		'tce??' =>  '1, 4, 7, 8, 9, 11',
	],
];
