<html class="easy-sidebar-active">
<nav class="navbar navbar-inverse easy-sidebar">
	<div class="container-fluid">
	<div class="navbar-header">
	<!–easy-sidebar-toggle-right –>
	<button type="button" class="navbar-toggle easy-sidebar-toggle" aria-expanded="false">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="#">Brand</a>
	</div>
	<ul class="nav navbar-nav">
		<li class="active"><a href="#">Link</a></li>
		<li><a href="#">Link</a></li>
	</ul>
	</div>
	<!– /.container-fluid –>
</nav>
<div class="container">
	<h1>Bootstrap Easy Sidebar Example</h1>
	<!–easy-sidebar-toggle-right –>
	<button class="btn btn-danger easy-sidebar-toggle">Toggle Sidebar</button>
</div>

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