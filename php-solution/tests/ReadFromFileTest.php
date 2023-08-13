<?php

it('returns an array with valid file lines', function () {
    $testFilePath = __DIR__ . '/test.txt';
    file_put_contents($testFilePath, "line1\nline2\nline3\n");

    $result = readFromFile($testFilePath);
    expect($result)->toBe(['line1', 'line2', 'line3']);

    unlink($testFilePath);
});

it('returns an empty array on file read error', function () {
    $testFilePath = __DIR__ . '/nonexistent.txt';

    $result = readFromFile($testFilePath);
    expect($result)->toBe([]);
});

it('excludes empty lines', function () {
    $testFilePath = __DIR__ . '/test.txt';
    file_put_contents($testFilePath, "\nline1\n\nline2\n\n");

    $result = readFromFile($testFilePath);
    expect($result)->toBe(['line1', 'line2']);

    unlink($testFilePath);
});

