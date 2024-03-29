<?php 
require '../vendor/autoload.php';

use Phpml\Regression\SVR;
use Phpml\SupportVectorMachine\Kernel;

$samples = [
    [
        4,2,3,8,7,
        6,2,4,8,7,
        1,3,4,5,8,
        9,6,3,9,9,
        1,2,6,7,9,
    ],  
    [
        4,6,6,2,1,
        9,5,4,7,8,
        3,1,6,2,4,
        8,5,1,6,3,
        2,5,8,4,9
    ], 
    [
        5,4,8,7,3,
        1,5,7,8,8,
        6,5,1,7,8,
        6,5,4,7,2,
        8,5,2,1,7
    ], 
    [
        9,9,5,1,9,
        5,7,2,7,3,
        6,9,7,8,1,
        1,3,8,5,7,
        9,4,2,3,8,
    ], 
];
$targets = [5, 8, 7, 1];

$regression = new SVR(Kernel::LINEAR);
$regression->train($samples, $targets);

$re = $regression->predict([
    5,5,6,8,1,
    9,7,4,8,2,
    5,1,8,9,4,
    6,5,8,7,2,
    3,5,6,8,2,
]);
var_dump($re);
