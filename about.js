
var person2 = document.getElementById("person2");
var para2 = document.getElementById("para2");
person2.onmouseover = function () {
    para2.className = "p-see";
}

person2.onmouseout = function () {
    para2.className = "p-display";
}
