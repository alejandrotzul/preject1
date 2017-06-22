<?php
require_once(getabspath("classes/cipherer.php"));




$tdatainsumos = array();
	$tdatainsumos[".truncateText"] = true;
	$tdatainsumos[".NumberOfChars"] = 80;
	$tdatainsumos[".ShortName"] = "insumos";
	$tdatainsumos[".OwnerID"] = "";
	$tdatainsumos[".OriginalTable"] = "insumos";

//	field labels
$fieldLabelsinsumos = array();
$fieldToolTipsinsumos = array();
$pageTitlesinsumos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsinsumos["English"] = array();
	$fieldToolTipsinsumos["English"] = array();
	$pageTitlesinsumos["English"] = array();
	$fieldLabelsinsumos["English"]["ID"] = "ID";
	$fieldToolTipsinsumos["English"]["ID"] = "";
	$fieldLabelsinsumos["English"]["renglon"] = "Renglon";
	$fieldToolTipsinsumos["English"]["renglon"] = "";
	$fieldLabelsinsumos["English"]["codigo_insumo"] = "Codigo Insumo";
	$fieldToolTipsinsumos["English"]["codigo_insumo"] = "";
	$fieldLabelsinsumos["English"]["nombre"] = "Nombre";
	$fieldToolTipsinsumos["English"]["nombre"] = "";
	$fieldLabelsinsumos["English"]["caracteristicas"] = "Caracteristicas";
	$fieldToolTipsinsumos["English"]["caracteristicas"] = "";
	$fieldLabelsinsumos["English"]["nombre_de_la_presentacion"] = "nombre de la presentacion";
	$fieldToolTipsinsumos["English"]["nombre_de_la_presentacion"] = "";
	$fieldLabelsinsumos["English"]["cantidad_y_unidad"] = "cantidad y unidad";
	$fieldToolTipsinsumos["English"]["cantidad_y_unidad"] = "";
	$fieldLabelsinsumos["English"]["codigo_de_presentacion"] = "codigo de presentacion";
	$fieldToolTipsinsumos["English"]["codigo_de_presentacion"] = "";
	if (count($fieldToolTipsinsumos["English"]))
		$tdatainsumos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsinsumos[""] = array();
	$fieldToolTipsinsumos[""] = array();
	$pageTitlesinsumos[""] = array();
	if (count($fieldToolTipsinsumos[""]))
		$tdatainsumos[".isUseToolTips"] = true;
}


	$tdatainsumos[".NCSearch"] = true;



$tdatainsumos[".shortTableName"] = "insumos";
$tdatainsumos[".nSecOptions"] = 0;
$tdatainsumos[".recsPerRowPrint"] = 1;
$tdatainsumos[".mainTableOwnerID"] = "";
$tdatainsumos[".moveNext"] = 1;
$tdatainsumos[".entityType"] = 0;

$tdatainsumos[".strOriginalTableName"] = "insumos";

	



$tdatainsumos[".showAddInPopup"] = false;

$tdatainsumos[".showEditInPopup"] = false;

$tdatainsumos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatainsumos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatainsumos[".fieldsForRegister"] = array();

$tdatainsumos[".listAjax"] = false;

	$tdatainsumos[".audit"] = false;

	$tdatainsumos[".locking"] = false;

$tdatainsumos[".edit"] = true;
$tdatainsumos[".afterEditAction"] = 1;
$tdatainsumos[".closePopupAfterEdit"] = 1;
$tdatainsumos[".afterEditActionDetTable"] = "";

$tdatainsumos[".add"] = true;
$tdatainsumos[".afterAddAction"] = 1;
$tdatainsumos[".closePopupAfterAdd"] = 1;
$tdatainsumos[".afterAddActionDetTable"] = "";

$tdatainsumos[".list"] = true;

$tdatainsumos[".view"] = true;

$tdatainsumos[".import"] = true;

$tdatainsumos[".exportTo"] = true;

$tdatainsumos[".printFriendly"] = true;

$tdatainsumos[".delete"] = true;

$tdatainsumos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatainsumos[".searchSaving"] = false;
//

$tdatainsumos[".showSearchPanel"] = true;
		$tdatainsumos[".flexibleSearch"] = true;

$tdatainsumos[".isUseAjaxSuggest"] = true;

$tdatainsumos[".rowHighlite"] = true;



$tdatainsumos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainsumos[".isUseTimeForSearch"] = false;



$tdatainsumos[".badgeColor"] = "6DA5C8";


$tdatainsumos[".allSearchFields"] = array();
$tdatainsumos[".filterFields"] = array();
$tdatainsumos[".requiredSearchFields"] = array();

$tdatainsumos[".allSearchFields"][] = "ID";
	$tdatainsumos[".allSearchFields"][] = "renglon";
	$tdatainsumos[".allSearchFields"][] = "codigo insumo";
	$tdatainsumos[".allSearchFields"][] = "nombre";
	$tdatainsumos[".allSearchFields"][] = "caracteristicas";
	$tdatainsumos[".allSearchFields"][] = "nombre de la presentacion";
	$tdatainsumos[".allSearchFields"][] = "cantidad y unidad";
	$tdatainsumos[".allSearchFields"][] = "codigo de presentacion";
	

$tdatainsumos[".googleLikeFields"] = array();
$tdatainsumos[".googleLikeFields"][] = "ID";
$tdatainsumos[".googleLikeFields"][] = "renglon";
$tdatainsumos[".googleLikeFields"][] = "codigo insumo";
$tdatainsumos[".googleLikeFields"][] = "nombre";
$tdatainsumos[".googleLikeFields"][] = "caracteristicas";
$tdatainsumos[".googleLikeFields"][] = "nombre de la presentacion";
$tdatainsumos[".googleLikeFields"][] = "cantidad y unidad";
$tdatainsumos[".googleLikeFields"][] = "codigo de presentacion";


$tdatainsumos[".advSearchFields"] = array();
$tdatainsumos[".advSearchFields"][] = "ID";
$tdatainsumos[".advSearchFields"][] = "renglon";
$tdatainsumos[".advSearchFields"][] = "codigo insumo";
$tdatainsumos[".advSearchFields"][] = "nombre";
$tdatainsumos[".advSearchFields"][] = "caracteristicas";
$tdatainsumos[".advSearchFields"][] = "nombre de la presentacion";
$tdatainsumos[".advSearchFields"][] = "cantidad y unidad";
$tdatainsumos[".advSearchFields"][] = "codigo de presentacion";

$tdatainsumos[".tableType"] = "list";

$tdatainsumos[".printerPageOrientation"] = 0;
$tdatainsumos[".nPrinterPageScale"] = 100;

$tdatainsumos[".nPrinterSplitRecords"] = 40;

$tdatainsumos[".nPrinterPDFSplitRecords"] = 40;



$tdatainsumos[".geocodingEnabled"] = false;





$tdatainsumos[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatainsumos[".pageSize"] = 20;

$tdatainsumos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatainsumos[".strOrderBy"] = $tstrOrderBy;

$tdatainsumos[".orderindexes"] = array();

$tdatainsumos[".sqlHead"] = "SELECT ID,  	renglon,  	`codigo insumo`,  	nombre,  	caracteristicas,  	`nombre de la presentacion`,  	`cantidad y unidad`,  	`codigo de presentacion`";
$tdatainsumos[".sqlFrom"] = "FROM insumos";
$tdatainsumos[".sqlWhereExpr"] = "";
$tdatainsumos[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainsumos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainsumos[".arrGroupsPerPage"] = $arrGPP;

$tdatainsumos[".highlightSearchResults"] = true;

$tableKeysinsumos = array();
$tableKeysinsumos[] = "ID";
$tdatainsumos[".Keys"] = $tableKeysinsumos;

$tdatainsumos[".listFields"] = array();
$tdatainsumos[".listFields"][] = "ID";
$tdatainsumos[".listFields"][] = "renglon";
$tdatainsumos[".listFields"][] = "codigo insumo";
$tdatainsumos[".listFields"][] = "nombre";
$tdatainsumos[".listFields"][] = "caracteristicas";
$tdatainsumos[".listFields"][] = "nombre de la presentacion";
$tdatainsumos[".listFields"][] = "cantidad y unidad";
$tdatainsumos[".listFields"][] = "codigo de presentacion";

$tdatainsumos[".hideMobileList"] = array();


$tdatainsumos[".viewFields"] = array();
$tdatainsumos[".viewFields"][] = "ID";
$tdatainsumos[".viewFields"][] = "renglon";
$tdatainsumos[".viewFields"][] = "codigo insumo";
$tdatainsumos[".viewFields"][] = "nombre";
$tdatainsumos[".viewFields"][] = "caracteristicas";
$tdatainsumos[".viewFields"][] = "nombre de la presentacion";
$tdatainsumos[".viewFields"][] = "cantidad y unidad";
$tdatainsumos[".viewFields"][] = "codigo de presentacion";

$tdatainsumos[".addFields"] = array();
$tdatainsumos[".addFields"][] = "renglon";
$tdatainsumos[".addFields"][] = "codigo insumo";
$tdatainsumos[".addFields"][] = "nombre";
$tdatainsumos[".addFields"][] = "caracteristicas";
$tdatainsumos[".addFields"][] = "nombre de la presentacion";
$tdatainsumos[".addFields"][] = "cantidad y unidad";
$tdatainsumos[".addFields"][] = "codigo de presentacion";

$tdatainsumos[".masterListFields"] = array();
$tdatainsumos[".masterListFields"][] = "ID";
$tdatainsumos[".masterListFields"][] = "renglon";
$tdatainsumos[".masterListFields"][] = "codigo insumo";
$tdatainsumos[".masterListFields"][] = "nombre";
$tdatainsumos[".masterListFields"][] = "caracteristicas";
$tdatainsumos[".masterListFields"][] = "nombre de la presentacion";
$tdatainsumos[".masterListFields"][] = "cantidad y unidad";
$tdatainsumos[".masterListFields"][] = "codigo de presentacion";

$tdatainsumos[".inlineAddFields"] = array();
$tdatainsumos[".inlineAddFields"][] = "renglon";
$tdatainsumos[".inlineAddFields"][] = "codigo insumo";
$tdatainsumos[".inlineAddFields"][] = "nombre";
$tdatainsumos[".inlineAddFields"][] = "caracteristicas";
$tdatainsumos[".inlineAddFields"][] = "nombre de la presentacion";
$tdatainsumos[".inlineAddFields"][] = "cantidad y unidad";
$tdatainsumos[".inlineAddFields"][] = "codigo de presentacion";

$tdatainsumos[".editFields"] = array();
$tdatainsumos[".editFields"][] = "renglon";
$tdatainsumos[".editFields"][] = "codigo insumo";
$tdatainsumos[".editFields"][] = "nombre";
$tdatainsumos[".editFields"][] = "caracteristicas";
$tdatainsumos[".editFields"][] = "nombre de la presentacion";
$tdatainsumos[".editFields"][] = "cantidad y unidad";
$tdatainsumos[".editFields"][] = "codigo de presentacion";

$tdatainsumos[".inlineEditFields"] = array();
$tdatainsumos[".inlineEditFields"][] = "renglon";
$tdatainsumos[".inlineEditFields"][] = "codigo insumo";
$tdatainsumos[".inlineEditFields"][] = "nombre";
$tdatainsumos[".inlineEditFields"][] = "caracteristicas";
$tdatainsumos[".inlineEditFields"][] = "nombre de la presentacion";
$tdatainsumos[".inlineEditFields"][] = "cantidad y unidad";
$tdatainsumos[".inlineEditFields"][] = "codigo de presentacion";

$tdatainsumos[".exportFields"] = array();
$tdatainsumos[".exportFields"][] = "ID";
$tdatainsumos[".exportFields"][] = "renglon";
$tdatainsumos[".exportFields"][] = "codigo insumo";
$tdatainsumos[".exportFields"][] = "nombre";
$tdatainsumos[".exportFields"][] = "caracteristicas";
$tdatainsumos[".exportFields"][] = "nombre de la presentacion";
$tdatainsumos[".exportFields"][] = "cantidad y unidad";
$tdatainsumos[".exportFields"][] = "codigo de presentacion";

$tdatainsumos[".importFields"] = array();
$tdatainsumos[".importFields"][] = "ID";
$tdatainsumos[".importFields"][] = "renglon";
$tdatainsumos[".importFields"][] = "codigo insumo";
$tdatainsumos[".importFields"][] = "nombre";
$tdatainsumos[".importFields"][] = "caracteristicas";
$tdatainsumos[".importFields"][] = "nombre de la presentacion";
$tdatainsumos[".importFields"][] = "cantidad y unidad";
$tdatainsumos[".importFields"][] = "codigo de presentacion";

$tdatainsumos[".printFields"] = array();
$tdatainsumos[".printFields"][] = "ID";
$tdatainsumos[".printFields"][] = "renglon";
$tdatainsumos[".printFields"][] = "codigo insumo";
$tdatainsumos[".printFields"][] = "nombre";
$tdatainsumos[".printFields"][] = "caracteristicas";
$tdatainsumos[".printFields"][] = "nombre de la presentacion";
$tdatainsumos[".printFields"][] = "cantidad y unidad";
$tdatainsumos[".printFields"][] = "codigo de presentacion";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","ID");
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




	$tdatainsumos["ID"] = $fdata;
//	renglon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "renglon";
	$fdata["GoodName"] = "renglon";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","renglon");
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




	$tdatainsumos["renglon"] = $fdata;
//	codigo insumo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "codigo insumo";
	$fdata["GoodName"] = "codigo_insumo";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","codigo_insumo");
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

		$fdata["strField"] = "codigo insumo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`codigo insumo`";

	
	
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




	$tdatainsumos["codigo insumo"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","nombre");
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

		$fdata["strField"] = "nombre";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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




	$tdatainsumos["nombre"] = $fdata;
//	caracteristicas
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "caracteristicas";
	$fdata["GoodName"] = "caracteristicas";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","caracteristicas");
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

		$fdata["strField"] = "caracteristicas";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "caracteristicas";

	
	
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




	$tdatainsumos["caracteristicas"] = $fdata;
//	nombre de la presentacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre de la presentacion";
	$fdata["GoodName"] = "nombre_de_la_presentacion";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","nombre_de_la_presentacion");
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

		$fdata["strField"] = "nombre de la presentacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`nombre de la presentacion`";

	
	
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




	$tdatainsumos["nombre de la presentacion"] = $fdata;
//	cantidad y unidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cantidad y unidad";
	$fdata["GoodName"] = "cantidad_y_unidad";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","cantidad_y_unidad");
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

		$fdata["strField"] = "cantidad y unidad";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`cantidad y unidad`";

	
	
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




	$tdatainsumos["cantidad y unidad"] = $fdata;
//	codigo de presentacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "codigo de presentacion";
	$fdata["GoodName"] = "codigo_de_presentacion";
	$fdata["ownerTable"] = "insumos";
	$fdata["Label"] = GetFieldLabel("insumos","codigo_de_presentacion");
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

		$fdata["strField"] = "codigo de presentacion";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`codigo de presentacion`";

	
	
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




	$tdatainsumos["codigo de presentacion"] = $fdata;


$tables_data["insumos"]=&$tdatainsumos;
$field_labels["insumos"] = &$fieldLabelsinsumos;
$fieldToolTips["insumos"] = &$fieldToolTipsinsumos;
$page_titles["insumos"] = &$pageTitlesinsumos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["insumos"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["insumos"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_insumos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	renglon,  	`codigo insumo`,  	nombre,  	caracteristicas,  	`nombre de la presentacion`,  	`cantidad y unidad`,  	`codigo de presentacion`";
$proto0["m_strFrom"] = "FROM insumos";
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
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "insumos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "renglon",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto8["m_sql"] = "renglon";
$proto8["m_srcTableName"] = "insumos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo insumo",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto10["m_sql"] = "`codigo insumo`";
$proto10["m_srcTableName"] = "insumos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto12["m_sql"] = "nombre";
$proto12["m_srcTableName"] = "insumos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "caracteristicas",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto14["m_sql"] = "caracteristicas";
$proto14["m_srcTableName"] = "insumos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre de la presentacion",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto16["m_sql"] = "`nombre de la presentacion`";
$proto16["m_srcTableName"] = "insumos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cantidad y unidad",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto18["m_sql"] = "`cantidad y unidad`";
$proto18["m_srcTableName"] = "insumos";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "codigo de presentacion",
	"m_strTable" => "insumos",
	"m_srcTableName" => "insumos"
));

$proto20["m_sql"] = "`codigo de presentacion`";
$proto20["m_srcTableName"] = "insumos";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "insumos";
$proto23["m_srcTableName"] = "insumos";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "renglon";
$proto23["m_columns"][] = "codigo insumo";
$proto23["m_columns"][] = "nombre";
$proto23["m_columns"][] = "caracteristicas";
$proto23["m_columns"][] = "nombre de la presentacion";
$proto23["m_columns"][] = "cantidad y unidad";
$proto23["m_columns"][] = "codigo de presentacion";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "insumos";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "insumos";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="insumos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_insumos = createSqlQuery_insumos();


	
		;

								

$tdatainsumos[".sqlquery"] = $queryData_insumos;

$tableEvents["insumos"] = new eventsBase;
$tdatainsumos[".hasEvents"] = false;

?>