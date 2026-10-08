<?php

$kode = [
    'Afghanistan' => 93,
    'Brazil' => 55,
    'Indonesia' => 62,
    'Malaysia' => 60,
    'Palestina' => 970
];
asort($kode);
print_r($kode);
arsort($kode);
print_r($kode);

ksort($kode);
print_r($kode);
krsort($kode);
print_r($kode);
