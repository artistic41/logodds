<?php
/**
small values: 1, 3, 6, 10, 12
medium values: 1, 2, 8, 12
inter values: 1, 12, count(interValues) = 2
*/

return [
	'2' => [
		/**
		Race 2
		*/
		'wins' =>  [[8, 7], [11, 7], [11], [8, 9], [11, 9]] ,
		'qpl/trio'       =>  [[6, 11, 1, 8, 7], [6, 4, 1, 7, 11], [6, 11, 1, 8, 9]] ,
		'All QPL values'    =>  '6, 1, 11, 8, 9, 7, 4',
		'All Runners   '    =>  '6, 1, 11, 8, 9, 12, 7, 4, 3, 10, 5, 2',
		'favorite' =>  6 ,
		'Set 1'  =>  '7, 4',
		'Set 2'  =>  '12',
		'all wins values'  =>  '11, 8, 9, 7 //count wins: 4',
		'for reference  '  =>  '6, 1, 4 //count ref: 3',
		'weird values   '  =>  '12, 3, 10, 5, 2',
		'small set  '  =>  '6, 1',
		'medium set '  =>  '',
		'big set    '  =>  '4',
		'Qqpl' =>  '6, 1, 4',
	],
	'4' => [
		/**
		Race 4
		*/
		'wins' =>  [[9]] ,
		'qpl/trio'       =>  [[1, 12, 10, 6, 9]] ,
		'All QPL values'    =>  '1, 6, 12, 10, 9',
		'All Runners   '    =>  '1, 6, 12, 10, 9, 3, 8, 2, 5, 7, 11, 4',
		'favorite' =>  1 ,
		'all wins values'  =>  '9 //count wins: 1',
		'for reference  '  =>  '1, 6, 12, 10 //count ref: 4',
		'weird values   '  =>  '3, 8, 2, 5, 7, 11, 4',
		'small set  '  =>  '1, 6, 12, 10',
		'medium set '  =>  '',
		'big set    '  =>  '',
		'Qqpl' =>  '1, 6, 12, 10',
		'For reference' =>  '1, 6, 12, 10',
	],
	'5' => [
		/**
		Race 5
		*/
		'wins' =>  [[9], [8, 6, 9], [4, 9], [8, 9]] ,
		'qpl/trio'       =>  [[8, 4, 6, 12, 9], [8, 2, 4, 5, 9], [2, 4, 12, 8, 9], [2, 12, 8, 6, 9]] ,
		'All QPL values'    =>  '8, 6, 2, 4, 9, 12, 5',
		'All Runners   '    =>  '8, 6, 2, 4, 9, 12, 5, 11, 1, 3, 7, 10',
		'favorite' =>  8 ,
		'all wins values'  =>  '8, 6, 4, 9 //count wins: 4',
		'for reference  '  =>  '2, 12, 5 //count ref: 3',
		'weird values   '  =>  '11, 1, 3, 7, 10',
		'small set  '  =>  '',
		'medium set '  =>  '2',
		'big set    '  =>  '12, 5',
		'Qqpl' =>  '2, 12, 5',
		'Tce' =>  '8, 6, 2, 4, 9, 12',
	],
	'6' => [
		/**
		Race 6
		*/
		'wins' =>  [[5], [5, 4], [5, 6], [6]] ,
		'qpl/trio'       =>  [[3, 1, 4, 8, 5], [3, 1, 6, 5, 4], [3, 1, 8, 5, 6], [1, 3, 5, 8, 2]] ,
		'All QPL values'    =>  '3, 1, 5, 8, 2, 6, 4',
		'All Runners   '    =>  '3, 1, 5, 7, 8, 2, 6, 9, 4, 12, 11, 10',
		'favorite' =>  3 ,
		'Set 1'  =>  '8, 2, 6, 4',
		'WP'  =>  '3',
		'Win/Qin/Trio'  =>  '3, 1, 8, 2',
		'Set 2'  =>  '7, 9',
		'all wins values'  =>  '5, 6, 4 //count wins: 3',
		'for reference  '  =>  '3, 1, 8, 2 //count ref: 4',
		'weird values   '  =>  '7, 9, 12, 11, 10',
		'small set  '  =>  '3, 1',
		'medium set '  =>  '8, 2',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 1, 8, 2',
		'For reference' =>  '3, 1, 8, 2',
		'Place' =>  '3',
		'Qin' =>  '1, 8, 2',
		'Tce' =>  '3, 1, 5, 8, 2, 6',
	],
	'7' => [
		/**
		Race 7
		*/
		'wins' =>  [[2], [4, 2], [9]] ,
		'qpl/trio'       =>  [[3, 1, 12, 4, 2], [3, 1, 4, 2, 9]] ,
		'All QPL values'    =>  '3, 1, 4, 2, 12, 9',
		'All Runners   '    =>  '3, 1, 4, 2, 6, 11, 8, 10, 12, 9, 7, 5',
		'favorite' =>  3 ,
		'Set 1'  =>  '12, 9',
		'Set 2'  =>  '6, 11, 8, 10',
		'all wins values'  =>  '4, 2, 9 //count wins: 3',
		'for reference  '  =>  '3, 1, 12 //count ref: 3',
		'weird values   '  =>  '6, 11, 8, 10, 7, 5',
		'small set  '  =>  '3, 1',
		'medium set '  =>  '12',
		'big set    '  =>  '',
		'Qqpl' =>  '3, 1, 12',
		'Tce' =>  '3, 1, 4, 2, 12, 9',
	],
	'8' => [
		/**
		Race 8
		*/
		'wins' =>  [[2, 7], [4, 6, 7], [7], [6, 7, 5], [6, 7, 9], [7, 9], [6, 7]] ,
		'qpl/trio'       =>  [[4, 6, 3, 2, 7], [2, 4, 6, 12, 7], [2, 4, 6, 7, 5], [2, 4, 6, 7, 9], [2, 4, 6, 1, 7]] ,
		'All QPL values'    =>  '2, 7, 4, 6, 12, 9, 1, 5, 3',
		'All Runners   '    =>  '2, 7, 4, 6, 11, 8, 12, 1, 9, 5, 3, 10',
		'favorite' =>  2 ,
		'Set 1'  =>  '12, 9, 1, 5, 3',
		'Set 2'  =>  '11, 8',
		'all wins values'  =>  '2, 7, 4, 6, 9, 5 //count wins: 6',
		'for reference  '  =>  '12, 1, 3 //count ref: 3',
		'weird values   '  =>  '11, 8, 10',
		'small set  '  =>  '',
		'medium set '  =>  '12, 1',
		'big set    '  =>  '3',
		'Qqpl' =>  '12, 1, 3',
		'Tce' =>  '2, 7, 4, 6, 12, 9',
	],
	'9' => [
		/**
		Race 9
		*/
		'wins' =>  [[10, 4], [9]] ,
		'qpl/trio'       =>  [[3, 1, 12, 10, 4], [3, 1, 9, 10, 4], [1, 3, 10, 8, 9]] ,
		'All QPL values'    =>  '1, 3, 10, 9, 8, 12, 4',
		'All Runners   '    =>  '1, 3, 10, 9, 8, 6, 4, 12, 5, 11, 2, 7',
		'favorite' =>  1 ,
		'Set 1'  =>  '12, 4',
		'Set 2'  =>  '6',
		'all wins values'  =>  '10, 9, 4 //count wins: 3',
		'for reference  '  =>  '1, 3, 8, 12 //count ref: 4',
		'weird values   '  =>  '6, 5, 11, 2, 7',
		'small set  '  =>  '1, 3',
		'medium set '  =>  '8',
		'big set    '  =>  '',
		'Qqpl' =>  '1, 3, 8, 12',
		'For reference' =>  '1, 3, 8, 12',
		'Tce' =>  '1, 3, 10, 9, 8, 12',
	],
];
