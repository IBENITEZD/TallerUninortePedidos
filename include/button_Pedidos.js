Runner.buttonEvents["Pedidos"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Pedidos';
	
	if ( !pageObj.buttonEventBefore['Pedidos'] ) {
		pageObj.buttonEventBefore['Pedidos'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['Pedidos'] ) {
		pageObj.buttonEventAfter['Pedidos'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
var myWindow = window.open("productos_list.php?a=return", "_self");

		}
	}
	
	$('a[id="Pedidos"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Pedidos" + "_" + Runner.genId();
		
		// create object
		var button_Pedidos = new Runner.form.Button({
			id: this.id ,
			btnName: "Pedidos"
		});
		
		// init
		button_Pedidos.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

