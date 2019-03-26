/* GSAP Contact Ribbon Animation */

$(function() {

    	var ribbon_tween = TweenLite.from('.contact-ribbon-icons', 2, {opacity:0, y:"50px", ease:Power4.easeOut, delay:0.2});
    		
	var controllerCR = new ScrollMagic.Controller({
		globalSceneOptions: {
	 		triggerHook: 0.8
	 	}
	}); 
	
	var lefticon_scene = new ScrollMagic.Scene({
		triggerElement: '#contact-ribbon'
	})
		.setTween(ribbon_tween)
		.addTo(controllerCR);
});