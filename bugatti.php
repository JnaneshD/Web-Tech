<html>

<head>
<link rel="stylesheet"href="assets/css/main.css"type="text/css">
</head>
<body>
<head>
    <meta charset="utf-8" />
    <title>Bugatti</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    <style>
        img.nice {
            width: 600px;
            height: 200px border:2px;
            border-color: beige;
            display: block;
            margin: 1 2 3em 0;
            border-radius: 4px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 12px 20px 0 rgba(0,0,0.19);
            text-align: center;
            text-decoration-color: azure;
            position: relative;
        }

        img.container {
            padding: 10px;
        }
    </style>
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
	                       echo "<h1>You must be logged in to access this page</h1>";
                            echo "<a href='login.php'><input type='button' value='Login'>";
                            exit;
                            //when u close the browser tab, the session is destroyed
                     }
                    ?>
    <section id="banner" data-video="images/banner1">
        <div class="inner">
            <header>
                <img src="images/buggattilogo.png" class="nice">
                <img class="nice" src="images/buggg.jpg" border="5" />
                <h4>Bugatti</h4>
            </header>
        </div>
    </section>
    <h4 align="center"> Models</h4>
    <div id="main">
        <div class="inner">
            <img src="images/chironlogo3.png" class="image model">
            <br />
            <div class="thumbnails">
                <br />
                <img src="images/chiron2.PNG" class="image logo" alt="URUS" align="center">
                    
            </div>
            <br>
            <p>
                The CHIRON is the fastest, most powerful, and exclusive production super sports car in BUGATTI’s history. Its sophisticated design, innovative technology, and iconic, performance-oriented form make it a unique masterpiece of art, form and technique, that pushes boundaries beyond imagination.
                BUGATTI owes its distinctive character to a family of artists and engineers, and has always strived to offer the extraordinary, the unrivalled, the best. Every element of the CHIRON is a combination of reminiscence to its history and the most innovative technology. The result is a unique creation of enduring value, and breathtaking automotive accomplishment.
            </p>
            <br />
            <br />
            <br />
            <img src="images/divologo.png" class="image logo" alt="URUS" align="center">
            <div class="thumbnails">
                <img src="images/buggattidivo.PNG" class="image model" alt="HURACAN">
            </div>
            <br>
            <br>
            <p>
                The Bugatti Divo is a mid-engine track focused sports car developed and manufactured by Bugatti Automobiles S.A.S. The car is named after French racing driver Albert Divo, who raced for Bugatti in the 1920s winning the Targa Florio race two times.[1]
            </p>
        </div>
        <img src="images/veyronlogo.jpg" class="image logo" alt="URUS" align="center">
        <div class="thumbnails">
            <img src="images/bugattiveyron.jpg" class="image model" alt="HURACAN">
        </div>
        <br>
        <br>
        <p>
            The Bugatti Veyron's birth was not an easy one, that it came to be because one day Volkswagen tsar Ferdinand Piech had a dream: to provide the world with a car that had 1000bhp, cost one million euros and could do over 400km/h (250mph). To begin with the brief seemed impossible but in Piech’s mind, not something that couldn’t happen.

<p>By 1999 there was a styling proposal and even an engine of sorts, initially with 18 cylinders. By 2000 the styling was clearer and the powerplant had been reduced to 16 cylinders, effectively two 4.0-litre VW V8s. A year later VW announced it was indeed going to build the Veyron and that it would have 1001PS (987bhp) and do over 400km/h. Then the real trouble started.</p>

The engineers knew that to announce a car with such huge power and speed claims was one thing, but that to make it was entirely another. For a year and a half they tried, and for a year and a half they failed, until eventually Bugatti's boss, Dr Neuman, was ‘removed.’

Then a new leadership team was brought in in late 2003, Dr Wolfgang Schreiber arriving as the new chief engineer. Having previously been in charge of transmissions at VW/Audi he was the bloke responsible for the original DSG gearboxes.

A few months after that Thomas Bscher, merchant banker, Le Mans race driver and well-known financial trouble-shooter, was appointed as president, having been head-hunted personally by then VW boss Bernd Pischetsrieder.

Then years later and having changed or re-engineered an incredible 95 per cent of the components, the Veyron became reality. And all of Dr Piech’s original dynamic targets had been hit.

<P class="Special" >-<span id="Highlight">Matt prior</span></p>
        </p>
    </div>
    <div id="respond">

  <h3>Leave a Comment</h3>
   <form action="tryingcommentforbugatti.php" method="post" id="commentform">
       
    <label for="comment_author" class="required">Your name</label>
    <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
       
    <label for="email" class="required">Your email;</label>
    <input type="email" name="email" id="email" value="" tabindex="2" required="required">
       
    <label for="comment" class="required">Your message</label>
    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
       
       
    <input type="submit" name="Submit" value="Submit Comment" class="Submit">
    
       
       </form>
</body>  
</html>
<?php
 $read = fopen("commentforbugatti.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);

?>
<!--
<p></p>
<html>
<body>
<div>
    <p>Follow us on</p>
    <a href="[https://twitter.com/login]"><img src="images/logo.png" alt="Twitter" title="Twitter" width="35" height="35" /></a>
    <a href="[https://youtube.com/home]"><img src="images/youtube-logo.png" alt="Youtube" title="Youtube" width="35" height ="35" /></a>
    <a href="[https://facebook.com/login]"><img src="images/facebook.png" alt="Facebook" title="Facebook" width="35" height="35" /></a>
    <a href="[images/7fd.jpg]"><img src="images/instagram.jpg" alt="IG" title="Instagram" width="35" height="35" /></a>
</div>
        				<footer id="footer">
					<div class="inner">
						<h2>Team Astra</h2>
						<p>Sujay Gad, Mayur R Baggan, Jnanesh D</p>

					</div>
				</footer>
    </body>
</html>
