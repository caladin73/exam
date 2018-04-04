/*
 *  Assign handlers (functions) to the buttons
 */
let showStarter = function () {
    $('fortune').addEventListener('click', getNewContent);
    $('weather').addEventListener('click', getNewContentX);
    $('jsonvar').addEventListener('click', getJSONcontent);
}

window.addEventListener('load', showStarter);       // kick off JS