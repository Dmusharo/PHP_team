<?php
//1
/*
 * <?php
	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
		['j', 'k', 'l'],
	];
?>
Выведите с его помощью элементы с текстом 'l', 'e', 'g' и 'a'.
 */
$arr=[
    ["a","b","c"],
    ["d","e","f"],
    ["g","h","i"],
    ["j","k","l"],
];
echo $arr[3][2];
echo $arr[1][1];
echo $arr[2][0];
echo $arr[0][0];

//2
/*
 * $arr=[[1,2],[3,4],[5,6]];
echo array_sum($arr[0])+array_sum($arr[1])+array_sum($arr[2]);
 */
$arr=[[1,2],[3,4],[5,6]];
echo array_sum($arr[0])+array_sum($arr[1])+array_sum($arr[2]);

//3
/*
 * $arr=[[1,2],[3,4],[5,6]];
echo array_sum($arr[0])+array_sum($arr[1])+array_sum($arr[2]);
 */
$arr = [
    [
        [1, 2],
        [3, 4],
    ],
    [
        [5, 6],
        [7, 8],
    ],
];
echo array_sum($arr[0][0])+array_sum($arr[0][1])+array_sum($arr[1][0])+array_sum($arr[1][1]);
//4 Выведите с помощью этого массива имя первого мальчика и имя второй девочки.

$arr = [
    'boys'  => [1 => 'Коля', 2 => 'Вася',
        3 => 'Петя'],
    'girls' => [1 => 'Даша', 2 => 'Маша',
        3 => 'Лена'],
];

echo $arr['boys'][1];
echo $arr['girls'][2];


//5
/*
 * <?php
	$arr = [
		'ru' => ['пн', 'вт', 'ср', 'чт',
			'пт', 'сб', 'вс'],
		'en' => ['mn', 'ts', 'wd', 'th',
			'fr', 'st', 'sn'],
	];
?>
Выведите с помощью этого массива английское название среды.
 */
$arr = [
    'ru' => ['пн', 'вт', 'ср', 'чт',
        'пт', 'сб', 'вс'],
    'en' => ['mn', 'ts', 'wd', 'th',
        'fr', 'st', 'sn'],
];
echo $arr["en"][2];


//6
/*
 * <?php
	$arr = [
		[
			'name'   => 'user1',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];
?>
Выведите с помощью этого массива сумму зарплат первого и третьего юзера.
 */
$arr = [
    [
        'name'   => 'user1',
        'age'    => 30,
        'salary' => 1000,
    ],
    [
        'name'   => 'user2',
        'age'    => 31,
        'salary' => 2000,
    ],
    [
        'name'   => 'user3',
        'age'    => 32,
        'salary' => 3000,
    ],
];
echo  $arr[0]["salary"]+$arr[2]["salary"];

//Произвольные массивы
/*
 * <?php
	$arr = [[1, 2, 3, [4, 5, [6, 7]]],
		[8, [9, 10]]];
?>
Найдите сумму всех элементов приведенного массива.
Обращайтесь к каждому элементу по отдельности, без цикла.
 */
$arr = [[1, 2, 3, [4, 5, [6, 7]]],
    [8, [9, 10]]];
echo $arr[0][0]+$arr[0][1]+$arr[0][2]+$arr[0][3][0]+$arr[0][3][1]+$arr[0][3][2][0]+$arr[0][3][2][1]+$arr[1][0]+$arr[1][1][0]+$arr[1][1][1];

