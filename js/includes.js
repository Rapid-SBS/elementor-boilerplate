/* Javascript Includes file */

$(document).ready(function(){  
   
   // --- Parallax1 Image slide-in animations ---
	var leftheader_tween = TweenLite.from('.leftheader', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.2});
	var lefttext_tween = TweenLite.from('.lefttext', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
	var leftbutton_tween = TweenLite.from('.leftbutton', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.9});
	var rightheader_tween = TweenLite.from('.rightheader', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
	var righttext_tween = TweenLite.from('.righttext', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.4});
	var rightbutton_tween = TweenLite.from('.rightbutton', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.9});
		
	var controller04 = new ScrollMagic.Controller({
		globalSceneOptions: {
	 		triggerHook: 0.8
	 	}
	}); 
	var leftheader_scene = new ScrollMagic.Scene({
		triggerElement: '#triggerf'
	})
		.setTween(leftheader_tween)
		.addTo(controller04);

	var lefttext_scene = new ScrollMagic.Scene({
		triggerElement: '#triggerf'
	})
		.setTween(lefttext_tween)
		.addTo(controller04);

	var leftbutton_scene = new ScrollMagic.Scene({
		triggerElement: '#triggerf'
	})
		.setTween(leftbutton_tween)
		.addTo(controller04);
	
	var rightheader_scene = new ScrollMagic.Scene({
		triggerElement: '#triggerf'
	})
		.setTween(rightheader_tween)
		.addTo(controller04);

	var righttext_scene = new ScrollMagic.Scene({
		triggerElement: '#triggerf'
	})
		.setTween(righttext_tween)
		.addTo(controller04);

	var rightbutton_scene = new ScrollMagic.Scene({
		triggerElement: '#triggerf'
	})
		.setTween(rightbutton_tween)
		.addTo(controller04);
		
   // --- 3-card slide-in animation ---
	var leftcard_tween = TweenLite.from('.leftcard', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.9});
	var middlecard_tween = TweenLite.from('.middlecard', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.4});
	var rightcard_tween = TweenLite.from('.rightcard', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
		
	var controller01 = new ScrollMagic.Controller({
		globalSceneOptions: {
	 		triggerHook: 0.8
	 	}
	}); 
	var leftcard_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger01'
	})
		.setTween(leftcard_tween)
		.addTo(controller01);

	var middlecard_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger01'
	})
		.setTween(middlecard_tween)
		.addTo(controller01);

	var rightcard_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger01'
	})
		.setTween(rightcard_tween)
		.addTo(controller01);

    // --- Action ribbon slide-in animation ---
	var lefticon_tween = TweenLite.from('.lefticon', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.2});
	var middleicon_tween = TweenLite.from('.middleicon', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
	var righticon_tween = TweenLite.from('.righticon', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.9});
		
	var controller02 = new ScrollMagic.Controller({
		globalSceneOptions: {
	 		triggerHook: 0.8
	 	}
	}); 
	
	var lefticon_scene = new ScrollMagic.Scene({
		triggerElement: '#icon-trigger'
	})
		.setTween(lefticon_tween)
		.addTo(controller02);

	var middleicon_scene = new ScrollMagic.Scene({
		triggerElement: '#icon-trigger'
	})
		.setTween(middleicon_tween)
		.addTo(controller02);

	var righticon_scene = new ScrollMagic.Scene({
		triggerElement: '#icon-trigger'
	})
		.setTween(righticon_tween)
		.addTo(controller02);

    // --- Footer Contact ribbon slide-up animation ---
    	var ribbon_tween = TweenLite.from('.contact-ribbon-icons', 2, {opacity:0, y:"50px", ease:Power4.easeOut, delay:0.2});
    		
	var controller03 = new ScrollMagic.Controller({
		globalSceneOptions: {
	 		triggerHook: 0.8
	 	}
	}); 
	
	var lefticon_scene = new ScrollMagic.Scene({
		triggerElement: '#contact-ribbon'
	})
		.setTween(ribbon_tween)
		.addTo(controller03);

    // --- Parallax 2 slide animation ---
	var parallaxribbon2_tween = TweenLite.from('.parallax2-text-box', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.5});
		
	var controller05 = new ScrollMagic.Controller({
		globalSceneOptions: {
	 		triggerHook: 0.8
	 	}
	}); 
	
	var parallaxribbon2_scene = new ScrollMagic.Scene({
		triggerElement: '.parallax-ribbon2'
	})
		.setTween(parallaxribbon2_tween)
		.addTo(controller05);

    // --- Contact Form Ribbon animation ---
	var contactform_tween = TweenLite.from('.contact-form', 0.75, {opacity:0,  x:"-300px",ease:Power4.easeOut, delay:0.5});
		
	var controller06 = new ScrollMagic.Controller({
		globalSceneOptions: {
	 		triggerHook: 0.8
	 	}
	}); 
	
	var contactform_scene = new ScrollMagic.Scene({
		triggerElement: '#contact-form-ribbon'
	})
		.setTween(contactform_tween)
		.addTo(controller06);


    // --- Featurette animations ---
	var leftfeaturette1_tween = TweenLite.from('.leftfeaturette1', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
	var rightfeaturette1_tween = TweenLite.from('.rightfeaturette1', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
	
	var leftfeaturette2_tween = TweenLite.from('.leftfeaturette2', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
	var rightfeaturette2_tween = TweenLite.from('.rightfeaturette2', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
	
	var leftfeaturette3_tween = TweenLite.from('.leftfeaturette3', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
	var rightfeaturette3_tween = TweenLite.from('.rightfeaturette3', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
	
	var leftfeaturette4_tween = TweenLite.from('.leftfeaturette4', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
	var rightfeaturette4_tween = TweenLite.from('.rightfeaturette4', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
	
	var leftfeaturette5_tween = TweenLite.from('.leftfeaturette5', 0.75, {opacity:0, x:"-300px", ease:Power4.easeOut, delay:0.2});
	var rightfeaturette5_tween = TweenLite.from('.rightfeaturette5', 0.75, {opacity:0, x:"300px", ease:Power4.easeOut, delay:0.4});
		
		
	var controller07 = new ScrollMagic.Controller({
		globalSceneOptions: {
	 		triggerHook: 0.8
	 	}
	}); 
	
	var lefticon_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger07a'
	})
		.setTween(leftfeaturette1_tween)
		.addTo(controller07);

	var middleicon_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger07a'
	})
		.setTween(rightfeaturette1_tween)
		.addTo(controller07);

	var lefticon_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger07b'
	})
		.setTween(leftfeaturette2_tween)
		.addTo(controller07);

	var middleicon_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger07b'
	})
		.setTween(rightfeaturette2_tween)
		.addTo(controller07);

	var lefticon_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger07c'
	})
		.setTween(leftfeaturette3_tween)
		.addTo(controller07);

	var middleicon_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger07c'
	})
		.setTween(rightfeaturette3_tween)
		.addTo(controller07);

	var lefticon_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger07d'
	})
		.setTween(leftfeaturette4_tween)
		.addTo(controller07);

	var middleicon_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger07d'
	})
		.setTween(rightfeaturette4_tween)
		.addTo(controller07);

	var lefticon_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger07e'
	})
		.setTween(leftfeaturette5_tween)
		.addTo(controller07);

	var middleicon_scene = new ScrollMagic.Scene({
		triggerElement: '#trigger07e'
	})
		.setTween(rightfeaturette5_tween)
		.addTo(controller07);


});		