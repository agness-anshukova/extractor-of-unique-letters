<?php ?>
<!DOCTYPE html>
<html lang="en" class="h-100">
	<head>
		<title>Letters</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="ajax.js"></script>

	</head>
	<body class="d-flex h-100 text-center text-white bg-dark">
		<div class="cover-container d-flex w-50 h-100 p-3 mx-auto flex-column">
			<header class="mb-auto">
				<div>
					<h3 class="float-md-start mb-0">Letters</h3>
					<nav class="nav nav-masthead justify-content-center float-md-end"></nav>
				</div>
			</header>

		<main class="px-3">
			<h1>Sentence transformer</h1>

			<p class="lead">Enter a sentence</p>
			<p class="lead">
				<form method="post" id="ajax_form" action="" >
					<div class="form-group mx-sm-3 mb-2">
						<input type="text" class="form-control" name="sentence" placeholder="Sentence" />
					</div>
					<input  type="submit" class="btn btn-primary mb-2" id="btn" value="Send" />
				</form>
			</p>
			<div id="result_form"></div> 
		</main>

		<footer class="mt-auto text-white-50"></footer>
		</div>
	</body>
</html>