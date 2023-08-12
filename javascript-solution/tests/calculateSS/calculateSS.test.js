import { expect, test } from 'vitest'
import { calculateSS } from '../../calculateSS'

test('should calculate SS for even shipment length', () => {
  const result = calculateSS('Everardo Welch', '1234 Fake St., San Diego, CA 92126')
  expect(result).toBe(11.25)
})

test('should calculate SS for odd shipment length', () => {
  const result = calculateSS('Everardo Welch', '123 Fake St., San Diego, CA 92126')
  expect(result).toBe(8)
})

test('should calculate SS for even shipment length without common factors', () => {
  const result = calculateSS('EverardoWelch', '12')
  expect(result).toBe(7.5)
})
