<?php



$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$Taux_AMO_Salarial = $_POST['Taux_AmoS'];
$Taux_AMO_Patronale =$_POST['Taux_AmoPatr'];
$Taux_Participation =$_POST['Taux_patrAmo'];






 
 
 
 
 
 $sql_str="INSERT INTO `amo`(`TauxAMOsalarial`,`TauxAMOpartronale` ,`TauxParticipation`) VALUES ($Taux_AMO_Salarial,'$Taux_AMO_Patronale','$Taux_Participation')";

             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/PageAMO.PHP');
             }
               else
                {
                   header('location:../error.php');
                }


?>





