<?php
$tdataproductos = array();
$tdataproductos[".searchableFields"] = array();
$tdataproductos[".ShortName"] = "productos";
$tdataproductos[".OwnerID"] = "";
$tdataproductos[".OriginalTable"] = "dbo.Productos";


$tdataproductos[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataproductos[".originalPagesByType"] = $tdataproductos[".pagesByType"];
$tdataproductos[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataproductos[".originalPages"] = $tdataproductos[".pages"];
$tdataproductos[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataproductos[".originalDefaultPages"] = $tdataproductos[".defaultPages"];

//	field labels
$fieldLabelsproductos = array();
$fieldToolTipsproductos = array();
$pageTitlesproductos = array();
$placeHoldersproductos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsproductos["English"] = array();
	$fieldToolTipsproductos["English"] = array();
	$placeHoldersproductos["English"] = array();
	$pageTitlesproductos["English"] = array();
	$fieldLabelsproductos["English"]["id"] = "Id";
	$fieldToolTipsproductos["English"]["id"] = "";
	$placeHoldersproductos["English"]["id"] = "";
	$fieldLabelsproductos["English"]["Nombre"] = "Nombre";
	$fieldToolTipsproductos["English"]["Nombre"] = "";
	$placeHoldersproductos["English"]["Nombre"] = "";
	$fieldLabelsproductos["English"]["Descripcion"] = "Descripcion";
	$fieldToolTipsproductos["English"]["Descripcion"] = "";
	$placeHoldersproductos["English"]["Descripcion"] = "";
	$fieldLabelsproductos["English"]["Precio"] = "Precio";
	$fieldToolTipsproductos["English"]["Precio"] = "";
	$placeHoldersproductos["English"]["Precio"] = "";
	$fieldLabelsproductos["English"]["rgsmrc"] = "Rgsmrc";
	$fieldToolTipsproductos["English"]["rgsmrc"] = "";
	$placeHoldersproductos["English"]["rgsmrc"] = "";
	$fieldLabelsproductos["English"]["Cantidad"] = "Cantidad";
	$fieldToolTipsproductos["English"]["Cantidad"] = "";
	$placeHoldersproductos["English"]["Cantidad"] = "";
	if (count($fieldToolTipsproductos["English"]))
		$tdataproductos[".isUseToolTips"] = true;
}


	$tdataproductos[".NCSearch"] = true;



$tdataproductos[".shortTableName"] = "productos";
$tdataproductos[".nSecOptions"] = 0;

$tdataproductos[".mainTableOwnerID"] = "";
$tdataproductos[".entityType"] = 0;
$tdataproductos[".connId"] = "TallerPedidosatTHINKPADIDBDXSQ";


$tdataproductos[".strOriginalTableName"] = "dbo.Productos";

	



$tdataproductos[".showAddInPopup"] = false;

$tdataproductos[".showEditInPopup"] = false;

$tdataproductos[".showViewInPopup"] = false;

$tdataproductos[".listAjax"] = false;
//	temporary
//$tdataproductos[".listAjax"] = false;

	$tdataproductos[".audit"] = false;

	$tdataproductos[".locking"] = false;


$pages = $tdataproductos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataproductos[".edit"] = true;
	$tdataproductos[".afterEditAction"] = 1;
	$tdataproductos[".closePopupAfterEdit"] = 1;
	$tdataproductos[".afterEditActionDetTable"] = "dbo.pedidos";
}

if( $pages[PAGE_ADD] ) {
$tdataproductos[".add"] = true;
$tdataproductos[".afterAddAction"] = 1;
$tdataproductos[".closePopupAfterAdd"] = 1;
$tdataproductos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataproductos[".list"] = true;
}



$tdataproductos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataproductos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataproductos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataproductos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataproductos[".printFriendly"] = true;
}



$tdataproductos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataproductos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataproductos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataproductos[".isUseAjaxSuggest"] = true;



																					

$tdataproductos[".ajaxCodeSnippetAdded"] = false;

$tdataproductos[".buttonsAdded"] = false;

$tdataproductos[".addPageEvents"] = true;

// use timepicker for search panel
$tdataproductos[".isUseTimeForSearch"] = false;


$tdataproductos[".badgeColor"] = "6B8E23";


$tdataproductos[".allSearchFields"] = array();
$tdataproductos[".filterFields"] = array();
$tdataproductos[".requiredSearchFields"] = array();

$tdataproductos[".googleLikeFields"] = array();
$tdataproductos[".googleLikeFields"][] = "id";
$tdataproductos[".googleLikeFields"][] = "Nombre";
$tdataproductos[".googleLikeFields"][] = "Descripcion";
$tdataproductos[".googleLikeFields"][] = "Precio";
$tdataproductos[".googleLikeFields"][] = "rgsmrc";
$tdataproductos[".googleLikeFields"][] = "Cantidad";



$tdataproductos[".tableType"] = "list";

$tdataproductos[".printerPageOrientation"] = 0;
$tdataproductos[".nPrinterPageScale"] = 100;

$tdataproductos[".nPrinterSplitRecords"] = 40;

$tdataproductos[".geocodingEnabled"] = false;










$tdataproductos[".pageSize"] = 20;

$tdataproductos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataproductos[".strOrderBy"] = $tstrOrderBy;

$tdataproductos[".orderindexes"] = array();


$tdataproductos[".sqlHead"] = "SELECT id,  	Nombre,  	Descripcion,  	Precio,  	rgsmrc,  	Cantidad";
$tdataproductos[".sqlFrom"] = "FROM dbo.Productos";
$tdataproductos[".sqlWhereExpr"] = "";
$tdataproductos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproductos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproductos[".arrGroupsPerPage"] = $arrGPP;

$tdataproductos[".highlightSearchResults"] = true;

$tableKeysproductos = array();
$tableKeysproductos[] = "id";
$tdataproductos[".Keys"] = $tableKeysproductos;


$tdataproductos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.Productos";
	$fdata["Label"] = GetFieldLabel("dbo_Productos","id");
	$fdata["FieldType"] = 2;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproductos["id"] = $fdata;
		$tdataproductos[".searchableFields"][] = "id";
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "dbo.Productos";
	$fdata["Label"] = GetFieldLabel("dbo_Productos","Nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Nombre";

		$fdata["sourceSingle"] = "Nombre";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproductos["Nombre"] = $fdata;
		$tdataproductos[".searchableFields"][] = "Nombre";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "dbo.Productos";
	$fdata["Label"] = GetFieldLabel("dbo_Productos","Descripcion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Descripcion";

		$fdata["sourceSingle"] = "Descripcion";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Descripcion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproductos["Descripcion"] = $fdata;
		$tdataproductos[".searchableFields"][] = "Descripcion";
//	Precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Precio";
	$fdata["GoodName"] = "Precio";
	$fdata["ownerTable"] = "dbo.Productos";
	$fdata["Label"] = GetFieldLabel("dbo_Productos","Precio");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Precio";

		$fdata["sourceSingle"] = "Precio";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Precio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

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


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproductos["Precio"] = $fdata;
		$tdataproductos[".searchableFields"][] = "Precio";
//	rgsmrc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rgsmrc";
	$fdata["GoodName"] = "rgsmrc";
	$fdata["ownerTable"] = "dbo.Productos";
	$fdata["Label"] = GetFieldLabel("dbo_Productos","rgsmrc");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "rgsmrc";

		$fdata["sourceSingle"] = "rgsmrc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rgsmrc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproductos["rgsmrc"] = $fdata;
		$tdataproductos[".searchableFields"][] = "rgsmrc";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "dbo.Productos";
	$fdata["Label"] = GetFieldLabel("dbo_Productos","Cantidad");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "Cantidad";

		$fdata["sourceSingle"] = "Cantidad";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cantidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataproductos["Cantidad"] = $fdata;
		$tdataproductos[".searchableFields"][] = "Cantidad";


$tables_data["dbo.Productos"]=&$tdataproductos;
$field_labels["dbo_Productos"] = &$fieldLabelsproductos;
$fieldToolTips["dbo_Productos"] = &$fieldToolTipsproductos;
$placeHolders["dbo_Productos"] = &$placeHoldersproductos;
$page_titles["dbo_Productos"] = &$pageTitlesproductos;


changeTextControlsToDate( "dbo.Productos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.Productos"] = array();
//	dbo.pedidos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="dbo.pedidos";
		$detailsParam["dOriginalTable"] = "dbo.pedidos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "pedidos";
	$detailsParam["dCaptionTable"] = GetTableCaption("dbo_pedidos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["dbo.Productos"][$dIndex] = $detailsParam;

	
		$detailsTablesData["dbo.Productos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["dbo.Productos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["dbo.Productos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["dbo.Productos"][$dIndex]["detailKeys"][]="id_producto";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.Productos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_productos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	Nombre,  	Descripcion,  	Precio,  	rgsmrc,  	Cantidad";
$proto0["m_strFrom"] = "FROM dbo.Productos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
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
	"m_strName" => "id",
	"m_strTable" => "dbo.Productos",
	"m_srcTableName" => "dbo.Productos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.Productos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "dbo.Productos",
	"m_srcTableName" => "dbo.Productos"
));

$proto8["m_sql"] = "Nombre";
$proto8["m_srcTableName"] = "dbo.Productos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "dbo.Productos",
	"m_srcTableName" => "dbo.Productos"
));

$proto10["m_sql"] = "Descripcion";
$proto10["m_srcTableName"] = "dbo.Productos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Precio",
	"m_strTable" => "dbo.Productos",
	"m_srcTableName" => "dbo.Productos"
));

$proto12["m_sql"] = "Precio";
$proto12["m_srcTableName"] = "dbo.Productos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rgsmrc",
	"m_strTable" => "dbo.Productos",
	"m_srcTableName" => "dbo.Productos"
));

$proto14["m_sql"] = "rgsmrc";
$proto14["m_srcTableName"] = "dbo.Productos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "dbo.Productos",
	"m_srcTableName" => "dbo.Productos"
));

$proto16["m_sql"] = "Cantidad";
$proto16["m_srcTableName"] = "dbo.Productos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.Productos";
$proto19["m_srcTableName"] = "dbo.Productos";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "Nombre";
$proto19["m_columns"][] = "Descripcion";
$proto19["m_columns"][] = "Precio";
$proto19["m_columns"][] = "rgsmrc";
$proto19["m_columns"][] = "Cantidad";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.Productos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dbo.Productos";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.Productos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_productos = createSqlQuery_productos();


	
		;

						

$tdataproductos[".sqlquery"] = $queryData_productos;



include_once(getabspath("include/productos_events.php"));
$tdataproductos[".hasEvents"] = true;

?>