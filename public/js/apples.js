// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];



// todo, change this to your favorite color from the list

// todo: Create a block of if/else statements to check for every color except indigo and violet.
// todo: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// todo: Have a final else that will catch indigo and violet.
// todo: In the else, log: I do not know anything by that color.

// todo: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.


var favorite = 'green';

if (color == 'red'){
	console.log('Blood is red');
}

else if (color == 'orange'){
	console.log('Orange is the new black');
}

else if (color == 'yellow'){
	console.log('yellow kinda rhymes with hello... not really');
}

else if (color == 'green'){
	console.log('it\'s actually quite easy being green');
}

else if (color == 'blue'){
	console.log('That\'s too cool for me, play Blue Moon.');
}

else {
	console.log('The limit approached something, it exists');
}

var message = (color == favorite) ? "You got my favorite color!": "That is not my favorite!";
console.log(message);
