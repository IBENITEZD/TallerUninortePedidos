<?php
$dalTableVE_PEDIDOR = array();
$dalTableVE_PEDIDOR["consecutivo"] = array("type"=>2,"varname"=>"consecutivo", "name" => "consecutivo", "autoInc" => "0");
$dalTableVE_PEDIDOR["id_producto"] = array("type"=>2,"varname"=>"id_producto", "name" => "id_producto", "autoInc" => "0");
$dalTableVE_PEDIDOR["Descripcion"] = array("type"=>200,"varname"=>"Descripcion", "name" => "Descripcion", "autoInc" => "0");
$dalTableVE_PEDIDOR["Cantidad"] = array("type"=>2,"varname"=>"Cantidad", "name" => "Cantidad", "autoInc" => "0");
$dalTableVE_PEDIDOR["Precio"] = array("type"=>14,"varname"=>"Precio", "name" => "Precio", "autoInc" => "0");
$dalTableVE_PEDIDOR["Total"] = array("type"=>14,"varname"=>"Total", "name" => "Total", "autoInc" => "0");
$dalTableVE_PEDIDOR["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado", "autoInc" => "0");

$dal_info["TallerPedidosatTHINKPADIDBDXSQ_dbo_VE_PEDIDOR"] = &$dalTableVE_PEDIDOR;
?>