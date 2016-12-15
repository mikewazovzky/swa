/******* Application Initiation: setting all handlers *******/
function setEventHandlers() {	

	User.setEventHandlers();
	Location.setEventHandlers();
}

$("document").ready(function() {	
	setEventHandlers();
});