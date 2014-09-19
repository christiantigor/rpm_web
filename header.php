<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    
    <meta property="og:type" content="website">
	<meta property="og:description" content="<?php echo $desc_web; ?>">
	<meta property="og:url" content="<?php echo getCurrentURL(); ?>">
	<meta property="og:title" content="RPM - Remote, Premise, Management - <?php echo $title_web; ?>">
	<meta property="og:image" content="img/logo.png">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="<?php echo $desc_web; ?>">
	<meta name="keywords" content="ini keywords">

    <title>RPM - Remote, Premise, Management. <?php echo $title_web; ?></title>
    <link rel="shortcut icon" href="img/icon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,700italic,800italic,300,400,600,800,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/css.css" media="screen">
    <link rel="stylesheet" href="css/banner.css" media="screen">
    <link rel="stylesheet" href="css/css-responsive.css" media="screen">
    <script language="javascript" src="js/jquery.js"></script>
    
</head>

<body>

<header>
	<div class="content-box">
    	<div class="table">
        	<div class="table-cell logo">
            	<a href="<?php echo $base_url; ?>"><img src="img/logo.png"></a>
            </div>
            <div class="table-cell">
            	<nav> 
                    <div class="menutop-title btn-medium">menu</div>
                    <ul class="nav-top">
                        <li class="tail"></li>
                        <li <?php echo is_active("home", $set_page_active); ?>><a href="<?php echo $base_url; ?>"><img src="img/icon-home.png"></a></li>
                        <li <?php echo is_active("why-rpm", $set_page_active); ?>><a href="<?php echo $base_url; ?>why-rpm">why RPM</a></li>
                        <li class="has-submenu">
                            <a href="javascript: void(0)">sector</a>
                            <ul class="submenu">
                                <li><a href="<?php echo $base_url; ?>sector-data-center">Data Center</a></li>
                                <li><a href="<?php echo $base_url; ?>sector-residence">Residence</a></li>
                                <li><a href="<?php echo $base_url; ?>sector-factory">Factory</a></li>
                                <li><a href="<?php echo $base_url; ?>sector-agriculture">Agriculture</a></li>
                                <li><a href="<?php echo $base_url; ?>sector-storage">Storage</a></li>
                            </ul>
                        </li>
                        <li <?php echo is_active("our-tech", $set_page_active); ?>><a href="<?php echo $base_url; ?>our-tech">our tech</a></li>
                        <li <?php echo is_active("faq", $set_page_active); ?>><a href="<?php echo $base_url; ?>faq">f.a.q.</a></li>
                        <li><a href="#">blog</a></li>
                        <li><a href="javascript:void(0)" class="linkscroll" data-target=".contact">contact</a></li>
                    </ul>
                 </nav>
            </div>
            
        </div>
    </div>
</header>