<!DOCTYPE html>
<html>
<head>
	<title>@yield('title') </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
            @yield('content')
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
