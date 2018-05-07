var wid= document.getElementById("content").offsetWidth;

var box10= document.getElementById("bild1");
var box11= document.getElementById("bild2");
var box12= document.getElementById("bild3");
var wf = String(wid)+"px";
var h = (wid*1125)/2000;
var hf = String(h)+"px";


function scal(){
    
    
    
    box10.style.width=wf;
    box10.style.height=hf;

    

    
    
}
function scal2(){
    
    
    

    box11.style.width=wf;
    box11.style.height=hf;

    

    
    
}
function scal3(){
    
    

    box12.style.width=wf;
    box12.style.height=hf;
    

    
    
}


