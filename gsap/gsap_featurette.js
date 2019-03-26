$(document).ready(function(){
    
    // --- Featurette animations ---
	var l_featurette1_tween = TweenLite.from('.l-featurette1', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
	var r_featurette1_tween = TweenLite.from('.r-featurette1', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
	
	var l_featurette2_tween = TweenLite.from('.l-featurette2', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
	var r_featurette2_tween = TweenLite.from('.r-featurette2', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
	
	var l_featurette3_tween = TweenLite.from('.l-featurette3', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
	var r_featurette3_tween = TweenLite.from('.r-featurette3', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
	
	var l_featurette4_tween = TweenLite.from('.l-featurette4', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
	var r_featurette4_tween = TweenLite.from('.r-featurette4', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
	
	var l_featurette5_tween = TweenLite.from('.l-featurette5', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
	var r_featurette5_tween = TweenLite.from('.r-featurette5', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
		
		
	var controllerF = new ScrollMagic.Controller({
		globalSceneOptions: {
	 		triggerHook: 0.8
	 	}
	}); 
	
	var l_featurette1_scene = new ScrollMagic.Scene({
		triggerElement: '#featurette1'
	})
		.setTween(l_featurette1_tween)
		.addTo(controllerF);

	var r_featurette1_scene = new ScrollMagic.Scene({
		triggerElement: '#featurette1'
	})
		.setTween(r_featurette1_tween)
		.addTo(controllerF);

	var l_featurette2_scene = new ScrollMagic.Scene({
		triggerElement: '#featurette2'
	})
		.setTween(l_featurette2_tween)
		.addTo(controllerF);

	var r_featurette2_scene = new ScrollMagic.Scene({
		triggerElement: '#featurette2'
	})
		.setTween(r_featurette2_tween)
		.addTo(controllerF);

	var l_featurette3_scene = new ScrollMagic.Scene({
		triggerElement: '#featurette3'
	})
		.setTween(l_featurette3_tween)
		.addTo(controllerF);

	var r_featurette3_scene = new ScrollMagic.Scene({
		triggerElement: '#featurette3'
	})
		.setTween(r_featurette3_tween)
		.addTo(controllerF);

	var l_featurette4_scene = new ScrollMagic.Scene({
		triggerElement: '#featurette4'
	})
		.setTween(l_featurette4_tween)
		.addTo(controllerF);

	var r_featurette4_scene = new ScrollMagic.Scene({
		triggerElement: '#featurette4'
	})
		.setTween(r_featurette4_tween)
		.addTo(controllerF);

	var l_featurette5_scene = new ScrollMagic.Scene({
		triggerElement: '#featurette5'
	})
		.setTween(l_featurette5_tween)
		.addTo(controllerF);

	var r_featurette5_scene = new ScrollMagic.Scene({
		triggerElement: '#featurette5'
	})
		.setTween(r_featurette5_tween)
		.addTo(controllerF);
});