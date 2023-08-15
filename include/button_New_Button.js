Runner.buttonEvents["New_Button"] = function( pageObj, proxy, pageid ) {
	//register a new button
	pageObj.buttonNames[ pageObj.buttonNames.length ] = 'New_Button';
	
	if ( !pageObj.buttonEventBefore['New_Button'] ) {
		pageObj.buttonEventBefore['New_Button'] = function( params, ctrl, pageObj, proxy, pageid, rowData, row, submit ) {		
			var ajax = ctrl;

		}
	}
	
	if ( !pageObj.buttonEventAfter['New_Button'] ) {
		pageObj.buttonEventAfter['New_Button'] = function( result, ctrl, pageObj, proxy, pageid, rowData, row, params ) {
			var ajax = ctrl;
// Put your code here.
var id_pedido = result["id_pedido"];
var id_producto = result["id_producto"]
if ( id_pedido > 0) { // Todo ok
	//var url = "pedidos_edit.php?editid1="+result["id_pedido"]+"&";
	//window.open(url,"_self");
   //Runner.displayPopup ({
   //url: "pedidos_edit.php?editid1="+result["id_pedido"]+"&"});
	var popup = Runner.displayPopup( {
	  url: "productos_edit.php?editid1="+result["id_producto"]+"&token="+result["id_pedido"]+"&",
	  width: 700,
	  height: 600,
	  header: 'Cantidad a Pedir',
     footer: '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>',
     afterCreate: function(win) {
       window.win = win;
     }
	});
} else {
  swal("Upss Error ");
};



		}
	}
	
	$('a[id="New_Button"]').each( function() {
		if ( $(this).closest('.gridRowAdd').length ) {
			return;
		}
		
		this.id = "New_Button" + "_" + Runner.genId();
		
		// create object
		var button_New_Button = new Runner.form.Button({
			id: this.id ,
			btnName: "New_Button"
		});
		
		// init
		button_New_Button.init( {args: [ pageObj, proxy, pageid ]} );
	});
};

