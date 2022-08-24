<?php

namespace AlgorithmsAndDataStructures;

function binarySearchRec(array $arr, int $value, int $low, int $high): int
{
    $middle = intval(($low + $high) / 2);

    if ($low > $high) {
        return -1;
    }

    if ($value === $arr[$middle]) {
        return $middle;
    } elseif ($value < $arr[$middle]) {
        return binarySearchRec($arr, $value, $low, $middle - 1);
    } else {
        return binarySearchRec($arr, $value, $middle + 1, $high);
    }
}
