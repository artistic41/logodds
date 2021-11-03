<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'4, 2, 12, 3, 6, 8, 5, 7, 9, 11, 1, 10',
		'Poor man\'s bet' ,
			'Win' => '2, 3, 4, 6, 8, 12',
		'Qin(opt $20)' ,
			'4, 2, 12, 3',
		'Qpl($30)' ,
			'4 X 12, 3, 5',
		'Qpl($20)' ,
			'2 X 12, 3, 5',
		'Qpl($10)' ,
			'4, 2, 12 X 7, 9, 1',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'4, 2, 12 X 8, 11, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'2, 7, 12, 10, 4, 5, 1, 9, 6, 8, 3, 11',
		'Poor man\'s bet' ,
			'Win' => '2, 4, 6, 7, 10, 12',
		'Qin(opt $20)' ,
			'2, 7, 12, 10',
		'Qpl($30)' ,
			'2 X 7, 12, 5',
		'Qpl($20)' ,
			'10 X 7, 12, 5',
		'Qpl($10)' ,
			'2, 7, 12, 10 X 1, 9, 3',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'2, 7, 12, 10 X 6, 8, 11',
	],
	'3' => [
		/**
		Race 3
		*/
		'2, 3, 5, 4, 12, 9, 7, 1, 11, 8, 10, 6',
		'Poor man\'s bet' ,
			'Win' => '2, 3, 4, 5, 8, 11',
		'Qin(opt $20)' ,
			'2, 3, 5, 4',
		'Qpl($30)' ,
			'2 X 3, 5, 12',
		'Qpl($20)' ,
			'4 X 3, 5, 12',
		'Qpl($10)' ,
			'2, 3, 5, 4 X 9, 7, 1',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'2, 3, 5, 4 X 8, 10, 6',
	],
	'4' => [
		/**
		Race 4
		*/
		'5, 3, 9, 2, 4, 11, 6, 1, 10, 7, 8',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 5, 9',
		'Qin(opt $20)' ,
			'5, 3, 9, 2',
		'Qpl($30)' ,
			'5 X 2, 4, 11',
		'Qpl($20)' ,
			'3 X 2, 4, 11',
		'Qpl($10)' ,
			'5, 3, 9 X 6, 10, 8',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'5, 3, 9 X 9, 1, 7',
	],
	'5' => [
		/**
		Race 5
		*/
		'6, 3, 1, 9, 4, 8, 7, 2',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 4, 6, 8, 9',
		'Qin(opt $20)' ,
			'6, 3, 1, 9',
		'Qpl($30)' ,
			'6 X 3, 1, 9',
		'Qpl($20)' ,
			'4 X 3, 1, 9',
		'Qpl($10)' ,
			'6, 3, 1, 4 X 1, 9, 7',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'6, 3, 1, 4 X 4, 8, 2',
	],
	'6' => [
		/**
		Race 6
		*/
		'1, 3, 7, 5, 4, 12, 9, 11, 8, 6, 2, 10',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 5, 7',
		'Qin(opt $20)' ,
			'1, 3, 7, 5',
		'Qpl($30)' ,
			'1 X 4, 11, 8',
		'Qpl($20)' ,
			'3 X 4, 11, 8',
		'Qpl($10)' ,
			'1, 3, 7 X 6, 2, 10',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'1, 3, 7 X 5, 12, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'1, 2, 12, 6, 4, 9, 11, 5, 3, 10, 8',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 5, 6, 9, 12',
		'Qin(opt $20)' ,
			'1, 2, 12, 6',
		'Qpl($30)' ,
			'1 X 2, 6, 4',
		'Qpl($20)' ,
			'12 X 2, 6, 4',
		'Qpl($10)' ,
			'1, 2, 12 X 11, 10, 8',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'1, 2, 12 X 9, 5, 3',
	],
	'8' => [
		/**
		Race 8
		*/
		'8, 9, 3, 2, 10, 1, 11, 7, 4, 6, 5, 12',
		'Poor man\'s bet' ,
			'Win' => '2, 3, 8, 9, 10, 11',
		'Qin(opt $20)' ,
			'8, 9, 3, 2',
		'Qpl($30)' ,
			'8 X 9, 3, 1',
		'Qpl($20)' ,
			'2 X 9, 3, 1',
		'Qpl($10)' ,
			'8, 9, 3, 2 X 7, 5, 12',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'8, 9, 3, 2 X 11, 4, 6',
	],
];
