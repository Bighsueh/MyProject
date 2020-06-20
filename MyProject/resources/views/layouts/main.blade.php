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

	<div style='float:left;width:50%'>
		<table class="table table-bordered">
		<thead class="thead-dark">
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

            @foreach(range(1,16) as $period)
                <tr>
                    <td>{{$period}}</td>

                    @foreach(range(1,7) as $day)
                        <?php $check=0 ?>
                        @foreach($sch as $s)
                            @if($day ==$s->day&&$period==$s->period)
                                <td>
                                    <a>{{$s->name}}</a><br>
                                    <a>{{$s->classroom}}</a>
                                </td>
                                <?php $check=1 ?>
                            @endif
                        @endforeach
                        @if($check==0)
                            <td>
                                <a href="#">---</a>
                            </td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
		</tbody>
	</table>
</div>
    <div style='float:right;width:45%'>
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>課程名稱</th>
                <th>授課教室</th>
                <th>授課時間</th>
                <th>授課節次</th>
                <th>授課班級</th>
            </tr>
            </thead>
            <tbody>

                @foreach($scht as $s)
                    <tr>
                        <td>{{$s->id}}</td>
                        <td>{{$s->name}}</td>
                        <td>{{$s->classroom}}</td>
                        <td>星期{{$s->day}}</td>
                        <td>第{{$s->period}}節</td>
                        <td>{{$s->classname}}</td>
                    </tr>
                @endforeach
            <!--tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
            </tr-->
            </tbody>
        </table>
    </div>

</body>
