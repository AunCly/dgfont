<!DOCTYPE html>
<html>
	<head>
		<title>D'n'G Font</title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
		<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	<div class="container">
		<div class="row">
			<div class="well">
				<h1>Drag'n'Drop font</h1>
				<p>This is a simple drag'n'drop system to apply a font on an html element on the page.</p>
			</div>
			<div class="col-lg-12 well">
				<?php
				$ApiKey = 'your_api_key';
				$fonts = file_get_contents("https://www.googleapis.com/webfonts/v1/webfonts?key=$ApiKey", true);
				$fonts = json_decode($fonts, true);

				$fontArray = array("sansserif" => array(), "serif"=> array(), "cursive" => array(), "fantasy" => array(), "monospace" => array());
				$tabCateg = array("sansserif" => "sans-serif", "serif" => "serif", "cursive" => "cursive", "fantasy" =>"fantasy", "monospace" => "monospace");
				$i = 0;

				while ($i < 50) {
					foreach ($tabCateg as $key => $value) {
						if ($fonts['items'][$i]['category'] == $value) {
							array_push($fontArray[$key], $fonts['items'][$i]['family']);
						}
					}
					$i++;
				}

				$i=0;
				echo '<div class="col-lg-4">'; ?>
				<ul class="nav nav-tabs">
				 	<li class="active"><a href="#serif" data-toggle="tab" aria-expanded="false">Serif</a></li>
				  	<li class=""><a href="#sans-serif" data-toggle="tab" aria-expanded="true">Sans-Serif</a></li>
					<li class=""><a href="#cursive" data-toggle="tab" aria-expanded="true">Cursive</a></li>
					<li class=""><a href="#fantasy" data-toggle="tab" aria-expanded="true">Fantasy</a></li>
					<li class=""><a href="#monospace" data-toggle="tab" aria-expanded="true">Monospace</a></li>
				</ul>

				<div id="myTabContent" class="tab-content">
					<?php 
						$j=0;
						foreach ($tabCateg as $keyOne => $valueOne) { 
							$j++; ?>
							<div class="tab-pane fade <?php if($j == 0) echo 'active in'; ?>" id="<?php echo $valueOne; ?>">
								<?php 
								foreach ($fontArray[$keyOne] as $key) {
									echo '<div class="font" id="'.$key.'" draggable="true">';
										echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family='.$key.'">';
										echo '<span style="font-family : \''.$key.'\';" value="font">Grumpy wizards make toxic brew for the evil Queen and Jack.</span>';
									echo'</div>';
								$i++;
								}
								?>
							</div>
						<?php }
					?>
				</div>
			<?php 
				echo '</div>';
				?>
				<div class="col-lg-8 well-reverse">
					<?php 
					$i=1;
					while ($i<=6) {
						echo '<h'.$i.' class="dropzone">Title h'.$i.'</h'.$i.'>';
						$i++;
					}
					?>
					<div id="text" style="display:inline-block; width 400px;">
						<p class="dropzone">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
					<blockquote>
					  	<p class="dropzone">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
					  	<small class="dropzone">Someone famous in <cite title="Source Title" class="dropzone">Source Title</cite></small>
					</blockquote>
				</div>
			</div>
			<p>Made with &#9825; by <a href="aurelien-clugery.fr">AunCly</a></p>
		</div>
	</div>
	</body>
</html>


