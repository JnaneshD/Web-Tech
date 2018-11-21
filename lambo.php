
<!DOCTYPE html>
<html>
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
            .rating {
    float:left;
}

/* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
   follow these rules. Every browser that supports :checked also supports :not(), so
   it doesn’t make the test unnecessarily selective */
.rating:not(:checked) > input {
    position:absolute;
    top:-9999px;
    clip:rect(0,0,0,0);
}

.rating:not(:checked) > label {
    float:right;
    width:1em;
    padding:0 .1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:200%;
    line-height:1.2;
    color:#ddd;
    text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:before {
    content: '★ ';
}

.rating > input:checked ~ label {
    color: #f70;
    text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
}

.rating:not(:checked) > label:hover,
.rating:not(:checked) > label:hover ~ label {
    color: gold;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > input:checked + label:hover,
.rating > input:checked + label:hover ~ label,
.rating > input:checked ~ label:hover,
.rating > input:checked ~ label:hover ~ label,
.rating > label:hover ~ input:checked ~ label {
    color: #ea0;
    text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
}

.rating > label:active {
    position:relative;
    top:2px;
    left:2px;
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
                <p> Lamborghini Urus is the world’s first Super Sport Utility Vehicle, 
in which luxury, sportiness and performance meet comfort and versatility. 
It offers best-in-class driving dynamics, alongside its unmistakable elegance of design. 
Urus embodies the characteristics of multiple souls: sporty, elegant and off-road, 
and has a suitability for everyday driving in a range of environments. 
With its surprisingly distinct engine sound, combined with high performance,
 Lamborghini Urus is anything but typical.</p>
                <br>
                
                    
    <br>
                <br>
                <br>
                <br>

                 <img src="images/huracanlogo.JPG" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/huracan.JPG" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>From our past, we've learned perfection. This is how the first model of the Lamborghini Huracán was born. More performance, more control, more innovation. The Huracán is equipped with a powerful V10 engine and the latest technologies to perform at its absolute best. Engineered to guarantee the best performance and control under any driving condition, it's easy to take to the limit, not to mention extremely fun, thanks to technology like the Lamborghini Doppia Frizione (LDF) dual clutch gearbox and the electronically-controlled four-wheel drive. Enjoy the best driving experience, ever. Discover all the Lamborghini Huracán models. 
</p>
                 <img src="images/aventadorlogo.JPG" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/aventador.JPG" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>The Aventador has been created to anticipate the future, as demonstrated by the use of innovative technology, including a V12 engine and the extensive use of carbon fiber.
The authentic design masterpieces together stark dynamism with aggression to produce a cutting edge carbon fiber monocoque. The interior of the Aventador combines high-level technology and luxury equipment with premium-quality materials, skilfully crafted with the expertise characteristic of the finest Italian traditions. A supercar family that has already become a legend in its own right. Discover technical specifications, dimensions, performance, and the detailed features of all the new Lamborghini Aventador models.
</p>
                 <img src="images/fewoff.JPG" class="image logo" alt="URUS" align="center">
                <div class="thumbnails">
                <img src="images/centanario.JPG" class="image model" alt="HURACAN">
                </div>
                <br>
                <br>
                <p>The Few-Off Lamborghini are the most exclusive, limited editions to meet a small and select number of clients. Truly representing the state of the art in the domain of super cars, the Few-Off models express the highest Lamborghini spirit in every respect. Indeed, they are equipped with the most advanced features available in the fields of design and technology.
</p>
            </div>
             <form action="tryingcommentlambo.php" method="post" id="commentform">
       
    <label for="comment_author" class="required">Your name</label>
    <input type="text" name="comment_author" id="comment_author" value="" tabindex="1" required="required">
       
    <label for="email" class="required">Your email;</label>
    <input type="email" name="email" id="email" value="" tabindex="2" required="required">
       
    <label for="comment" class="required">Your message</label>
    <textarea name="comment" id="comment" rows="10" tabindex="4"  required="required"></textarea>
       
       
    <input type="submit" name="Submit" value="Submit Comment" class="Submit">
    
       
       </form>
            <?php
     $read = fopen("commentforlambo.txt", "r+t");
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