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