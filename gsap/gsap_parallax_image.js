/* GSAP Parallax Image */

$(function() {

	var controllerPI = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "200%"}});

	new ScrollMagic.Scene({triggerElement: "#parallax-image"})
		.setTween("#parallax-image > div", {y: "80%", ease: Linear.easeNone})
		.addTo(controllerPI);
});