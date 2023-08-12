/* eslint-disable no-unused-vars */
import { expect, test } from 'vitest'
import { assignShipmentsToDrivers } from '../../assignShipmentsToDrivers'

test('should assign shipments to drivers optimally', () => {
  const shipments = ['123 Fake St.', '456 Elm St.']
  const drivers = ['John Doe', 'Jane Smith I']

  const [totalSS, assignments] = assignShipmentsToDrivers(shipments, drivers)

  expect(totalSS).toBe(13)
  expect(assignments).toEqual({
    'Jane Smith I': '123 Fake St.',
    'John Doe': '456 Elm St.'
  })
})

test('should handle more drivers than shipments', () => {
  const shipments = ['123 Fake St.']
  const drivers = ['John Doe', 'Jane Smith I']

  const [totalSS, assignments] = assignShipmentsToDrivers(shipments, drivers)

  expect(totalSS).toBe(9)
  expect(Object.keys(assignments).length).toBe(1)
})

test('should handle more shipments than drivers', () => {
  const shipments = ['123 Fake St.', '456 Elm St.', '789 Oak St.']
  const drivers = ['John Doe']

  const [totalSS, assignments] = assignShipmentsToDrivers(shipments, drivers)

  expect(totalSS).toBe(6.75)
  expect(Object.keys(assignments).length).toBe(1)
})
