<?php 
include './connecter.php';


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
      exit();
}
else {
      header("location:index.php");
      exit();
}
   
 

?>
<script>
function myFunction() {
    alert("Hello! I am an alert box!");
}
</script>
<?php
?>



