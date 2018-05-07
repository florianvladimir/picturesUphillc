/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
window.onscroll = function() {myFunction();};


function myFunction() {

 babadi();
}


function babadi() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scrlo").style.display = "block";
    } else {
        document.getElementById("scrlo").style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

var wid= document.getElementById("c1").offsetWidth;
var box1= document.getElementById("str1");
var box2= document.getElementById("str2");
var box3= document.getElementById("str3");
var box4= document.getElementById("str4");

var widfinal = String(wid*0.9)+"px";
var hoe = (wid*1117)/1739;
var hoefinal = String(hoe*0.9)+"px";




function mafunctiona(){
    
    if(window.innerWidth<1024){
    box1.style.width= widfinal;
    box1.style.height=hoefinal;
    box2.style.width= widfinal;
    box2.style.height=hoefinal;
    box3.style.width= widfinal;
    box3.style.height=hoefinal;
    box4.style.width= widfinal;
    box4.style.height=hoefinal;}
}



