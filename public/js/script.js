"use strict";

// Render Image Selected by User
function handleFileSelect(evt) {
	var fileList = evt.target.files; // FileList object
	
	// if nothing was selected
	if(fileList.length == 0) {
		return;
	}
	var file = fileList[0];
	// Only process image files.
	if (!file.type.match('image.*')) {
		$("#info").text("Only images can be used for Avatar....");
		return;
	}
	var reader = new FileReader();
	// Closure to capture the file information.
	reader.onload = (function(theFile) {
		return function(e) {
			// Render thumbnail.
			$("#selectedImage").attr("src", e.target.result);
			$("#info").text(file.name);
		};
	})(file);
	// Read in the image file as a data URL.
	reader.readAsDataURL(file);
}	

// 
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
			$("#pageLabel").text(file.name);
			$("#userPage").html(e.target.result);
		};
	})(file);
	// Read in the image file as a data URL.
	reader.readAsText(file);		
}

// hanle User Form Submit 
function handleUserFormSubmit(event) {
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

function prepairEventHandlers() {	
	
	// hide Select File(s) Button on File Input Form
	$("#fileSelect").css("display", "none");	
	
	// Change Image to Selected by User
	$("#fileSelect").change(function(evt) {
		handleFileSelect(evt);
	});		
	
	// click the Image to simulate Select File click on File Input form
	$("#selectedImage").click(function() {
		$("#fileSelect").click(); 
	});	
	
	// handle User Form Submit 
	$("#formUser").submit(function(event) {
		handleUserFormSubmit(event);
	});		
	
	// ----------------- Location Form [additional] handlers ----------------------

	// Hide Select File(s) Button on #pageSelect File Input Form
	$("#pageSelect").css("display", "none");
	
	// Simulate Select File click on File Input form when #pageButton is clicked
	$("#pageButton").click(function() {
		$("#pageSelect").click(); 
	});	
	
	// Display Selected file(page) name 
	$("#pageSelect").change(function(evt) {
		handlePageSelect(evt);
	});	
	
}

$("document").ready(function() {	
	prepairEventHandlers();
});