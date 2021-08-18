<?php
require_once '../model/model.php';
if(isset($_POST['find']))
{
	echo $_POST['product_name'];
	try
	{
		$allSearchProducts = searchProduct($_POST['product_name']);
		require_once '../view/search.php';
	}
	catch (Exception $ex)
	{
		echo $ex ->getMessage();
	}
}
?>