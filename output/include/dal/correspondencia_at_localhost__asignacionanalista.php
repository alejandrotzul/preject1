<?php
$dalTableasignacionanalista = array();
$dalTableasignacionanalista["ID"] = array("type"=>3,"varname"=>"ID");
$dalTableasignacionanalista["nombre"] = array("type"=>200,"varname"=>"nombre");
$dalTableasignacionanalista["apellido"] = array("type"=>200,"varname"=>"apellido");
$dalTableasignacionanalista["telefono"] = array("type"=>200,"varname"=>"telefono");
$dalTableasignacionanalista["email"] = array("type"=>200,"varname"=>"email");
	$dalTableasignacionanalista["ID"]["key"]=true;

$dal_info["correspondencia_at_localhost__asignacionanalista"] = &$dalTableasignacionanalista;
?>