<?php
$dalTablepedidos = array();
$dalTablepedidos["id"] = array("type"=>2,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepedidos["consecutivo"] = array("type"=>2,"varname"=>"consecutivo", "name" => "consecutivo", "autoInc" => "0");
$dalTablepedidos["id_producto"] = array("type"=>2,"varname"=>"id_producto", "name" => "id_producto", "autoInc" => "0");
$dalTablepedidos["Cantidad"] = array("type"=>2,"varname"=>"Cantidad", "name" => "Cantidad", "autoInc" => "0");
$dalTablepedidos["Precio"] = array("type"=>14,"varname"=>"Precio", "name" => "Precio", "autoInc" => "0");
$dalTablepedidos["estado"] = array("type"=>200,"varname"=>"estado", "name" => "estado", "autoInc" => "0");

$dal_info["TallerPedidosatTHINKPADIDBDXSQ_dbo_pedidos"] = &$dalTablepedidos;
?>