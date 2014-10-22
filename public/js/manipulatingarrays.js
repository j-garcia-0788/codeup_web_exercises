// todo:
// Create an array holding the names of the planets of our solar system (in order, starting closest to the sun).
var planets = ['Mercury', 'Venus', 'Earth', 'Mars', 'Jupiter', 'Saturn', 'Neptune', 'Uranus'];

// function for logging the planets array
function logPlanets() {
    console.log('Here is the list of planets:');
    console.log(planets);
}

console.log('Adding "The Sun" to the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
planets.unshift('The Sun');
console.log(planets);

console.log('Adding "Pluto" to the end of the planets array.');
// todo: Do what the log statement above says you will do.
planets.push('Pluto');
console.log(planets);

console.log('Removing "The Sun" from the beginning of the planets array.');
// todo: Do what the log statement above says you will do.
var lastitem = planets.shift();
console.log(planets);

console.log('Removing "Pluto" from the end of the planets array.');
// todo: Do what the log statement above says you will do.
var lastitem = planets.pop();
console.log(planets);

console.log('Finding and logging the index of "Earth" in the planets array.');
// todo: Do what the log statement above says you will do.
var index = planets.indexOf('Earth');
console.log(index)

console.log('Using splice to remove the planet after Earth.');
// todo: Do what the log statement above says you will do.
var removed = planets.splice(3, 1);
console.log(planets);

console.log('Using splice to add back the planet after Earth.');
// todo: Do what the log statement above says you will do.
planets.splice(3, 0, 'Mars');
console.log(planets);

console.log('Reversing the order of the planets array.');
// todo: Do what the log statement above says you will do.
planets.reverse();
console.log(planets);

console.log('Sorting the planets array.');
// todo: Do what the log statement above says you will do.
planets.sort();
console.log(planets);

// todo: Join the planets array with pipes (|) to create a variable named 'planetsAsString'.
var planetsAsString = planets.join('|');
console.log(planetsAsString);

// todo: Split the 'planetsAsString' variable by pipes (|) to create a variable named 'planetsAsArray'.
var planetsAsArray = planetsAsString.split('|');
console.log(planetsAsArray);


