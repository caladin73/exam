//That is, instead of
var data = getData();
console.log("The data is: " + data);

//we will pass in a callback function to getData:
getData(function (data) {
    console.log("The data is: " + data);
});

/*we need to change the getData function as well, so it will
know that a callback function is its parameter. */
function getData(callback) {
    $.get("example.php", function(response) {
        callback(response);
    });
}

//$.get accepts a callback,
function getData(callback) {
    $.get("example.php", callback);
}