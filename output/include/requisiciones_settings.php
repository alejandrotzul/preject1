<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarequisiciones = array();
	$tdatarequisiciones[".truncateText"] = true;
	$tdatarequisiciones[".NumberOfChars"] = 80;
	$tdatarequisiciones[".ShortName"] = "requisiciones";
	$tdatarequisiciones[".OwnerID"] = "";
	$tdatarequisiciones[".OriginalTable"] = "requisiciones";

//	field labels
$fieldLabelsrequisiciones = array();
$fieldToolTipsrequisiciones = array();
$pageTitlesrequisiciones = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsrequisiciones["English"] = array();
	$fieldToolTipsrequisiciones["English"] = array();
	$pageTitlesrequisiciones["English"] = array();
	$fieldLabelsrequisiciones["English"]["ID"] = "ID";
	$fieldToolTipsrequisiciones["English"]["ID"] = "";
	$fieldLabelsrequisiciones["English"]["area"] = "Area";
	$fieldToolTipsrequisiciones["English"]["area"] = "";
	$fieldLabelsrequisiciones["English"]["jefatura"] = "Jefatura";
	$fieldToolTipsrequisiciones["English"]["jefatura"] = "";
	$fieldLabelsrequisiciones["English"]["gestionSiges"] = "Gestion Siges";
	$fieldToolTipsrequisiciones["English"]["gestionSiges"] = "";
	$fieldLabelsrequisiciones["English"]["correlativo"] = "Correlativo";
	$fieldToolTipsrequisiciones["English"]["correlativo"] = "";
	$fieldLabelsrequisiciones["English"]["fechaRequisicion"] = "Fecha Requisicion";
	$fieldToolTipsrequisiciones["English"]["fechaRequisicion"] = "";
	$fieldLabelsrequisiciones["English"]["cantidadSolicitada"] = "Cantidad Solicitada";
	$fieldToolTipsrequisiciones["English"]["cantidadSolicitada"] = "";
	$fieldLabelsrequisiciones["English"]["unidadDeMedida"] = "Unidad De Medida";
	$fieldToolTipsrequisiciones["English"]["unidadDeMedida"] = "";
	$fieldLabelsrequisiciones["English"]["descripcion"] = "Descripcion";
	$fieldToolTipsrequisiciones["English"]["descripcion"] = "";
	$fieldLabelsrequisiciones["English"]["codigoInsumo"] = "Codigo Insumo";
	$fieldToolTipsrequisiciones["English"]["codigoInsumo"] = "";
	$fieldLabelsrequisiciones["English"]["codigoPresentacion"] = "Codigo Presentacion";
	$fieldToolTipsrequisiciones["English"]["codigoPresentacion"] = "";
	$fieldLabelsrequisiciones["English"]["existenciasAlmacen"] = "Existencias Almacen";
	$fieldToolTipsrequisiciones["English"]["existenciasAlmacen"] = "";
	if (count($fieldToolTipsrequisiciones["English"]))
		$tdatarequisiciones[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrequisiciones[""] = array();
	$fieldToolTipsrequisiciones[""] = array();
	$pageTitlesrequisiciones[""] = array();
	if (count($fieldToolTipsrequisiciones[""]))
		$tdatarequisiciones[".isUseToolTips"] = true;
}


	$tdatarequisiciones[".NCSearch"] = true;



$tdatarequisiciones[".shortTableName"] = "requisiciones";
$tdatarequisiciones[".nSecOptions"] = 0;
$tdatarequisiciones[".recsPerRowPrint"] = 1;
$tdatarequisiciones[".mainTableOwnerID"] = "";
$tdatarequisiciones[".moveNext"] = 1;
$tdatarequisiciones[".entityType"] = 0;

$tdatarequisiciones[".strOriginalTableName"] = "requisiciones";

	



$tdatarequisiciones[".showAddInPopup"] = false;

$tdatarequisiciones[".showEditInPopup"] = false;

$tdatarequisiciones[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarequisiciones[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarequisiciones[".fieldsForRegister"] = array();

$tdatarequisiciones[".listAjax"] = false;

	$tdatarequisiciones[".audit"] = false;

	$tdatarequisiciones[".locking"] = false;

$tdatarequisiciones[".edit"] = true;
$tdatarequisiciones[".afterEditAction"] = 1;
$tdatarequisiciones[".closePopupAfterEdit"] = 1;
$tdatarequisiciones[".afterEditActionDetTable"] = "";

$tdatarequisiciones[".add"] = true;
$tdatarequisiciones[".afterAddAction"] = 1;
$tdatarequisiciones[".closePopupAfterAdd"] = 1;
$tdatarequisiciones[".afterAddActionDetTable"] = "";

$tdatarequisiciones[".list"] = true;

$tdatarequisiciones[".view"] = true;

$tdatarequisiciones[".import"] = true;

$tdatarequisiciones[".exportTo"] = true;

$tdatarequisiciones[".printFriendly"] = true;

$tdatarequisiciones[".delete"] = true;

$tdatarequisiciones[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatarequisiciones[".searchSaving"] = false;
//

$tdatarequisiciones[".showSearchPanel"] = true;
		$tdatarequisiciones[".flexibleSearch"] = true;

$tdatarequisiciones[".isUseAjaxSuggest"] = true;

$tdatarequisiciones[".rowHighlite"] = true;



$tdatarequisiciones[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarequisiciones[".isUseTimeForSearch"] = false;





$tdatarequisiciones[".allSearchFields"] = array();
$tdatarequisiciones[".filterFields"] = array();
$tdatarequisiciones[".requiredSearchFields"] = array();

$tdatarequisiciones[".allSearchFields"][] = "ID";
	$tdatarequisiciones[".allSearchFields"][] = "area";
	$tdatarequisiciones[".allSearchFields"][] = "jefatura";
	$tdatarequisiciones[".allSearchFields"][] = "gestionSiges";
	$tdatarequisiciones[".allSearchFields"][] = "correlativo";
	$tdatarequisiciones[".allSearchFields"][] = "fechaRequisicion";
	$tdatarequisiciones[".allSearchFields"][] = "cantidadSolicitada";
	$tdatarequisiciones[".allSearchFields"][] = "unidadDeMedida";
	$tdatarequisiciones[".allSearchFields"][] = "descripcion";
	$tdatarequisiciones[".allSearchFields"][] = "codigoInsumo";
	$tdatarequisiciones[".allSearchFields"][] = "codigoPresentacion";
	$tdatarequisiciones[".allSearchFields"][] = "existenciasAlmacen";
	

$tdatarequisiciones[".googleLikeFields"] = array();
$tdatarequisiciones[".googleLikeFields"][] = "ID";
$tdatarequisiciones[".googleLikeFields"][] = "area";
$tdatarequisiciones[".googleLikeFields"][] = "jefatura";
$tdatarequisiciones[".googleLikeFields"][] = "gestionSiges";
$tdatarequisiciones[".googleLikeFields"][] = "correlativo";
$tdatarequisiciones[".googleLikeFields"][] = "fechaRequisicion";
$tdatarequisiciones[".googleLikeFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".googleLikeFields"][] = "unidadDeMedida";
$tdatarequisiciones[".googleLikeFields"][] = "descripcion";
$tdatarequisiciones[".googleLikeFields"][] = "codigoInsumo";
$tdatarequisiciones[".googleLikeFields"][] = "codigoPresentacion";
$tdatarequisiciones[".googleLikeFields"][] = "existenciasAlmacen";


$tdatarequisiciones[".advSearchFields"] = array();
$tdatarequisiciones[".advSearchFields"][] = "ID";
$tdatarequisiciones[".advSearchFields"][] = "area";
$tdatarequisiciones[".advSearchFields"][] = "jefatura";
$tdatarequisiciones[".advSearchFields"][] = "gestionSiges";
$tdatarequisiciones[".advSearchFields"][] = "correlativo";
$tdatarequisiciones[".advSearchFields"][] = "fechaRequisicion";
$tdatarequisiciones[".advSearchFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".advSearchFields"][] = "unidadDeMedida";
$tdatarequisiciones[".advSearchFields"][] = "descripcion";
$tdatarequisiciones[".advSearchFields"][] = "codigoInsumo";
$tdatarequisiciones[".advSearchFields"][] = "codigoPresentacion";
$tdatarequisiciones[".advSearchFields"][] = "existenciasAlmacen";

$tdatarequisiciones[".tableType"] = "list";

$tdatarequisiciones[".printerPageOrientation"] = 0;
$tdatarequisiciones[".nPrinterPageScale"] = 100;

$tdatarequisiciones[".nPrinterSplitRecords"] = 40;

$tdatarequisiciones[".nPrinterPDFSplitRecords"] = 40;



$tdatarequisiciones[".geocodingEnabled"] = false;





$tdatarequisiciones[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatarequisiciones[".pageSize"] = 20;

$tdatarequisiciones[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarequisiciones[".strOrderBy"] = $tstrOrderBy;

$tdatarequisiciones[".orderindexes"] = array();

$tdatarequisiciones[".sqlHead"] = "SELECT ID,  	area,  	jefatura,  	gestionSiges,  	correlativo,  	fechaRequisicion,  	cantidadSolicitada,  	unidadDeMedida,  	descripcion,  	codigoInsumo,  	codigoPresentacion,  	existenciasAlmacen";
$tdatarequisiciones[".sqlFrom"] = "FROM requisiciones";
$tdatarequisiciones[".sqlWhereExpr"] = "";
$tdatarequisiciones[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarequisiciones[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarequisiciones[".arrGroupsPerPage"] = $arrGPP;

$tdatarequisiciones[".highlightSearchResults"] = true;

$tableKeysrequisiciones = array();
$tableKeysrequisiciones[] = "ID";
$tdatarequisiciones[".Keys"] = $tableKeysrequisiciones;

$tdatarequisiciones[".listFields"] = array();
$tdatarequisiciones[".listFields"][] = "ID";
$tdatarequisiciones[".listFields"][] = "area";
$tdatarequisiciones[".listFields"][] = "jefatura";
$tdatarequisiciones[".listFields"][] = "gestionSiges";
$tdatarequisiciones[".listFields"][] = "correlativo";
$tdatarequisiciones[".listFields"][] = "fechaRequisicion";
$tdatarequisiciones[".listFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".listFields"][] = "unidadDeMedida";
$tdatarequisiciones[".listFields"][] = "descripcion";
$tdatarequisiciones[".listFields"][] = "codigoInsumo";
$tdatarequisiciones[".listFields"][] = "codigoPresentacion";
$tdatarequisiciones[".listFields"][] = "existenciasAlmacen";

$tdatarequisiciones[".hideMobileList"] = array();


$tdatarequisiciones[".viewFields"] = array();
$tdatarequisiciones[".viewFields"][] = "ID";
$tdatarequisiciones[".viewFields"][] = "area";
$tdatarequisiciones[".viewFields"][] = "jefatura";
$tdatarequisiciones[".viewFields"][] = "gestionSiges";
$tdatarequisiciones[".viewFields"][] = "correlativo";
$tdatarequisiciones[".viewFields"][] = "fechaRequisicion";
$tdatarequisiciones[".viewFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".viewFields"][] = "unidadDeMedida";
$tdatarequisiciones[".viewFields"][] = "descripcion";
$tdatarequisiciones[".viewFields"][] = "codigoInsumo";
$tdatarequisiciones[".viewFields"][] = "codigoPresentacion";
$tdatarequisiciones[".viewFields"][] = "existenciasAlmacen";

$tdatarequisiciones[".addFields"] = array();
$tdatarequisiciones[".addFields"][] = "area";
$tdatarequisiciones[".addFields"][] = "jefatura";
$tdatarequisiciones[".addFields"][] = "gestionSiges";
$tdatarequisiciones[".addFields"][] = "correlativo";
$tdatarequisiciones[".addFields"][] = "fechaRequisicion";
$tdatarequisiciones[".addFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".addFields"][] = "unidadDeMedida";
$tdatarequisiciones[".addFields"][] = "descripcion";
$tdatarequisiciones[".addFields"][] = "codigoInsumo";
$tdatarequisiciones[".addFields"][] = "codigoPresentacion";
$tdatarequisiciones[".addFields"][] = "existenciasAlmacen";

$tdatarequisiciones[".masterListFields"] = array();
$tdatarequisiciones[".masterListFields"][] = "ID";
$tdatarequisiciones[".masterListFields"][] = "area";
$tdatarequisiciones[".masterListFields"][] = "jefatura";
$tdatarequisiciones[".masterListFields"][] = "gestionSiges";
$tdatarequisiciones[".masterListFields"][] = "correlativo";
$tdatarequisiciones[".masterListFields"][] = "fechaRequisicion";
$tdatarequisiciones[".masterListFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".masterListFields"][] = "unidadDeMedida";
$tdatarequisiciones[".masterListFields"][] = "descripcion";
$tdatarequisiciones[".masterListFields"][] = "codigoInsumo";
$tdatarequisiciones[".masterListFields"][] = "codigoPresentacion";
$tdatarequisiciones[".masterListFields"][] = "existenciasAlmacen";

$tdatarequisiciones[".inlineAddFields"] = array();
$tdatarequisiciones[".inlineAddFields"][] = "area";
$tdatarequisiciones[".inlineAddFields"][] = "jefatura";
$tdatarequisiciones[".inlineAddFields"][] = "gestionSiges";
$tdatarequisiciones[".inlineAddFields"][] = "correlativo";
$tdatarequisiciones[".inlineAddFields"][] = "fechaRequisicion";
$tdatarequisiciones[".inlineAddFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".inlineAddFields"][] = "unidadDeMedida";
$tdatarequisiciones[".inlineAddFields"][] = "descripcion";
$tdatarequisiciones[".inlineAddFields"][] = "codigoInsumo";
$tdatarequisiciones[".inlineAddFields"][] = "codigoPresentacion";
$tdatarequisiciones[".inlineAddFields"][] = "existenciasAlmacen";

$tdatarequisiciones[".editFields"] = array();
$tdatarequisiciones[".editFields"][] = "area";
$tdatarequisiciones[".editFields"][] = "jefatura";
$tdatarequisiciones[".editFields"][] = "gestionSiges";
$tdatarequisiciones[".editFields"][] = "correlativo";
$tdatarequisiciones[".editFields"][] = "fechaRequisicion";
$tdatarequisiciones[".editFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".editFields"][] = "unidadDeMedida";
$tdatarequisiciones[".editFields"][] = "descripcion";
$tdatarequisiciones[".editFields"][] = "codigoInsumo";
$tdatarequisiciones[".editFields"][] = "codigoPresentacion";
$tdatarequisiciones[".editFields"][] = "existenciasAlmacen";

$tdatarequisiciones[".inlineEditFields"] = array();
$tdatarequisiciones[".inlineEditFields"][] = "area";
$tdatarequisiciones[".inlineEditFields"][] = "jefatura";
$tdatarequisiciones[".inlineEditFields"][] = "gestionSiges";
$tdatarequisiciones[".inlineEditFields"][] = "correlativo";
$tdatarequisiciones[".inlineEditFields"][] = "fechaRequisicion";
$tdatarequisiciones[".inlineEditFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".inlineEditFields"][] = "unidadDeMedida";
$tdatarequisiciones[".inlineEditFields"][] = "descripcion";
$tdatarequisiciones[".inlineEditFields"][] = "codigoInsumo";
$tdatarequisiciones[".inlineEditFields"][] = "codigoPresentacion";
$tdatarequisiciones[".inlineEditFields"][] = "existenciasAlmacen";

$tdatarequisiciones[".exportFields"] = array();
$tdatarequisiciones[".exportFields"][] = "ID";
$tdatarequisiciones[".exportFields"][] = "area";
$tdatarequisiciones[".exportFields"][] = "jefatura";
$tdatarequisiciones[".exportFields"][] = "gestionSiges";
$tdatarequisiciones[".exportFields"][] = "correlativo";
$tdatarequisiciones[".exportFields"][] = "fechaRequisicion";
$tdatarequisiciones[".exportFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".exportFields"][] = "unidadDeMedida";
$tdatarequisiciones[".exportFields"][] = "descripcion";
$tdatarequisiciones[".exportFields"][] = "codigoInsumo";
$tdatarequisiciones[".exportFields"][] = "codigoPresentacion";
$tdatarequisiciones[".exportFields"][] = "existenciasAlmacen";

$tdatarequisiciones[".importFields"] = array();
$tdatarequisiciones[".importFields"][] = "ID";
$tdatarequisiciones[".importFields"][] = "area";
$tdatarequisiciones[".importFields"][] = "jefatura";
$tdatarequisiciones[".importFields"][] = "gestionSiges";
$tdatarequisiciones[".importFields"][] = "correlativo";
$tdatarequisiciones[".importFields"][] = "fechaRequisicion";
$tdatarequisiciones[".importFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".importFields"][] = "unidadDeMedida";
$tdatarequisiciones[".importFields"][] = "descripcion";
$tdatarequisiciones[".importFields"][] = "codigoInsumo";
$tdatarequisiciones[".importFields"][] = "codigoPresentacion";
$tdatarequisiciones[".importFields"][] = "existenciasAlmacen";

$tdatarequisiciones[".printFields"] = array();
$tdatarequisiciones[".printFields"][] = "ID";
$tdatarequisiciones[".printFields"][] = "area";
$tdatarequisiciones[".printFields"][] = "jefatura";
$tdatarequisiciones[".printFields"][] = "gestionSiges";
$tdatarequisiciones[".printFields"][] = "correlativo";
$tdatarequisiciones[".printFields"][] = "fechaRequisicion";
$tdatarequisiciones[".printFields"][] = "cantidadSolicitada";
$tdatarequisiciones[".printFields"][] = "unidadDeMedida";
$tdatarequisiciones[".printFields"][] = "descripcion";
$tdatarequisiciones[".printFields"][] = "codigoInsumo";
$tdatarequisiciones[".printFields"][] = "codigoPresentacion";
$tdatarequisiciones[".printFields"][] = "existenciasAlmacen";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","ID");
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




	$tdatarequisiciones["ID"] = $fdata;
//	area
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "area";
	$fdata["GoodName"] = "area";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","area");
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

		$fdata["strField"] = "area";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "area";

	
	
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




	$tdatarequisiciones["area"] = $fdata;
//	jefatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "jefatura";
	$fdata["GoodName"] = "jefatura";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","jefatura");
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

		$fdata["strField"] = "jefatura";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jefatura";

	
	
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




	$tdatarequisiciones["jefatura"] = $fdata;
//	gestionSiges
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "gestionSiges";
	$fdata["GoodName"] = "gestionSiges";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","gestionSiges");
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

		$fdata["strField"] = "gestionSiges";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gestionSiges";

	
	
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




	$tdatarequisiciones["gestionSiges"] = $fdata;
//	correlativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "correlativo";
	$fdata["GoodName"] = "correlativo";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","correlativo");
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

		$fdata["strField"] = "correlativo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "correlativo";

	
	
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




	$tdatarequisiciones["correlativo"] = $fdata;
//	fechaRequisicion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fechaRequisicion";
	$fdata["GoodName"] = "fechaRequisicion";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","fechaRequisicion");
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

		$fdata["strField"] = "fechaRequisicion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechaRequisicion";

	
	
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




	$tdatarequisiciones["fechaRequisicion"] = $fdata;
//	cantidadSolicitada
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cantidadSolicitada";
	$fdata["GoodName"] = "cantidadSolicitada";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","cantidadSolicitada");
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

		$fdata["strField"] = "cantidadSolicitada";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cantidadSolicitada";

	
	
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




	$tdatarequisiciones["cantidadSolicitada"] = $fdata;
//	unidadDeMedida
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "unidadDeMedida";
	$fdata["GoodName"] = "unidadDeMedida";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","unidadDeMedida");
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

		$fdata["strField"] = "unidadDeMedida";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "unidadDeMedida";

	
	
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




	$tdatarequisiciones["unidadDeMedida"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","descripcion");
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

		$fdata["strField"] = "descripcion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";

	
	
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




	$tdatarequisiciones["descripcion"] = $fdata;
//	codigoInsumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "codigoInsumo";
	$fdata["GoodName"] = "codigoInsumo";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","codigoInsumo");
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

		$fdata["strField"] = "codigoInsumo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigoInsumo";

	
	
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




	$tdatarequisiciones["codigoInsumo"] = $fdata;
//	codigoPresentacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "codigoPresentacion";
	$fdata["GoodName"] = "codigoPresentacion";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","codigoPresentacion");
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

		$fdata["strField"] = "codigoPresentacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codigoPresentacion";

	
	
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




	$tdatarequisiciones["codigoPresentacion"] = $fdata;
//	existenciasAlmacen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "existenciasAlmacen";
	$fdata["GoodName"] = "existenciasAlmacen";
	$fdata["ownerTable"] = "requisiciones";
	$fdata["Label"] = GetFieldLabel("requisiciones","existenciasAlmacen");
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

		$fdata["strField"] = "existenciasAlmacen";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "existenciasAlmacen";

	
	
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




	$tdatarequisiciones["existenciasAlmacen"] = $fdata;


$tables_data["requisiciones"]=&$tdatarequisiciones;
$field_labels["requisiciones"] = &$fieldLabelsrequisiciones;
$fieldToolTips["requisiciones"] = &$fieldToolTipsrequisiciones;
$page_titles["requisiciones"] = &$pageTitlesrequisiciones;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["requisiciones"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["requisiciones"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_requisiciones()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	area,  	jefatura,  	gestionSiges,  	correlativo,  	fechaRequisicion,  	cantidadSolicitada,  	unidadDeMedida,  	descripcion,  	codigoInsumo,  	codigoPresentacion,  	existenciasAlmacen";
$proto0["m_strFrom"] = "FROM requisiciones";
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
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "requisiciones";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "area",
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto8["m_sql"] = "area";
$proto8["m_srcTableName"] = "requisiciones";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "jefatura",
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto10["m_sql"] = "jefatura";
$proto10["m_srcTableName"] = "requisiciones";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "gestionSiges",
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto12["m_sql"] = "gestionSiges";
$proto12["m_srcTableName"] = "requisiciones";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "correlativo",
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto14["m_sql"] = "correlativo";
$proto14["m_srcTableName"] = "requisiciones";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "fechaRequisicion",
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto16["m_sql"] = "fechaRequisicion";
$proto16["m_srcTableName"] = "requisiciones";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidadSolicitada",
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto18["m_sql"] = "cantidadSolicitada";
$proto18["m_srcTableName"] = "requisiciones";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "unidadDeMedida",
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto20["m_sql"] = "unidadDeMedida";
$proto20["m_srcTableName"] = "requisiciones";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto22["m_sql"] = "descripcion";
$proto22["m_srcTableName"] = "requisiciones";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "codigoInsumo",
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto24["m_sql"] = "codigoInsumo";
$proto24["m_srcTableName"] = "requisiciones";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "codigoPresentacion",
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto26["m_sql"] = "codigoPresentacion";
$proto26["m_srcTableName"] = "requisiciones";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "existenciasAlmacen",
	"m_strTable" => "requisiciones",
	"m_srcTableName" => "requisiciones"
));

$proto28["m_sql"] = "existenciasAlmacen";
$proto28["m_srcTableName"] = "requisiciones";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "requisiciones";
$proto31["m_srcTableName"] = "requisiciones";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "ID";
$proto31["m_columns"][] = "area";
$proto31["m_columns"][] = "jefatura";
$proto31["m_columns"][] = "gestionSiges";
$proto31["m_columns"][] = "correlativo";
$proto31["m_columns"][] = "fechaRequisicion";
$proto31["m_columns"][] = "cantidadSolicitada";
$proto31["m_columns"][] = "unidadDeMedida";
$proto31["m_columns"][] = "descripcion";
$proto31["m_columns"][] = "codigoInsumo";
$proto31["m_columns"][] = "codigoPresentacion";
$proto31["m_columns"][] = "existenciasAlmacen";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "requisiciones";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "requisiciones";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="requisiciones";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_requisiciones = createSqlQuery_requisiciones();


	
		;

												

$tdatarequisiciones[".sqlquery"] = $queryData_requisiciones;

$tableEvents["requisiciones"] = new eventsBase;
$tdatarequisiciones[".hasEvents"] = false;

?>