
<!DOCTYPE HTML>

<html>
	<head>
		<title>Online Blog</title>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body id="top">

            <section id="banner" data-video="images/banner.jpg">
                <div class="inner">
                    <header>
                        <form method="post" action="">
                                <label><h2>Name</h2><input type="text" name="un"></label>
                                <label><h2>Password</h2><input type="password" name="pw"></label>
                                <label><input type=submit name="sub" value="Login"></label>
                                <p>if you dont have an existing account, <a href="formtryi.html" style="color:blueviolet"><br>Signup</a></p>
                        </form>
                        
                    </header>
                    <footer>
                        <div class="inner">
                    <h2>Team Astra</h2>
                    <p>Sujay Gad, Mayur R Baggan, Jnanesh D</p>
                        </div>
                    </footer>
                </div>
    </section>
</body>
</html>
<?php
extract($_POST);
if(isset($_POST['sub']))
{


$lines=file("file.txt");

foreach($lines as $x)
{
    

    $arr=explode(":",$x);
    $user=NULL;
    $pass=NULL;
    list($user,$pass)=explode(":",$x);
    //print_r($user,$pass);
    //echo $user;
    //echo $_POST['un'];
    $password=trim($pass);
    echo $_POST['pw'];
    echo $password;
    if($_POST['un']==$user && $_POST['pw']==$password)
    {
        echo "<script>
		alert('user is valid');	
		</script>";
        session_start();				//creates a session
	    $_SESSION['name']=$un;
        echo "<script>location.href='index2.php';</script>";
	
		
	    session_start();				//creates a session
	    $_SESSION['name']=$un;					//creates a session var named name and initializes its value to $un ; Ex: name=vinayaka 
	    echo "<br><br>session created with name ".$_SESSION['name'];
        echo "<br><br><br>   <a href='index2.html'>next</a>";
        break;
	echo "<br><br><br>   <a href='index2.html'>next</a>";
	}
    }
    /*
    if($arr[0]==$un)
	{
		echo "<script>
		alert('user is valid');	
		</script>";
        echo "<script>
		alert('session started');	
		</script>";
        echo "user $un logged in ";
	    session_start();				//creates a session
	    $_SESSION['name']=$un;
        echo "<script>location.href='index2.php';</script>";
	
		
	    session_start();				//creates a session
	    $_SESSION['name']=$un;					//creates a session var named name and initializes its value to $un ; Ex: name=vinayaka 
	    echo "<br><br>session created with name ".$_SESSION['name'];
        echo "<br><br><br>   <a href='index2.html'>next</a>";
        break;
	echo "<br><br><br>   <a href='index2.html'>next</a>";
	}
else*/

   {
	 echo "<script>alert('user is invalid');
		location.href='login.php';
		</script>";
	}
}

?>
</body>
</html>