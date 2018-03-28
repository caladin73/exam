// Say "Hello."
console.log("Hello.");
// Say "Goodbye" two seconds from now.
setTimeout(function() {
    console.log("Goodbye!");
}, 2000);
// Say "Hello again!"
console.log("Hello again!");

/*If you are only familiar with synchronous code,
you might expect the code above to behave in the following way:
    Say "Hello".
    Do nothing for two seconds.
    Say "Goodbye!"
    Say "Hello again!"

But setTimeout does not pause the execution of the code.
It only schedules something to happen in the future,
and then immediately continues to the next line.
    Say "Hello."
    Say "Hello again!"
    Do nothing for two seconds.
    Say "Goodbye!"
*/

