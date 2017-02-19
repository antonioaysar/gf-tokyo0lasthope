
var burgerController = (function() {
	
	return {
		updateBurger: function(){	
			
			// media query event handler
			//min-width related to bootstrap navbar collapse
			if (matchMedia) {
			  var mq = window.matchMedia("(min-width: 768px)");
			  mq.addListener(WidthChange);
			  WidthChange(mq);
			}

			// media query change
			function WidthChange(mq) {
			  if (mq.matches) {
				  
				  var topHomeUrl = document.getElementById('top-home-url');
				  
				  if(topHomeUrl){

					  var topRulesUrl = document.getElementById('top-rules-url');
					  var topWorldUrl = document.getElementById('top-world-url');
					  
					  topHomeUrl.parentNode.removeChild(topHomeUrl);
					  topRulesUrl.parentNode.removeChild(topRulesUrl);
					  topWorldUrl.parentNode.removeChild(topWorldUrl);
					  
					  var topLoginUrl = document.getElementById('top-login-url');
					  var topRegisterUrl = document.getElementById('top-register-url');
					  
					  topLoginUrl.classList.remove('col-xs-12');
					  topLoginUrl.classList.remove('col-sm-12');
					  topLoginUrl.classList.remove('col-md-12');
					  
					  topRegisterUrl.classList.remove('col-xs-12');
					  topRegisterUrl.classList.remove('col-sm-12');
					  topRegisterUrl.classList.remove('col-md-12');
				  }			  
				  
			  } else {
				  
				  var topHomeUrl = document.getElementById('top-home-url');
				  
				  if(!topHomeUrl){
					  var topNavbar = document.getElementById('top-navbar-id');
					  
					  var htmlHome = '<li id="top-home-url" class="col-xs-12 col-sm-12 col-md-12"><a href="\/" class="fadeout">Home</a></li>';
					  var htmlRules = '<li id="top-rules-url" class="col-xs-12 col-sm-12 col-md-12"><a href="\/regolamento" class="fadeout">Regolamento</a></li>';
					  var htmlWorld = '<li id="top-world-url" class="col-xs-12 col-sm-12 col-md-12"><a href="\/ambientazione" class="fadeout">Ambientazione</a></li>';
					  
					  $(htmlWorld).prependTo(topNavbar);
					  $(htmlRules).prependTo(topNavbar);
					  $(htmlHome).prependTo(topNavbar);
					  
					  var topLoginUrl = document.getElementById('top-login-url');
					  var topRegisterUrl = document.getElementById('top-register-url');
					  
					  topLoginUrl.classList.add('col-xs-12');
					  topLoginUrl.classList.add('col-sm-12');
					  topLoginUrl.classList.add('col-md-12');
					  
					  topRegisterUrl.classList.add('col-xs-12');
					  topRegisterUrl.classList.add('col-sm-12');
					  topRegisterUrl.classList.add('col-md-12');

				  }			  
			  }

			}
			
			
		}
	};
})();

burgerController.updateBurger();
//# sourceMappingURL=all-app-js.js.map
