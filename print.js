function printContent(el){
    var restorepage=document.body.innerHTML;
    var bottombuttondiv = document.getElementById("bottombuttondiv"); 
    bottombuttondiv.parentNode.removeChild(bottombuttondiv); 
    var printcontent=document.getElementById(el).innerHTML;
    document.innerHTML=printcontent;
    window.print();
     document.body.innerHTML=restorepage;   
}
