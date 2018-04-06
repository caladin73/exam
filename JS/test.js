var car = "Fiat";

var car = {type:"Fiat", model:"500", color:"white"};

var person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};
var person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};

function Person(first, last, age, eye) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eye;
}

var myFather = new Person("John", "Doe", 50, "blue");
var myMother = new Person("Sally", "Rally", 48, "green");