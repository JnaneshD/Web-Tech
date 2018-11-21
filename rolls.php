<!DOCTYPE html>
<html>
    <head>
        <title>Rolls Royce</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="assets/css/main.css" />
        <style>
            img.nice{
                width:600px;height: 200px border:2px;border-color: beige;
                display: block;
			margin: 1 2 3em 0;
                border-radius: 4px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 12px 20px 0 rgba(0,0,0.19);
                text-align: center;
                text-decoration-color:azure;
                position: relative;
                
            }
            img.container{
                padding: 10px;
            }
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
                            echo "<a href='login.html'><input type='button' value='Login'>";
                            exit;
                            //when u close the browser tab, the session is destroyed
                     }
                    ?>
        <section id="banner" data-video="images/banner1">
            
					<div class="inner">
						<header>
                            <img src="images/rollslogo2.jpg" class="fit" align="center">
                            
                            <img class="nice" src="images/2018-rolls-royce-phantom.jpg" border="5"/>
							<h4>Rolls Royce</h4>
				
						</header>
						
					</div>
				</section>
        <h4 align="center"> Models</h4>
        <div id="main">
            <div class="inner">
                <img src="images/ghostlogo.JPG" class="image model">

                <div class="thumbnails">
                    
                    <img src="images/ghost1.JPG" class="image logo" alt="URUS" align="center">
                    
                </div>
                <br>
                <p>  Ghost’s state-of-the-art technology is discreetly hidden when not in use; effortlessly present when you need it.
Both timeless and modern, Ghost is the very essence of Rolls-Royce. Hand-crafted in Goodwood, England to stand the test of time, enhanced with sensory pleasures that bring beauty to every moment..</p>
                <p id="mani"></p>
 
                
                <br>
                <div id="bus">
                <div class="rating">
        <legend>Please rate:</legend>
        <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!"> 1</label>
        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">2</label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3</label>
        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">4</label>
        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">5</label>
            </div>
                    </div>
    <br>
                <br>
                <br>
                <br>

                 <img src="images/wraithlogo.JPG" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/wraith.JPG" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>
Experience the ultimate Grand Touring encounter, in a motor car born to the role. Restless in spirit and confident in style, Wraith was created for the modern-day seeker. Leave expectation behind. This is Wraith.
Propelled by a muscular engine, this is the most powerful series model to carry the Rolls-Royce name. Wraith delivers a truly remarkable, spirited drive unlike any other.Wraith is the result of the relentless desire to craft greatness. The constant quest for perfection. 
</p>
                 <img src="images/phantomlogo.JPG" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/phantom.JPG" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>An unmistakable aura. A presence that defies time itself. Phantom is the signature Rolls-Royce; an iconic and enduring interpretation of the modern motor car.In a world where unique is rarely experienced, Phantom is unmatched. Unrivalled. One of one.

CO2 emission: 329-328 g/km; Fuel consumption: 19.5-19.6 mpg / 14.5-14.4 l/100km
</p>
                 <form action="tryingcommentrolls.php" method="post" id="commentform">
       
    <label for="comment_author" class="required">Your name</label>
    <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
       
    <label for="email" class="required">Your email;</label>
    <input type="email" name="email" id="email" value="" tabindex="2" required="required">
       
    <label for="comment" class="required">Your message</label>
    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
       
       
    <input type="submit" name="Submit" value="Submit Comment" class="Submit">
    
       
       </form>
            <?php
     $read = fopen("commentforrolls.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);
    ?>
        				<footer id="footer">
					<div class="inner">
						<h2>Team Astra</h2>
						<p>Sujay Gad, Mayur R Baggan, Jnanesh D</p>

					</div>
				</footer>
        <script>
            function comment(){
            var a=document.getElementById("input1");
            var b=document.getElementById("mani");
            b.textContent=a.textContent;
            }
        </script>
    </body>
</html>