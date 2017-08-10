<?php



$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$Taux_CIMR_Salarial = $_POST['tau_CIMRs'];
$Taux_CIMR_Patronale =$_POST['tau_CIMRP'];






 
 
 
 
 
 $sql_str="INSERT INTO `cimr`(`idCIMR`,`TauxCIMRsalarial` ,`TauxCIMRpatronale`) VALUES (null,'$Taux_CIMR_Salarial','$Taux_CIMR_Patronale')";

             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/PageCIMR.php');
             }
               else
                {
                   header('location:../error.php');
                }


?>



