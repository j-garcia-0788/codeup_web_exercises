// create a circle object
var circle = {
    radius: 5,
    getArea: function () {
        
        return Math.PI * (Math.pow(this.radius, 2));
    },
    logInfo: function (round) {
        var logArea= (round) ? Math.round(this.getArea()) : this.getArea();

        // todo: complete this method. if round is true, round the result to the nearest integer.
        console.log('Area of a circle with radius: ' + this.radius + ', is: ' + logArea);
    }
};

// log info about the circle
circle.logInfo(false);
circle.logInfo(true);

// todo:
// Change the radius of the circle to 5.

// log info about the circle
circle.logInfo(false);
circle.logInfo(true);