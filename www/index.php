<html>
	<head>
		<title>Spark Catapult</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

		<style type="text/css">
			.centered {
				margin-top: 50px;
				text-align: center;
			}
		</style>
	</head>

	<body>

	<div class="centered">
		<button type="button" class="btn btn-lg btn-danger js-fire">Fire!</button>
	</div>

	<script>
		$(function(){
			$('.js-fire').on('click', function(){
				$.get('fire.php', function(result){
					console.log(result);
				});
			});
		});
	</script>

	</body>
</html>
