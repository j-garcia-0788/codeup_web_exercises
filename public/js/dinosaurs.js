    // You've just been hired as a junior web developer at a park.  A park unlike any other.  
    // And in this park, we have a particular kind of attraction - one the world has not seen in some time...
 
    // Your new boss, Nedry, has tasked you with some JSON related work.
 
    // Create an object called Dinosaur.  
 
    // This object should have the following properties, with a relevant data types:
    /*   -- species, genus, nickname, descriptive adjective reflective of that dinosaur's personality.
         -- method 'trample' -> which when called, issues an ALERT that says "Watch Out!  <nickname> is on the loose!".  
              If the dinosaur is a predator, it should say "Rawrrr!  <nickname> is on a rampage!"
         -- an array of favorite foods.
         -- age
    */
 
    // The output should look like this:
    /*
 
    Dinosaur 1: 
    Dopey, a wistful Ceratosaurus nasicornis is 33 years old. 
    Their favorite foods are: flying squirrels and chicken.
    *alert method called*
    
    Dinosaur 2: 
    Bitey, a solitary Tyrannosaurus rex is 27 years old. 
    Their favorite foods are: carcasses, mammals and other dinosaurs.
    *alert method called*
 
    
    Dinosaur 3:
    Buttons, a family-oriented Stegosaurus armatus is 38 years old. 
    Their favorite foods are: grass and leaves. 
    *alert method called*
 
    */
 
    // At the end of this assignment, you should have ATLEAST three dinosaurs. 
    //Try putting them all in an array, and looping through them!
 
    // Remember the keyword: "this".
 
 var dinosaur = [
	{"nickname": "Bitey",
	"species": "Tyrannosaurus",
	"genus": "rex", 
	"personality": "solitary",
	"age": "27",
	"foods":
		{"one": "carcasses",
		"two": "animals"}
	},
	{"nickname": "Buttons",
	"species": "Stegosaurus",
	"genus": "armatus",
	"personality": "family-oriented",
	"age": "38",
	"foods":
		{"one": "grass",
		"two": "leaves"}
	},
	{"nickname": "Dopey",
	"species": "Ceratosaurus",
	"genus": "nasicornis",
	"personality": "wistful",
	"age": "33",
	"foods":
		{"one": "flying squirrels",
		"two": "animals"}
	},  
	'trample': function() {
		alert('Watch Out!');
	}
];

dinosaur.forEach(function (element, index, array) {


    console.log('Dinosaur ' + (index+1) + ':' + '\n' + element.nickname + ', a ' 
    	+ element.species + ' ' + element.genus + ' is ' + element.age + ' years old.\n' 
    	+ 'Favorite foods include: ' + element.foods.one + ' and ' + element.foods.two + ".")

    console.log("---------------------------------------------------");

    if (element.foods.two == "mammals") {
          alert("Rawrrr! " + element.nickname + " is on a rampage!");
	    } 
	    else {
           alert("Watch Out! " + element.nickname + " is on the loose!");
        }
	});



