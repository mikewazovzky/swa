"use strict";

/*************** Module Service: Helper Functions Library ***************/

var Service = (function() {
	return {
		// Render Image Selected by User
		handleFileSelect: function(evt, image, msg) {
			var fileList = evt.target.files; // FileList object
			
			// if nothing was selected
			if(fileList.length == 0) {
				return;
			}
			
			// only one file expected
			var file = fileList[0];
			
			// process only image files.
			if (!file.type.match('image.*')) {
				$(msg).text("Only images can be used for Avatar....");
				return;
			}
			
			// async file read
			var reader = new FileReader();
			
			// Closure to capture the file information.
			reader.onload = (function(theFile) {
				return function(e) {
					// Update image and Info 
					$(image).attr("src", e.target.result);
					$(msg).text(file.name);
				};
			})(file);
			
			// Read in the image file as a data URL.
			reader.readAsDataURL(file);
		}		
	}
}());

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
/********************** Module Page: Location Page Script ********************/

var Location = (function() {

	// Display Selected file (page) name and content 
	function handlePageSelect(evt) {
		var fileList = evt.target.files; // FileList object
		
		// if nothing was selected
		if(fileList.length == 0) {
			return;
		}
		var file = fileList[0];
		var reader = new FileReader();
		
		// Closure to capture the file information.
		reader.onload = (function(theFile) {
			return function(e) {
				$("#locationPageLabel").text(file.name);
				$("#locationPageContent").html(e.target.result);
			};
		})(file);
		
		// Read the file as text
		reader.readAsText(file);		
	}
	
	return {
		
		// Set User Form event handlers
		setEventHandlers: function () {	

			// hide Select File(s) Button on File Input Form
			$("#locationImageFile").css("display", "none");	
			
			// Change Image to Selected by User upon Image Selection
			$("#locationImageFile").change(function(evt) {
				Service.handleFileSelect(evt, "#locationImage", "#locationInfo");
			});		
			
			// click the Image to simulate Select File click on File Input form
			$("#locationImage").click(function() {
				$("#locationImageFile").click(); 
			});	

			// Hide Select File(s) Button on #pageSelect File Input Form
			$("#locationPageFile").css("display", "none");
			
			// Simulate Select File click on File Input form when #pageButton is clicked
			$("#locationPageButton").click(function() {
				$("#locationPageFile").click(); 
			});	
			
			// Display Selected file(page) name
			$("#locationPageFile").change(function(evt) {
				handlePageSelect(evt);
			});		
		}
	}	
}());
/******* Application Initiation: setting all handlers *******/
function setEventHandlers() {	

	User.setEventHandlers();
	Location.setEventHandlers();
}

$("document").ready(function() {	
	setEventHandlers();
});
//# sourceMappingURL=app.js.map
