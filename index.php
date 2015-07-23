<!DOCTYPE html>
<html>
	<head>
		<title>D'n'G Font</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/interact.js/1.2.4/interact.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<?php
		$ApiKey = 'APIKEY';
		$fonts = file_get_contents("https://www.googleapis.com/webfonts/v1/webfonts?key=$ApiKey", true);
		$fonts = json_decode($fonts, true);

		$i=0;
		while ($i < 10) {
			echo '<div class="font" id="'.$fonts['items'][$i]['family'].'" draggable="true">';
				echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family='.$fonts['items'][$i]['family'].'">';
				echo '<span style="font-family : \''.$fonts['items'][$i]['family'].'\';" value="font">Grumpy wizards make toxic brew for the evil Queen and Jack.</span>';
			echo'</div>';
		$i++;
		}
		?>

		<h2>Title</h2>
		<div id="text" style="display:inline-block; width 400px;">
			<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
	</body>
</html>
