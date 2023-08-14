# Platform Science

This project provides a solution for assigning shipments to drivers, considering specific rules to determine the best match.

## Description

Our sales team has just struck a deal with Acme Inc to become the exclusive provider for routing their product shipments via 3rd party trucking fleets. The catch is that we can only route one shipment to one driver per day.

Each day we get the list of shipment destinations that are available for us to offer to drivers in our network. Fortunately our team of highly trained data scientists have developed a mathematical model for determining which drivers are best suited to deliver each shipment.

With that hard work done, now all we have to do is implement a program that assigns each shipment destination to a given driver while maximizing the total suitability of all shipments to all drivers.

The top-secret algorithm is:

- If the length of the shipment's destination street name is even, the base suitability score (SS) is the number of vowels in the driver’s name multiplied by 1.5.
- If the length of the shipment's destination street name is odd, the base SS is the number of consonants in the driver’s name multiplied by 1.
- If the length of the shipment's destination street name shares any common factors (besides 1) with the length of the driver’s name, the SS is increased by 50% above the base SS.

Write an application in the language of your choice that assigns shipment destinations to drivers in a way that maximizes the total SS over the set of drivers. Each driver can only have one shipment and each shipment can only be offered to one driver. Your program should run on the command line and take as input two newline separated files, the first containing the street addresses of the shipment destinations and the second containing the names of the drivers. The output should be the total SS and a matching between shipment destinations and drivers. You do not need to worry about malformed input, but you should certainly handle both upper and lower case names.

# Clone this repository:

```bash
git clone git@github.com:ajcarrillo/itj-exercise.git
```

---

# PHP Solution

## Requirements

- PHP 8.1+
- Composer

## Getting Started

1. Navigate to the project directory:

   ```bash
   cd itj-exercise/php-solution
   ```

2. Install Dependencies with Composer installed, run:

   ```bash
   composer install
   ```

3. Running the Main Script:

   ```bash
   php index.php
   ```

## Tests

This project uses `pestphp` for unit testing. If you haven't installed the dependencies yet, refer to the "Install Dependencies" section above.

To run the tests:

```bash
vendor/bin/pest
```

---

# Javascript Solution

## Requirements

- Node.js (recommended version 16.16 or higher).
- npm (recommended version 8 or higher).

## Getting Started

1. Navigate to the project directory:

   ```bash
   cd itj-exercise/javascript-solution
   ```

2. Install the dependencies:

   ```bash
   npm install
   ```

## Usage

1. Ensure that the files `10-list-addresses.txt` and `10-list-drivers.txt` are located in the `itj-exercise/files/` directory.
2. Run the program:

   ```bash
   node main.js
   ```

## Tests

To run the unit tests:

```bash
npm run test
```
