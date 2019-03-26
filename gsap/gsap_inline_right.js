/* GSAP Inline Slide animations */

$(document).ready(function(){ 

	// --- Right slide-in animation ---
	var r_leftitem_tween = TweenLite.from('.r-leftitem', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.9});
	var r_middleitem_tween = TweenLite.from('.r-middleitem', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.4});
	var r_rightitem_tween = TweenLite.from('.r-rightitem', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
		
	var controllerRI = new ScrollMagic.Controller({
		globalSceneOptions: {
	 		triggerHook: 0.8
	 	}
	}); 
	
	var r_leftitem_scene = new ScrollMagic.Scene({
		triggerElement: '#r-trigger'
	})
		.setTween(r_leftitem_tween)
		.addTo(controllerRI);

	var r_middleitem_scene = new ScrollMagic.Scene({
		triggerElement: '#r-trigger'
	})
		.setTween(r_middleitem_tween)
		.addTo(controllerRI);

	var r_rightitem_scene = new ScrollMagic.Scene({
		triggerElement: '#r-trigger'
	})
		.setTween(r_rightitem_tween)
		.addTo(controllerRI);		
});