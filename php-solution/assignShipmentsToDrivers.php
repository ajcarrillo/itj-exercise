<?php

require 'calculateSS.php';
function assignShipmentsToDrivers(array $shipments, array $drivers): array {
    $assignments = [];
    $totalSs = 0.0;

    while (count($shipments) && count($drivers)) {
        $maxSs = 0.0;
        $bestDriver = '';
        $bestShipment = '';

        foreach ($shipments as $shipment) {
            foreach ($drivers as $driver) {
                $currentSs = calculateSS($driver, $shipment);
                if ($currentSs > $maxSs) {
                    $maxSs = $currentSs;
                    $bestDriver = $driver;
                    $bestShipment = $shipment;
                }
            }
        }

        $totalSs += $maxSs;
        $assignments[$bestDriver] = $bestShipment;

        $shipments = array_values(array_filter($shipments, fn($s) => $s !== $bestShipment));
        $drivers = array_values(array_filter($drivers, fn($d) => $d !== $bestDriver));
    }

    return [$totalSs, $assignments];
}

