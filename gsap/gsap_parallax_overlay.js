/* GSAP Parallax1 Image slide-in animations */

$(document).ready(function(){ 

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

});