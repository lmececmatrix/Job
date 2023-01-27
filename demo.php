<?php

include_once 'includes/library.php';

$jobs = $database->query(
    'SELECT * FROM jobs WHERE id=:id AND language=:lang ',
    [
        ':id' => 1,
        ':lang' => 'en'
    ]
);

// $jobs = $database->query(
//     'SELECT * FROM jobs WHERE id=:id AND language=:lang',
//     [
//         [':id', 1],
//         [':lang', 'en']
//     ]
// );

print_r($jobs);
