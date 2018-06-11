'use strict';
let gotor = function() {
    var jsonArr = JSON.parse(jsonCitiesString);

    var tab = document.createElement('table');
    var row = document.createElement('tr');
    var celll;
    var tnode;
    let i;
    for (i = 0; i < jsonArr.length; i++) {
        celll = document.createElement('td');
        tnode = document.createTextNode(jsonArr[i].city);
        celll.appendChild(tnode);
        row.appendChild(celll);
    }
    tab.appendChild(row);

    for (i = 1; i < jsonArr.length; i++) {
        let j;
        row = document.createElement('tr');
        for (j = 0; j < jsonArr.length; j++) {
            celll = document.createElement('td');
            if (j === 0) {
                tnode = document.createTextNode(jsonArr[i].city);
            } else {
                let x = sphDist(jsonArr[i].lat, jsonArr[i].lon, jsonArr[j].lat, jsonArr[j].lon);
                tnode = document.createTextNode(Math.round(x, 0));
            }

            if (i === j) {
                celll.setAttribute('style', 'background-color: #333333');
            }

            celll.appendChild(tnode);
            row.appendChild(celll);
        }
        tab.appendChild(row);
    }
    $('dt').appendChild(tab);
    console.log(sphDist(54.323924, 10.1315442, 55.9436722, 9.1282005));
    console.log(sphDist(55.9436722, 9.1282005, 54.323924, 10.1315442));
}

var deg2rad = function(deg) {
    return deg * (Math.PI / 180);
}
var sphDist = function(lat0, lon0, lat1, lon1) {
    const R = 6371.01;
    let phi0 = deg2rad(lat0);
    let lambda0 = deg2rad(lon0);
    let phi1 = deg2rad(lat1);
    let lambda1 = deg2rad(lon1);
    let cosdelta = Math.sin(phi0) * Math.sin(phi1)
        + Math.cos(phi0) * Math.cos(phi1) * Math.cos(lambda0 - lambda1);
    let raddelta = Math.acos(cosdelta);
    return R * raddelta;
}
window.addEventListener('load', gotor);

var obj = { "name":"John", "age":30, "city":"New York"};
var myJSON = JSON.stringify(obj);
//document.getElementById("demo").innerHTML = myJSON;