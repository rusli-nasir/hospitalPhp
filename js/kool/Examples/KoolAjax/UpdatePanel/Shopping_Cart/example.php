<?php
    require $KoolControlsFolder."/KoolAjax/koolajax.php";
	$koolajax->scriptFolder = $KoolControlsFolder."/KoolAjax";
	if ($koolajax->isCallback)
	{
		//If it is callback request, Slow down processing to see loading effect
		sleep(1);
	}	
	
	if (!isset($_SESSION['basket'])) $_SESSION['basket'] = array();
	
	function FindBasket($id) //find product position 
	{
		return array_search($id, $_SESSION['basket']);
	}
	
	$products = array();
	$products[] = array("id" => "p01",
						"name" => "HP DV2700 Laptop",
						"desc" => "Stylist laptop for women.",
						"cost" => "$1400");
	$products[] = array("id" => "p02",
						"name" => "Lenovo Thinkpad T61 Laptop",
						"desc" => "Best laptop for business men.",
						"cost" => "$1500");
	$products[] = array("id" => "p03",
						"name" => "Acer Aspire Laptop",
						"desc" => "Best laptop for students.",
						"cost" => "$800");
	$products[] = array("id" => "p04",
						"name" => "Dell XPS Laptop",
						"desc" => "Best laptop for coders.",
						"cost" => "$1200");
	$products[] = array("id" => "p05",
						"name" => "Sony Vaio Laptop",
						"desc" => "Beautiful and powerful laptop for you.",
						"cost" => "$1550");
	
	function TotalCost() //Calc total cost
	{
		global $products;
		$total = 0;
		foreach ($_SESSION['basket'] as $key => $value)
		{
			$product = FindProduct($value);
			$total += (int)substr($product['cost'],1);
		}
		return $total;
	}
	
	function FindProduct($id) //return product with id
	{
		global $products;
		foreach ($products as $key => $value)
			if ($value['id'] == $id)
				return $value;
		return null;
	}
	
	function ProductRender($product) //render product to html
	{
		echo <<<heredoc
		<div class='product'>
			<b>Product: </b>{$product['name']}<br />
			<b>Description: </b>{$product['desc']}<br />
			<b>Cost: </b>{$product['cost']}<br />
			<input type='button' onclick='Add("{$product['id']}");' value='Add to basket' />
		</div>
heredoc;
	}
	
	function BasketProductRender($product) //render product in basket to html
	{
		echo <<<heredoc
		<div class='product'>
			<b>Product: </b>{$product['name']}<br />
			<b>Description: </b>{$product['desc']}<br />
			<b>Cost: </b>{$product['cost']}<br />
			<input type='button' onclick='Remove("{$product['id']}");' value='Remove' />
		</div>
heredoc;
	}
?>

<div>
		<style type="text/css">
		.product {
			background-color: #DDE;
			border: #555 dashed 1px;
			margin: 5px;
			padding: 10px;
		}
		</style>
		<?php echo $koolajax->Render();?>
		<script type="text/javascript">
			function Add(id) //add product to basket
			{
				document.getElementById("addItem").value = id;
				basket.update();
			}
			function Remove(id) //remove product from basket
			{
				document.getElementById("removeItem").value = id;
				basket.update();
			}
			</script>		
			<div class="indent indent_right topspacing bottomspacing" style = "width:300px; float:left; border:2px #333 dotted">
			<h3>Products</h3> 
			<?php
				foreach ($products as $key => $value) //render product
					ProductRender($products[$key]);
			?>
			</div>
			
			<div style = "width:300px; margin-left:20px; float:left; border:2px #333 dotted">
			<h3>My Basket</h3><br />
				<?php echo KoolScripting::Start();?>
					<updatepanel id="basket">
						<content>
							<?php
							if (isset($_POST['addItem']) && $_POST['addItem'] != "") $_SESSION['basket'][] = $_POST['addItem']; //add product to basket
							if (isset($_POST['removeItem']) && $_POST['removeItem'] != "") array_splice($_SESSION['basket'],FindBasket($_POST['removeItem']),1); //remove product from basket
							
							echo "<b>Total Cost:</b> $".TotalCost()."<br />"; //show total cost
							foreach ($_SESSION['basket'] as $value) //render product in basket
								BasketProductRender(FindProduct($value));
							?>
							<br/>
							<input type="hidden" id="addItem" name = "addItem" value = "" />
							<input type="hidden" id="removeItem" name = "removeItem" value = "" />
						</content>
						<loading image="<?php echo $KoolControlsFolder ?>/KoolAjax/loading/5.gif" />
					</updatepanel>
				<?php echo KoolScripting::End();?>
			</div>
			<br style="clear:both" />
</div>
