/* Set the width of the side navigation to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidenav").style.width = "320px";
    document.getElementById("main").style.marginLeft = "270px";
    
    document.getElementById("mySidenav").style.width = "320px";
    document.getElementById("main").style.marginLeft = "270px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "105px";
    
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "105px";
}

function initNav() {

    var sideBar = $("#mySidenav");

    $("#main").find("h2").each(function(index, element){
        var el = $("#" + element.id);
        sideBar.append("<a href='#" + element.id + "'>" + el.html() + "</a>");
    });
}

initNav();