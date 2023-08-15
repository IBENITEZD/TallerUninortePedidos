Runner.buttonEvents["New_Button2"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button2';
	
	if ( !pageObj.buttonEventBefore['New_Button2'] ) {
		pageObj.buttonEventBefore['New_Button2'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button2'] ) {
		pageObj.buttonEventAfter['New_Button2'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var message = result["txt"] + " !!!";
ajax.setMessage(message);
popup.close();
		}
	}
	
	$('a[id="New_Button2"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button2" + "_" + Runner.genId();
		
		// create object
		var button_New_Button2 = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button2"
		});
		
		// init
		button_New_Button2.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

