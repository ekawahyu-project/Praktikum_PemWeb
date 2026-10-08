<?php
function cari($array, $cari): bool {
    foreach ($array as $nilai) {
        if ($nilai == $cari) {
            return true;
        }
    }
    return false;
}

$buah = ['apel', 'jeruk', 'mangga'];

var_dump(cari($buah, 'jeruk'));   // bool(true)
var_dump(cari($buah, 'durian'));  // bool(false)