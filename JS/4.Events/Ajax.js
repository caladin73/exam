function getData() {
    var data;
    $.get("example.php", function(response) {
        data = response;
    });
    return data;
}

var data = getData();
console.log("The data is: " + data);

/*
This does not behave as you would expect from a synchronous point-of-view. Similar to setTimeout in the example above, $.get does not pause the execution of the code, it just schedules some code to run once the server responds.
 the return data; line will run before data = response, so the code above will always print "The data is: undefined".
 */

