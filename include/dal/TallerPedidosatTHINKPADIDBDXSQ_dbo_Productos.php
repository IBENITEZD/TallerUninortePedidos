<?php
$dalTableProductos = array();
$dalTableProductos["id"] = array("type"=>2,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableProductos["Nombre"] = array("type"=>200,"varname"=>"Nombre", "name" => "Nombre", "autoInc" => "0");
$dalTableProductos["Descripcion"] = array("type"=>200,"varname"=>"Descripcion", "name" => "Descripcion", "autoInc" => "0");
$dalTableProductos["Precio"] = array("type"=>14,"varname"=>"Precio", "name" => "Precio", "autoInc" => "0");
$dalTableProductos["rgsmrc"] = array("type"=>2,"varname"=>"rgsmrc", "name" => "rgsmrc", "autoInc" => "0");
$dalTableProductos["Cantidad"] = array("type"=>2,"varname"=>"Cantidad", "name" => "Cantidad", "autoInc" => "0");
$dalTableProductos["id"]["key"]=true;

$dal_info["TallerPedidosatTHINKPADIDBDXSQ_dbo_Productos"] = &$dalTableProductos;
?>