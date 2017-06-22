<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapac = array();
	$tdatapac[".truncateText"] = true;
	$tdatapac[".NumberOfChars"] = 80;
	$tdatapac[".ShortName"] = "pac";
	$tdatapac[".OwnerID"] = "";
	$tdatapac[".OriginalTable"] = "pac";

//	field labels
$fieldLabelspac = array();
$fieldToolTipspac = array();
$pageTitlespac = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspac["English"] = array();
	$fieldToolTipspac["English"] = array();
	$pageTitlespac["English"] = array();
	$fieldLabelspac["English"]["ID"] = "ID";
	$fieldToolTipspac["English"]["ID"] = "";
	$fieldLabelspac["English"]["descripcionProducto"] = "Descripcion Producto";
	$fieldToolTipspac["English"]["descripcionProducto"] = "";
	$fieldLabelspac["English"]["unidadesAnuales"] = "Unidades Anuales";
	$fieldToolTipspac["English"]["unidadesAnuales"] = "";
	$fieldLabelspac["English"]["costoUnitarioPromedio"] = "Costo Unitario Promedio";
	$fieldToolTipspac["English"]["costoUnitarioPromedio"] = "";
	$fieldLabelspac["English"]["unidadesMensuales"] = "Unidades Mensuales";
	$fieldToolTipspac["English"]["unidadesMensuales"] = "";
	$fieldLabelspac["English"]["programadoMensual"] = "Programado Mensual";
	$fieldToolTipspac["English"]["programadoMensual"] = "";
	$fieldLabelspac["English"]["disponibleMensual"] = "Disponible Mensual";
	$fieldToolTipspac["English"]["disponibleMensual"] = "";
	$fieldLabelspac["English"]["unidadMedida"] = "Unidad Medida";
	$fieldToolTipspac["English"]["unidadMedida"] = "";
	$fieldLabelspac["English"]["cantidadUnidadMedida"] = "Cantidad Unidad Medida";
	$fieldToolTipspac["English"]["cantidadUnidadMedida"] = "";
	$fieldLabelspac["English"]["mes"] = "Mes";
	$fieldToolTipspac["English"]["mes"] = "";
	$fieldLabelspac["English"]["cuatrimerstre"] = "Cuatrimerstre";
	$fieldToolTipspac["English"]["cuatrimerstre"] = "";
	$fieldLabelspac["English"]["descripcionCuatrimestre"] = "Descripcion Cuatrimestre";
	$fieldToolTipspac["English"]["descripcionCuatrimestre"] = "";
	$fieldLabelspac["English"]["solicitante"] = "Solicitante";
	$fieldToolTipspac["English"]["solicitante"] = "";
	$fieldLabelspac["English"]["tipoDeCompra"] = "Tipo De Compra";
	$fieldToolTipspac["English"]["tipoDeCompra"] = "";
	$fieldLabelspac["English"]["renglon"] = "Renglon";
	$fieldToolTipspac["English"]["renglon"] = "";
	$fieldLabelspac["English"]["codigoSiges"] = "Codigo Siges";
	$fieldToolTipspac["English"]["codigoSiges"] = "";
	$fieldLabelspac["English"]["codigopresentacion"] = "Codigopresentacion";
	$fieldToolTipspac["English"]["codigopresentacion"] = "";
	if (count($fieldToolTipspac["English"]))
		$tdatapac[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspac[""] = array();
	$fieldToolTipspac[""] = array();
	$pageTitlespac[""] = array();
	if (count($fieldToolTipspac[""]))
		$tdatapac[".isUseToolTips"] = true;
}


	$tdatapac[".NCSearch"] = true;



$tdatapac[".shortTableName"] = "pac";
$tdatapac[".nSecOptions"] = 0;
$tdatapac[".recsPerRowPrint"] = 1;
$tdatapac[".mainTableOwnerID"] = "";
$tdatapac[".moveNext"] = 1;
$tdatapac[".entityType"] = 0;

$tdatapac[".strOriginalTableName"] = "pac";

	



$tdatapac[".showAddInPopup"] = false;

$tdatapac[".showEditInPopup"] = false;

$tdatapac[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapac[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapac[".fieldsForRegister"] = array();

$tdatapac[".listAjax"] = false;

	$tdatapac[".audit"] = false;

	$tdatapac[".locking"] = false;

$tdatapac[".edit"] = true;
$tdatapac[".afterEditAction"] = 1;
$tdatapac[".closePopupAfterEdit"] = 1;
$tdatapac[".afterEditActionDetTable"] = "";

$tdatapac[".add"] = true;
$tdatapac[".afterAddAction"] = 1;
$tdatapac[".closePopupAfterAdd"] = 1;
$tdatapac[".afterAddActionDetTable"] = "";

$tdatapac[".list"] = true;

$tdatapac[".view"] = true;

$tdatapac[".import"] = true;

$tdatapac[".exportTo"] = true;

$tdatapac[".printFriendly"] = true;

$tdatapac[".delete"] = true;

$tdatapac[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapac[".searchSaving"] = false;
//

$tdatapac[".showSearchPanel"] = true;
		$tdatapac[".flexibleSearch"] = true;

$tdatapac[".isUseAjaxSuggest"] = true;

$tdatapac[".rowHighlite"] = true;



$tdatapac[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapac[".isUseTimeForSearch"] = false;



$tdatapac[".badgeColor"] = "CFAE83";


$tdatapac[".allSearchFields"] = array();
$tdatapac[".filterFields"] = array();
$tdatapac[".requiredSearchFields"] = array();

$tdatapac[".allSearchFields"][] = "ID";
	$tdatapac[".allSearchFields"][] = "descripcionProducto";
	$tdatapac[".allSearchFields"][] = "unidadesAnuales";
	$tdatapac[".allSearchFields"][] = "costoUnitarioPromedio";
	$tdatapac[".allSearchFields"][] = "unidadesMensuales";
	$tdatapac[".allSearchFields"][] = "programadoMensual";
	$tdatapac[".allSearchFields"][] = "disponibleMensual";
	$tdatapac[".allSearchFields"][] = "unidadMedida";
	$tdatapac[".allSearchFields"][] = "cantidadUnidadMedida";
	$tdatapac[".allSearchFields"][] = "mes";
	$tdatapac[".allSearchFields"][] = "cuatrimerstre";
	$tdatapac[".allSearchFields"][] = "descripcionCuatrimestre";
	$tdatapac[".allSearchFields"][] = "solicitante";
	$tdatapac[".allSearchFields"][] = "tipoDeCompra";
	$tdatapac[".allSearchFields"][] = "renglon";
	$tdatapac[".allSearchFields"][] = "codigoSiges";
	$tdatapac[".allSearchFields"][] = "codigopresentacion";
	

$tdatapac[".googleLikeFields"] = array();
$tdatapac[".googleLikeFields"][] = "ID";
$tdatapac[".googleLikeFields"][] = "descripcionProducto";
$tdatapac[".googleLikeFields"][] = "unidadesAnuales";
$tdatapac[".googleLikeFields"][] = "costoUnitarioPromedio";
$tdatapac[".googleLikeFields"][] = "unidadesMensuales";
$tdatapac[".googleLikeFields"][] = "programadoMensual";
$tdatapac[".googleLikeFields"][] = "disponibleMensual";
$tdatapac[".googleLikeFields"][] = "unidadMedida";
$tdatapac[".googleLikeFields"][] = "cantidadUnidadMedida";
$tdatapac[".googleLikeFields"][] = "mes";
$tdatapac[".googleLikeFields"][] = "cuatrimerstre";
$tdatapac[".googleLikeFields"][] = "descripcionCuatrimestre";
$tdatapac[".googleLikeFields"][] = "solicitante";
$tdatapac[".googleLikeFields"][] = "tipoDeCompra";
$tdatapac[".googleLikeFields"][] = "renglon";
$tdatapac[".googleLikeFields"][] = "codigoSiges";
$tdatapac[".googleLikeFields"][] = "codigopresentacion";


$tdatapac[".advSearchFields"] = array();
$tdatapac[".advSearchFields"][] = "ID";
$tdatapac[".advSearchFields"][] = "descripcionProducto";
$tdatapac[".advSearchFields"][] = "unidadesAnuales";
$tdatapac[".advSearchFields"][] = "costoUnitarioPromedio";
$tdatapac[".advSearchFields"][] = "unidadesMensuales";
$tdatapac[".advSearchFields"][] = "programadoMensual";
$tdatapac[".advSearchFields"][] = "disponibleMensual";
$tdatapac[".advSearchFields"][] = "unidadMedida";
$tdatapac[".advSearchFields"][] = "cantidadUnidadMedida";
$tdatapac[".advSearchFields"][] = "mes";
$tdatapac[".advSearchFields"][] = "cuatrimerstre";
$tdatapac[".advSearchFields"][] = "descripcionCuatrimestre";
$tdatapac[".advSearchFields"][] = "solicitante";
$tdatapac[".advSearchFields"][] = "tipoDeCompra";
$tdatapac[".advSearchFields"][] = "renglon";
$tdatapac[".advSearchFields"][] = "codigoSiges";
$tdatapac[".advSearchFields"][] = "codigopresentacion";

$tdatapac[".tableType"] = "list";

$tdatapac[".printerPageOrientation"] = 0;
$tdatapac[".nPrinterPageScale"] = 100;

$tdatapac[".nPrinterSplitRecords"] = 40;

$tdatapac[".nPrinterPDFSplitRecords"] = 40;



$tdatapac[".geocodingEnabled"] = false;





$tdatapac[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapac[".pageSize"] = 20;

$tdatapac[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapac[".strOrderBy"] = $tstrOrderBy;

$tdatapac[".orderindexes"] = array();

$tdatapac[".sqlHead"] = "SELECT ID,  	descripcionProducto,  	unidadesAnuales,  	costoUnitarioPromedio,  	unidadesMensuales,  	programadoMensual,  	disponibleMensual,  	unidadMedida,  	cantidadUnidadMedida,  	mes,  	cuatrimerstre,  	descripcionCuatrimestre,  	solicitante,  	tipoDeCompra,  	renglon,  	codigoSiges,  	codigopresentacion";
$tdatapac[".sqlFrom"] = "FROM pac";
$tdatapac[".sqlWhereExpr"] = "";
$tdatapac[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapac[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapac[".arrGroupsPerPage"] = $arrGPP;

$tdatapac[".highlightSearchResults"] = true;

$tableKeyspac = array();
$tableKeyspac[] = "ID";
$tdatapac[".Keys"] = $tableKeyspac;

$tdatapac[".listFields"] = array();
$tdatapac[".listFields"][] = "ID";
$tdatapac[".listFields"][] = "descripcionProducto";
$tdatapac[".listFields"][] = "unidadesAnuales";
$tdatapac[".listFields"][] = "costoUnitarioPromedio";
$tdatapac[".listFields"][] = "unidadesMensuales";
$tdatapac[".listFields"][] = "programadoMensual";
$tdatapac[".listFields"][] = "disponibleMensual";
$tdatapac[".listFields"][] = "unidadMedida";
$tdatapac[".listFields"][] = "cantidadUnidadMedida";
$tdatapac[".listFields"][] = "mes";
$tdatapac[".listFields"][] = "cuatrimerstre";
$tdatapac[".listFields"][] = "descripcionCuatrimestre";
$tdatapac[".listFields"][] = "solicitante";
$tdatapac[".listFields"][] = "tipoDeCompra";
$tdatapac[".listFields"][] = "renglon";
$tdatapac[".listFields"][] = "codigoSiges";
$tdatapac[".listFields"][] = "codigopresentacion";

$tdatapac[".hideMobileList"] = array();


$tdatapac[".viewFields"] = array();
$tdatapac[".viewFields"][] = "ID";
$tdatapac[".viewFields"][] = "descripcionProducto";
$tdatapac[".viewFields"][] = "unidadesAnuales";
$tdatapac[".viewFields"][] = "costoUnitarioPromedio";
$tdatapac[".viewFields"][] = "unidadesMensuales";
$tdatapac[".viewFields"][] = "programadoMensual";
$tdatapac[".viewFields"][] = "disponibleMensual";
$tdatapac[".viewFields"][] = "unidadMedida";
$tdatapac[".viewFields"][] = "cantidadUnidadMedida";
$tdatapac[".viewFields"][] = "mes";
$tdatapac[".viewFields"][] = "cuatrimerstre";
$tdatapac[".viewFields"][] = "descripcionCuatrimestre";
$tdatapac[".viewFields"][] = "solicitante";
$tdatapac[".viewFields"][] = "tipoDeCompra";
$tdatapac[".viewFields"][] = "renglon";
$tdatapac[".viewFields"][] = "codigoSiges";
$tdatapac[".viewFields"][] = "codigopresentacion";

$tdatapac[".addFields"] = array();
$tdatapac[".addFields"][] = "descripcionProducto";
$tdatapac[".addFields"][] = "unidadesAnuales";
$tdatapac[".addFields"][] = "costoUnitarioPromedio";
$tdatapac[".addFields"][] = "unidadesMensuales";
$tdatapac[".addFields"][] = "programadoMensual";
$tdatapac[".addFields"][] = "disponibleMensual";
$tdatapac[".addFields"][] = "unidadMedida";
$tdatapac[".addFields"][] = "cantidadUnidadMedida";
$tdatapac[".addFields"][] = "mes";
$tdatapac[".addFields"][] = "cuatrimerstre";
$tdatapac[".addFields"][] = "descripcionCuatrimestre";
$tdatapac[".addFields"][] = "solicitante";
$tdatapac[".addFields"][] = "tipoDeCompra";
$tdatapac[".addFields"][] = "renglon";
$tdatapac[".addFields"][] = "codigoSiges";
$tdatapac[".addFields"][] = "codigopresentacion";

$tdatapac[".masterListFields"] = array();
$tdatapac[".masterListFields"][] = "ID";
$tdatapac[".masterListFields"][] = "descripcionProducto";
$tdatapac[".masterListFields"][] = "unidadesAnuales";
$tdatapac[".masterListFields"][] = "costoUnitarioPromedio";
$tdatapac[".masterListFields"][] = "unidadesMensuales";
$tdatapac[".masterListFields"][] = "programadoMensual";
$tdatapac[".masterListFields"][] = "disponibleMensual";
$tdatapac[".masterListFields"][] = "unidadMedida";
$tdatapac[".masterListFields"][] = "cantidadUnidadMedida";
$tdatapac[".masterListFields"][] = "mes";
$tdatapac[".masterListFields"][] = "cuatrimerstre";
$tdatapac[".masterListFields"][] = "descripcionCuatrimestre";
$tdatapac[".masterListFields"][] = "solicitante";
$tdatapac[".masterListFields"][] = "tipoDeCompra";
$tdatapac[".masterListFields"][] = "renglon";
$tdatapac[".masterListFields"][] = "codigoSiges";
$tdatapac[".masterListFields"][] = "codigopresentacion";

$tdatapac[".inlineAddFields"] = array();
$tdatapac[".inlineAddFields"][] = "descripcionProducto";
$tdatapac[".inlineAddFields"][] = "unidadesAnuales";
$tdatapac[".inlineAddFields"][] = "costoUnitarioPromedio";
$tdatapac[".inlineAddFields"][] = "unidadesMensuales";
$tdatapac[".inlineAddFields"][] = "programadoMensual";
$tdatapac[".inlineAddFields"][] = "disponibleMensual";
$tdatapac[".inlineAddFields"][] = "unidadMedida";
$tdatapac[".inlineAddFields"][] = "cantidadUnidadMedida";
$tdatapac[".inlineAddFields"][] = "mes";
$tdatapac[".inlineAddFields"][] = "cuatrimerstre";
$tdatapac[".inlineAddFields"][] = "descripcionCuatrimestre";
$tdatapac[".inlineAddFields"][] = "solicitante";
$tdatapac[".inlineAddFields"][] = "tipoDeCompra";
$tdatapac[".inlineAddFields"][] = "renglon";
$tdatapac[".inlineAddFields"][] = "codigoSiges";
$tdatapac[".inlineAddFields"][] = "codigopresentacion";

$tdatapac[".editFields"] = array();
$tdatapac[".editFields"][] = "descripcionProducto";
$tdatapac[".editFields"][] = "unidadesAnuales";
$tdatapac[".editFields"][] = "costoUnitarioPromedio";
$tdatapac[".editFields"][] = "unidadesMensuales";
$tdatapac[".editFields"][] = "programadoMensual";
$tdatapac[".editFields"][] = "disponibleMensual";
$tdatapac[".editFields"][] = "unidadMedida";
$tdatapac[".editFields"][] = "cantidadUnidadMedida";
$tdatapac[".editFields"][] = "mes";
$tdatapac[".editFields"][] = "cuatrimerstre";
$tdatapac[".editFields"][] = "descripcionCuatrimestre";
$tdatapac[".editFields"][] = "solicitante";
$tdatapac[".editFields"][] = "tipoDeCompra";
$tdatapac[".editFields"][] = "renglon";
$tdatapac[".editFields"][] = "codigoSiges";
$tdatapac[".editFields"][] = "codigopresentacion";

$tdatapac[".inlineEditFields"] = array();
$tdatapac[".inlineEditFields"][] = "descripcionProducto";
$tdatapac[".inlineEditFields"][] = "unidadesAnuales";
$tdatapac[".inlineEditFields"][] = "costoUnitarioPromedio";
$tdatapac[".inlineEditFields"][] = "unidadesMensuales";
$tdatapac[".inlineEditFields"][] = "programadoMensual";
$tdatapac[".inlineEditFields"][] = "disponibleMensual";
$tdatapac[".inlineEditFields"][] = "unidadMedida";
$tdatapac[".inlineEditFields"][] = "cantidadUnidadMedida";
$tdatapac[".inlineEditFields"][] = "mes";
$tdatapac[".inlineEditFields"][] = "cuatrimerstre";
$tdatapac[".inlineEditFields"][] = "descripcionCuatrimestre";
$tdatapac[".inlineEditFields"][] = "solicitante";
$tdatapac[".inlineEditFields"][] = "tipoDeCompra";
$tdatapac[".inlineEditFields"][] = "renglon";
$tdatapac[".inlineEditFields"][] = "codigoSiges";
$tdatapac[".inlineEditFields"][] = "codigopresentacion";

$tdatapac[".exportFields"] = array();
$tdatapac[".exportFields"][] = "ID";
$tdatapac[".exportFields"][] = "descripcionProducto";
$tdatapac[".exportFields"][] = "unidadesAnuales";
$tdatapac[".exportFields"][] = "costoUnitarioPromedio";
$tdatapac[".exportFields"][] = "unidadesMensuales";
$tdatapac[".exportFields"][] = "programadoMensual";
$tdatapac[".exportFields"][] = "disponibleMensual";
$tdatapac[".exportFields"][] = "unidadMedida";
$tdatapac[".exportFields"][] = "cantidadUnidadMedida";
$tdatapac[".exportFields"][] = "mes";
$tdatapac[".exportFields"][] = "cuatrimerstre";
$tdatapac[".exportFields"][] = "descripcionCuatrimestre";
$tdatapac[".exportFields"][] = "solicitante";
$tdatapac[".exportFields"][] = "tipoDeCompra";
$tdatapac[".exportFields"][] = "renglon";
$tdatapac[".exportFields"][] = "codigoSiges";
$tdatapac[".exportFields"][] = "codigopresentacion";

$tdatapac[".importFields"] = array();
$tdatapac[".importFields"][] = "ID";
$tdatapac[".importFields"][] = "descripcionProducto";
$tdatapac[".importFields"][] = "unidadesAnuales";
$tdatapac[".importFields"][] = "costoUnitarioPromedio";
$tdatapac[".importFields"][] = "unidadesMensuales";
$tdatapac[".importFields"][] = "programadoMensual";
$tdatapac[".importFields"][] = "disponibleMensual";
$tdatapac[".importFields"][] = "unidadMedida";
$tdatapac[".importFields"][] = "cantidadUnidadMedida";
$tdatapac[".importFields"][] = "mes";
$tdatapac[".importFields"][] = "cuatrimerstre";
$tdatapac[".importFields"][] = "descripcionCuatrimestre";
$tdatapac[".importFields"][] = "solicitante";
$tdatapac[".importFields"][] = "tipoDeCompra";
$tdatapac[".importFields"][] = "renglon";
$tdatapac[".importFields"][] = "codigoSiges";
$tdatapac[".importFields"][] = "codigopresentacion";

$tdatapac[".printFields"] = array();
$tdatapac[".printFields"][] = "ID";
$tdatapac[".printFields"][] = "descripcionProducto";
$tdatapac[".printFields"][] = "unidadesAnuales";
$tdatapac[".printFields"][] = "costoUnitarioPromedio";
$tdatapac[".printFields"][] = "unidadesMensuales";
$tdatapac[".printFields"][] = "programadoMensual";
$tdatapac[".printFields"][] = "disponibleMensual";
$tdatapac[".printFields"][] = "unidadMedida";
$tdatapac[".printFields"][] = "cantidadUnidadMedida";
$tdatapac[".printFields"][] = "mes";
$tdatapac[".printFields"][] = "cuatrimerstre";
$tdatapac[".printFields"][] = "descripcionCuatrimestre";
$tdatapac[".printFields"][] = "solicitante";
$tdatapac[".printFields"][] = "tipoDeCompra";
$tdatapac[".printFields"][] = "renglon";
$tdatapac[".printFields"][] = "codigoSiges";
$tdatapac[".printFields"][] = "codigopresentacion";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["ID"] = $fdata;
//	descripcionProducto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcionProducto";
	$fdata["GoodName"] = "descripcionProducto";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","descripcionProducto");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "descripcionProducto";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcionProducto";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["descripcionProducto"] = $fdata;
//	unidadesAnuales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "unidadesAnuales";
	$fdata["GoodName"] = "unidadesAnuales";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","unidadesAnuales");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unidadesAnuales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unidadesAnuales";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["unidadesAnuales"] = $fdata;
//	costoUnitarioPromedio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "costoUnitarioPromedio";
	$fdata["GoodName"] = "costoUnitarioPromedio";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","costoUnitarioPromedio");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "costoUnitarioPromedio";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "costoUnitarioPromedio";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["costoUnitarioPromedio"] = $fdata;
//	unidadesMensuales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "unidadesMensuales";
	$fdata["GoodName"] = "unidadesMensuales";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","unidadesMensuales");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unidadesMensuales";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unidadesMensuales";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["unidadesMensuales"] = $fdata;
//	programadoMensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "programadoMensual";
	$fdata["GoodName"] = "programadoMensual";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","programadoMensual");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "programadoMensual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "programadoMensual";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["programadoMensual"] = $fdata;
//	disponibleMensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "disponibleMensual";
	$fdata["GoodName"] = "disponibleMensual";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","disponibleMensual");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "disponibleMensual";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "disponibleMensual";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["disponibleMensual"] = $fdata;
//	unidadMedida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "unidadMedida";
	$fdata["GoodName"] = "unidadMedida";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","unidadMedida");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "unidadMedida";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unidadMedida";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["unidadMedida"] = $fdata;
//	cantidadUnidadMedida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cantidadUnidadMedida";
	$fdata["GoodName"] = "cantidadUnidadMedida";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","cantidadUnidadMedida");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cantidadUnidadMedida";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidadUnidadMedida";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["cantidadUnidadMedida"] = $fdata;
//	mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "mes";
	$fdata["GoodName"] = "mes";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","mes");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mes";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mes";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["mes"] = $fdata;
//	cuatrimerstre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "cuatrimerstre";
	$fdata["GoodName"] = "cuatrimerstre";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","cuatrimerstre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "cuatrimerstre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cuatrimerstre";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["cuatrimerstre"] = $fdata;
//	descripcionCuatrimestre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "descripcionCuatrimestre";
	$fdata["GoodName"] = "descripcionCuatrimestre";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","descripcionCuatrimestre");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "descripcionCuatrimestre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcionCuatrimestre";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["descripcionCuatrimestre"] = $fdata;
//	solicitante
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "solicitante";
	$fdata["GoodName"] = "solicitante";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","solicitante");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "solicitante";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "solicitante";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["solicitante"] = $fdata;
//	tipoDeCompra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "tipoDeCompra";
	$fdata["GoodName"] = "tipoDeCompra";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","tipoDeCompra");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "tipoDeCompra";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipoDeCompra";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["tipoDeCompra"] = $fdata;
//	renglon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "renglon";
	$fdata["GoodName"] = "renglon";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","renglon");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "renglon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "renglon";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["renglon"] = $fdata;
//	codigoSiges
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "codigoSiges";
	$fdata["GoodName"] = "codigoSiges";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","codigoSiges");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "codigoSiges";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigoSiges";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["codigoSiges"] = $fdata;
//	codigopresentacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "codigopresentacion";
	$fdata["GoodName"] = "codigopresentacion";
	$fdata["ownerTable"] = "pac";
	$fdata["Label"] = GetFieldLabel("pac","codigopresentacion");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "codigopresentacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigopresentacion";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatapac["codigopresentacion"] = $fdata;


$tables_data["pac"]=&$tdatapac;
$field_labels["pac"] = &$fieldLabelspac;
$fieldToolTips["pac"] = &$fieldToolTipspac;
$page_titles["pac"] = &$pageTitlespac;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pac"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pac"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pac()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	descripcionProducto,  	unidadesAnuales,  	costoUnitarioPromedio,  	unidadesMensuales,  	programadoMensual,  	disponibleMensual,  	unidadMedida,  	cantidadUnidadMedida,  	mes,  	cuatrimerstre,  	descripcionCuatrimestre,  	solicitante,  	tipoDeCompra,  	renglon,  	codigoSiges,  	codigopresentacion";
$proto0["m_strFrom"] = "FROM pac";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "pac";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcionProducto",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto8["m_sql"] = "descripcionProducto";
$proto8["m_srcTableName"] = "pac";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "unidadesAnuales",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto10["m_sql"] = "unidadesAnuales";
$proto10["m_srcTableName"] = "pac";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "costoUnitarioPromedio",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto12["m_sql"] = "costoUnitarioPromedio";
$proto12["m_srcTableName"] = "pac";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "unidadesMensuales",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto14["m_sql"] = "unidadesMensuales";
$proto14["m_srcTableName"] = "pac";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "programadoMensual",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto16["m_sql"] = "programadoMensual";
$proto16["m_srcTableName"] = "pac";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "disponibleMensual",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto18["m_sql"] = "disponibleMensual";
$proto18["m_srcTableName"] = "pac";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "unidadMedida",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto20["m_sql"] = "unidadMedida";
$proto20["m_srcTableName"] = "pac";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidadUnidadMedida",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto22["m_sql"] = "cantidadUnidadMedida";
$proto22["m_srcTableName"] = "pac";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "mes",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto24["m_sql"] = "mes";
$proto24["m_srcTableName"] = "pac";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "cuatrimerstre",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto26["m_sql"] = "cuatrimerstre";
$proto26["m_srcTableName"] = "pac";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcionCuatrimestre",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto28["m_sql"] = "descripcionCuatrimestre";
$proto28["m_srcTableName"] = "pac";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "solicitante",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto30["m_sql"] = "solicitante";
$proto30["m_srcTableName"] = "pac";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "tipoDeCompra",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto32["m_sql"] = "tipoDeCompra";
$proto32["m_srcTableName"] = "pac";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "renglon",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto34["m_sql"] = "renglon";
$proto34["m_srcTableName"] = "pac";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "codigoSiges",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto36["m_sql"] = "codigoSiges";
$proto36["m_srcTableName"] = "pac";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "codigopresentacion",
	"m_strTable" => "pac",
	"m_srcTableName" => "pac"
));

$proto38["m_sql"] = "codigopresentacion";
$proto38["m_srcTableName"] = "pac";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "pac";
$proto41["m_srcTableName"] = "pac";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "ID";
$proto41["m_columns"][] = "descripcionProducto";
$proto41["m_columns"][] = "unidadesAnuales";
$proto41["m_columns"][] = "costoUnitarioPromedio";
$proto41["m_columns"][] = "unidadesMensuales";
$proto41["m_columns"][] = "programadoMensual";
$proto41["m_columns"][] = "disponibleMensual";
$proto41["m_columns"][] = "unidadMedida";
$proto41["m_columns"][] = "cantidadUnidadMedida";
$proto41["m_columns"][] = "mes";
$proto41["m_columns"][] = "cuatrimerstre";
$proto41["m_columns"][] = "descripcionCuatrimestre";
$proto41["m_columns"][] = "solicitante";
$proto41["m_columns"][] = "tipoDeCompra";
$proto41["m_columns"][] = "renglon";
$proto41["m_columns"][] = "codigoSiges";
$proto41["m_columns"][] = "codigopresentacion";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "pac";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "pac";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pac";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pac = createSqlQuery_pac();


	
		;

																	

$tdatapac[".sqlquery"] = $queryData_pac;

$tableEvents["pac"] = new eventsBase;
$tdatapac[".hasEvents"] = false;

?>