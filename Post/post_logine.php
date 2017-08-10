<?php
session_start();

$username=$_POST['username'];

$password=$_POST['password'];

if($username&&$password)
{
      
   
    $connect =  mysql_connect("localhost","root","") ;
    mysql_select_db("projet_pfa_grh") or die("not conecte");
    $query =  mysql_query("select * from admin where username='$username'");
    
    $numrows=  mysql_num_rows($query);
    
    if($numrows!=0)
    {
        while ($row= mysql_fetch_assoc($query))
        {
            
            $dbusername =$row['username'];
              $dbpassword =$row['password'];
              $fonctio=$row['fonction'];
        }
        
        if($username==$dbusername&&$password==$dbpassword)
        {
           header("location:../main_principale.php");
            $_SESSION['username']=$dbusername;
             $_SESSION['fonction']=$fonctio;
            
        }else
        {
          header("location:../error_login.php");
        }
        
    }
    else
   header("location:../error_login.php");
    
}else
   header("location:../error_login.php");

?>

