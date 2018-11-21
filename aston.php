<!DOCTYPE html>
<html>
    <head>
        <title>Aston Martin</title>
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
        <section id="banner" data-video="images/banner1">
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
					<div class="inner">
						<header>
                            <img src="images/astonlogo.png" class="fit" align="center">
                            <img class="nice" src="images/aston1.jpg" border="5"/>
							<h4>Aston Martin</h4>
				
						</header>
						
					</div>
				</section>
        <h4 align="center"> Models</h4>
        <div id="main">
            <div class="inner">
                <img src="images/vanquishs.JPG" class="image model">

                <div class="thumbnails">
                    
                    <img src="images/vanquishmain.JPG" class="image logo" alt="URUS" align="center">
                    
                </div>
                <br>
                <p>  Building on the heritage and success of our flagship Grand Tourer comes the Aston Martin Vanquish S – bringing improved engine power, enhanced dynamics and all new styling to create a car of unprecedented ability. Vanquish S is the ultimate Super GT.</p>
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

                 <img src="images/v12logo.jpg" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/v12main.JPG" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>A thoroughbred sports car with a racer’s edge, the V12 Vantage S demands respect. In return it delivers unmatched satisfaction. On the road this means huge reserves of performance, high levels of mechanical grip and the reassurance of finely tuned multi-stage traction, stability and anti-lock systems to maintain a high yet non-intrusive safety margin.
</p>
                 <img src="images/rapidelogo.JPG" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/rapidemain.JPG" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>Following a unique recipe using the finest ingredients in the automotive industry, the Aston Martin Rapide S is a compelling and comprehensively improved evolution of our ground-breaking four door sports car.Clear design, tactility and a sense of connection are paramount, and from the moment you slip behind the steering wheel you feel in total command of the car. Intuitive ergonomics, fine visibility and the sensory satisfaction from materials such as glass switches are thoughtful and satisfying, completing a driving experience so immersive you will forget you are in a four-seater sports car.
</p>
                 <img src="images/vulcanlogo.JPG" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/vulcan.JPG" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>The Aston Martin Vulcan is a two-door, two-seater, high-performance lightweight track-only car launched in 2015 by Aston Martin at the 2015 Geneva Motor Show. ... The Vulcan is a limited edition model and only 24 cars were produced with each car priced at US$2.3 million.
Engine:7.0 L naturally-aspirated V12
</p>
            </div>
            <form action="tryingcommentaston.php" method="post" id="commentform">
       
    <label for="comment_author" class="required">Your name</label>
    <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
       
    <label for="email" class="required">Your email;</label>
    <input type="email" name="email" id="email" value="" tabindex="2" required="required">
       
    <label for="comment" class="required">Your message</label>
    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
       
       
    <input type="submit" name="Submit" value="Submit Comment" class="Submit">
    
       
       </form>
            <?php
     $read = fopen("commentforaston.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);
    ?>
        </div>
        				<footer id="footer">
					<div class="inner">
						<h2>Team Astra</h2>
						<p>Sujay Gad, Mayur R Baggan, Jnanesh D</p>

					</div>
				</footer>
  
    </body>
</html>