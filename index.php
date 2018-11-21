<html>

<head>
<link rel="stylesheet"href="assets/css/main.css"type="text/css">
</head>
<body>
<head>
        <title>Lamborghini</title>
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
        <section id="banner" data-video="images/banner1">
					<div class="inner">
						<header>
                            <img src="images/lambologo.JPG" class="nice" align="center">
                            <img class="nice" src="images/pic07.jpg" border="5"/>
							<h4>Lamborghini</h4>
				
						</header>
						
					</div>
				</section>
        <h4 align="center"> Models</h4>
        <div id="main">
            <div class="inner">
                                    <img src="images/uruslogo.JPG" class="image model">

                <div class="thumbnails">
                    
                    <img src="images/urus.JPG" class="image logo" alt="URUS" align="center">
                    
                </div>
                <br>
                <p> I suppose, when the matter in hand is as delicate as this, every kilogram matters, so Lamborghini isnt going to round the 2197kg that its new Urus SUV weighs to the nearest ten kilos.</p> 

                <p>So 2197kg it is. Yay, its sub-2.2 tonnes! And thats the first of an array of frighteningly large numbers that                     relate to the new Lamborghini 4x4: others of note are 641bhp, 626lb ft and 164,950 (or thereabouts; dealer                          charges vary, and youll pay 180k or more once youve got some options on it anyway.
                </p>
                <p>
                All of which gets you what, exactly? A super sports luxury SUV. Lamborghini says it basically invented this kind of car, and if you squint a bit I suppose, in the rather brutalist V12-engined form of the LM002, it might almost perhaps have a bit of a point; although Im not sure it thought so at the time, and it only made 328 of them before packing the idea in.<p>

<p>But that was then and this is now, and now means it doesnt get a V12 and wont be built by hand by the couple of hundred. The new Urus sits on the Volkswagen Groups MLB Evo architecture, which underpins the Audi Q7, Porsche Cayenne and Bentley Bentayga, and its intended to perhaps double Lamborghinis output to 7000 cars a year.<p>--Matt Prior</p>
                </p>

                <img src="images/huracanlogo.JPG" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/huracan.JPG" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>Here we have the new junior supercar in the Lamborghini line-up, acting as the warm-up act to the bigger, more                 vociferous Aventador, the Huracan has to be some car then.</p>
                <p>Available in two bodystyles - Coupé and Spyder and also with a choice of rear or all-wheels drive by a                 magnificent 5.0-litre V10 petrol engine - producing 562bhp for the RWD and 593bhp for the AWD version. To complete                 the four car range is a limited edition Avio version which is a touching tribute to the Italian Air Force, although                 its claims to 'reach the sky' may be a slight exaggeration.</p><p>--Matt Saunders</p>
                 <img src="images/aventadorlogo.JPG" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/aventador.JPG" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>If you’re going to drive a new Lamborghini Aventador LP 700-4, especially when clad in the optional vivid                 Arancia Argos paint, you should slap a couple of accident black spot roundels on its flanks.</p>
                <p>As a thing to drive, the Aventador is as safe as anyone could reasonably expect a 690bhp supercar with sub-                3.0sec 0-62mph capability to be, but as a device to distract other drivers from the road ahead, its powers may be                 unprecedented. You might never crash yourself, but you’re going to see plenty.</p>
                 <img src="images/fewoff.JPG" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/centanario.JPG" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>The Few-Off Lamborghini are the most exclusive, limited editions to meet a small and select number of clients. Truly representing the state of the art in the domain of super cars, the Few-Off models express the highest Lamborghini spirit in every respect. Indeed, they are equipped with the most advanced features available in the fields of design and technology.
</p>
            </div>
        </div>
        <div id="respond">
<h3>Leave a Comment</h3>
   <form action="tryingcomment.php" method="post" id="commentform">
       
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
     $read = fopen("comments.txt", "r+t");
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
-->