<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[5, 6], [5, 4], [5, 4, 6]] ,
		'qpl/trio'       =>  [[7, 3, 4, 5, 6], [6, 8, 3, 4, 5], [3, 1, 5, 4, 6], [6, 2, 3, 4, 5]] ,
		'new 2 qpl/trio' =>  [[7, 3, 4, 5, 6], [6, 8, 3, 4, 5], [3, 1, 5, 4, 6], [6, 2, 3, 4, 5]] ,
		'new 3 qpl/trio' =>  [[7, 3, 4, 5, 6], [6, 8, 3, 4, 5], [3, 1, 5, 4, 6], [6, 2, 3, 4, 5]] ,
		'All QPL values'    =>  '4, 5, 6, 3, 1, 2, 7, 8',
		'New 2 QPL values'  =>  '4, 5, 6, 3, 1, 2, 7, 8',
		'New 3 QPL values'  =>  '4, 5, 6, 3, 1, 2, 7, 8',
		'For reference  ' =>  '3, 1, 2, 7, 8',//total: 5
		'All wins values' =>  '4, 5, 6',//total: 3
		'Remaining' =>  '9, 10',//total: 2,
		'diff' =>  '',
		'WIN' =>  '4, 5, 6',
		'tce??' =>  '1, 2, 3, 4, 5, 6',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[5, 6], [1, 11], [6], [11]] ,
		'qpl/trio'       =>  [[3, 7, 11, 5, 6], [3, 7, 6, 1, 11], [3, 7, 5, 2, 6]] ,
		'new 2 qpl/trio' =>  [[3, 7, 11, 5, 6], [3, 7, 5, 2, 6], [3, 7, 6, 1, 11]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '3, 6, 11, 7, 5, 2, 1',
		'New 2 QPL values'  =>  '3, 6, 11, 7, 5, 2, 1',
		'New 3 QPL values'  =>  '',
		//Primes majority,
		'primes' =>  '3, 11, 7, 5, 2',
		'For reference  ' =>  '3, 7, 2',//total: 3
		'All wins values' =>  '1, 5, 6, 11',//total: 4
		'Remaining' =>  '10, 12, 4, 9, 8',//total: 5,
		'diff' =>  '',
		'WIN' =>  '1, 5, 6, 11',
		'tce??' =>  '2, 3, 5, 6, 7, 11',
	],
	'3' => [
		/**
		Race 3
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[4, 8, 2, 1, 9], [4, 8, 2, 1, 5]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '4, 9, 1, 5, 8, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '4, 1, 5, 8, 2',//total: 5
		'All wins values' =>  '9',//total: 1
		'Remaining' =>  '7, 6, 3, 10',//total: 4,
		'diff' =>  '',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[2], [9], [5, 2], [9, 6]] ,
		'qpl/trio'       =>  [[5, 12, 1, 6, 2], [5, 12, 2, 6, 9], [5, 1, 2, 9, 6], [5, 12, 11, 6, 9]] ,
		'new 2 qpl/trio' =>  [[5, 12, 1, 6, 2], [5, 12, 2, 6, 9], [5, 1, 2, 9, 6], [5, 12, 11, 6, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '5, 6, 2, 11, 12, 9, 1',
		'New 2 QPL values'  =>  '5, 6, 2, 11, 12, 9, 1',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '11, 12, 1',//total: 3
		'All wins values' =>  '2, 5, 6, 9',//total: 4
		'Remaining' =>  '4, 7, 10, 8, 3',//total: 5,
		'diff' =>  '',
		'WIN' =>  '2, 5, 6, 9',
		'tce??' =>  '2, 5, 6, 9, 11, 12',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[6], [6, 7], [6, 5], [6, 8, 7], [6, 7, 5], [6, 8, 7, 5]] ,
		'qpl/trio'       =>  [[2, 11, 4, 5, 1], [2, 11, 5, 1, 6], [2, 11, 4, 5, 7], [11, 2, 5, 6, 7], [11, 2, 8, 5, 7], [11, 4, 7, 6, 5], [11, 8, 5, 6, 7]] ,
		'new 2 qpl/trio' =>  [[11, 2, 5, 6, 7], [11, 4, 7, 6, 5], [11, 8, 5, 6, 7], [2, 11, 5, 1, 6]] ,
		'new 3 qpl/trio' =>  [[11, 8, 5, 6, 7], [11, 2, 5, 6, 7], [11, 4, 7, 6, 5]] ,
		'All QPL values'    =>  '6, 11, 8, 4, 7, 5, 2, 1',
		'New 2 QPL values'  =>  '6, 11, 8, 4, 7, 5, 2, 1',
		'New 3 QPL values'  =>  '6, 11, 8, 4, 7, 5, 2',
		'For reference  ' =>  '11, 4, 2, 1',//total: 4
		'All wins values' =>  '5, 6, 7, 8',//total: 4
		'Remaining' =>  '10, 12, 3, 9',//total: 4,
		'diff' =>  '',
		'WIN' =>  '5, 6, 7, 8',
		'tce??' =>  '4, 5, 6, 7, 8, 11',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[3], [6]] ,
		'qpl/trio'       =>  [[4, 11, 10, 3, 9], [4, 11, 3, 7, 6]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '4, 11, 3, 6, 7, 9, 10',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'For reference  ' =>  '4, 11, 7, 9, 10',//total: 5
		'All wins values' =>  '3, 6',//total: 2
		'Remaining' =>  '1, 2, 5, 8, 12',//total: 5,
		'diff' =>  '',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[7, 2], [7, 2, 10], [7], [1], [2, 10]] ,
		'qpl/trio'       =>  [[1, 12, 6, 7, 2], [1, 12, 7, 2, 10], [7, 3, 2, 10, 1], [2, 10, 6, 1, 7]] ,
		'new 2 qpl/trio' =>  [[1, 12, 6, 7, 2], [1, 12, 7, 2, 10], [7, 3, 2, 10, 1], [2, 10, 6, 1, 7]] ,
		'new 3 qpl/trio' =>  [[1, 12, 7, 2, 10], [7, 3, 2, 10, 1], [2, 10, 6, 1, 7]] ,
		'All QPL values'    =>  '1, 2, 10, 7, 12, 3, 6',
		'New 2 QPL values'  =>  '1, 2, 10, 7, 12, 3, 6',
		'New 3 QPL values'  =>  '1, 2, 10, 7, 12, 3, 6',
		'For reference  ' =>  '12, 3, 6',//total: 3
		'All wins values' =>  '1, 2, 7, 10',//total: 4
		'Remaining' =>  '9, 8, 4, 11, 5',//total: 5,
		'diff' =>  '',
		'WIN' =>  '1, 2, 7, 10',
		'tce??' =>  '1, 2, 3, 7, 10, 12',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[5, 6], [7, 5, 6], [7, 6], [7], [7, 5]] ,
		'qpl/trio'       =>  [[7, 3, 10, 5, 6], [5, 3, 10, 8, 7]] ,
		'new 2 qpl/trio' =>  [[7, 3, 10, 5, 6], [5, 3, 10, 8, 7]] ,
		'new 3 qpl/trio' =>  [[7, 3, 10, 5, 6]] ,
		'All QPL values'    =>  '7, 3, 10, 5, 8, 6',
		'New 2 QPL values'  =>  '7, 3, 10, 5, 8, 6',
		'New 3 QPL values'  =>  '7, 3, 10, 5, 6',
		'For reference  ' =>  '3, 10, 8',//total: 3
		'All wins values' =>  '5, 6, 7',//total: 3
		'Remaining' =>  '4, 2, 12, 1, 11, 9',//total: 6,
		'diff' =>  '',
	],
];
