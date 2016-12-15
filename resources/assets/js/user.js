/********************** Module User: User Page Script ********************/

var User = (function() {

	// hanle User Form Submit 
	function handleUserFormSubmit(event) {
		
		//  check if passwords match
		var pass = $("#formUser input[name=password]").val();
		var pass2 = $("#formUser input[name=password2]").val();
		var error = "";
		
		if(pass != pass2) {
			error = "Passwords do not match.";
		}
		if(pass.length < 6) {
			error = "Password is too short. Minimum length - 6 simbols.";
		}
		if (error != "") {		
			alert(error);
			event.preventDefault(); // stop form submission
			// reset passwords
			$("#formUser input[name=password]").val("");
			$("#formUser input[name=password2]").val("");		
		}
		return true;	
	}
	
	return {
	
		// Set User Form event handlers
		setEventHandlers: function() {	
			
			// hide Select File(s) Button on File Input Form
			$("#userFile").css("display", "none");	
			
			// Change Image to Selected by User upon Image Selection
			$("#userFile").change(function(evt) {
				Service.handleFileSelect(evt, "#userImage", "#userInfo");
			});		
			
			// click the Image to simulate Select File click on File Input form
			$("#userImage").click(function() {
				$("#userFile").click(); 
			});	
			
			// handle User Form Submit 
			$("#userForm").submit(function(event) {
				handleUserFormSubmit(event);
			});					
		}
	}		
}());