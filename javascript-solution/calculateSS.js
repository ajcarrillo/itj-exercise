export function calculateSS (driver, shipment) {
  let SS = 0.0
  const isEven = shipment.length % 2 === 0

  const numVowels = (driver.match(/[aeiouAEIOU]/g) || []).length
  const numConsonants = (driver.match(/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/g) || []).length

  SS = isEven ? numVowels * 1.5 : numConsonants

  for (let i = 2; i <= driver.length; i++) {
    if (driver.length % i === 0 && shipment.length % i === 0) {
      SS *= 1.5
      break
    }
  }

  return SS
}
