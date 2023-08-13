<?php


it('calculates SS for even shipment length using vowels count', function () {
    $result = calculateSS('Everardo Welch', '1234 Fake St., San Diego, CA 92126');
    expect($result)->toBe(11.25);
});

it('calculates SS for odd shipment length using consonants count', function () {
    $result = calculateSS('Everardo Welch', '123 Fake St., San Diego, CA 92126');
    expect($result)->toBe(8.0);
});


it('does not multiply SS by 1.5 if no common factors between lengths', function () {
    $result = calculateSS('EverardoWelch', '12');
    expect($result)->toBe(7.5);
});
