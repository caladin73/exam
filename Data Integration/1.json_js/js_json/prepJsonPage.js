/*
 *  Assign handlers (functions) to the buttons
 */
let getJSONFile = function(e) {
    let ajax = Object.create(Ajax);
    ajax.init();
    ajax.getFile(e.target.value);
}

let callBack = function(txt) {
    let myJson = JSON.parse(txt);
    $('displayfromjson').innerHTML = '';
    if (myJson.class) {
        for (let i = 0; i < myJson.class.length; i++) {
            $('displayfromjson').innerHTML += '<p>' + myJson.class[i] +
                '</p>';
        }
    } else if (myJson.int_min) {
        $('displayfromjson').innerHTML += '<p>' +
            myJson.uint_max + ' max 32-bit integer' +
            '</p>';
        $('displayfromjson').innerHTML += '<p>' +
            myJson.ipv6_max_int + ' max number of IPV6 addresses' +
            '</p>';
        $('displayfromjson').innerHTML += '<p>' +
            myJson.earth_mass + ' mass of earth in kgs' +
            '</p>';
        $('displayfromjson').innerHTML += '<p>' +
            (myJson.ipv6_max_int / myJson.earth_mass / 1000).toExponential(1) +
            ' IPV6 addresses per gram of earth matter</p>';
    } else {
        $('displayfromjson').innerHTML += '<p>';
        $('displayfromjson').innerHTML += myJson.person.name.firstName + ' ';
        $('displayfromjson').innerHTML += myJson.person.name.middleInitial + ' ';
        $('displayfromjson').innerHTML += myJson.person.name.lastName;
        $('displayfromjson').innerHTML += '</p>';
    }
}

let showStarter = function () {
    $('jf').addEventListener('change', getJSONFile);
}
window.addEventListener('load', showStarter);       // kick off JS