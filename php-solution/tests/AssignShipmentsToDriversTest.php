<?php


it('assigns shipments to drivers based on SS calculation', function () {
    $shipments = ['123 Fake St.', '456 Elm St.'];
    $drivers = ['John Doe', 'Jane Smith I'];

    [$totalSs, $assignments] = assignShipmentsToDrivers($shipments, $drivers);

    expect($assignments)->toEqual(['Jane Smith I'=> '123 Fake St.', 'John Doe'=> '456 Elm St.']);
    expect($totalSs)->toBe(13.0);
});

it('assigns shipments to all drivers even if more drivers than shipments', function () {
    $shipments = ['123 Fake St.'];
    $drivers = ['John Doe', 'Jane Smith I'];

    [$totalSs, $assignments] = assignShipmentsToDrivers($shipments, $drivers);

    expect(count($assignments))->toEqual(1);
    expect($totalSs)->toBe(9.0);
});

it('assigns all shipments even if more shipments than drivers', function () {
    $shipments = ['123 Fake St.', '456 Elm St.', '789 Oak St.'];
    $drivers = ['John Doe'];

    [$totalSs, $assignments] = assignShipmentsToDrivers($shipments, $drivers);

    expect(count($assignments))->toEqual(1); // Best SS based on calculateSS function
    expect($totalSs)->toBe(6.75);
});
