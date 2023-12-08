<?php

namespace Jcarvalho\AdventOfCode;

use Jcarvalho\AdventOfCode\Challenges\BaseChallenge;
use Exception;

class AdventOfCode
{
    private BaseChallenge $challenge;

    public function __construct(int $year, int $day, string $file) 
    {
        $this->setChallenge($year, $day, $file);
    }

    public function setChallenge(int $year, int $day, string $file): void
    {
        $class = "Jcarvalho\\AdventOfCode\\Challenges\\Year{$year}\\Day{$day}\\Challenge";
        if (!class_exists($class)) {
            throw new Exception("Class {$class} not found", 404);
        }
        $this->challenge = new $class($year, $day, $file);
    }

    public function execute(): string
    {
        return $this->challenge->execute();
    }
}