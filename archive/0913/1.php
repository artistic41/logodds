<?php

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[9], [9, 8]] ,
		'qpl/trio'       =>  [[2, 8, 4, 3, 9], [3, 7, 2, 8, 9], [3, 5, 2, 9, 8], [2, 8, 6, 3, 9]] ,
		'new 2 qpl/trio' =>  [[2, 8, 4, 3, 9], [3, 7, 2, 8, 9], [3, 5, 2, 9, 8], [2, 8, 6, 3, 9]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 9, 3, 5, 8, 7, 6, 4',
		'New 2 QPL values'  =>  '2, 9, 3, 5, 8, 7, 6, 4',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '2, 3, 5, 7, 8, 9',
		//Diff New2QplValues - allWinValues,
		'diff'               =>  '2, 3, 5, 7, 6, 4',
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
		'Tce'               =>  '1, 2, 3, 4, 5, 6',
		//Diff New2QplValues - allWinValues,
		'diff'               =>  '1, 2, 3, 8',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[5], [1], [9]] ,
		'qpl/trio'       =>  [[4, 2, 10, 1, 5], [4, 2, 6, 9, 1]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '4, 2, 1, 9, 6, 10, 5',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '1, 2, 4, 6, 9, 10',
		//Diff New2QplValues - allWinValues,
		'diff'               =>  '',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[7, 6], [6]] ,
		'qpl/trio'       =>  [[1, 5, 2, 7, 6], [2, 8, 5, 1, 6], [2, 8, 1, 6, 7]] ,
		'new 2 qpl/trio' =>  [[1, 5, 2, 7, 6], [2, 8, 1, 6, 7]] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '2, 5, 1, 6, 8, 7',
		'New 2 QPL values'  =>  '2, 5, 1, 6, 8, 7',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '1, 2, 5, 6, 7, 8',
		//Diff New2QplValues - allWinValues,
		'diff'               =>  '2, 5, 1, 8',
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
		'Tce'               =>  '2, 3, 4, 5, 6, 9',
		//Diff New2QplValues - allWinValues,
		'diff'               =>  '6, 3, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[1]] ,
		'qpl/trio'       =>  [[10, 4, 11, 7, 5], [10, 4, 11, 7, 1], [10, 4, 2, 7, 1], [10, 11, 2, 7, 1], [10, 11, 2, 7, 5], [7, 5, 1, 10, 11]] ,
		'new 2 qpl/trio' =>  [] ,
		'new 3 qpl/trio' =>  [] ,
		'All QPL values'    =>  '10, 7, 5, 1, 11, 4, 2',
		'New 2 QPL values'  =>  '',
		'New 3 QPL values'  =>  '',
		'Tce'               =>  '1, 4, 5, 7, 10, 11',
		//Diff New2QplValues - allWinValues,
		'diff'               =>  '',
	],
];
