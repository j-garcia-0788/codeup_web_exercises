// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
// var books = [todo];

var books = {
	"book": [

			{
				"Title": 'Jurassic Park', 
				"Author": {
						"First": 'Michael',
						"Last": 'Crichton'}
			},
			{
				"Title": 'The Lost World',
				"Author": {
						"First": 'Michael',
						"Last": 'Crichton'}
			},
			{
				"Title": 'The Fellowship of the Ring',
				"Author": {
						"First": 'JR',
						"Last": 'Tolkien'}
			},
			{
				"Title": 'The Two Towers',
				"Author": {
						"First": 'JR',
						"Last": 'Tolkien'}
			},
			{
				"Title": 'Return of the King',
				"Author": {
						"First": 'JR',
						"Last": 'Tolkien'}
			}
		]
};

// log out the books array
console.log(books);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here

// shapes.forEach(function (element, index, array) {

//     // element is the shape name
//     // index is the iterator
//     // array is the shapes array itself

//     console.log('The shape at index ' + index + ' is: ' + element);
// });

books.book.forEach(function (books, index) {

    console.log("Book #" + (index + 1));
    console.log("Title: " + (books.Title));
    console.log("Author: " + (books.Author['First'] + ' ' + books.Author['Last']));
    console.log("---");

});
// end loop here