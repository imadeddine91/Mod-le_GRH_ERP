<?php



$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$Heure_Jour = $_POST['Nbr_heuJour'];
$Heure_Mois =$_POST['Nbr_heuMois'];
$horaire_Normal =$_POST['Tau_horNor'];
$Taux_Assurance=$_POST['Tau_AssurNormal'];;






 
 
 
 
 
 $sql_str="INSERT INTO `ParameSocial`(`nbrHeureJour`,`nbrHeurMois`,`TauxHoraireNormal`,`TauxAssuranceNormal`) VALUES ($Heure_Jour,$Heure_Mois,$horaire_Normal,$Taux_Assurance)";
 


             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/pageParametresocial.php');
             }
               else
                {
                   header('location:../error.php');
                }


?>





