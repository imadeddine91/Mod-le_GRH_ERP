<?php 
$username ="root";
$password = "";
$hostname = "localhost";

$dbhandle = mysql_connect($hostname, $username,$password) or die("could not connect to database");
$selected = mysql_selectdb("pfa_grh", $dbhandle);
$myusername = $_POST['user'];
$mypassword = $_POST['password'];

$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);

$query = "select * from admin where username='$myusername' and password='$mypassword' ";
$result = mysql_query($query );

$count = mysql_num_rows($result);
mysql_close();
if($count==1)
{
    header("location:Main.php");
}
else
    echo("incorect username or password");

?>



