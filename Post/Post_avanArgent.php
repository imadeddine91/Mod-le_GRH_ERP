<?php



$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$refemp = $_POST['refEmply'];
$typeavantage =$_POST['typeavantage'];
$MT_avantage =$_POST['MT_avantage'];






 
 
 
 
 
 $sql_str="INSERT INTO `avantage_argent`(`IdAvantageArgent`,`IdEmploye` ,`Type_Avantage_arg`,`Montant_Avan_arg`) VALUES (null,'$refemp','$typeavantage','$MT_avantage')";

             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/avantage.php');
             }
               else
                {
                   header('location:../error.php');
                }


?>



