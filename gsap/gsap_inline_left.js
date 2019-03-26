/* GSAP Inline Slide animations */

$(document).ready(function(){ 

    	// --- Left slide-in animation ---
	var l_leftitem_tween = TweenLite.from('.l-leftitem', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.2});
	var l_middleitem_tween = TweenLite.from('.l-middleitem', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
	var l_rightitem_tween = TweenLite.from('.l-rightitem', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.9});
		
	var controllerLI = new ScrollMagic.Controller({
		globalSceneOptions: {
	 		triggerHook: 0.8
	 	}
	}); 
	
	var l_leftitem_scene = new ScrollMagic.Scene({
		triggerElement: '#l-trigger'
	})
		.setTween(l_leftitem_tween)
		.addTo(controllerLI);

	var l_middleitem_scene = new ScrollMagic.Scene({
		triggerElement: '#l-trigger'
	})
		.setTween(l_middleitem_tween)
		.addTo(controllerLI);

	var l_rightitem_scene = new ScrollMagic.Scene({
		triggerElement: '#l-trigger'
	})
		.setTween(l_rightitem_tween)
		.addTo(controllerLI);

});