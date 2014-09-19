<?php
 	//set default halaman yang sedang aktif
	$set_page_active = "home";
	
	//default title web <title>
	$title_web = "";
	
	//default deskripsi web <meta description>
	$desc_web = "";
	
	//default file halaman aktif
	$file_web = "home.php";
	
	
	//cek halaman mana yang sedang aktif	
	if(isset($_GET["modul"]) && $_GET["modul"]!=""){
		
		$set_page_active = $_GET["modul"];
		
		switch ($_GET["modul"]) {
			case 'why-rpm';
				$title_web = "Why using RPM - Power, Simplicity, Flexibility. All delivered to you.";
				$desc_web = "";
				$file_web = "why-rpm.php";
			break;
			case 'faq';
				$title_web = "Frequently Asked Questions";
				$desc_web = "";
				$file_web = "faq.php";
			break;
			case 'our-tech';
				$title_web = "Our technology - How RPM works";
				$desc_web = "";
				$file_web = "our-tech.php";
			break;
			case 'sector-storage';
				$title_web = "Storage";
				$desc_web = "";
				$file_web = "sector-storage.php";
			break;
			case 'sector-storage-simulation';
				$title_web = "Storage Simulation";
				$desc_web = "";
				$file_web = "sector-storage-simulation.php";
			break;
			case 'sector-agriculture';
				$title_web = "Agriculture";
				$desc_web = "";
				$file_web = "sector-agriculture.php";
			break;
			case 'sector-agriculture-simulation';
				$title_web = "Storage Simulation";
				$desc_web = "";
				$file_web = "sector-agriculture-simulation.php";
			break;
			case 'sector-data-center';
				$title_web = "Data center";
				$desc_web = "";
				$file_web = "sector-data-center.php";
			break;
			case 'sector-data-center-simulation';
				$title_web = "Data Center Simulation";
				$desc_web = "";
				$file_web = "sector-data-center-simulation.php";
			break;
			case 'sector-factory';
				$title_web = "Factory";
				$desc_web = "";
				$file_web = "sector-factory.php";
			break;
			case 'sector-factory-simulation';
				$title_web = "Factory Simulation";
				$desc_web = "";
				$file_web = "sector-factory-simulation.php";
			break;
			case 'sector-residence';
				$title_web = "Residence";
				$desc_web = "";
				$file_web = "sector-residence.php";
			break;
			case 'sector-residence-simulation';
				$title_web = "Residence Simulation";
				$desc_web = "";
				$file_web = "sector-residence-simulation.php";
			break;
			default:
				$title_web = "";
				$desc_web = "";
				$file_web = "home.php";
			break;
		}
		
	}
	
	//function untuk set halaman aktif pada menu atas halaman website
	//parameters string
	//return string
	function is_active($page_is_active="", $page_active="")
	{
		return ($page_active==$page_is_active) ? "class=\"active\"" : "";
	}
	
	//function untuk mengetahui apakah user menggunakan mobile/desktop
	//parameter string
	//return string
	function simulator_is_mobile ()
	{
		require_once 'plugin/Mobile_Detect.php';
		$detect = new Mobile_Detect;
		$deviceType = ($detect->isMobile() ? 'mobile' : 'computer');
		$scriptVersion = $detect->getScriptVersion();

		if($deviceType=="mobile") return "<p style='color: red'>Simulator is only available on computer desktop/laptop.</p>";
	}
	
	//function untuk mengetahui url yang sedang diakses
	//return string
	function getCurrentURL()
	{
		$currentURL = (@$_SERVER["HTTPS"] == "on") ? "https://" : "http://";
		$currentURL .= $_SERVER["SERVER_NAME"];
	 
		if($_SERVER["SERVER_PORT"] != "80" && $_SERVER["SERVER_PORT"] != "443")
		{
			$currentURL .= ":".$_SERVER["SERVER_PORT"];
		} 
	 
		$currentURL .= $_SERVER["REQUEST_URI"];
		return $currentURL;
	}
?>