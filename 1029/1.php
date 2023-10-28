<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [] ,
		'qpl/trio'       =>  [[1, 7, 5, 4, 11]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '1, 4, 11, 7, 5',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '11, 7, 5',
		'For reference  ' =>  '1, 4, 11, 7, 5',//number of primes: 3
		'All wins values' =>  '',//number of primes: 0
		'Remaining' =>  '8, 3, 6, 12, 9, 2, 10',//number of primes: 2,
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[11, 2, 12, 1, 6]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 11, 12, 1, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '11, 12, 1, 2',//number of primes: 2
		'All wins values' =>  '6',//number of primes: 0
		'Remaining' =>  '5, 3, 4, 8, 7, 10, 9',//number of primes: 3,
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [] ,
		'qpl/trio'       =>  [[7, 1, 3, 4, 10]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 4, 10, 1, 3',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '7, 4, 10, 1, 3',//number of primes: 2
		'All wins values' =>  '',//number of primes: 0
		'Remaining' =>  '9, 5, 8, 11, 2, 6, 12',//number of primes: 3,
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[4]] ,
		'qpl/trio'       =>  [[5, 12, 3, 8, 4]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 8, 12, 3, 4',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '5, 8, 12, 3',//number of primes: 2
		'All wins values' =>  '4',//number of primes: 0
		'Remaining' =>  '2, 11, 9, 1, 7, 10, 6',//number of primes: 3,
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
		'Remaining' =>  '11, 6, 12, 10, 7, 5, 8',//number of primes: 3,
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5]] ,
		'qpl/trio'       =>  [[8, 6, 11, 1, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '8, 5, 1, 6, 11',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '8, 1, 6, 11',//number of primes: 1
		'All wins values' =>  '5',//number of primes: 1
		'Remaining' =>  '12, 7, 9, 10, 3, 4, 2',//number of primes: 3,
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[5, 10]] ,
		'qpl/trio'       =>  [[3, 12, 6, 5, 10]] ,
		'new 2 qpl/trio' =>  [[3, 12, 6, 5, 10]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 5, 12, 10, 6',
		'New 2 QPL values'  =>  '3, 5, 12, 10, 6',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '3, 12, 6',//number of primes: 1
		'All wins values' =>  '5, 10',//number of primes: 1
		'Remaining' =>  '4, 8, 9, 1, 2, 7, 11',//number of primes: 3,
	],
	'10' => [
		/**
		Race 10
		*/
		'wins' =>  [[8, 7, 9]] ,
		'qpl/trio'       =>  [[4, 2, 8, 7, 9]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [[4, 2, 8, 7, 9]] ,
		'All QPL values'    =>  '8, 4, 2, 7, 9',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '8, 4, 2, 7, 9',
		'For reference  ' =>  '4, 2',//number of primes: 1
		'All wins values' =>  '7, 8, 9',//number of primes: 1
		'Remaining' =>  '11, 6, 12, 1, 10, 3, 5',//number of primes: 3,
		'tce' =>  '2, 4, 7, 8, 9',
	],
];
