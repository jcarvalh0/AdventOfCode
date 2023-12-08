<?php

namespace Jcarvalho\AdventOfCode\Challenges\Year2023\Day1;

use Jcarvalho\AdventOfCode\Challenges\BaseChallenge;
use Exception;

class Challenge extends BaseChallenge
{
    const CHALLENGE_FILE_PATH = __DIR__ . "/files/";
    public function execute(): string
    {
        $this->checkFileExists();

        $fileContent = $this->getFileContent();
        $lines = explode("\n", $fileContent);

        $result = 0;
        foreach ($lines as $line) {
            $result += $this->processLine($line);
        }

        return strval($result);
    }

    private function checkFileExists(): void
    {
        if (!file_exists(self::CHALLENGE_FILE_PATH . $this->getFile())) {
            throw new Exception("File {$this->getFile()} not found", 404);
        }
    }

    private function getFileContent(): string
    {
        return file_get_contents(self::CHALLENGE_FILE_PATH . $this->getFile());
    }

    private function processLine(string $line): int
    {
        $firstValue = $this->getFirstValue($line);
        $lastValue = $this->getLastValue($line);

        return intval($firstValue . $lastValue);
    }

    private function getFirstValue(string $line): string
    {
        for ($i = 0; $i < strlen($line); $i++) {
            if (is_numeric($line[$i])) {
                return $line[$i];
            }
        }

        return '0';
    }

    private function getLastValue(string $line): string
    {
        for ($i = strlen($line) -1; $i >= 0; $i--) {
            if (is_numeric($line[$i])) {
                return $line[$i];
            }
        }

        return '0';
    }
}