<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatipodecompra = array();
	$tdatatipodecompra[".truncateText"] = true;
	$tdatatipodecompra[".NumberOfChars"] = 80;
	$tdatatipodecompra[".ShortName"] = "tipodecompra";
	$tdatatipodecompra[".OwnerID"] = "";
	$tdatatipodecompra[".OriginalTable"] = "tipodecompra";

//	field labels
$fieldLabelstipodecompra = array();
$fieldToolTipstipodecompra = array();
$pageTitlestipodecompra = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstipodecompra["English"] = array();
	$fieldToolTipstipodecompra["English"] = array();
	$pageTitlestipodecompra["English"] = array();
	$fieldLabelstipodecompra["English"]["ID"] = "ID";
	$fieldToolTipstipodecompra["English"]["ID"] = "";
	$fieldLabelstipodecompra["English"]["fondoRotativo"] = "Fondo Rotativo";
	$fieldToolTipstipodecompra["English"]["fondoRotativo"] = "";
	$fieldLabelstipodecompra["English"]["precompra"] = "Precompra";
	$fieldToolTipstipodecompra["English"]["precompra"] = "";
	$fieldLabelstipodecompra["English"]["gestionDeCompra"] = "Gestion De Compra";
	$fieldToolTipstipodecompra["English"]["gestionDeCompra"] = "";
	if (count($fieldToolTipstipodecompra["English"]))
		$tdatatipodecompra[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstipodecompra[""] = array();
	$fieldToolTipstipodecompra[""] = array();
	$pageTitlestipodecompra[""] = array();
	if (count($fieldToolTipstipodecompra[""]))
		$tdatatipodecompra[".isUseToolTips"] = true;
}


	$tdatatipodecompra[".NCSearch"] = true;



$tdatatipodecompra[".shortTableName"] = "tipodecompra";
$tdatatipodecompra[".nSecOptions"] = 0;
$tdatatipodecompra[".recsPerRowPrint"] = 1;
$tdatatipodecompra[".mainTableOwnerID"] = "";
$tdatatipodecompra[".moveNext"] = 1;
$tdatatipodecompra[".entityType"] = 0;

$tdatatipodecompra[".strOriginalTableName"] = "tipodecompra";

	



$tdatatipodecompra[".showAddInPopup"] = false;

$tdatatipodecompra[".showEditInPopup"] = false;

$tdatatipodecompra[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatipodecompra[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatipodecompra[".fieldsForRegister"] = array();

$tdatatipodecompra[".listAjax"] = false;

	$tdatatipodecompra[".audit"] = false;

	$tdatatipodecompra[".locking"] = false;

$tdatatipodecompra[".edit"] = true;
$tdatatipodecompra[".afterEditAction"] = 1;
$tdatatipodecompra[".closePopupAfterEdit"] = 1;
$tdatatipodecompra[".afterEditActionDetTable"] = "";

$tdatatipodecompra[".add"] = true;
$tdatatipodecompra[".afterAddAction"] = 1;
$tdatatipodecompra[".closePopupAfterAdd"] = 1;
$tdatatipodecompra[".afterAddActionDetTable"] = "";

$tdatatipodecompra[".list"] = true;

$tdatatipodecompra[".view"] = true;

$tdatatipodecompra[".import"] = true;

$tdatatipodecompra[".exportTo"] = true;

$tdatatipodecompra[".printFriendly"] = true;

$tdatatipodecompra[".delete"] = true;

$tdatatipodecompra[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatipodecompra[".searchSaving"] = false;
//

$tdatatipodecompra[".showSearchPanel"] = true;
		$tdatatipodecompra[".flexibleSearch"] = true;

$tdatatipodecompra[".isUseAjaxSuggest"] = true;

$tdatatipodecompra[".rowHighlite"] = true;



$tdatatipodecompra[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipodecompra[".isUseTimeForSearch"] = false;





$tdatatipodecompra[".allSearchFields"] = array();
$tdatatipodecompra[".filterFields"] = array();
$tdatatipodecompra[".requiredSearchFields"] = array();

$tdatatipodecompra[".allSearchFields"][] = "ID";
	$tdatatipodecompra[".allSearchFields"][] = "fondoRotativo";
	$tdatatipodecompra[".allSearchFields"][] = "precompra";
	$tdatatipodecompra[".allSearchFields"][] = "gestionDeCompra";
	

$tdatatipodecompra[".googleLikeFields"] = array();
$tdatatipodecompra[".googleLikeFields"][] = "ID";
$tdatatipodecompra[".googleLikeFields"][] = "fondoRotativo";
$tdatatipodecompra[".googleLikeFields"][] = "precompra";
$tdatatipodecompra[".googleLikeFields"][] = "gestionDeCompra";


$tdatatipodecompra[".advSearchFields"] = array();
$tdatatipodecompra[".advSearchFields"][] = "ID";
$tdatatipodecompra[".advSearchFields"][] = "fondoRotativo";
$tdatatipodecompra[".advSearchFields"][] = "precompra";
$tdatatipodecompra[".advSearchFields"][] = "gestionDeCompra";

$tdatatipodecompra[".tableType"] = "list";

$tdatatipodecompra[".printerPageOrientation"] = 0;
$tdatatipodecompra[".nPrinterPageScale"] = 100;

$tdatatipodecompra[".nPrinterSplitRecords"] = 40;

$tdatatipodecompra[".nPrinterPDFSplitRecords"] = 40;



$tdatatipodecompra[".geocodingEnabled"] = false;





$tdatatipodecompra[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatatipodecompra[".pageSize"] = 20;

$tdatatipodecompra[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipodecompra[".strOrderBy"] = $tstrOrderBy;

$tdatatipodecompra[".orderindexes"] = array();

$tdatatipodecompra[".sqlHead"] = "SELECT ID,  	fondoRotativo,  	precompra,  	gestionDeCompra";
$tdatatipodecompra[".sqlFrom"] = "FROM tipodecompra";
$tdatatipodecompra[".sqlWhereExpr"] = "";
$tdatatipodecompra[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipodecompra[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipodecompra[".arrGroupsPerPage"] = $arrGPP;

$tdatatipodecompra[".highlightSearchResults"] = true;

$tableKeystipodecompra = array();
$tableKeystipodecompra[] = "ID";
$tdatatipodecompra[".Keys"] = $tableKeystipodecompra;

$tdatatipodecompra[".listFields"] = array();
$tdatatipodecompra[".listFields"][] = "ID";
$tdatatipodecompra[".listFields"][] = "fondoRotativo";
$tdatatipodecompra[".listFields"][] = "precompra";
$tdatatipodecompra[".listFields"][] = "gestionDeCompra";

$tdatatipodecompra[".hideMobileList"] = array();


$tdatatipodecompra[".viewFields"] = array();
$tdatatipodecompra[".viewFields"][] = "ID";
$tdatatipodecompra[".viewFields"][] = "fondoRotativo";
$tdatatipodecompra[".viewFields"][] = "precompra";
$tdatatipodecompra[".viewFields"][] = "gestionDeCompra";

$tdatatipodecompra[".addFields"] = array();
$tdatatipodecompra[".addFields"][] = "fondoRotativo";
$tdatatipodecompra[".addFields"][] = "precompra";
$tdatatipodecompra[".addFields"][] = "gestionDeCompra";

$tdatatipodecompra[".masterListFields"] = array();
$tdatatipodecompra[".masterListFields"][] = "ID";
$tdatatipodecompra[".masterListFields"][] = "fondoRotativo";
$tdatatipodecompra[".masterListFields"][] = "precompra";
$tdatatipodecompra[".masterListFields"][] = "gestionDeCompra";

$tdatatipodecompra[".inlineAddFields"] = array();
$tdatatipodecompra[".inlineAddFields"][] = "fondoRotativo";
$tdatatipodecompra[".inlineAddFields"][] = "precompra";
$tdatatipodecompra[".inlineAddFields"][] = "gestionDeCompra";

$tdatatipodecompra[".editFields"] = array();
$tdatatipodecompra[".editFields"][] = "fondoRotativo";
$tdatatipodecompra[".editFields"][] = "precompra";
$tdatatipodecompra[".editFields"][] = "gestionDeCompra";

$tdatatipodecompra[".inlineEditFields"] = array();
$tdatatipodecompra[".inlineEditFields"][] = "fondoRotativo";
$tdatatipodecompra[".inlineEditFields"][] = "precompra";
$tdatatipodecompra[".inlineEditFields"][] = "gestionDeCompra";

$tdatatipodecompra[".exportFields"] = array();
$tdatatipodecompra[".exportFields"][] = "ID";
$tdatatipodecompra[".exportFields"][] = "fondoRotativo";
$tdatatipodecompra[".exportFields"][] = "precompra";
$tdatatipodecompra[".exportFields"][] = "gestionDeCompra";

$tdatatipodecompra[".importFields"] = array();
$tdatatipodecompra[".importFields"][] = "ID";
$tdatatipodecompra[".importFields"][] = "fondoRotativo";
$tdatatipodecompra[".importFields"][] = "precompra";
$tdatatipodecompra[".importFields"][] = "gestionDeCompra";

$tdatatipodecompra[".printFields"] = array();
$tdatatipodecompra[".printFields"][] = "ID";
$tdatatipodecompra[".printFields"][] = "fondoRotativo";
$tdatatipodecompra[".printFields"][] = "precompra";
$tdatatipodecompra[".printFields"][] = "gestionDeCompra";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "tipodecompra";
	$fdata["Label"] = GetFieldLabel("tipodecompra","ID");
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




	$tdatatipodecompra["ID"] = $fdata;
//	fondoRotativo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "fondoRotativo";
	$fdata["GoodName"] = "fondoRotativo";
	$fdata["ownerTable"] = "tipodecompra";
	$fdata["Label"] = GetFieldLabel("tipodecompra","fondoRotativo");
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

		$fdata["strField"] = "fondoRotativo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fondoRotativo";

	
	
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




	$tdatatipodecompra["fondoRotativo"] = $fdata;
//	precompra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "precompra";
	$fdata["GoodName"] = "precompra";
	$fdata["ownerTable"] = "tipodecompra";
	$fdata["Label"] = GetFieldLabel("tipodecompra","precompra");
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

		$fdata["strField"] = "precompra";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "precompra";

	
	
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




	$tdatatipodecompra["precompra"] = $fdata;
//	gestionDeCompra
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "gestionDeCompra";
	$fdata["GoodName"] = "gestionDeCompra";
	$fdata["ownerTable"] = "tipodecompra";
	$fdata["Label"] = GetFieldLabel("tipodecompra","gestionDeCompra");
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

		$fdata["strField"] = "gestionDeCompra";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gestionDeCompra";

	
	
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




	$tdatatipodecompra["gestionDeCompra"] = $fdata;


$tables_data["tipodecompra"]=&$tdatatipodecompra;
$field_labels["tipodecompra"] = &$fieldLabelstipodecompra;
$fieldToolTips["tipodecompra"] = &$fieldToolTipstipodecompra;
$page_titles["tipodecompra"] = &$pageTitlestipodecompra;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipodecompra"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tipodecompra"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tipodecompra()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	fondoRotativo,  	precompra,  	gestionDeCompra";
$proto0["m_strFrom"] = "FROM tipodecompra";
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
	"m_strTable" => "tipodecompra",
	"m_srcTableName" => "tipodecompra"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "tipodecompra";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "fondoRotativo",
	"m_strTable" => "tipodecompra",
	"m_srcTableName" => "tipodecompra"
));

$proto8["m_sql"] = "fondoRotativo";
$proto8["m_srcTableName"] = "tipodecompra";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "precompra",
	"m_strTable" => "tipodecompra",
	"m_srcTableName" => "tipodecompra"
));

$proto10["m_sql"] = "precompra";
$proto10["m_srcTableName"] = "tipodecompra";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "gestionDeCompra",
	"m_strTable" => "tipodecompra",
	"m_srcTableName" => "tipodecompra"
));

$proto12["m_sql"] = "gestionDeCompra";
$proto12["m_srcTableName"] = "tipodecompra";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "tipodecompra";
$proto15["m_srcTableName"] = "tipodecompra";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "ID";
$proto15["m_columns"][] = "fondoRotativo";
$proto15["m_columns"][] = "precompra";
$proto15["m_columns"][] = "gestionDeCompra";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "tipodecompra";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "tipodecompra";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tipodecompra";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipodecompra = createSqlQuery_tipodecompra();


	
		;

				

$tdatatipodecompra[".sqlquery"] = $queryData_tipodecompra;

$tableEvents["tipodecompra"] = new eventsBase;
$tdatatipodecompra[".hasEvents"] = false;

?>