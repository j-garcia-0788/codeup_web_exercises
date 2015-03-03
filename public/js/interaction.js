// todo: Ask the user for their name.
//       Keep asking if an empty input is provided.

// todo: Show an alert message that welcomes the user based on their input.

// todo: Ask the user if they like pizza.
//       Based on their answer tell show a creative alert message.

do {
	var response = prompt('What is your name?');
} 	while (response == '' || response == null);
	
	console.log(response);

	alert('Hello, ' + response);


	var pizza = confirm('Do you enjoy pizza?');

	alert(pizza == true ? 'Pizza is always interesting' : 'Get Out');

