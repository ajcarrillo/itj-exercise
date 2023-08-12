import { readFile } from 'fs/promises'

export async function readFromFile (path) {
  try {
    const data = await readFile(path, 'utf-8')
    return data.split('\n').filter(line => line.trim() !== '')
  } catch (error) {
    console.error(`Error reading file from ${path}.`, error)
    return []
  }
}
