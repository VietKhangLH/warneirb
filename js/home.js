/* =================================
------------------------------------
	Warn'Eirb Bros	
 ------------------------------------ 
 ====================================*/



/*------------------
	Logo Animations
--------------------*/
(function() { // namespace
	function shuffle(a) {
	    var j, x, i;
	    for (i = a.length - 1; i > 0; i--) {
	        j = Math.floor(Math.random() * (i + 1));
	        x = a[i];
	        a[i] = a[j];
	        a[j] = x;
	    }
	}
	function startPulse(element) {
		element.interval = setInterval(function() {
			animate(element, "pulse")
		}, 5000);
	}
	function restartPulse(element) {
		clearInterval(element.interval);
		startPulse(element);
	}

	var animations = ["bounce", "rubberBand", "shake", "swing", "wobble", "jello", "rotateIn"],
		index = 0;

	shuffle(animations);
	animations.push("tada");

	window.bigLogo = document.getElementById("big-logo");	
	bigLogo.addEventListener("click", function(event) {
		restartPulse(bigLogo);
		animate(this, animations[index]);
		if (++index == animations.length) {
			shuffle(animations);
			index = 0;
		}
	});
	startPulse(bigLogo);

	// Konami Code
	// Haut, haut, bas, bas, gauche, droite, gauche, droite, B, A
	var k = [38, 38, 40, 40, 37, 39, 37, 39, 66, 65],
	n = 0;
	$(document).keydown(function (e) {
	    if (e.keyCode === k[n++]) {
	        if (n === k.length) {
	            if (bigLogo) {          
	                restartPulse(bigLogo);  
	                animate(bigLogo, "flip");
	            }
	            n = 0;
	            return false;
	        }
	    }
	    else {
	        n = 0;
	    }
	}); 
}());