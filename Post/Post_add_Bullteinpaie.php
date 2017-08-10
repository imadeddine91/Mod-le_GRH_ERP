<?php



$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$refEmply = $_POST['refEmply'];
$NbrHeut =$_POST['NbrHeut'];
$nbrS25 =$_POST['nbrS25'];
$Nbr50 =$_POST['Nbr50'];
$Nbr100 =$_POST['Nbr100'];


 
 
 $sql_str="INSERT INTO `bulletinpaie`(`IdEmploye`,`NbrHeurTravailles` ,`NbrHeurSup50`,`NbrHeurSup100`,`NbrHeurSup25`)"
         . " VALUES ('$refEmply','$NbrHeut','$Nbr50','$Nbr100','$nbrS25')";

             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/CONFIRM_Bulltein.php');
             }
               else
                {
                   header('location:../error.php');
                }


?>





