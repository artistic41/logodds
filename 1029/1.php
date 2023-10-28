<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[4, 11]] ,
		'qpl/trio'       =>  [[1, 7, 5, 4, 11], [1, 5, 12, 4, 11]] ,
		'new 2 qpl/trio' =>  [[1, 7, 5, 4, 11], [1, 5, 12, 4, 11]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 4, 11, 5, 12, 7',
		'New 2 QPL values'  =>  '1, 4, 11, 5, 12, 7',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '1, 5, 12, 7',//number of primes: 2
		'All wins values' =>  '4, 11',//number of primes: 1
		'Remaining' =>  '8, 3, 6, 9, 2, 10',//number of primes: 2,
		'diff' =>  '12, ',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[6], [11, 2]] ,
		'qpl/trio'       =>  [[11, 2, 12, 1, 6]] ,
		'new 2 qpl/trio' =>  [[11, 2, 12, 1, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 1, 12, 11, 2',
		'New 2 QPL values'  =>  '6, 1, 12, 11, 2',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '1, 12',//number of primes: 0
		'All wins values' =>  '2, 6, 11',//number of primes: 2
		'Remaining' =>  '3, 5, 8, 4, 7, 10, 9',//number of primes: 3,
		'diff' =>  '',
		'WIN' =>  '1, 12',
		'tce??' =>  '1, 2, 6, 11, 12',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [] ,
		'qpl/trio'       =>  [[7, 1, 3, 4, 10]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 4, 10, 3, 1',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '7, 4, 10, 3, 1',//number of primes: 2
		'All wins values' =>  '',//number of primes: 0
		'Remaining' =>  '5, 9, 8, 11, 2, 6, 12',//number of primes: 3,
		'diff' =>  '',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4]] ,
		'qpl/trio'       =>  [[5, 12, 3, 8, 4], [8, 2, 5, 3, 4], [8, 2, 5, 12, 4]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 5, 12, 3, 4, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '8, 5, 12, 3, 2',//number of primes: 3
		'All wins values' =>  '4',//number of primes: 0
		'Remaining' =>  '11, 1, 7, 9, 10, 6',//number of primes: 2,
		'diff' =>  '2, ',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[1, 3]] ,
		'qpl/trio'       =>  [[9, 4, 2, 1, 3]] ,
		'new 2 qpl/trio' =>  [[9, 4, 2, 1, 3]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 4, 2, 9, 3',
		'New 2 QPL values'  =>  '1, 4, 2, 9, 3',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '4, 2, 9',//number of primes: 1
		'All wins values' =>  '1, 3',//number of primes: 1
		'Remaining' =>  '11, 6, 10, 12, 5, 7, 8',//number of primes: 3,
		'diff' =>  '',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5], [8, 6, 5]] ,
		'qpl/trio'       =>  [[8, 6, 11, 1, 5], [10, 1, 8, 6, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [[8, 6, 11, 1, 5], [10, 1, 8, 6, 5]] ,
		'All QPL values'    =>  '8, 5, 1, 6, 10, 11',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '8, 5, 1, 6, 10, 11',
		'For reference  ' =>  '1, 10, 11',//number of primes: 1
		'All wins values' =>  '5, 6, 8',//number of primes: 1
		'Remaining' =>  '12, 7, 9, 4, 3, 2',//number of primes: 3,
		'diff' =>  '10',
		'WIN' =>  '1, 10, 11',
		'tce??' =>  '1, 5, 6, 8, 10, 11',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[5, 10], [5]] ,
		'qpl/trio'       =>  [[3, 12, 6, 5, 10]] ,
		'new 2 qpl/trio' =>  [[3, 12, 6, 5, 10]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 5, 12, 10, 6',
		'New 2 QPL values'  =>  '3, 5, 12, 10, 6',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '3, 12, 6',//number of primes: 1
		'All wins values' =>  '5, 10',//number of primes: 1
		'Remaining' =>  '4, 1, 8, 2, 9, 7, 11',//number of primes: 3,
		'diff' =>  '',
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[8, 7, 9], [8, 9]] ,
		'qpl/trio'       =>  [[4, 2, 8, 7, 9], [4, 11, 8, 7, 9]] ,
		'new 2 qpl/trio' =>  [[4, 2, 8, 7, 9], [4, 11, 8, 7, 9]] ,
		'new 3 qpl/trio' =>  [[4, 2, 8, 7, 9], [4, 11, 8, 7, 9]] ,
		'All QPL values'    =>  '4, 8, 11, 7, 2, 9',
		'New 2 QPL values'  =>  '4, 8, 11, 7, 2, 9',
		'New 3 QPL values'  =>  '4, 8, 11, 7, 2, 9',
		'For reference  ' =>  '4, 11, 2',//number of primes: 2
		'All wins values' =>  '7, 8, 9',//number of primes: 1
		'Remaining' =>  '6, 1, 12, 10, 3, 5',//number of primes: 2,
		'diff' =>  '11, ',
		'WIN' =>  '4, 11, 2',
		'tce??' =>  '2, 4, 7, 8, 9, 11',
	],
];
