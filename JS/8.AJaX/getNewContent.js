'use strict';
/*
 * Event handler for fortune button - tests responseText
 */
let getNewContent = function() {
    let request = ajax();
    if (request) {
        request.addEventListener('load', txtHandler);
        request.open('GET', 'example.txt');
        request.send(null);
    } else {
        window.alert('Your browser does not support XMLHttpRequest');
    }
}
/*
 * readystatechange event handler
 * aka callback function
 * for the above AJaX
 */
let txtHandler = function(e) {
    /* ajax load event
     * puts received text
     * onto the dom
     * into the dom
     */
    console.log(e.target.getResponseHeader('Content-Type'));
    let para = document.createElement('p');
    let txt = document.createTextNode(e.target.responseText);
    para.appendChild(txt);
    $('new').appendChild(para);
}


/*
 *  Event handler for weather button - tests responseXML
 */
let getNewContentX = function () {
    let request = ajax();
    if (request) {
        request.addEventListener('readystatechange', xmlHandler);
        request.open('GET', 'example.php');
        request.send(null);
    } else {
        window.alert('Your browser does not support XMLHttpRequest');
    }
}
/*
 * readystatechange event handler
 * aka callback function
 * for the above AJaX
 */
let xmlHandler = function(ev) {
    /*
     * create a table in the DOM
     * and format the received XML
     * into the table as rows
     */
    if (ev.target.readyState === 4) {
        if (ev.target.status === 200) {
            // it was a load event
            console.log(ev.target.getResponseHeader('Content-Type'));
            let respObj = ev.target.responseXML;
            let arrOfTemps = respObj.getElementsByTagName('hallo');
            let firstTemp = arrOfTemps[0].firstChild.nodeValue;
            $('latest').innerHTML = firstTemp;
        }
    }
}



/*
 *  Event handler for well ... button - tests responseXML
 */
let getJSONcontent = function() {
    let request = ajax();
    if (request) {
        request.addEventListener('load', jsonHandler);
        request.open('GET', 'examplejson.php');
        request.send(null);
    } else {
        window.alert('Your browser does not support XMLHttpRequest');
    }
}
/*
 * readystatechange 'load' event handler
 * aka callback function
 * for the above AJaX
 */
let jsonHandler = function(eve) {
    /* ajax load event
     * create a table in the DOM
     * and loop the received JSON
     * into the table as rows
     */
    console.log(eve.target.getResponseHeader('Content-Type'));
    let jsonObj = JSON.parse(eve.target.responseText);
    $('verylatest').innerHTML = "";
    let tab = document.createElement('table');
    console.log(jsonObj[0].id);
    for (let i = 0; i < jsonObj.length; i++) {
        let r = document.createElement('tr');

        let c1 = document.createElement('td');
        let t = document.createTextNode(jsonObj[i].id);
        c1.appendChild(t);
        r.appendChild(c1);

        let c2 = document.createElement('td');
        t = document.createTextNode(jsonObj[i].name);
        c2.appendChild(t);
        r.appendChild(c2);

        let c3 = document.createElement('td');
        t = document.createTextNode(jsonObj[i].population);
        c3.appendChild(t);
        r.appendChild(c3);

        tab.appendChild(r);
    }
    $('verylatest').appendChild(tab);
}



/*
 *  Event handler for well ... button - tests responseXML
 */
let foreignService = function() {
    let url = 'http://services.groupkt.com/country/search?';
    let qs = 'text=' + $('sq').value;
    let request = ajax();
    if (request) {
        request.addEventListener('load', xtServ);
        request.open('GET', url+qs);
        request.send(null);
    } else {
        window.alert('Your browser does not support XMLHttpRequest');
    }
}

/*
 * readystatechange 'load' event handler
 * aka callback function
 * for the above AJaX
 */
let xtServ = function(eve) {
    /* ajax load event handler
     * get from a foreign server
     */
    let jsonObj = JSON.parse(eve.target.responseText);
    $('veryverylatest').innerHTML = jsonObj.RestResponse.message;

}