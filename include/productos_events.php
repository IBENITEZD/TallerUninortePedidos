<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_productos  extends eventsBase
{
	function __construct()
	{
	// fill list of events

		$this->events["BeforeEdit"]=true;

		$this->events["BeforeProcessEdit"]=true;

		$this->events["AfterEdit"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record updated
function BeforeEdit(&$values, &$sqlValues, $where, &$oldvalues, &$keys, &$message, $inline, $pageObject)
{

		// Place event code here.
// Use "Add Action" button to add code snippets.

return true;
;		
} // function BeforeEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
				// Edit page: Before process
function BeforeProcessEdit($pageObject)
{

		// idtercero por parametro de url
if (isset($_GET['cantidad'])) {
    // Obtener el valor del parámetro "prueba" de la URL
    $cantidad_p = $_GET['cantidad'];
    // Verificar si el valor es válido (puedes agregar otras validaciones aquí si es necesario)
    if ($cantidad_p != '') {
        $pageObject->setProxyValue("cantidad_p", $cantidad_p);
    } 
    else{ 
        $cantidad ="";
        $pageObject->setProxyValue("cantidad_p", $cantidad_p);
    };
};

// idtercero por parametro de url
if (isset($_GET['token'])) {
    // Obtener el valor del parámetro "prueba" de la URL
    $token_p = $_GET['token'];
    // Verificar si el valor es válido (puedes agregar otras validaciones aquí si es necesario)
    if ($token_p != '') {
        $pageObject->setProxyValue("token_p", $token_p);
        $_SESSION["token_p"] =  $token_p;
    } 
    else{ 
        $token_p ="";
        $pageObject->setProxyValue("token_p", $token_p);
        $_SESSION["token_p"] =  $token_p;
    };
}

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeProcessEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		// Obtener mensahe de texto
    unset($data);
    unset($rs);
    unset($query);
	  $query = "update pedidos set cantidad = ".$values["Cantidad"]." where id = ".$_SESSION["token_p"];
    db_exec($query);
// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
