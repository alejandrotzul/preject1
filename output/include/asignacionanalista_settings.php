<?php
require_once(getabspath("classes/cipherer.php"));




$tdataasignacionanalista = array();
	$tdataasignacionanalista[".truncateText"] = true;
	$tdataasignacionanalista[".NumberOfChars"] = 80;
	$tdataasignacionanalista[".ShortName"] = "asignacionanalista";
	$tdataasignacionanalista[".OwnerID"] = "";
	$tdataasignacionanalista[".OriginalTable"] = "asignacionanalista";

//	field labels
$fieldLabelsasignacionanalista = array();
$fieldToolTipsasignacionanalista = array();
$pageTitlesasignacionanalista = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsasignacionanalista["English"] = array();
	$fieldToolTipsasignacionanalista["English"] = array();
	$pageTitlesasignacionanalista["English"] = array();
	$fieldLabelsasignacionanalista["English"]["ID"] = "ID";
	$fieldToolTipsasignacionanalista["English"]["ID"] = "";
	$fieldLabelsasignacionanalista["English"]["nombre"] = "Nombre";
	$fieldToolTipsasignacionanalista["English"]["nombre"] = "";
	$fieldLabelsasignacionanalista["English"]["apellido"] = "Apellido";
	$fieldToolTipsasignacionanalista["English"]["apellido"] = "";
	$fieldLabelsasignacionanalista["English"]["telefono"] = "Telefono";
	$fieldToolTipsasignacionanalista["English"]["telefono"] = "";
	$fieldLabelsasignacionanalista["English"]["email"] = "Email";
	$fieldToolTipsasignacionanalista["English"]["email"] = "";
	if (count($fieldToolTipsasignacionanalista["English"]))
		$tdataasignacionanalista[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsasignacionanalista[""] = array();
	$fieldToolTipsasignacionanalista[""] = array();
	$pageTitlesasignacionanalista[""] = array();
	if (count($fieldToolTipsasignacionanalista[""]))
		$tdataasignacionanalista[".isUseToolTips"] = true;
}


	$tdataasignacionanalista[".NCSearch"] = true;



$tdataasignacionanalista[".shortTableName"] = "asignacionanalista";
$tdataasignacionanalista[".nSecOptions"] = 0;
$tdataasignacionanalista[".recsPerRowPrint"] = 1;
$tdataasignacionanalista[".mainTableOwnerID"] = "";
$tdataasignacionanalista[".moveNext"] = 1;
$tdataasignacionanalista[".entityType"] = 0;

$tdataasignacionanalista[".strOriginalTableName"] = "asignacionanalista";

	



$tdataasignacionanalista[".showAddInPopup"] = false;

$tdataasignacionanalista[".showEditInPopup"] = false;

$tdataasignacionanalista[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataasignacionanalista[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataasignacionanalista[".fieldsForRegister"] = array();

$tdataasignacionanalista[".listAjax"] = false;

	$tdataasignacionanalista[".audit"] = false;

	$tdataasignacionanalista[".locking"] = false;

$tdataasignacionanalista[".edit"] = true;
$tdataasignacionanalista[".afterEditAction"] = 1;
$tdataasignacionanalista[".closePopupAfterEdit"] = 1;
$tdataasignacionanalista[".afterEditActionDetTable"] = "";

$tdataasignacionanalista[".add"] = true;
$tdataasignacionanalista[".afterAddAction"] = 1;
$tdataasignacionanalista[".closePopupAfterAdd"] = 1;
$tdataasignacionanalista[".afterAddActionDetTable"] = "";

$tdataasignacionanalista[".list"] = true;

$tdataasignacionanalista[".view"] = true;

$tdataasignacionanalista[".import"] = true;

$tdataasignacionanalista[".exportTo"] = true;

$tdataasignacionanalista[".printFriendly"] = true;

$tdataasignacionanalista[".delete"] = true;

$tdataasignacionanalista[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataasignacionanalista[".searchSaving"] = false;
//

$tdataasignacionanalista[".showSearchPanel"] = true;
		$tdataasignacionanalista[".flexibleSearch"] = true;

$tdataasignacionanalista[".isUseAjaxSuggest"] = true;

$tdataasignacionanalista[".rowHighlite"] = true;



$tdataasignacionanalista[".addPageEvents"] = false;

// use timepicker for search panel
$tdataasignacionanalista[".isUseTimeForSearch"] = false;



$tdataasignacionanalista[".badgeColor"] = "E67349";


$tdataasignacionanalista[".allSearchFields"] = array();
$tdataasignacionanalista[".filterFields"] = array();
$tdataasignacionanalista[".requiredSearchFields"] = array();

$tdataasignacionanalista[".allSearchFields"][] = "ID";
	$tdataasignacionanalista[".allSearchFields"][] = "nombre";
	$tdataasignacionanalista[".allSearchFields"][] = "apellido";
	$tdataasignacionanalista[".allSearchFields"][] = "telefono";
	$tdataasignacionanalista[".allSearchFields"][] = "email";
	

$tdataasignacionanalista[".googleLikeFields"] = array();
$tdataasignacionanalista[".googleLikeFields"][] = "ID";
$tdataasignacionanalista[".googleLikeFields"][] = "nombre";
$tdataasignacionanalista[".googleLikeFields"][] = "apellido";
$tdataasignacionanalista[".googleLikeFields"][] = "telefono";
$tdataasignacionanalista[".googleLikeFields"][] = "email";


$tdataasignacionanalista[".advSearchFields"] = array();
$tdataasignacionanalista[".advSearchFields"][] = "ID";
$tdataasignacionanalista[".advSearchFields"][] = "nombre";
$tdataasignacionanalista[".advSearchFields"][] = "apellido";
$tdataasignacionanalista[".advSearchFields"][] = "telefono";
$tdataasignacionanalista[".advSearchFields"][] = "email";

$tdataasignacionanalista[".tableType"] = "list";

$tdataasignacionanalista[".printerPageOrientation"] = 0;
$tdataasignacionanalista[".nPrinterPageScale"] = 100;

$tdataasignacionanalista[".nPrinterSplitRecords"] = 40;

$tdataasignacionanalista[".nPrinterPDFSplitRecords"] = 40;



$tdataasignacionanalista[".geocodingEnabled"] = false;





$tdataasignacionanalista[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdataasignacionanalista[".pageSize"] = 20;

$tdataasignacionanalista[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataasignacionanalista[".strOrderBy"] = $tstrOrderBy;

$tdataasignacionanalista[".orderindexes"] = array();

$tdataasignacionanalista[".sqlHead"] = "SELECT ID,  	nombre,  	apellido,  	telefono,  	email";
$tdataasignacionanalista[".sqlFrom"] = "FROM asignacionanalista";
$tdataasignacionanalista[".sqlWhereExpr"] = "";
$tdataasignacionanalista[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataasignacionanalista[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataasignacionanalista[".arrGroupsPerPage"] = $arrGPP;

$tdataasignacionanalista[".highlightSearchResults"] = true;

$tableKeysasignacionanalista = array();
$tableKeysasignacionanalista[] = "ID";
$tdataasignacionanalista[".Keys"] = $tableKeysasignacionanalista;

$tdataasignacionanalista[".listFields"] = array();
$tdataasignacionanalista[".listFields"][] = "ID";
$tdataasignacionanalista[".listFields"][] = "nombre";
$tdataasignacionanalista[".listFields"][] = "apellido";
$tdataasignacionanalista[".listFields"][] = "telefono";
$tdataasignacionanalista[".listFields"][] = "email";

$tdataasignacionanalista[".hideMobileList"] = array();


$tdataasignacionanalista[".viewFields"] = array();
$tdataasignacionanalista[".viewFields"][] = "ID";
$tdataasignacionanalista[".viewFields"][] = "nombre";
$tdataasignacionanalista[".viewFields"][] = "apellido";
$tdataasignacionanalista[".viewFields"][] = "telefono";
$tdataasignacionanalista[".viewFields"][] = "email";

$tdataasignacionanalista[".addFields"] = array();
$tdataasignacionanalista[".addFields"][] = "nombre";
$tdataasignacionanalista[".addFields"][] = "apellido";
$tdataasignacionanalista[".addFields"][] = "telefono";
$tdataasignacionanalista[".addFields"][] = "email";

$tdataasignacionanalista[".masterListFields"] = array();
$tdataasignacionanalista[".masterListFields"][] = "ID";
$tdataasignacionanalista[".masterListFields"][] = "nombre";
$tdataasignacionanalista[".masterListFields"][] = "apellido";
$tdataasignacionanalista[".masterListFields"][] = "telefono";
$tdataasignacionanalista[".masterListFields"][] = "email";

$tdataasignacionanalista[".inlineAddFields"] = array();
$tdataasignacionanalista[".inlineAddFields"][] = "nombre";
$tdataasignacionanalista[".inlineAddFields"][] = "apellido";
$tdataasignacionanalista[".inlineAddFields"][] = "telefono";
$tdataasignacionanalista[".inlineAddFields"][] = "email";

$tdataasignacionanalista[".editFields"] = array();
$tdataasignacionanalista[".editFields"][] = "nombre";
$tdataasignacionanalista[".editFields"][] = "apellido";
$tdataasignacionanalista[".editFields"][] = "telefono";
$tdataasignacionanalista[".editFields"][] = "email";

$tdataasignacionanalista[".inlineEditFields"] = array();
$tdataasignacionanalista[".inlineEditFields"][] = "nombre";
$tdataasignacionanalista[".inlineEditFields"][] = "apellido";
$tdataasignacionanalista[".inlineEditFields"][] = "telefono";
$tdataasignacionanalista[".inlineEditFields"][] = "email";

$tdataasignacionanalista[".exportFields"] = array();
$tdataasignacionanalista[".exportFields"][] = "ID";
$tdataasignacionanalista[".exportFields"][] = "nombre";
$tdataasignacionanalista[".exportFields"][] = "apellido";
$tdataasignacionanalista[".exportFields"][] = "telefono";
$tdataasignacionanalista[".exportFields"][] = "email";

$tdataasignacionanalista[".importFields"] = array();
$tdataasignacionanalista[".importFields"][] = "ID";
$tdataasignacionanalista[".importFields"][] = "nombre";
$tdataasignacionanalista[".importFields"][] = "apellido";
$tdataasignacionanalista[".importFields"][] = "telefono";
$tdataasignacionanalista[".importFields"][] = "email";

$tdataasignacionanalista[".printFields"] = array();
$tdataasignacionanalista[".printFields"][] = "ID";
$tdataasignacionanalista[".printFields"][] = "nombre";
$tdataasignacionanalista[".printFields"][] = "apellido";
$tdataasignacionanalista[".printFields"][] = "telefono";
$tdataasignacionanalista[".printFields"][] = "email";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "asignacionanalista";
	$fdata["Label"] = GetFieldLabel("asignacionanalista","ID");
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




	$tdataasignacionanalista["ID"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "asignacionanalista";
	$fdata["Label"] = GetFieldLabel("asignacionanalista","nombre");
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




	$tdataasignacionanalista["nombre"] = $fdata;
//	apellido
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "apellido";
	$fdata["GoodName"] = "apellido";
	$fdata["ownerTable"] = "asignacionanalista";
	$fdata["Label"] = GetFieldLabel("asignacionanalista","apellido");
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

		$fdata["strField"] = "apellido";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellido";

	
	
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




	$tdataasignacionanalista["apellido"] = $fdata;
//	telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "telefono";
	$fdata["GoodName"] = "telefono";
	$fdata["ownerTable"] = "asignacionanalista";
	$fdata["Label"] = GetFieldLabel("asignacionanalista","telefono");
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

		$fdata["strField"] = "telefono";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "telefono";

	
	
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




	$tdataasignacionanalista["telefono"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "asignacionanalista";
	$fdata["Label"] = GetFieldLabel("asignacionanalista","email");
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

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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

	
	
	
	
			$edata["HTML5InuptType"] = "email";

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




	$tdataasignacionanalista["email"] = $fdata;


$tables_data["asignacionanalista"]=&$tdataasignacionanalista;
$field_labels["asignacionanalista"] = &$fieldLabelsasignacionanalista;
$fieldToolTips["asignacionanalista"] = &$fieldToolTipsasignacionanalista;
$page_titles["asignacionanalista"] = &$pageTitlesasignacionanalista;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["asignacionanalista"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["asignacionanalista"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_asignacionanalista()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	nombre,  	apellido,  	telefono,  	email";
$proto0["m_strFrom"] = "FROM asignacionanalista";
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
	"m_strTable" => "asignacionanalista",
	"m_srcTableName" => "asignacionanalista"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "asignacionanalista";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "asignacionanalista",
	"m_srcTableName" => "asignacionanalista"
));

$proto8["m_sql"] = "nombre";
$proto8["m_srcTableName"] = "asignacionanalista";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "apellido",
	"m_strTable" => "asignacionanalista",
	"m_srcTableName" => "asignacionanalista"
));

$proto10["m_sql"] = "apellido";
$proto10["m_srcTableName"] = "asignacionanalista";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "telefono",
	"m_strTable" => "asignacionanalista",
	"m_srcTableName" => "asignacionanalista"
));

$proto12["m_sql"] = "telefono";
$proto12["m_srcTableName"] = "asignacionanalista";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "asignacionanalista",
	"m_srcTableName" => "asignacionanalista"
));

$proto14["m_sql"] = "email";
$proto14["m_srcTableName"] = "asignacionanalista";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "asignacionanalista";
$proto17["m_srcTableName"] = "asignacionanalista";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "ID";
$proto17["m_columns"][] = "nombre";
$proto17["m_columns"][] = "apellido";
$proto17["m_columns"][] = "telefono";
$proto17["m_columns"][] = "email";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "asignacionanalista";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "asignacionanalista";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="asignacionanalista";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_asignacionanalista = createSqlQuery_asignacionanalista();


	
		;

					

$tdataasignacionanalista[".sqlquery"] = $queryData_asignacionanalista;

$tableEvents["asignacionanalista"] = new eventsBase;
$tdataasignacionanalista[".hasEvents"] = false;

?>