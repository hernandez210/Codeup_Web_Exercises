(function () {
	"use strict";
// todo:
// Create an array of objects that represent books.
// Each book should have a title and an author.
// The book author should be an object with a firstName and lastName.
// Be creative and add at least 5 books to the array
// var books = [todo];

// log out the books array
	console.log(books);

// todo:
// Loop through the array of books using .forEach and print out the specified information about each one.
// start loop here
    // console.log("Book #" + todo);
    // console.log("Title: " + todo);
    // console.log("Author: " + todo);
    // console.log("---");
// end loop here
	var books = [{ 
		"Title": "Tuesday with Murray",
		"Author": {
		"firstname": "Mitch",
		"lastname" : "Alborn"
		}},
		{
		"Title": "The Art of War",
		"Author": {
		"firstname": "Sun", 
		"lastname": "Tzu"
		}},
		{
		"Title": "The Presidents",
		"Author": {
		"firstname": "Dorris",
		"lastName": "Kearn"
	}}];
	
	books.forEach (function (books, index){
		console.log("books: " + "index+1";
		console.log("Title: " + books.Title);
		console.log("Author: " + books.Author.firstname + " " + " " + book.author.lastname);



});










