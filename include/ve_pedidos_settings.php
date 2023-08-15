<?php
$tdatave_pedidos = array();
$tdatave_pedidos[".searchableFields"] = array();
$tdatave_pedidos[".ShortName"] = "ve_pedidos";
$tdatave_pedidos[".OwnerID"] = "";
$tdatave_pedidos[".OriginalTable"] = "dbo.VE_PEDIDOS";


$tdatave_pedidos[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatave_pedidos[".originalPagesByType"] = $tdatave_pedidos[".pagesByType"];
$tdatave_pedidos[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatave_pedidos[".originalPages"] = $tdatave_pedidos[".pages"];
$tdatave_pedidos[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatave_pedidos[".originalDefaultPages"] = $tdatave_pedidos[".defaultPages"];

//	field labels
$fieldLabelsve_pedidos = array();
$fieldToolTipsve_pedidos = array();
$pageTitlesve_pedidos = array();
$placeHoldersve_pedidos = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsve_pedidos["English"] = array();
	$fieldToolTipsve_pedidos["English"] = array();
	$placeHoldersve_pedidos["English"] = array();
	$pageTitlesve_pedidos["English"] = array();
	$fieldLabelsve_pedidos["English"]["consecutivo"] = "Consecutivo";
	$fieldToolTipsve_pedidos["English"]["consecutivo"] = "";
	$placeHoldersve_pedidos["English"]["consecutivo"] = "";
	$fieldLabelsve_pedidos["English"]["id_producto"] = "Id Producto";
	$fieldToolTipsve_pedidos["English"]["id_producto"] = "";
	$placeHoldersve_pedidos["English"]["id_producto"] = "";
	$fieldLabelsve_pedidos["English"]["Descripcion"] = "Descripcion";
	$fieldToolTipsve_pedidos["English"]["Descripcion"] = "";
	$placeHoldersve_pedidos["English"]["Descripcion"] = "";
	$fieldLabelsve_pedidos["English"]["Cantidad"] = "Cantidad";
	$fieldToolTipsve_pedidos["English"]["Cantidad"] = "";
	$placeHoldersve_pedidos["English"]["Cantidad"] = "";
	$fieldLabelsve_pedidos["English"]["Precio"] = "Precio";
	$fieldToolTipsve_pedidos["English"]["Precio"] = "";
	$placeHoldersve_pedidos["English"]["Precio"] = "";
	$fieldLabelsve_pedidos["English"]["Total"] = "Total";
	$fieldToolTipsve_pedidos["English"]["Total"] = "";
	$placeHoldersve_pedidos["English"]["Total"] = "";
	$fieldLabelsve_pedidos["English"]["estado"] = "Estado";
	$fieldToolTipsve_pedidos["English"]["estado"] = "";
	$placeHoldersve_pedidos["English"]["estado"] = "";
	if (count($fieldToolTipsve_pedidos["English"]))
		$tdatave_pedidos[".isUseToolTips"] = true;
}


	$tdatave_pedidos[".NCSearch"] = true;



$tdatave_pedidos[".shortTableName"] = "ve_pedidos";
$tdatave_pedidos[".nSecOptions"] = 0;

$tdatave_pedidos[".mainTableOwnerID"] = "";
$tdatave_pedidos[".entityType"] = 0;
$tdatave_pedidos[".connId"] = "TallerPedidosatTHINKPADIDBDXSQ";


$tdatave_pedidos[".strOriginalTableName"] = "dbo.VE_PEDIDOS";

	



$tdatave_pedidos[".showAddInPopup"] = false;

$tdatave_pedidos[".showEditInPopup"] = false;

$tdatave_pedidos[".showViewInPopup"] = false;

$tdatave_pedidos[".listAjax"] = false;
//	temporary
//$tdatave_pedidos[".listAjax"] = false;

	$tdatave_pedidos[".audit"] = false;

	$tdatave_pedidos[".locking"] = false;


$pages = $tdatave_pedidos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatave_pedidos[".edit"] = true;
	$tdatave_pedidos[".afterEditAction"] = 1;
	$tdatave_pedidos[".closePopupAfterEdit"] = 1;
	$tdatave_pedidos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatave_pedidos[".add"] = true;
$tdatave_pedidos[".afterAddAction"] = 1;
$tdatave_pedidos[".closePopupAfterAdd"] = 1;
$tdatave_pedidos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatave_pedidos[".list"] = true;
}



$tdatave_pedidos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatave_pedidos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatave_pedidos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatave_pedidos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatave_pedidos[".printFriendly"] = true;
}



$tdatave_pedidos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatave_pedidos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatave_pedidos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatave_pedidos[".isUseAjaxSuggest"] = true;



																					

$tdatave_pedidos[".ajaxCodeSnippetAdded"] = false;

$tdatave_pedidos[".buttonsAdded"] = false;

$tdatave_pedidos[".addPageEvents"] = false;

// use timepicker for search panel
$tdatave_pedidos[".isUseTimeForSearch"] = false;


$tdatave_pedidos[".badgeColor"] = "778899";


$tdatave_pedidos[".allSearchFields"] = array();
$tdatave_pedidos[".filterFields"] = array();
$tdatave_pedidos[".requiredSearchFields"] = array();

$tdatave_pedidos[".googleLikeFields"] = array();
$tdatave_pedidos[".googleLikeFields"][] = "consecutivo";
$tdatave_pedidos[".googleLikeFields"][] = "id_producto";
$tdatave_pedidos[".googleLikeFields"][] = "Descripcion";
$tdatave_pedidos[".googleLikeFields"][] = "Cantidad";
$tdatave_pedidos[".googleLikeFields"][] = "Precio";
$tdatave_pedidos[".googleLikeFields"][] = "Total";
$tdatave_pedidos[".googleLikeFields"][] = "estado";



$tdatave_pedidos[".tableType"] = "list";

$tdatave_pedidos[".printerPageOrientation"] = 0;
$tdatave_pedidos[".nPrinterPageScale"] = 100;

$tdatave_pedidos[".nPrinterSplitRecords"] = 40;

$tdatave_pedidos[".geocodingEnabled"] = false;










$tdatave_pedidos[".pageSize"] = 20;

$tdatave_pedidos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatave_pedidos[".strOrderBy"] = $tstrOrderBy;

$tdatave_pedidos[".orderindexes"] = array();


$tdatave_pedidos[".sqlHead"] = "SELECT consecutivo,  	id_producto,  	Descripcion,  	Cantidad,  	Precio,  	Total,  	estado";
$tdatave_pedidos[".sqlFrom"] = "FROM dbo.VE_PEDIDOS";
$tdatave_pedidos[".sqlWhereExpr"] = "estado = 'Activo'";
$tdatave_pedidos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatave_pedidos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatave_pedidos[".arrGroupsPerPage"] = $arrGPP;

$tdatave_pedidos[".highlightSearchResults"] = true;

$tableKeysve_pedidos = array();
$tdatave_pedidos[".Keys"] = $tableKeysve_pedidos;


$tdatave_pedidos[".hideMobileList"] = array();




//	consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "consecutivo";
	$fdata["GoodName"] = "consecutivo";
	$fdata["ownerTable"] = "dbo.VE_PEDIDOS";
	$fdata["Label"] = GetFieldLabel("dbo_VE_PEDIDOS","consecutivo");
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


	$tdatave_pedidos["consecutivo"] = $fdata;
		$tdatave_pedidos[".searchableFields"][] = "consecutivo";
//	id_producto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_producto";
	$fdata["GoodName"] = "id_producto";
	$fdata["ownerTable"] = "dbo.VE_PEDIDOS";
	$fdata["Label"] = GetFieldLabel("dbo_VE_PEDIDOS","id_producto");
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


	$tdatave_pedidos["id_producto"] = $fdata;
		$tdatave_pedidos[".searchableFields"][] = "id_producto";
//	Descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Descripcion";
	$fdata["GoodName"] = "Descripcion";
	$fdata["ownerTable"] = "dbo.VE_PEDIDOS";
	$fdata["Label"] = GetFieldLabel("dbo_VE_PEDIDOS","Descripcion");
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


	$tdatave_pedidos["Descripcion"] = $fdata;
		$tdatave_pedidos[".searchableFields"][] = "Descripcion";
//	Cantidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Cantidad";
	$fdata["GoodName"] = "Cantidad";
	$fdata["ownerTable"] = "dbo.VE_PEDIDOS";
	$fdata["Label"] = GetFieldLabel("dbo_VE_PEDIDOS","Cantidad");
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


	$tdatave_pedidos["Cantidad"] = $fdata;
		$tdatave_pedidos[".searchableFields"][] = "Cantidad";
//	Precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Precio";
	$fdata["GoodName"] = "Precio";
	$fdata["ownerTable"] = "dbo.VE_PEDIDOS";
	$fdata["Label"] = GetFieldLabel("dbo_VE_PEDIDOS","Precio");
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


	$tdatave_pedidos["Precio"] = $fdata;
		$tdatave_pedidos[".searchableFields"][] = "Precio";
//	Total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Total";
	$fdata["GoodName"] = "Total";
	$fdata["ownerTable"] = "dbo.VE_PEDIDOS";
	$fdata["Label"] = GetFieldLabel("dbo_VE_PEDIDOS","Total");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Total";

		$fdata["sourceSingle"] = "Total";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Total";

	
	
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


	$tdatave_pedidos["Total"] = $fdata;
		$tdatave_pedidos[".searchableFields"][] = "Total";
//	estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "estado";
	$fdata["GoodName"] = "estado";
	$fdata["ownerTable"] = "dbo.VE_PEDIDOS";
	$fdata["Label"] = GetFieldLabel("dbo_VE_PEDIDOS","estado");
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


	$tdatave_pedidos["estado"] = $fdata;
		$tdatave_pedidos[".searchableFields"][] = "estado";


$tables_data["dbo.VE_PEDIDOS"]=&$tdatave_pedidos;
$field_labels["dbo_VE_PEDIDOS"] = &$fieldLabelsve_pedidos;
$fieldToolTips["dbo_VE_PEDIDOS"] = &$fieldToolTipsve_pedidos;
$placeHolders["dbo_VE_PEDIDOS"] = &$placeHoldersve_pedidos;
$page_titles["dbo_VE_PEDIDOS"] = &$pageTitlesve_pedidos;


changeTextControlsToDate( "dbo.VE_PEDIDOS" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["dbo.VE_PEDIDOS"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["dbo.VE_PEDIDOS"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ve_pedidos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "consecutivo,  	id_producto,  	Descripcion,  	Cantidad,  	Precio,  	Total,  	estado";
$proto0["m_strFrom"] = "FROM dbo.VE_PEDIDOS";
$proto0["m_strWhere"] = "estado = 'Activo'";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "estado = 'Activo'";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "dbo.VE_PEDIDOS",
	"m_srcTableName" => "dbo.VE_PEDIDOS"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 'Activo'";
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
	"m_strName" => "consecutivo",
	"m_strTable" => "dbo.VE_PEDIDOS",
	"m_srcTableName" => "dbo.VE_PEDIDOS"
));

$proto6["m_sql"] = "consecutivo";
$proto6["m_srcTableName"] = "dbo.VE_PEDIDOS";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_producto",
	"m_strTable" => "dbo.VE_PEDIDOS",
	"m_srcTableName" => "dbo.VE_PEDIDOS"
));

$proto8["m_sql"] = "id_producto";
$proto8["m_srcTableName"] = "dbo.VE_PEDIDOS";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Descripcion",
	"m_strTable" => "dbo.VE_PEDIDOS",
	"m_srcTableName" => "dbo.VE_PEDIDOS"
));

$proto10["m_sql"] = "Descripcion";
$proto10["m_srcTableName"] = "dbo.VE_PEDIDOS";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Cantidad",
	"m_strTable" => "dbo.VE_PEDIDOS",
	"m_srcTableName" => "dbo.VE_PEDIDOS"
));

$proto12["m_sql"] = "Cantidad";
$proto12["m_srcTableName"] = "dbo.VE_PEDIDOS";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Precio",
	"m_strTable" => "dbo.VE_PEDIDOS",
	"m_srcTableName" => "dbo.VE_PEDIDOS"
));

$proto14["m_sql"] = "Precio";
$proto14["m_srcTableName"] = "dbo.VE_PEDIDOS";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Total",
	"m_strTable" => "dbo.VE_PEDIDOS",
	"m_srcTableName" => "dbo.VE_PEDIDOS"
));

$proto16["m_sql"] = "Total";
$proto16["m_srcTableName"] = "dbo.VE_PEDIDOS";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "estado",
	"m_strTable" => "dbo.VE_PEDIDOS",
	"m_srcTableName" => "dbo.VE_PEDIDOS"
));

$proto18["m_sql"] = "estado";
$proto18["m_srcTableName"] = "dbo.VE_PEDIDOS";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "dbo.VE_PEDIDOS";
$proto21["m_srcTableName"] = "dbo.VE_PEDIDOS";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "consecutivo";
$proto21["m_columns"][] = "id_producto";
$proto21["m_columns"][] = "Descripcion";
$proto21["m_columns"][] = "Cantidad";
$proto21["m_columns"][] = "Precio";
$proto21["m_columns"][] = "Total";
$proto21["m_columns"][] = "estado";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "dbo.VE_PEDIDOS";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "dbo.VE_PEDIDOS";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="dbo.VE_PEDIDOS";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ve_pedidos = createSqlQuery_ve_pedidos();


	
		;

							

$tdatave_pedidos[".sqlquery"] = $queryData_ve_pedidos;



$tdatave_pedidos[".hasEvents"] = false;

?>