
var mapController = (function() {
	
	var districtIds = [];
	
	return {
		
		storeDistrictsIds: function(){
			
			var districtsBgs, parentNode, parentNodeId, splittedId, id;
			
			districtsBgs = document.querySelectorAll('.district-bg');
			
			for (var i = 0; i < districtsBgs.length; i++) {
				parentNode = districtsBgs[i].parentNode;
				parentNodeId = parentNode.id;
				splittedId = parentNodeId.split('-');
				id = splittedId[1];
				
				districtIds.push(id);
			}
		},
		
		showDistrictChats: function(){
			
			var districtsOpenChats = document.querySelectorAll('.districts-open-chats');
			
			for (var i = 0; i < districtsOpenChats.length; i++) {
				
				districtsOpenChats[i].addEventListener('click', function(event) {
					
					var parentNode = this.parentNode;
					
//					parentNode.classList.toggle('col-sm-12');
//					parentNode.classList.toggle('col-md-12');
//					parentNode.classList.toggle('col-lg-12');
//					parentNode.classList.toggle('col-sm-8');
//					parentNode.classList.toggle('col-md-8');
//					parentNode.classList.toggle('col-lg-8');
					
					var parentNodeId = parentNode.id;
					var jqueryParentNode = $('#' + parentNodeId);
					var parentPosition = jqueryParentNode.position();
//			        alert("Top position: " + x.top + " Left position: " + x.left);
					
					
					var splittedId = parentNodeId.split('-');
					var id = splittedId[1];
					
					var districtChats = document.getElementById('district-' + id + '-chats');
					var districtChatsWidth = (jqueryParentNode.width()*30)/100;
					
					
					
					for(var j = 0; j < districtIds.length; j++){
						if(districtIds[j] !== id){
							if($('#' + 'district-' + districtIds[j] + '-chats').is(':visible')){
								$('#' + 'district-' + districtIds[j] + '-chats').toggle();
								$('#' + 'district-' + districtIds[j] + '-chats-ul').toggle();
							}
						}
					}
					
					$('#' + 'district-' + id + '-chats').css({
						position: 'absolute',
					    top: parentPosition.top,
					    left: jqueryParentNode.width() - districtChatsWidth,
					    width: districtChatsWidth,
					    //height: jqueryParentNode.height(),
					}).fadeToggle(1000);
					
					$('#' + 'district-' + id + '-chats-ul').fadeToggle(1000);
					

//					if(districtChats.style.display === 'none' || districtChats.style.display === ''){
//						districtChats.style.display = 'block';
//					} else if (districtChats.style.display === 'block'){
//						districtChats.style.display = 'none';
//					}
					
					
			    });
				
			}
		}
	};
})();
mapController.storeDistrictsIds();
mapController.showDistrictChats();
//# sourceMappingURL=map-js.js.map
