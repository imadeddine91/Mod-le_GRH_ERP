<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$TauxSalarial = $_POST['tau_CNSS_Sal'];
$Plafond_Salarial =$_POST['plaf_CNSS'];
$Taux_Patronal=$_POST['tau_CNSS_Pla'];





 
 
 
 
 
 $sql_str="INSERT INTO `cnss`(`TauxSalarial`,`PlafondSalarial` ,`TauxPatronale`) VALUES ('$TauxSalarial','$Plafond_Salarial','$Taux_Patronal')";

             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/CNSS-CONFIRE.php');
             }
               else
                {
                   header('location:../error.php');
                }


?>

