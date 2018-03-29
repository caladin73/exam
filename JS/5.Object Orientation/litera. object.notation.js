var object1 = {a: 'foo', b: 42, c: {}};

console.log(object1.a);
// expected output: "foo"

var a = 'foo';
var b = 42;
var c = {};
var object2 = {a: a, b: b, c: c};

console.log(object2.b);
// expected output: 42

function Person(first, last, age, eye) {
    this.firstName = first;
    this.lastName = last;
    this.age = age;
    this.eyeColor = eye;
}


var foo = {a: 42};
// create `bar` and link it to `foo`
var bar = Object.create( foo );
bar.b = "hello world";
bar.b;
bar.a; // "hello world" // 42 <-- delegated to `foo`