function target_popup(form) {
	
	if(form.popup.checked){
		w = window.open('', 'metas_pop', 'width=1000,height=600,resizeable,scrollbars'); 
		form.target = 'metas_pop'; w.focus();
	}
}	
