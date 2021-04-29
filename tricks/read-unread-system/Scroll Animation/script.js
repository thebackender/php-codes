var controller = new ScrollMagic.Controller();

var scene = new ScrollMagic.Scene({
	triggerElement: '.red-cube'
})
.setClassToggle('.col', 'show')
.addTo(controller)