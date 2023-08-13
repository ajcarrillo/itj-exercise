<?php

require __DIR__ . '/vendor/autoload.php';

function main(): void {
    $shipmentsFilePath = dirname(__DIR__) . '/files/10-list-addresses.txt';
    $driversFilePath = dirname(__DIR__) . '/files/10-list-drivers.txt';

    $shipments = readFromFile($shipmentsFilePath);
    $drivers = readFromFile($driversFilePath);

    [$totalSs, $assignments] = assignShipmentsToDrivers($shipments, $drivers);

    echo 'Total SS: ' . $totalSs . PHP_EOL;
    foreach ($assignments as $driver => $shipment) {
        echo $driver . ': ' . $shipment . PHP_EOL;
    }
}

main();

