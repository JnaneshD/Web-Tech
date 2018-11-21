<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
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
    <section id="banner" data-video="images/banner1">
        <div class="inner">
            <header>
                <img src="images/porsche-log.jpg" class="nice" align="center">
                <img class="nice" src="images/PorsheE.jpg" border="5" />
            </header>
        </div>
    </section>
    <h4 align="center"> Models</h4>
    <div id="main">
        <div class="inner">
            <img src="images/911.jpg" class="image model">
            <br />
            <div class="thumbnails">
                <br />
                <img src="images/GT2RS.jpg" class="image logo" alt="URUS" align="center">

            </div>
            <br>
            <p>
                The Porsche 911 (pronounced Nine Eleven or in German: Neunelfer) is a two-door, 2+2 high performance rear-engined classic German sports car made since 1963[1] by Porsche AG of Stuttgart, Germany. It has a rear-mounted six cylinder boxer engine and all round independent suspension. It has undergone continuous development, though the basic concept has remained unchanged.[2] The engines were air-cooled until the introduction of the Type 996 in 1998, with Porsche's "993" series, produced in model years 1994–1998, being the last of the air-cooled Porsches.[3][4]

The 911 has been modified by private teams and by the factory itself for racing, rallying, and other forms of automotive competition. It is among the most successful competition cars. In the mid-1970s, naturally aspirated 911 Carrera RSRs won major world championship sports car races, such as Targa Florio and 24 Hours of Daytona, even against prototypes. The 911-derived 935 turbo also won the 24 Hours of Le Mans in 1979 and Porsche won World Championship for Makes titles in 1976, 1977, 1978 and 1979 with 911-derived models.
            </p>
            <br />
            <br />
            <br />
            <img src="images/CarreraGT.png" class="image logo" alt="URUS" align="center">
            <div class="thumbnails">
                <img src="images/CarerraGt.jpg" class="image model" alt="HURACAN">
            </div>
            <br>
            <br>
            <p>
                The Porsche Carrera GT (Project Code 980) is a mid-engine[4] sports car that was manufactured by German automobile manufacturer Porsche between 2004–2007.[5] Sports Car International named the Carrera GT number one on its list of Top Sports Cars of the 2000s, and number eight on Top Sports Cars of All Time list. For its advanced technology and development of its chassis the Popular Science magazine granted the "Best of What's New" award in 2003
            </p>
        </div>
        <img src="images/porsche918.jpg" class="image logo" alt="URUS" align="center">
        <div class="thumbnails">
            <img src="images/porsche918c.jpg" class="image model" alt="HURACAN">
        </div>
        <br>
        <br>
        <p>
            The Bugatti Divo is a mid-engine track focused sports car developed and manufactured by Bugatti Automobiles S.A.S. The car is named after French racing driver Albert Divo, who raced for Bugatti in the 1920s winning the Targa Florio race two times.[1]
        </p>
    </div>
     <h3>Leave a Comment</h3>
   <form action="link3.php" method="post" id="commentform">
       
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
 
 if($_POST['Submit']){
   print "<h1></h1>";

  $Name = $_POST['comment_author'];
  $Comment = $_POST['comment'];
  $Email = $_POST['email'];

  #Get old comments
  $old = fopen("comments3.txt", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("comments3.txt", "w+");
  $string = "<b>".$Name."</b> uid-<b>".$Email."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comments3.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);

?>

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
