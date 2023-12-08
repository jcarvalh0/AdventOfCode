<?php

namespace Jcarvalho\AdventOfCode\Challenges;

abstract class BaseChallenge
{
    private int $year;
    private int $day;
    private string $file;

    public function __construct(int $year, int $day, string $file) 
    {
        $this->year = $year;
        $this->day = $day;
        $this->file = $file;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function getDay(): int
    {
        return $this->day;
    }

    public function getFile(): string
    {
        return $this->file;
    }

    abstract public function execute(): string;
}