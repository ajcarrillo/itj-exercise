<?php

function readFromFile(string $path): array {
    try {
        $data = file_get_contents($path);

        if ($data === false) {
            throw new \Exception("Error reading file from $path.");
        }

        return array_filter(explode("\n", $data), fn($line) => trim($line) !== '');

    } catch (\Exception $error) {
        error_log("Error reading file from $path. " . $error->getMessage());
        return [];
    }
}


