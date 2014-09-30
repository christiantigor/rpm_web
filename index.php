<?php 
	//set base_url, misal: http://rpm.com/
	$base_url = "http://m2m.tritronik.com/rpm/index.php?modul=";
	
	//set title website dan file website
	require_once("functions.php");
	
	//tampilkan bagian header
	include_once("header.php");
	
	//ambil file content website
	include_once($file_web);
	
	//tampilkan bagian footer
	include_once("footer.php"); 
?>
