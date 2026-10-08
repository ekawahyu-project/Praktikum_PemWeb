<?php
$info = [
    'komputer mekanik' => 'Charles Babbage',
    'world wide web'   => 'Tim Berners-Lee',
    'mesin uap'        => 'James Watt'
];

foreach ($info as $penemuan => $penemu) {
    echo $penemu . " menemukan " . $penemuan . "<br>";
}