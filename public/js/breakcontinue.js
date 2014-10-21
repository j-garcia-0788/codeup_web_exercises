do {
	var random = Math.floor((Math.random()*50)+1);  
} while(random % 2 ==0)


//while(true) {
	//var random = Math.floor((Math.random()*50)+1); 
	//if(random % 2 !=0);
	//break;
}

console.log('here is the random Odd number: ' + random)

for (var i = 1; i < 50; i++) {

    if (random == i) {
       console.log('Foreign Contaminant: ' + i);
       continue;
    }

    else if (i % 2 != 0) {
    	console.log('Here is an odd number: ' + i);	
    }
}