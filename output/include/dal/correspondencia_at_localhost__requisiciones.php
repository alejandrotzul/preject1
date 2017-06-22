<?php
$dalTablerequisiciones = array();
$dalTablerequisiciones["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablerequisiciones["area"] = array("type"=>200,"varname"=>"area");
$dalTablerequisiciones["jefatura"] = array("type"=>200,"varname"=>"jefatura");
$dalTablerequisiciones["gestionSiges"] = array("type"=>200,"varname"=>"gestionSiges");
$dalTablerequisiciones["correlativo"] = array("type"=>200,"varname"=>"correlativo");
$dalTablerequisiciones["fechaRequisicion"] = array("type"=>200,"varname"=>"fechaRequisicion");
$dalTablerequisiciones["cantidadSolicitada"] = array("type"=>200,"varname"=>"cantidadSolicitada");
$dalTablerequisiciones["unidadDeMedida"] = array("type"=>200,"varname"=>"unidadDeMedida");
$dalTablerequisiciones["descripcion"] = array("type"=>200,"varname"=>"descripcion");
$dalTablerequisiciones["codigoInsumo"] = array("type"=>200,"varname"=>"codigoInsumo");
$dalTablerequisiciones["codigoPresentacion"] = array("type"=>200,"varname"=>"codigoPresentacion");
$dalTablerequisiciones["existenciasAlmacen"] = array("type"=>200,"varname"=>"existenciasAlmacen");
	$dalTablerequisiciones["ID"]["key"]=true;

$dal_info["correspondencia_at_localhost__requisiciones"] = &$dalTablerequisiciones;
?>