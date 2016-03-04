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
		@yield('conteudo')
	</div>

	<script src="/jquery/jquery.min.js"></script>
	<script src="/bootstrap/js/bootstrap.min.js"></script>
	@yield('extraJs')
</body>
</html>