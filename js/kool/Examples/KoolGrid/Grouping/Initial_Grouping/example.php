<?php
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";

	require $KoolControlsFolder."/KoolGrid/koolgrid.php";
	$ds = new MySQLDataSource($db_con);//This $db_con link has been created inside KoolPHPSuite/Resources/runexample.php
	$ds->SelectCommand = "select CONCAT(employees.firstName,' ',employees.lastName) as employee_name,addressLine1,CONCAT(reportsTo_employees.firstName,' ',reportsTo_employees.lastName) as supervisor_name,employees.jobTitle from employees,offices,employees as reportsTo_employees where reportsTo_employees.employeeNumber=employees.reportsTo and employees.officeCode=offices.officeCode";
	
	$grid = new KoolGrid("grid");
	$grid->scriptFolder = $KoolControlsFolder."/KoolGrid";
	$grid->styleFolder="default";
	$grid->DataSource = $ds;
	$grid->Width = "655px";
	$grid->DataSource = $ds;
	
	$grid->AjaxEnabled = true;
	$grid->AjaxLoadingImage =  $KoolControlsFolder."/KoolAjax/loading/2.gif";

	$column = new GridBoundColumn();
	$column->DataField = "employee_name";
	$column->HeaderText = "Name";	
	$grid->MasterTable->AddColumn($column);

	$column = new GridBoundColumn();
	$column->DataField = "jobTitle";
	$column->HeaderText = "Title";	
	$grid->MasterTable->AddColumn($column);

	
	$column = new GridBoundColumn();
	$column->DataField = "supervisor_name";
	$column->HeaderText = "Supervisor";	
	$grid->MasterTable->AddColumn($column);

	$column = new GridBoundColumn();
	$column->DataField = "addressLine1";
	$column->HeaderText = "Office Address";	
	$grid->MasterTable->AddColumn($column);

	$grid->MasterTable->Pager = new GridPrevNextAndNumericPager();
	
	$grid->AllowGrouping = true; //Allow Grouping
	$grid->MasterTable->ShowGroupPanel = true; //Show Group Panel	
	
	//Define grouping by address and supervisor
	$group = new GridGroup();
	$group->GroupField = "addressLine1";
	$group->AddInfoField("addressLine1");
	$group->InfoTemplate = "Those people who work in [{addressLine1}]";
	$group->HeaderText = "Address";
	$group->Expand = false;
	$grid->MasterTable->AddGroup($group);

	$group = new GridGroup();
	$group->GroupField = "supervisor_name";
	$group->AddInfoField("supervisor_name");
	$group->HeaderText = "Supervisor";
	$group->InfoTemplate = "Reports To: {supervisor_name}";
	$group->Expand = true;
	$grid->MasterTable->AddGroup($group);
	
	$grid->Process();
?>

<form id="form1" method="post">
	<?php echo $koolajax->Render();?>
	<?php echo $grid->Render();?>
</form>
