/* GSAP Hover animations */

$(".hover-zoom-parent").each(function(index, element){
  var tl = new TimelineLite({paused:true});
  tl.to($(element).find(".hover-zoom-target"), 0.3, {scale:1.1})
  element.animation = tl;
})

$(".hover-zoom-parent").hover(over, out);

function over(){
    this.animation.play();
}

function out(){
    this.animation.reverse();
}  