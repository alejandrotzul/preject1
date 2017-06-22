<?php
$dalTableinsumos = array();
$dalTableinsumos["ID"] = array("type"=>3,"varname"=>"ID");
$dalTableinsumos["renglon"] = array("type"=>200,"varname"=>"renglon");
$dalTableinsumos["codigo insumo"] = array("type"=>200,"varname"=>"codigo_insumo");
$dalTableinsumos["nombre"] = array("type"=>200,"varname"=>"nombre");
$dalTableinsumos["caracteristicas"] = array("type"=>200,"varname"=>"caracteristicas");
$dalTableinsumos["nombre de la presentacion"] = array("type"=>200,"varname"=>"nombre_de_la_presentacion");
$dalTableinsumos["cantidad y unidad"] = array("type"=>200,"varname"=>"cantidad_y_unidad");
$dalTableinsumos["codigo de presentacion"] = array("type"=>200,"varname"=>"codigo_de_presentacion");
	$dalTableinsumos["ID"]["key"]=true;

$dal_info["correspondencia_at_localhost__insumos"] = &$dalTableinsumos;
?>