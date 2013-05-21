<?php
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";

	require $KoolControlsFolder."/KoolGrid/koolgrid.php";

	if(isset($_POST["language_select"]))
	{
		$_SESSION["language_select"] = $_POST["language_select"];
	}
	else
	{
		if (!$koolajax->isCallback)
		{
			//Page Init: show default style
			$_SESSION["language_select"] = "en";
		}
	}
		
	$ds = new MySQLDataSource($db_con);//This $db_con link has been created inside KoolPHPSuite/Resources/runexample.php
	$ds->SelectCommand = "select customerNumber,customerName,phone,city from customers";
	$ds->DeleteCommand = "delete from customers where customerNumber=@customerNumber";

	$grid = new KoolGrid("grid");
	$grid->scriptFolder = $KoolControlsFolder."/KoolGrid";
	$grid->styleFolder="default";
	$grid->DataSource = $ds;
	$grid->AjaxEnabled = true;
	$grid->AllowDeleting = true;
	$grid->AllowFiltering = true;
	$grid->AutoGenerateColumns = true;
	$grid->AutoGenerateDeleteColumn = true;	
	$grid->MasterTable->Pager = new GridPrevNextPager();
	$grid->Width = "655px";
	
	$grid->Localization->Load($KoolControlsFolder."/KoolGrid/localization/".$_SESSION["language_select"].".xml");
	$grid->Process();
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	Select language:
	<select id="language_select" name="language_select" onchange="submit();">
		<option value="en"		<?php if ($_SESSION["language_select"]=="en") echo "selected" ?> >English</option>
		<option value="es"		<?php if ($_SESSION["language_select"]=="es") echo "selected" ?> >Espanol</option>		
		<option value="it"		<?php if ($_SESSION["language_select"]=="it") echo "selected" ?> >Italian</option>		
		<option value="vn"		<?php if ($_SESSION["language_select"]=="vn") echo "selected" ?> >Vietnamese</option>		
	</select>
	
	<div style="padding-top:10px;">
		<?php echo $grid->Render();?>
	</div>
</form>
