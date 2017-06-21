<!DOCTYPE html>
<html>
<head>
	<title>JS</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>

	<script>
		$(document).ready(function(){

			var $testP = $('#test-p a');

			$('#btn').click(function(){

				console.log($testP);

				$testP.first().fadeOut();
			});

		});
		
	</script>

	<p id='test-p'>
		Some text
		<br>
		<a href="https://google.com">Google</a>
		<a href="https://drive2.ru">Drive2</a>
		<a href="https://lexp.com.ua">Expert</a>
		<br>
	</p>

	<p>
		<span>Some span</span>
		<hr>
		<code>echo 1;</code>
	</p>

	<p>
		<?php 

			$a = 10;
			$b = "Good";
			$c = "Not good";
			
			if($a < 5) {
				echo $b;
			}
			else {
				echo $c;
			}


		?>
	</p>

	<button id='btn'>Click</button>




</body>
</html>