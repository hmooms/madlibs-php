<!DOCTYPE html>
<html>

	<head>
		<title>madlibs</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="mphp.css">
		<link href="https://fonts.googleapis.com/css?family=Mystery+Quest" rel="stylesheet">
	</head>
	
	<body>
		
		<main>
			
			<h1>mad Libs</h1>

			<nav>
				 
				<ul>
					<li><a href="Madlibs-php.php">Er heerst paniek...</a></li>
					<li><a href="onkunde-php.php">Onkunde</a></li>
				</ul>
			
			</nav>

			<h3>Onkunde</h3>

			<section id="onkunde">

				<aside>

					<ul>
						
						<li>Wat zou je graag willen kunnen?</li>

						<li>Met welke persoon kun je goed opschieten?</li>

						<li>Wat is je favoriete getal?</li>

						<li>Wat heb je altijd bij je als je op vakantie gaat?</li>

						<li>Wat is je beste persoonlijke eigenschap?</li>

						<li>Wat is je slechste persoonlijke eigenschap?</li>

						<li>Wat is het ergste dat je kan overkomen?</li>

					</ul>

				</aside>

				<form action="story2.php" method="post">

					<ul>
						
						<li><input type="text" name="kunnen"></li>

						<li><input type="text" name="naam"></li>

						<li><input type="text" name="getal"></li>

						<li><input type="text" name="vakantie"></li>
					
						<li><input type="text" name="eigenschap"></li>
						
						<li><input type="text" name="slechste"></li>
					
						<li><input type="text" name="overkomen"></li>

						<li><input type="submit" class="submit"></li>

					</ul>

				</form>

			</section>
	
			<footer>Deze website was gemaakt door Spinoza.</footer>

		</main>

	</body>

</html>