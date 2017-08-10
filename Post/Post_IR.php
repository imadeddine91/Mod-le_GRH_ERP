<?php




$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$Debut_Tranche = $_POST['Debu_Trch'];
$Fin_Tranche =$_POST['Fin_Trnch'];
$Somme_Reduire =$_POST['Somme_red'];
$Taux =$_POST['Taux_ir'];;






 
 
 
 
 
 $sql_str="INSERT INTO `ir`(`DebutTranche`,`FinTranche`,`SommeReduire`,`Taux`) VALUES ($Debut_Tranche,$Fin_Tranche,$Somme_Reduire,$Taux)";
 


             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/pageIR.php');
             }
               else
                {
                   header('location:../error.php');
                }


?>
