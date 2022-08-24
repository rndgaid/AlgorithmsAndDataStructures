<?php

namespace AlgorithmsAndDataStructures;

require_once 'binarySearchRec.php';

$arr = [1, 3, 5, 7, 9, 11, 13];
$key = 2;
$low = 0;
$high = 6;

print binarySearchRec($arr, $key, $low, $high);
