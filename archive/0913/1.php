<?php

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[2, 8, 6, 3, 9]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 9, 3, 8, 6',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '2, 3, 8, 6',//number of primes: 2
		'All wins values' =>  '9',//number of primes: 0
		'Remaining' =>  '5, 7, 4, 10, 1',//number of primes: 2,
		'diff' =>  '',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[6], [4, 5], [5, 6], [5]] ,
		'qpl/trio'       =>  [[5, 1, 3, 8, 6], [6, 8, 3, 4, 5], [6, 2, 3, 4, 5], [1, 5, 3, 2, 6], [1, 3, 4, 5, 6], [6, 4, 2, 1, 5]] ,
		'new 2 qpl/trio' =>  [[6, 8, 3, 4, 5], [6, 2, 3, 4, 5], [1, 3, 4, 5, 6], [6, 4, 2, 1, 5], [5, 1, 3, 8, 6], [1, 5, 3, 2, 6]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 5, 1, 2, 4, 3, 8',
		'New 2 QPL values'  =>  '6, 5, 1, 2, 4, 3, 8',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '1, 2, 3, 8',//number of primes: 2
		'All wins values' =>  '4, 5, 6',//number of primes: 1
		'Remaining' =>  '7, 10, 9',//number of primes: 1,
		'diff' =>  '',
		'WIN' =>  '4, 5, 6',
		'tce??' =>  '1, 2, 3, 4, 5, 6',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[1]] ,
		'qpl/trio'       =>  [[4, 2, 6, 9, 1]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '4, 2, 1, 9, 6',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '4, 2, 9, 6',//number of primes: 1
		'All wins values' =>  '1',//number of primes: 0
		'Remaining' =>  '3, 10, 5, 8, 7',//number of primes: 3,
		'diff' =>  '',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[6]] ,
		'qpl/trio'       =>  [[2, 8, 5, 1, 6]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 5, 1, 6, 8',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '2, 5, 1, 8',//number of primes: 2
		'All wins values' =>  '6',//number of primes: 0
		'Remaining' =>  '7, 9, 4, 10, 12, 3, 11',//number of primes: 3,
		'diff' =>  '',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[5], [5, 2], [4, 5]] ,
		'qpl/trio'       =>  [[6, 2, 4, 9, 5], [9, 3, 2, 6, 5], [6, 2, 3, 4, 5]] ,
		'new 2 qpl/trio' =>  [[6, 2, 4, 9, 5], [9, 3, 2, 6, 5], [6, 2, 3, 4, 5]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '6, 2, 5, 4, 3, 9',
		'New 2 QPL values'  =>  '6, 2, 5, 4, 3, 9',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '6, 3, 9',//number of primes: 1
		'All wins values' =>  '2, 4, 5',//number of primes: 2
		'Remaining' =>  '1, 8, 7, 11, 10',//number of primes: 2,
		'diff' =>  '',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [] ,
		'qpl/trio'       =>  [[7, 5, 1, 10, 11]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '7, 10, 5, 1, 11',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '7, 5, 11',
		'For reference  ' =>  '7, 10, 5, 1, 11',//number of primes: 3
		'All wins values' =>  '',//number of primes: 0
		'Remaining' =>  '4, 2, 8, 3, 9, 6',//number of primes: 2,
		'diff' =>  '',
	],
];
