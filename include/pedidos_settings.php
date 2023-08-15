<?php
$tdatapedidos = array();
$tdatapedidos[".searchableFields"] = array();
$tdatapedidos[".ShortName"] = "pedidos";
$tdatapedidos[".OwnerID"] = "";
$tdatapedidos[".OriginalTable"] = "dbo.pedidos";


$tdatapedidos[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatapedidos[".originalPagesByType"] = $tdatapedidos[".pagesByType"];
$tdatapedidos[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatapedidos[".originalPages"] = $tdatapedidos[".pages"];
$tdatapedidos[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatapedidos[".originalDefaultPages"] = $tdatapedidos[".defaultPages"];

//	field labels
$fieldLabelspedidos = array();
$fieldToolTipspedidos = array();
$pageTitlespedidos = array();
$placeHolderspedidos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspedidos["English"] = array();
	$fieldToolTipspedidos["English"] = array();
	$placeHolderspedidos["English"] = array();
	$pageTitlespedidos["English"] = array();
	$fieldLabelspedidos["English"]["id"] = "Id";
	$fieldToolTipspedidos["English"]["id"] = "";
	$placeHolderspedidos["English"]["id"] = "";
	$fieldLabelspedidos["English"]["consecutivo"] = "Consecutivo";
	$fieldToolTipspedidos["English"]["consecutivo"] = "";
	$placeHolderspedidos["English"]["consecutivo"] = "";
	$fieldLabelspedidos["English"]["id_producto"] = "Id Producto";
	$fieldToolTipspedidos["English"]["id_producto"] = "";
	$placeHolderspedidos["English"]["id_producto"] = "";
	$fieldLabelspedidos["English"]["Cantidad"] = "Cantidad";
	$fieldToolTipspedidos["English"]["Cantidad"] = "";
	$placeHolderspedidos["English"]["Cantidad"] = "";
	$fieldLabelspedidos["English"]["Precio"] = "Precio";
	$fieldToolTipspedidos["English"]["Precio"] = "";
	$placeHolderspedidos["English"]["Precio"] = "";
	$fieldLabelspedidos["English"]["estado"] = "Estado";
	$fieldToolTipspedidos["English"]["estado"] = "";
	$placeHolderspedidos["English"]["estado"] = "";
	if (count($fieldToolTipspedidos["English"]))
		$tdatapedidos[".isUseToolTips"] = true;
}


	$tdatapedidos[".NCSearch"] = true;



$tdatapedidos[".shortTableName"] = "pedidos";
$tdatapedidos[".nSecOptions"] = 0;

$tdatapedidos[".mainTableOwnerID"] = "";
$tdatapedidos[".entityType"] = 0;
$tdatapedidos[".connId"] = "TallerPedidosatTHINKPADIDBDXSQ";


$tdatapedidos[".strOriginalTableName"] = "dbo.pedidos";

	



$tdatapedidos[".showAddInPopup"] = false;

$tdatapedidos[".showEditInPopup"] = false;

$tdatapedidos[".showViewInPopup"] = false;

$tdatapedidos[".listAjax"] = false;
//	temporary
//$tdatapedidos[".listAjax"] = false;

	$tdatapedidos[".audit"] = false;

	$tdatapedidos[".locking"] = false;


$pages = $tdatapedidos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapedidos[".edit"] = true;
	$tdatapedidos[".afterEditAction"] = 0;
	$tdatapedidos[".closePopupAfterEdit"] = 1;
	$tdatapedidos[".afterEditActionDetTable"] = "Detail tables not found!";
}

if( $pages[PAGE_ADD] ) {
$tdatapedidos[".add"] = true;
$tdatapedidos[".afterAddAction"] = 1;
$tdatapedidos[".closePopupAfterAdd"] = 1;
$tdatapedidos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapedidos[".list"] = true;
}



$tdatapedidos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapedidos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapedidos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapedidos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapedidos[".printFriendly"] = true;
}



$tdatapedidos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapedidos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapedidos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapedidos[".isUseAjaxSuggest"] = true;



																																										

$tdatapedidos[".ajaxCodeSnippetAdded"] = false;

$tdatapedidos[".buttonsAdded"] = false;

$tdatapedidos[".addPageEvents"] = true;

// use timepicker for search panel
$tdatapedidos[".isUseTimeForSearch"] = false;


$tdatapedidos[".badgeColor"] = "6b8e23";


$tdatapedidos[".allSearchFields"] = array();
$tdatapedidos[".filterFields"] = array();
$tdatapedidos[".requiredSearchFields"] = array();

$tdatapedidos[".googleLikeFields"] = array();
$tdatapedidos[".googleLikeFields"][] = "id";
$tdatapedidos[".googleLikeFields"][] = "consecutivo";
$tdatapedidos[".googleLikeFields"][] = "id_producto";
$tdatapedidos[".googleLikeFields"][] = "Cantidad";
$tdatapedidos[".googleLikeFields"][] = "Precio";
$tdatapedidos[".googleLikeFields"][] = "estado";



$tdatapedidos[".tableType"] = "list";

$tdatapedidos[".printerPageOrientation"] = 0;
$tdatapedidos[".nPrinterPageScale"] = 100;

$tdatapedidos[".nPrinterSplitRecords"] = 40;

$tdatapedidos[".geocodingEnabled"] = false;










$tdatapedidos[".pageSize"] = 20;

$tdatapedidos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapedidos[".strOrderBy"] = $tstrOrderBy;

$tdatapedidos[".orderindexes"] = array();


$tdatapedidos[".sqlHead"] = "SELECT id,  	consecutivo,  	id_producto,  	Cantidad,  	Precio,  	estado";
$tdatapedidos[".sqlFrom"] = "FROM dbo.pedidos";
$tdatapedidos[".sqlWhereExpr"] = "";
$tdatapedidos[".sqlTail"] = "";

//fill array of tabs for list page
$arrGridTabs = array();
$arrGridTabs[] = array(
	'tabId' => "",
	'name' => "All data",
	'nameType' => 'Text',
	'where' => "",
	'showRowCount' => 0,
	'hideEmpty' => 0,
);
$tdatapedidos[".arrGridTabs"] = $arrGridTabs;









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapedidos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapedidos[".arrGroupsPerPage"] = $arrGPP;

$tdatapedidos[".highlightSearchResults"] = true;

$tableKeyspedidos = array();
$tableKeyspedidos[] = "id";
$tdatapedidos[".Keys"] = $tableKeyspedidos;


$tdatapedidos[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "dbo.pedidos";
	$fdata["Label"] = GetFieldLabel("dbo_pedidos","id");
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


	$tdatapedidos["id"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "id";
//	consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "consecutivo";
	$fdata["GoodName"] = "consecutivo";
	$fdata["ownerTable"] = "dbo.pedidos";
	$fdata["Label"] = GetFieldLabel("dbo_pedidos","consecutivo");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "consecutivo";

		$fdata["sourceSingle"] = "consecutivo";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "consecutivo";

	
	
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


	$tdatapedidos["consecutivo"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "consecutivo";
//	id_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id_producto";
	$fdata["GoodName"] = "id_producto";
	$fdata["ownerTable"] = "dbo.pedidos";
	$fdata["Label"] = GetFieldLabel("dbo_pedidos","id_producto");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "id_producto";

		$fdata["sourceSingle"] = "id_producto";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_producto";

	
	
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


	$tdatapedidos["id_producto"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "id_producto";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "dbo.pedidos";
	$fdata["Label"] = GetFieldLabel("dbo_pedidos","Cantidad");
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


	$tdatapedidos["Cantidad"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Cantidad";
//	Precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Precio";
	$fdata["GoodName"] = "Precio";
	$fdata["ownerTable"] = "dbo.pedidos";
	$fdata["Label"] = GetFieldLabel("dbo_pedidos","Precio");
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


	$tdatapedidos["Precio"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "Precio";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "dbo.pedidos";
	$fdata["Label"] = GetFieldLabel("dbo_pedidos","estado");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado";

		$fdata["sourceSingle"] = "estado";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatapedidos["estado"] = $fdata;
		$tdatapedidos[".searchableFields"][] = "estado";


$tables_data["dbo.pedidos"]=&$tdatapedidos;
$field_labels["dbo_pedidos"] = &$fieldLabelspedidos;
$fieldToolTips["dbo_pedidos"] = &$fieldToolTipspedidos;
$placeHolders["dbo_pedidos"] = &$placeHolderspedidos;
$page_titles["dbo_pedidos"] = &$pageTitlespedidos;


changeTextControlsToDate( "dbo.pedidos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.pedidos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.pedidos"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="dbo.Productos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="dbo.Productos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "productos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["dbo.pedidos"][0] = $masterParams;
				$masterTablesData["dbo.pedidos"][0]["masterKeys"] = array();
	$masterTablesData["dbo.pedidos"][0]["masterKeys"][]="id";
				$masterTablesData["dbo.pedidos"][0]["detailKeys"] = array();
	$masterTablesData["dbo.pedidos"][0]["detailKeys"][]="id_producto";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pedidos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	consecutivo,  	id_producto,  	Cantidad,  	Precio,  	estado";
$proto0["m_strFrom"] = "FROM dbo.pedidos";
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
	"m_strTable" => "dbo.pedidos",
	"m_srcTableName" => "dbo.pedidos"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "dbo.pedidos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "consecutivo",
	"m_strTable" => "dbo.pedidos",
	"m_srcTableName" => "dbo.pedidos"
));

$proto8["m_sql"] = "consecutivo";
$proto8["m_srcTableName"] = "dbo.pedidos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id_producto",
	"m_strTable" => "dbo.pedidos",
	"m_srcTableName" => "dbo.pedidos"
));

$proto10["m_sql"] = "id_producto";
$proto10["m_srcTableName"] = "dbo.pedidos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "dbo.pedidos",
	"m_srcTableName" => "dbo.pedidos"
));

$proto12["m_sql"] = "Cantidad";
$proto12["m_srcTableName"] = "dbo.pedidos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Precio",
	"m_strTable" => "dbo.pedidos",
	"m_srcTableName" => "dbo.pedidos"
));

$proto14["m_sql"] = "Precio";
$proto14["m_srcTableName"] = "dbo.pedidos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "dbo.pedidos",
	"m_srcTableName" => "dbo.pedidos"
));

$proto16["m_sql"] = "estado";
$proto16["m_srcTableName"] = "dbo.pedidos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "dbo.pedidos";
$proto19["m_srcTableName"] = "dbo.pedidos";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "consecutivo";
$proto19["m_columns"][] = "id_producto";
$proto19["m_columns"][] = "Cantidad";
$proto19["m_columns"][] = "Precio";
$proto19["m_columns"][] = "estado";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "dbo.pedidos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "dbo.pedidos";
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
$proto0["m_srcTableName"]="dbo.pedidos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pedidos = createSqlQuery_pedidos();


	
		;

						

$tdatapedidos[".sqlquery"] = $queryData_pedidos;



include_once(getabspath("include/pedidos_events.php"));
$tdatapedidos[".hasEvents"] = true;

?>