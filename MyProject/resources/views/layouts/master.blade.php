<!DOCTYPE HTML>
<html lang = "zh_TW">

<head>
	<meta charset = "UTF-8">
	<title>NFU線上選課系統</title>
	<link rel="stylesheet" href="file/css/bootstrap.min.css">
	<link rel="stylesheet" href="file/css/style.css">
	<link rel="stylesheet" href="file/css/dashboard.css">
	<script src="file/js/jquery-3.5.1.min.js"></script>
	<script src="file/js/bootstrap.min.js"></script>

	<script>
	//easy-sidebar-toggle-right
	$(‘.easy-sidebar-toggle’).click(function(e) {
	e.preventDefault();
	//$(‘body’).toggleClass(‘toggled-right’);
	$(‘body’).toggleClass(‘toggled’);
	//$(‘.navbar.easy-sidebar-right’).removeClass(‘toggled-right’);
	$(‘.navbar.easy-sidebar’).removeClass(‘toggled’);
	});
	</script>
<head>

<body style="background-color:#5B5B5B">
	
	<!--@include('layouts.sidebar')-->
	<!--@include('layouts.navbar')-->
	<div  class = "wrapper" >0
		<div class = "content" > <!--頁面主體內容區域--> </div> 
		<div class = "footer" ><!--需要做到Sticky Footer效果的頁腳--> </div> 
	</div>
     
     


</body>