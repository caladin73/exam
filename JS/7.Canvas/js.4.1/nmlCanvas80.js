'use strict';

/*
 * nmlCanvas80.js
 */
let initialize = function () {
    /*
     * create two canvases and put two shapes into the right one
     * via an array
     */
    mycv1 = Object.create(Canvas);
    mycv1.init('myCanvas1', 'transparent');
    mycv1.canvas.addEventListener('click', select);
    mycv2 = Object.create(Canvas);
    mycv2.init('myCanvas2', 'transparent');
    // create objects
    // put in array
    let shape1 = Object.create(Shape);
    shape1.init(mycv1, 20, 10, 120, 40, 'blue');
    let shape2 = Object(Shape);
    shape2.init(mycv1, 200, 100, 80, 60, 'green');
    shapes.push(shape1);
    shapes.push(shape2);
    repeater(mycv1, shapes);
}

let redraw = function (cv, arr) {
    /* clear and redraw canvas from an array */
    cv.clear();
    cv.prep();
    for (var i = 0; i < arr.length; i++) {
        arr[i].draw();
    }
}

let repeater = function (cv, arr) {
    /* if this is an animation build a setInterval loop here
     * if not, just draw
     */
    redraw(cv, arr);
}

let select = function (ev) {
    for (let i = 0; i < shapes.length; i++) {
        let cx = shapes[i].ctx;
        cx.beginPath();
        cx.rect(shapes[i].x, shapes[i].y, shapes[i].width, shapes[i].height);
        cx.closePath();
        let bb = this.getBoundingClientRect();    // get canvas as std obj
        // convert mouse coordinates to canvas coordinates
        let x = (ev.clientX - bb.left) * (this.width / bb.width);
        let y = (ev.clientY - bb.top) * (this.height / bb.height);
        if (cx.isPointInPath(x, y)) {
            // we're in a loop, is this array element the
            // one we clicked? If yes click in other canvas
            mycv2.canvas.addEventListener('click', function placeInRoom(e) {
                let bb1 = this.getBoundingClientRect();    // yes
                // other canvas as std object
                // convert mouse coordinates to canvas coordinates
                let x1 = (e.clientX - bb1.left) * (this.width / bb1.width);
                let y1 = (e.clientY - bb1.top) * (this.height / bb1.height);
                let obj = Object.create(Shape); // create new obj
                // with adapted properties
                obj.init(mycv2, x1, y1,
                    shapes[i].width, shapes[i].height,
                    shapes[i].color);
                othershapes.push(obj);
                mycv1.canvas.removeEventListener('click', select);
                repeater(mycv2, othershapes);
                mycv2.canvas.removeEventListener('click', placeInRoom);
                mycv1.canvas.addEventListener('click', select);
            });
        } else {
            // window.alert("nohit: "+x+","+y);
        }
    }
}

let mycv1;
let mycv2;
let shapes = [];
let othershapes = [];

window.addEventListener('load', initialize);
