
$(document).ready(function() {	
// This initialises carousels on the container elements specified, in this case, carousel1.
	$("#carousel1").CloudCarousel(		
		{			
			xPos: 396,
			yPos: 100,
			buttonLeft: $("#buttonLeft"),
			buttonRight: $("#buttonRight"),
			autoRotate: 'right',
            autoRotateDelay: 5000,
            speed: 0.1,
            reflHeight: 50,
            reflOpacity: 0.5,
            yRadius: 100,
            mouseWheel: true
		}
	);	
		
});