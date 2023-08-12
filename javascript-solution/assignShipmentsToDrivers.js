import { calculateSS } from './calculateSS.js'

export function assignShipmentsToDrivers (shipments, drivers) {
  const assignments = {}
  let totalSS = 0.0

  while (shipments.length && drivers.length) {
    let maxSS = 0.0
    let bestDriver = ''
    let bestShipment = ''

    for (const shipment of shipments) {
      for (const driver of drivers) {
        const currentSS = calculateSS(driver, shipment)
        if (currentSS > maxSS) {
          maxSS = currentSS
          bestDriver = driver
          bestShipment = shipment
        }
      }
    }

    totalSS += maxSS
    assignments[bestDriver] = bestShipment
    shipments = shipments.filter(s => s !== bestShipment)
    drivers = drivers.filter(d => d !== bestDriver)
  }

  return [totalSS, assignments]
}
