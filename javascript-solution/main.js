import { readFromFile } from './readFile.js'
import { assignShipmentsToDrivers } from './assignShipmentsToDrivers.js'

async function main () {
  const shipmentsFilePath = '../files/10-list-addresses.txt'
  const driversFilePath = '../files/10-list-drivers.txt'

  const shipments = await readFromFile(shipmentsFilePath)
  const drivers = await readFromFile(driversFilePath)

  const [totalSS, assignments] = assignShipmentsToDrivers(shipments, drivers)

  console.log('Total SS:', totalSS)
  for (const [driver, shipment] of Object.entries(assignments)) {
    console.log(driver, ':', shipment)
  }
}

main()
