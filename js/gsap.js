$(document).ready(function(){
    
    var gsapRbox1 = document.getElementsByClassName("gsapRbox1");
    var gsapRbox2 = document.getElementsByClassName("gsapRbox2");
    var gsapRbox3 = document.getElementsByClassName("gsapRbox3");
    
    TweenLite.from(gsapRbox1, 2, {opacity:0, right:"300px", ease:Power4.easeOut, delay:1.5});
    TweenLite.from(gsapRbox2, 2, {opacity:0, right:"300px", ease:Power4.easeOut, delay:2});
    TweenLite.from(gsapRbox3, 2, {opacity:0, right:"300px", ease:Power4.easeOut, delay:2.5});

    var gsapLbox1 = document.getElementsByClassName("gsapLbox1");
    var gsapLbox2 = document.getElementsByClassName("gsapLbox2");
    var gsapLbox3 = document.getElementsByClassName("gsapLbox3");
    
    TweenLite.from(gsapLbox1, 2, {opacity:0, left:"300px", ease:Power4.easeOut, delay:1.5});
    TweenLite.from(gsapLbox2, 2, {opacity:0, left:"300px", ease:Power4.easeOut, delay:2});
    TweenLite.from(gsapLbox3, 2, {opacity:0, left:"300px", ease:Power4.easeOut, delay:2.5});	    

});