import { expect, test } from 'vitest'
import { readFromFile } from '../../readFile'

test('should read non-empty lines from file', async () => {
  const result = await readFromFile('./tests/readFromFile/test.txt')
  expect(result).not.toContain('')
})

test('should return empty list on error', async () => {
  const result = await readFromFile('./nonexistent.txt')
  expect(result).toEqual([])
})
