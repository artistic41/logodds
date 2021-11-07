<?php

return [
	'1' => [
		/**
		Race 1
		*/
		'11, 5, 4, 7, 13, 3, 9, 6, 1, 8, 14, 2, 12, 10',
		'Poor man\'s bet' ,
			'Win' => '4, 5, 6, 7, 11, 13',
		'Qin(opt $20)' ,
			'11, 5, 4, 7',
		'Qpl($30)' ,
			'11 X 5, 7, 3',
		'Qpl($20)' ,
			'4 X 5, 7, 3',
		'Qpl($10)' ,
			'11, 5, 4 X 1, 14, 12',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'11, 5, 4 X 8, 2, 10',
	],
	'2' => [
		/**
		Race 2
		*/
		'14, 4, 2, 8, 6, 13, 5, 3, 9, 10, 11, 12, 7, 1',
		'Poor man\'s bet' ,
			'Win' => '2, 3, 4, 5, 8, 9, 14',
		'Qin(opt $20)' ,
			'14, 4, 2, 8',
		'Qpl($30)' ,
			'14 X 4, 2, 8',
		'Qpl($20)' ,
			'5 X 4, 2, 8',
		'Qpl($10)' ,
			'14, 4, 2, 5 X 13, 10, 11',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'14, 4, 2, 5 X 12, 7, 1',
	],
	'3' => [
		/**
		Race 3
		*/
		'1, 3, 7, 10, 13, 8, 14, 5, 12, 11, 2, 6, 9, 4',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 7, 10, 14',
		'Qin(opt $20)' ,
			'1, 3, 7, 10',
		'Qpl($30)' ,
			'1 X 10, 13, 8',
		'Qpl($20)' ,
			'3 X 10, 13, 8',
		'Qpl($10)' ,
			'1, 3, 7 X 2, 6, 4',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'1, 3, 7 X 5, 12, 9',
	],
	'4' => [
		/**
		Race 4
		*/
		'8, 2, 3, 1, 9, 10, 7, 6, 11, 4, 5, 12',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 6, 8, 10',
		'Qin(opt $20)' ,
			'8, 2, 3, 1',
		'Qpl($30)' ,
			'8 X 3, 1, 9',
		'Qpl($20)' ,
			'2 X 3, 1, 9',
		'Qpl($10)' ,
			'8, 2, 3 X 7, 5, 12',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'8, 2, 3 X 6, 11, 4',
	],
	'5' => [
		/**
		Race 5
		*/
		'7, 9, 11, 10, 2, 13, 3, 8, 1, 12, 4, 6, 14, 5',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 7, 9, 10, 11',
		'Qin(opt $20)' ,
			'7, 9, 11, 10',
		'Qpl($30)' ,
			'7 X 11, 10, 2',
		'Qpl($20)' ,
			'9 X 11, 10, 2',
		'Qpl($10)' ,
			'7, 9, 11 X 8, 4, 6',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'7, 9, 11 X 12, 14, 5',
	],
	'6' => [
		/**
		Race 6
		*/
		'7, 2, 5, 4, 1, 3, 8, 6, 10, 9',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 4, 5, 7',
		'Qin(opt $20)' ,
			'7, 2, 5, 4',
		'Qpl($30)' ,
			'7 X 2, 4, 8',
		'Qpl($20)' ,
			'5 X 2, 4, 8',
		'Qpl($10)' ,
			'7, 2, 5 X 8, 6, 10',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'7, 2, 5 X 1, 3, 9',
	],
	'7' => [
		/**
		Race 7
		*/
		'3, 4, 7, 6, 2, 5, 8, 1',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 4, 5, 6, 7',
		'Qin(opt $20)' ,
			'3, 4, 7, 6',
		'Qpl($30)' ,
			'3 X 4, 6, 2',
		'Qpl($20)' ,
			'7 X 4, 6, 2',
		'Qpl($10)' ,
			'3, 4, 7 X 6, 2, 8',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'3, 4, 7 X 7, 5, 1',
	],
	'8' => [
		/**
		Race 8
		*/
		'6, 1, 10, 9, 2, 13, 3, 12, 11, 5, 8, 4, 7',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 6, 9, 10, 13',
		'Qin(opt $20)' ,
			'6, 1, 10, 9',
		'Qpl($30)' ,
			'6 X 1, 9, 3',
		'Qpl($20)' ,
			'10 X 1, 9, 3',
		'Qpl($10)' ,
			'6, 1, 10 X 12, 5, 7',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'6, 1, 10 X 11, 8, 4',
	],
	'9' => [
		/**
		Race 9
		*/
		'1, 2, 3, 11, 7, 4, 10, 6, 5, 8',
		'Poor man\'s bet' ,
			'Win' => '1, 2, 3, 5, 7, 11',
		'Qin(opt $20)' ,
			'1, 2, 3, 11',
		'Qpl($30)' ,
			'1 X 2, 11, 4',
		'Qpl($20)' ,
			'3 X 2, 11, 4',
		'Qpl($10)' ,
			'1, 2, 3 X 10, 6, 8',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'1, 2, 3 X 3, 7, 5',
	],
	'10' => [
		/**
		Race 10
		*/
		'1, 6, 13, 7, 3, 5, 11, 4, 9, 10, 14, 2, 8, 12',
		'Poor man\'s bet' ,
			'Win' => '1, 3, 5, 6, 7, 13',
		'Qin(opt $20)' ,
			'1, 6, 13, 7',
		'Qpl($30)' ,
			'1 X 6, 13, 11',
		'Qpl($20)' ,
			'7 X 6, 13, 11',
		'Qpl($10)' ,
			'1, 6, 13, 7 X 10, 2, 8',
		'-----------ideally-----------------',
		'Qpl($10)' ,
			'1, 6, 13, 7 X 9, 14, 12',
	],
];
