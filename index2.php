<!DOCTYPE HTML>

<html>
	<head>
		<title>Online Blog</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">
<?php
                                session_start();				//in every page u use sessions u must include session start
					// used to access the already existing session
                    if(isset($_SESSION['name']))
                    {

	                   echo "Welcome, ".$_SESSION['name'];				//sessions can also be used to transfer data b/w pages
	                   echo "<br><br><br><a href='logout.php'><input type='button' value='Logout'></a>";
                    }
                     else{
	                       echo "<h4>You must be logged in to access this page</h4>";
                            echo "<a href='login.php'><input type='button' value='Login'>";
                            exit;
                            //when u close the browser tab, the session is destroyed
                     }
                    ?>
				<section id="banner" data-video="images/banner1">
                   
					<div class="inner">
						<header>
                            <img src="images/pic22.png"/>
							<h1>Super Cars Blog</h1>
							<p>Which is your favorite super car? </p>
						</header>
					</div>
				</section>

			<!-- Main -->
				<div id="main">
					<div class="inner">

					<!-- Boxes -->
						<div class="thumbnails">

							<div class="box">
								 <img src="images/pic07.jpg" alt="" class="image fit"/>
								<div class="inner">
									<h3>Lambhorghini</h3>
									<p>Automobili Lambhorghini S.p.A is an italian brand and manufacturer of luxury sports cars and SUVs based in Sant'Agata Bolognese and tractors Lamborghini Trattori in Pieve di Cento, Italy. The Company is owned by the Volkswagen Group.</p>
									<a href="lambo.php" class="button fit" data-poptrox="youtube,800*400">Check Out</a>
								</div>
							</div>

				

							<div class="box">
								<img src="images/pic09.jpg" class="image fit" alt="" />
								<div class="inner">
									<h3>Porsche</h3>
									<p>Porsche AG is a German automobile manufacturer specializing in high-performance sports cars, SUVs and sedans. Porsche AG is headquartered in Stuttgart, and is owned by Volkswagen AG, which is itself majority-owned by Porsche Automobile</p>
									<a href="porsche.php" class="button style3 fit" data-poptrox="youtube,800x400">Check Out</a>
								</div>
							</div>



							<div class="box">
								<a href="https://www.youtube.com/channel/UC2qmmoQdJXLmre794U6zjXw" class="image fit"><img src="images/pic11.jpg" alt="" /></a>
								<div class="inner">
									<h3>Bugatti</h3>
									<p>Automobiles Ettore Bugatti was a French car manufacturer of high-performance automobiles, founded in 1909 in the then-German city of Molsheim, Alsace by the Italian-born industrial designer Ettore Bugatti. The cars were known for their design beauty and for their many race victories <br> </p>
									<a href="bugatti.php" class="button style3 fit" data-poptrox="youtube,800x400">Check Out</a>
								</div>
							</div>
                           
							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
								<div class="inner">
									<h3>Ferrari</h3>
									<p>Ferrari N.V. is an Italian luxury sports car manufacturer based in Maranello. Founded by Enzo Ferrari in 1939 out of Alfa Romeo's race division as Auto Avio Costruzioni, the company built its first car in 1940. However, the company's inception as an auto manufacturer is usually recognized in 1947, when the first Ferrari-badged car was completed.
                                        <br>
									<a href="ferr.php" class="button fit" data-poptrox="youtube,800x400">Check Out</a>
								</div>
							</div>
                             <!--
							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="images/pic13.jpg" alt="" /></a>
								<div class="inner">
									<h3>BMW</h3>
									<p>BMW originally an initialism for Bayerische Motoren Werke in German, or Bavarian Motor Works in English) is a German multinational company which currently produces luxury automobiles and motorcycles, and also produced aircraft engines until 1945.The company was founded in 1916 and has its headquarters in Munich, Bavaria.</p>
                                    <br>
									<a href="https://youtu.be/s6zR2T9vn2c" class="button fit" data-poptrox="youtube,800x400">Check Out</a>
								</div>
							</div>-->
							<div class="box">
								<a href="https://www.astonmartin.com/en-us/live/videos" class="image fit"><img src="images/aston-martin-db9-carbon-edition.jpg" alt="" /></a>
								<div class="inner">
									<h3>Aston Martin</h3>
									<p>Aston Martin Lagonda Global Holdings plc is a British independent manufacturer of luxury sports cars and grand tourers. It was founded in 1913 by Lionel Martin and Robert Bamford. Steered from 1947 by David Brown, it became associated with expensive grand touring cars in the 1950s and 1960s, and with the fictional character James Bond following his use of a DB5 model in the 1964 film Goldfinger. Their sports cars are regarded as a British cultural icon. </p>
									<a href="aston.php" class="button fit" data-poptrox="youtube,800x400">Check Out</a>
								</div>
							</div>
							<div class="box">
								<a href="https://youtu.be/s6zR2T9vn2c" class="image fit"><img src="images/pic17.jpg" alt="" /></a>
								<div class="inner">
									<h3>Rolls-Royce</h3>
									<p>Rolls-Royce was a British luxury car and later an aero engine manufacturing business established in 1904 by the partnership of Charles Rolls and Henry Royce. Building on Royce's reputation established with his cranes they quickly developed a reputation for superior engineering by manufacturing the "best car in the world".</p>
									<a href="rolls.php" class="button fit" data-poptrox="youtube,800x400">Check Out</a>
								</div>
							</div>
                            
						</div>

					</div>
                     <a href="logout.php"><input type="button" value="Logout" align="right"></a>
				</div>

			<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<h2>Team Astra</h2>
						<p>Sujay Gad, Mayur R Baggan, Jnanesh D</p>

					</div>
				</footer>
                    

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.poptrox.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>