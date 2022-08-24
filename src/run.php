<?php

namespace AlgorithmsAndDataStructures;

require_once 'binarySearchRec.php';

$arr = [1, 3, 5, 7, 9, 11, 13];
$value = 113;
$low = 0;
$high = count($arr) - 1;

print binarySearchRec($arr, $value, $low, $high);
