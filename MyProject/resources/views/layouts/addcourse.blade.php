<!DOCTYPE HTML>
<html lang = "zh_TW">

<head>
	<meta charset = "UTF-8">
	<title>Course-Table欄位增加</title>
	<link rel="stylesheet" href="file/css/bootstrap.min.css">
	<link rel="stylesheet" href="file/css/style.css">
	<script src="file/js/jquery-3.5.1.min.js"></script>
	<script src="file/js/bootstrap.min.js"></script>




</head>

<body class='bg-light'>
	@include('layouts.navbar')
	<p align="center"><img src="file/img/banner-home.jpg" width="100%"/></p>


    <div>
        <form method="POST" action="{{ route('addc') }}">
            <p class='font2' width="100">name<input type=text name="name" autofocus></p>
            <p class='font2' width="100">period<input type=text name="period"></p>
            <p class='font2' width="100">day<input type=text name="day"></p>
            <p class='font2' width="100">credit<input type=text name="credit"></p>
            <p class='font2' width="100">class<input type=text name="class"></p>
            <p class='font2' width="100">teacher<input type=text name="teacher"></p>
            <p class='font2' width="100">classroom<input type=text name="classroom"></p>
            <p class='font2' width="100">type<input type=text name="type"></p>
            <button type="submit" class="btn btn-primary">
                insert
            </button>
        </form>
    </div>

</body>
