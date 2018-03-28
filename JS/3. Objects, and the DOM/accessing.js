

//Finding HTML Element by Id
var myElement = document.getElementById("intro");

//Finding HTML Elements by Tag Name
var x = document.getElementsByTagName("p");

//Finding HTML Elements by Class Name
var x = document.getElementsByClassName("intro");

//Get the value of the class attribute of an <h1> element
var x = document.getElementsByTagName("H1")[0].getAttribute("class");

//Add the class attribute with the value of "democlass" to a <h1> element
document.getElementsByTagName("H1")[0].setAttribute("class", "democlass");