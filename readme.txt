==== Rapid Bootstrap 1.01 ====
[Built off of Bootstrap 4.0.0]

---[ Adding GSAP/ScrollMagic Animations ]---
	// Build Tweens
	var _tween = TweenLite.from('. ', 2, {opacity:0, right:"300px", ease:Power4.easeOut, delay:1});
	
	// Initialize ScrollMagic controller
  	var controller = new ScrollMagic.Controller(); 

	// Build Scenes
	var _scene = new ScrollMagic.Scene({triggerElement: ' '})
	.setTween(_tween)
	.addIndicators()
	.addTo(controller);
------
		
Please read 'style.css' in the main theme folder for more information regarding the theme.

Notes:
- Featured-Image Page Template: jQuery pulls #source-featured-header and #source-featured-text from the page and appends it to
  #target-featured-header and #target-feature-text to make the box over the featured image. If source elements are left empty, 
  a white space will appear over the featured image.
- When editing menus in the Menu Editor, make sure you add 'nav-item nav-link' to properly display menu items in any custom menu.
- You may need to manually toggle the 'Display' checkbox in the Theme Customizer to consistently display all elements.