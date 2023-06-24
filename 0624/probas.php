<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'wins' =>  [[9, 10], [10]] ,
		'inters' =>  [[16, 5, 6], [5, 6, 9, 16], [5, 6, 9, 13, 16]] ,
		'dInter' =>  '9',
		'dInter-diff' =>  '9',
		'iInter' =>  '16, 5, 6, 9',
		'iInter-diff' =>  '16, 5, 6, 9',
		'qin' =>  '5, 6, 9, 13, 16',
		'qpl/trio' =>  [[5, 9, 16, 6, 10], [5, 9, 16, 6, 13]] ,
		'diff' =>  '13',
	],
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[1], [5]] ,
		'inters' =>  [[2, 6, 10, 5, 1], [2, 5, 6, 10], [2, 5, 6, 15], [1, 2, 6, 15], [2, 5, 6, 7, 15]] ,
		'dInter' =>  '1, 5',
		'dInter-diff' =>  '1, 5',
		'iInter' =>  '2, 6, 10, 5, 1, 15',
		'iInter-diff' =>  '2, 6, 10, 5, 1',
		'qin' =>  '2, 5, 6, 7, 15',
		'qpl/trio' =>  [[1, 5, 2, 6, 10], [1, 5, 2, 6, 15], [5, 7, 2, 6, 15]] ,
		'diff' =>  '15, 7',
	],
	'3' => [
		/**
		Race 3
		*/
		'Win' =>  '9',
		'wins' =>  [[15, 9], [9]] ,
		'inters' =>  [[13, 2, 14], [2, 13, 14, 15]] ,
		'dInter' =>  '15',
		'dInter-diff' =>  '15',
		'iInter' =>  '13, 2, 14',
		'iInter-diff' =>  '13, 2, 14',
		'qin' =>  '2, 13, 14, 15 X 9',
		'qpl/trio' =>  [[9, 14, 2, 13, 15]] ,
		'diff' =>  '',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[2]] ,
		'inters' =>  [[14, 21, 12, 8, 6], [14, 21, 12, 8], [6, 8, 12, 14, 21]] ,
		'dInter' =>  '',
		'dInter-diff' =>  '',
		'iInter' =>  '14, 21, 12, 8, 6',
		'iInter-diff' =>  '14, 21, 12, 8',
		'qin' =>  '6, 8, 12, 14, 21',
		'qpl/trio' =>  [[12, 14, 21, 6, 8], [12, 14, 21, 2, 8]] ,
		'diff' =>  '6, 2',
	],
	'6' => [
		/**
		Race 6
		*/
		'Win' =>  '9',
		'wins' =>  [[16], [9]] ,
		'inters' =>  [[6, 15, 4, 1], [1, 4, 6, 15], [1, 6, 13, 15], [1, 4, 6, 13]] ,
		'dInter' =>  '',
		'dInter-diff' =>  '',
		'iInter' =>  '6, 15, 4, 1, 13',
		'iInter-diff' =>  '6, 15, 1',
		'qin' =>  '1, 4, 6, 13 X 9',
		'qpl/trio' =>  [[1, 16, 4, 6, 15], [1, 9, 6, 13, 15], [1, 9, 4, 6, 13]] ,
		'diff' =>  '9, 13, 4',
	],
];
