<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Jcarvalho\AdventOfCode\AdventOfCode;

$adventOfCode = new AdventOfCode($argv[1], $argv[2], $argv[3]);
$result = $adventOfCode->execute();

var_dump('Year:' . $argv[1], 'Day:' . $argv[2], 'Result:' . $result);