function animateScript(button, tag){
	$(button).click(function(){
		$(tag).toggle(1000);
		$(button).toggleClass( "btn-warning" );
	});  
}
