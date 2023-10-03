var text1 = document.getElementById("text1");
var text2 = document.getElementById("text2");
var boxOut = document.getElementById("box-outer");
var anchortag = document.getElementById("anchorTag");

anchortag.onmouseover = function () {
    boxOut.className = "box-outer-hover";
    text1.className = "text1Black";
    text2.className = "text2Black";
}

anchortag.onmouseout = function () {
    boxOut.className = "box-outer";
    text1.className = "textokay";
    text2.className = "textokay";
}
