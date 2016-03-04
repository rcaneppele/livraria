<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		@yield('title')
	</title>

	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
	@yield('extraCss')
</head>

<body>
	<div class="container">
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $error)
						<li>{{$error}}</li>
					@endforeach
				</ul>
			</div>
		@endif

		@if(session('msg'))
			<div class="alert alert-success">
				<p>{{session('msg')}}</p>
			</div>
		@endif

		@yield('conteudo')
	</div>

	<script src="/jquery/jquery.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	@yield('extraJs')
</body>
</html>
