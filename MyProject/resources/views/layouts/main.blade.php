<?php 
use DB; 
?>
<!DOCTYPE HTML>
<html lang = "zh_TW">

<head>
	<meta charset = "UTF-8">
	<title>NFU線上選課系統</title>
	<link rel="stylesheet" href="file/css/bootstrap.min.css">
	<link rel="stylesheet" href="file/css/style.css">
	<script src="file/js/jquery-3.5.1.min.js"></script>
	<script src="file/js/bootstrap.min.js"></script>


	
	
</head>

<body class='bg-light'>
	@include('layouts.navbar')
	<p align="center"><img src="file/img/banner-home.jpg" width="100%"/></p>
	
	登入成功
	<table class="table table-bordered">
	<!--php-->
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">星期一</th>
			<th scope="col">星期二</th>
			<th scope="col">星期三</th>
			<th scope="col">星期四</th>
			<th scope="col">星期五</th>
			<th scope="col">星期六</th>
			<th scope="col">星期日</th>
		</tr>
	</thead>
	<tbody>

	
		<!--tr>
			<th scope="row">1</th>
			<td>Mark</td>
			<td>Otto</td>
			<td>@mdo</td>
		</tr>
		<tr>
			<th scope="row">2</th>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>@fat</td>
		</tr>
		<tr>
			<th scope="row">3</th>
			<td colspan="2">Larry the Bird</td>
			<td>@twitter</td>
		</tr-->
	</tbody>
</table>


</body>