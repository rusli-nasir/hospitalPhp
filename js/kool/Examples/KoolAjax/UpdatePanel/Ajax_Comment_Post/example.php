<?php
	require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
	if($koolajax->isCallback)
	{
		sleep(1); //Slow down 1s to see loading effect
	}	
	
	if(!isset($_SESSION["comments"]))
	{
		$_SESSION["comments"] = array();
	}
	
	$new_comment = null;
	if(isset($_POST["comment_name"]) && isset($_POST["comment_content"]))
	{
		if ($_POST["comment_name"]!="" && $_POST["comment_content"]!="")
		{
			$new_comment = array("name"=>$_POST["comment_name"],"content"=>$_POST["comment_content"]);
			array_push($_SESSION["comments"],$new_comment);			
		}
	} 

	
	

?>
<div class="exampleContent" style="width:650px;">

	<style type="text/css">
		.comments_title
		{
			font-size:16px;
			font-weight:bold;
			padding-top:10px;
			padding-bottom:10px;
		}
		#new_comment
		{
			display:none;
		}
		#comment_content
		{
			width:400px;
			height:100px;
		}
		#comment_name
		{
			width:200px;
		}
		
		#comment_post_panel
		{
			background:#EEEEEE;
			border:solid 1px #CCCCCC;
			width:500px;
			padding:8px;
		}
		
		#post_table td
		{
			vertical-align:top;
		}
		
		#comments
		{
			padding-left:5px;
		}		
		
		.comment .name
		{
			float:left;
			width:90px;
			font-weight:bold;
		}
		.comment .content
		{
			float:left;
			width:410px;
			font-style:italic;
		}
		.comment
		{
			clear:both;
			padding-top:5px;
		}
		
	</style>

	<div  style="width:520px;">
		KoolPHP is a vendor of PHP User Interface (UI) components. We focus on building the featured rich yet easy-to-use components to help developers increase productivity and deliver highest quality applications within time and budget constraints.
	</div>
	<div class="comments_title">Comments</div>

	<div id="comments">
		<?php
			foreach($_SESSION["comments"] as $comment)
			{
		?>
			<div class = "comment">
				<div class="name"><?php echo $comment["name"] ?></div>
				<div class="content">"<?php echo $comment["content"] ?>"</div>
			</div>
		<?php
			}
		?>
	</div>

	<div style="clear:both;height:10px;"></div>

	<?php echo $koolajax->Render();?>
		<?php echo KoolScripting::Start();?>
			<updatepanel id="comment_post_panel">
				<content>					
				<![CDATA[
				
				<table id="post_table">
					<tr>
						<td width="85px;">Name:</td>
						<td>
							<input type="text" id="comment_name" name="comment_name" value="" />
						</td>
					</tr>
					<tr>
						<td>Content:</td>
						<td>
							<textarea id="comment_content" name="comment_content"></textarea>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="submit" value="Submit" />
						</td>
					</tr>										
				</table>
				<?php
					if($new_comment)
					{
				?>
					<div id="new_comment" class="comment">
						<div class="name"><?php echo $new_comment["name"] ?></div>
						<div class="content">"<?php echo $new_comment["content"] ?>"</div>												
					</div>
					<script type="text/javascript">
						move_new_post();
					</script>		
				<?php
					}
				?>					
					
				]]>	
				</content>
				<loading image="<?php echo $KoolControlsFolder;?>/KoolAjax/loading/5.gif"/>
			</updatepanel>
		<?php echo KoolScripting::End();?>	



	<script language="javascript">		
		function move_new_post()
		{
			var _comments_div = document.getElementById("comments");
			var _new_comment_div = document.getElementById("new_comment");
			_comments_div.appendChild(_new_comment_div);
			_new_comment_div.id=null;
		}
	</script>

</div>
