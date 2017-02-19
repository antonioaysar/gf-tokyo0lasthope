
var fadeoutController = (function() {
	
	return {
		fadeout: function(){			
			$('.fadeout').click(function(event) {
			    event.preventDefault();
			    newLocation = this.href;
			    $('.wrap-public-layout').fadeOut(1000, newpage);
		  });
			
		  function newpage() {
		    window.location = newLocation;
		  }
		}
	};
})();

$(document).ready(function() {
	fadeoutController.fadeout();
});