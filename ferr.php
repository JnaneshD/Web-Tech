<html>

<head>
<link rel="stylesheet"href="assets/css/main.css"type="text/css">
</head>
<body>
<head>
        <title>Ferrari</title>
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
                            <img src="images/logo-Ferrari.png" class="nice" align="center">
                            <img class="nice" src="images/ferrarifxx.jpg" border="5"/>
							<h4>Lamborghini</h4>
				
						</header>
						
					</div>
				</section>
        <h4 align="center"> Models</h4>
        <div id="main">
            <div class="inner">
                                    <img src="images/brand.gif" class="image model">

                <div class="thumbnails">
                    
                    <img src="images/ferrari1.jpg" class="image logo" alt="458" align="center">
                    
                </div>
                <br>
                <p> The Ferrari 458 Speciale is the fastest, most advanced, but also the most fun to drive mid-engined V8 sports car that Ferrari has ever built..</p> 

                <p>And those are Ferrari's words, not mine. Which kind of means something when you've got the F40 in your                 portfolio.
                </p>
                <p>
               Why? Because the Speciale can do pretty much everything that the regular 458 Italia can do - which, let's face it, is rather a lot - and then adds a good 20 percent of extra kaboom where it really counts.

So it's faster, louder (inside though not out interestingly), goes round corners with a deal more precision, and subjectively makes the hairs on the back of your neck not simply stand up straight but snap clean off..<p>

<p>Beneath its mildly redesigned but still achingly beautiful skin, the Speciale is bubbling with new technology, most if not all of which is there to enhance rather than inhibit the interaction between driver, car and road below.

Truly, this is one of the great Ferraris, and there have been quite a few over the years..<p>--SS</p>
                </p>

                <img src="images/download.png" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/488.jpg" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>In 1975 Maranello replaced the V6 Dino with the 252bhp 308 GTB; last year, at its Geneva show press conference, it unveiled the seventh descendant of that line: the 661bhp 488 GTB..</p>
                <p>It is our reigning Britains Best Drivers Car champ in left-hand drive form, so weve written about it a fair bit already, but only now comes the chance to judge the car in right-hand drive form, on road, track and weighbridge and against our tape measure and timing gear.

The build-up to the cars launch was dominated by one key technical change: a twin-turbo 3.9-litre V8 derived from the one first used in the California two years earlier.

It makes for sizeable gains in peak power and torque relative to the atmospheric V8 in the 458 Italia and delivers the required improvement in fuel economy and reduced emissions.</p>
<p>The logic of the cars nomenclature is also new. The 488s predecessors have flip-flopped between different rationales for their numerical identities since departing from the one that seemed to make the most sense: the first two digits of the name representing engine size and the last the number of cylinders, hence 308, 328 and 348.</p>
<p>--Matt Saunders</p>
                 <img src="images/2017-Ferrari-812-Superfast-logo.png" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/812-superfast_1.jpg" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>While the observant will have noticed that it hasnt actually used it on the official model name of the new 812 Superfast, it has used it on the cars internal codename. The cars immediate predecessor, the 2012 F12 Berlinetta, was simply known as F152 to anyone personally connected to its creation; the new 812 is F152M. Which tells you a lot about what’s underneath this car, how new it really is and how close a relationship it has to the F12..</p>
                <p>The Superfast is in essence a widely and significantly updated version of the F12. It brings quite a substantial power hike, as well as some transmission, suspension, aerodynamic and steering revisions, to the market for front-engined Super GT coupes, which Ferrari so famously dominated and influenced through cars such as the 250 and 275, the 365 GTB/4 Daytona and the 550 Maranello.</p>
                 <img src="images/ferrari_laferrari_logo.jpg" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/O5FRGEB1.jpg" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>The bottom line, however, is that LaFerrari has more power (a whopping 950bhp) and less weight to carry around than its prestigious rivals so figuratively, if nothing else, it quite clearly has the upper hand.
</p>
<p>Either way, this is the ultimate Ferrari, and it has but four ancestors; the 288 GTO, the F40, the F50 and the Enzo, each of these being a limited series car, just like LaFerrari, of which just 499 will be made during the next two years.

At the centre of the car, behind its two fixed carbonfibre seats, sits a 6262cc naturally aspirated V12 engine that generates 790bhp at 9000rpm and 516lb ft of torque at 6750rpm. On their own these outputs would be sufficient to make LaFerrari more potent than the Scuderias last V12 F1 car, the 412T from 1995.</p>
<p>But also behind and beneath the seats sits a 60kg lithium ion battery pack which, via a 25.7kg electric motor, provides a further 160bhp and 199lb ft to give combined outputs of 950bhp and 715lb ft.
However, entirely unlike its rivals from Porsche and McLaren, the Ferraris power unit has been designed to produce its maximum outputs all of the time. There is no e-mode that can be engaged as such. Instead, the combustion engine and the Hy-KERS system have been engineered to work as one, with energy being constantly harvested on the move (via the brakes, the ABS system, the traction control system and even the E-Diff) to deliver full beans, as in 950bhp, whenever you want it.</p><p>--KTF</p>
            </div>
        </div>
        <div id="respond">
<h3>Leave a Comment</h3>
   <form action="tryingcommentforferrari.php" method="post" id="commentform">
       
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

 #Read comments
 $read = fopen("commentforferrari.txt", "r+t");
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
