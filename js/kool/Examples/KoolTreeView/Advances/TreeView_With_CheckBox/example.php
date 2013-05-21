<?php
	require $KoolControlsFolder."/KoolTreeView/kooltreeview.php";

	$treearr = array(   
						array("root","koolsuite","KoolSuite",false,"bfly.gif"),
						array ("koolsuite","koolajax","KoolAjax",false,"square_blueS.gif"),	
						array ("koolsuite","kooltabs","KoolTabs",false,"square_greenS.gif"),
						array ("koolsuite","kooltreeview","KoolTreeView",false,"square_redS.gif"),
						array ("koolsuite","koolimageview","KoolImageView",false,"square_yellowS.gif"),
						
						array ("root","extensions","Extensions",false,"xpShared.gif"),
						array ("extensions","webextension","Web extension",false,"xpShared.gif"),
						array ("webextension","core","Base core",false,"triangle_yellowS.gif"),
						array ("webextension","addon","Add on",false,"triangle_blueS.gif"),
						array ("extensions","application","Application",false,"goblet_bronzeS.gif"),
						array ("application","graphic","Graphic design",false,"ball_glass_blueS.gif"),
						array ("application","flash","Flash player",false,"ball_glass_greenS.gif"),
						
						array ("root","support","Supports",false,"book.gif"),
						array ("support","guide","Guide",false,"BookY.gif"),
						array ("support","update","Update",false,"BookY.gif")
					);
	$_node_template = "<input type='checkbox' id='cb_{id}' name='cb_{name}' {check} onclick='toogle(\"{id}\")'><label for='cb_{id}'>{text}</label>";
	
	$treeview = new KoolTreeView("treeview");
	$treeview->scriptFolder = $KoolControlsFolder."/KoolTreeView";
	$treeview->imageFolder=$KoolControlsFolder."/KoolTreeView/icons";
	$treeview->styleFolder = "default";
	$root = $treeview->getRootNode();
	
	$root->text = str_replace("{id}","treeview.root",$_node_template);
	$root->text = str_replace("{name}","treeview_root",$root->text);
	$root->text = str_replace("{text}","KoolPHP Software",$root->text);
	$root->text = str_replace("{check}",isset($_POST["cb_treeview_root"])?"checked":"",$root->text);
	$root->expand=true;
	$root->image="woman2S.gif";	
	for ( $i = 0 ; $i < sizeof($treearr) ; $i++)
	{
		$_text = str_replace("{id}",$treearr[$i][1],$_node_template);
		$_text = str_replace("{name}",$treearr[$i][1],$_text);
		$_text = str_replace("{text}",$treearr[$i][2],$_text);
		$_text = str_replace("{check}",isset($_POST["cb_".$treearr[$i][1]])?"checked":"",$_text);
		$treeview->Add($treearr[$i][0],$treearr[$i][1],$_text,$treearr[$i][3],$treearr[$i][4]);
	}
	$treeview->showLines = true;
	$treeview->selectEnable = false;
	$treeview->keepState = "onpage";	
?>

<form id="form1" method="post">
	<div style="padding:10px;">
		<?php echo $treeview->Render();?>
	</div>	
	<script language="javascript">
		function markChild(nodeId)
		{
			var status = document.getElementById("cb_" + nodeId ).checked;
			var childIds = treeview.getNode(nodeId).getChildIds();	
			for(var i in childIds)
	        {
				document.getElementById("cb_" + childIds[i] ).checked = status;
				markChild(childIds[i]);	
	        }		
		}
		
		function markParent(nodeId)
		{
			if (nodeId.indexOf(".root")<0)
			{
				var parentId = treeview.getNode(nodeId).getParentId();
				var siblingIds = treeview.getNode(parentId).getChildIds();
				var _parentSelected = true;
				for(var i in siblingIds)
					if (!document.getElementById("cb_" + siblingIds[i]).checked) 
						_parentSelected = false;
				document.getElementById("cb_" + parentId).checked = _parentSelected;
				markParent(parentId);
			}		
	
		}
		
		function toogle(nodeId)
		{
			markChild(nodeId);
	        markParent(nodeId);
		}
		
	</script>
	
	 <div style="padding:10px;">
		<input type="submit" value="Submit selected nodes"/>
	</div>
	
	<div style="padding:10px;">
		<b>Selected node are:</b> <br/>
		<?php
			$index = 1;
			
			if (isset($_POST["cb_treeview_root"]))
			{

				echo "1. KoolPHP Software<br/>";
				$index = 2;
			}
				
			for ( $i = 0; $i < sizeof($treearr) ; $i++)
			{
				if (isset($_POST["cb_".$treearr[$i][1]]))
				{
					echo ($index).". ".$treearr[$i][2]."<br/>";
					$index++;
				}
			}
		?>	
	</div>		
</form>


