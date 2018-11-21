<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	a{
		color: red;
		text-align: center;
	}
</style>
	<title></title>
</head>
<body>
<?php
    if($_POST['pass']!=$_POST['conpwd'])
{
    echo "<script>alert('Password and Confirm password must be same')</script>";
    echo "<script>
		location.href='fori.php';
		</script>";
}
if ($_POST['Login']){

$myFile = "file.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = $_POST['name'] . ":".$_POST['pass'].PHP_EOL;
fwrite($fh, $stringData);

fclose($fh);
    echo "<script>
		location.href='login.php';
		</script>";

} 


?>

</body>
</html>
