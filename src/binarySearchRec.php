<?php

namespace AlgorithmsAndDataStructures;

function binarySearchRec(array $arr, int $key, int $low, int $high): int
{
    $middle = intval(($low + $high) / 2);
    if ($low > $high) {
        return -1;
    }

    if ($key === $arr[$middle]) {
        return $middle;
    } elseif ($key < $arr[$middle]) {
        return binarySearchRec($arr, $key, $low, $middle - 1);
    } else {
        return binarySearchRec($arr, $key, $middle - 1, $high);
    }

}