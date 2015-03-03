var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

switch (color) {
	case "red":
        console.log("Blood is red");
        break;
    case "orange":
        console.log("orange is the new black");
        break;
    case "yellow":
        console.log("yellow umbrella");
        break;
    case "green":
    	console.log("");
        break;
    case "blue":
        console.log("Blue Moooooon");
        break;
    default:
        console.log("I don't know that color");
}