
jQuery(document).ready(function($){
	$('#newVerification').on('submit', function(e){
	    e.preventDefault();
	    _this = $(this);
	   
	    var form = $(this);
	    
	    var data = $(this).serialize();
	    
	    $.ajax({
	        type: 'POST',
	        url: '/chatMessages',
	        data: data,
	    })
	    .done(function(){

	    	$("#chatRoom").load(location.href+" #chatRoom>*","");
	    })
	    .error(function(data){
	    });
	});
});

$(document).ready(function(){
	
	var chatId = $("input[name=chat_id]").val();
	
	setInterval(function(){
		$("#chatRoom").load("/chatroom/" + chatId);
    }, 60000);
});
