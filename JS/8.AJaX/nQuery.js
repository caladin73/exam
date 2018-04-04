'use strict';

let ajax = function () {
    let ajaxobj = false;
    try {
        ajaxobj = new XMLHttpRequest();
    } catch(err) {
        window.alert(err.message + " Get yourself a browser ;)");
    }
    return ajaxobj;
}