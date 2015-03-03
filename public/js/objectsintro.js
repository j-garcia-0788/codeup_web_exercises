// todo:
// Create person object with firstName and lastName properties (set to your first and last name).
// var person = todo;

// todo:
// Add a say hello method to the person object that alerts hello using the firstName and lastName properties.

// Say hello from the person object.
// person.sayHello();

var newperson = {};
newperson.firstname = "James";
newperson.lastname = "Garcia";

newperson.hello = function() {
	alert('Hello there, ' + this.firstname + ' ' + this.lastname + '!')
}

newperson.hello();