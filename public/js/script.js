"use strict";

// Simulate click event on File Input Form (#fileSelect) 
function simulateClick() {
  $("#fileSelect").click(); 
}

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
			$("#userImg").attr("src", e.target.result);
			$("#info").text(file.name);
		};
	})(file);
	// Read in the image file as a data URL.
	reader.readAsDataURL(file);
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
	$("#userImg").click(function() {
		simulateClick();
	});	
	
	// handle User Form Submit 
	$("#formUser").submit(function(event) {
		handleUserFormSubmit(event);
	});	
	
/* 	// click checkbox to show/hide Update Password
	$("checkbox").onclick = function() {
		if (document.getElementById("checkbox").checked) {
			document.getElementById("pass").style.display = "block";
		} else {
			document.getElementById("pass").style.display = "none";
		}		
	};	
		
	// hide Password(s) section
	$("#pass").css("display", "none"); */
	
}

$("document").ready(function() {	
	prepairEventHandlers();
});