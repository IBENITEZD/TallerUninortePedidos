Runner.buttonEvents["Seleccionar_Producto"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'Seleccionar_Producto';
	
	if ( !pageObj.buttonEventBefore['Seleccionar_Producto'] ) {
		pageObj.buttonEventBefore['Seleccionar_Producto'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;
// Put your code here.
params["txt"] = "Hello";
ajax.setMessage("Sending request to server...");
 // Uncomment the following line to prevent execution of "Server" and "Client After" events.
 // return false;
		}
	}
	
	if ( !pageObj.buttonEventAfter['Seleccionar_Producto'] ) {
		pageObj.buttonEventAfter['Seleccionar_Producto'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.["id_pedido"]+"&"});
var myWindow = window.open("ve_pedidos_list.php?a=return", "_self");
		}
	}
	
	$('a[id="Seleccionar_Producto"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "Seleccionar_Producto" + "_" + Runner.genId();
		
		// create object
		var button_Seleccionar_Producto = new Runner.form.Button({
			id: this.id ,
			btnName: "Seleccionar_Producto"
		});
		
		// init
		button_Seleccionar_Producto.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

