<?php

namespace AlgorithmsAndDataStructures;

function sumNumbers(array $arr): int
{
    if (count($arr) === 0) {
        return -1;
    } elseif (count($arr) === 1) {
        return $arr[0];
    }
    return $arr[0] + sumNumbers(array_slice($arr, 1));
}
