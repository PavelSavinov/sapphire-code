<!DOCTYPE>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<title>@yield('title') | User Admin</title>
	{{HTML::script('js/less.min.js')}}
	{{HTML::style('/css/bootstrap.min.css')}}
	{{HTML::style('/css/non-responsive.css')}}
	{{HTML::style('/css/styles.less')}}
	{{HTML::style('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}
	<link rel="stylesheet/less" type="text/css" href="css/styles.less" />
	<script src="js/less.min.js"></script>

</head>
<body>
			@yield('content')

</body>
</html>