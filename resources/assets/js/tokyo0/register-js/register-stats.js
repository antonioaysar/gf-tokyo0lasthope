
jQuery(document).ready(function($){

	/* Discendenze */
	document.getElementById('discendenza_id').addEventListener('change', function(){
		
		var discendenza = document.getElementById('discendenza_id').value;
		
		cleanBonus();
		
		switch(discendenza){
		
			case '1': { //Mercurio
				addBonus(2, 1);
				addBonus(3, 2);
				break;
			}
			
			case '2': { //Venere
				addBonus(2, 1);
				addBonus(4, 2);
				break;
			}
			
			case '3': { //Terra
				addBonus(2, 2);
				addBonus(3, 1);
				break;
			}
			
			case '4': { //Luna
				addBonus(0, 1);
				addBonus(4, 2);
				break;
			}
			
			case '5': { //Marte
				addBonus(0, 2);
				addBonus(3, 1);
				break;
			}
			
			case '6': { //Giove
				addBonus(2, 2);
				addBonus(4, 1);
				break;
			}
			
			case '7': { //Saturno
				addBonus(2, 2);
				addBonus(3, 1);
				break;
			}
			
			case '8': { //Urano
				addBonus(1, 2);
				addBonus(5, 1);
				break;
			}
			
			case '9': { //Nettuno
				addBonus(1, 1);
				addBonus(5, 2);
				break;
			}
			
			case '10': { //Plutone
				addBonus(0, 1);
				addBonus(4, 2);
				break;
			}
			
			default: {
				//do nothing
				break;
			}
		
		}
		
	});
	
	function cleanBonus(){
		for(var i = 0; i <= 5; i++){
			document.getElementById('car' + i + '-bonus').textContent = '(+0)';
			document.getElementById('car' + i + '-bonus').classList.remove('stats-bonus-green');
		}
	}
	
	
	function addBonus(id, value){		
		document.getElementById('car' + id + '-bonus').textContent = '(+' + value + ')';
		document.getElementById('car' + id + '-bonus').classList.add('stats-bonus-green');		
	}
	
	
	/* Stats */
	
	document.getElementById('car0').addEventListener('change', updateStatsTotal);
	document.getElementById('car1').addEventListener('change', updateStatsTotal);
	document.getElementById('car2').addEventListener('change', updateStatsTotal);
	document.getElementById('car3').addEventListener('change', updateStatsTotal);
	document.getElementById('car4').addEventListener('change', updateStatsTotal);
	document.getElementById('car5').addEventListener('change', updateStatsTotal);
	
	
	function updateStatsTotal(){
		var statsTotal = 0;
		
		for(var i = 0; i <= 5; i++){

			var statValue = parseInt(document.getElementById('car' + i).value);			
			statsTotal += statValue;
		}
		
		var newTotal = 40 - statsTotal;
		document.getElementById('sp-available').value = newTotal;
		
		if(newTotal < 0){
			document.getElementById('sp-available').classList.add('negative-stats-points');
		} else {
			document.getElementById('sp-available').classList.remove('negative-stats-points');
		}
	}
	
});

