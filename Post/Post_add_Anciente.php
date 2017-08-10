<?php



$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$Debut_Tranche = $_POST['debu_tar_ANc'];
$Fin_Tranche =$_POST['fin_tar_ANc'];
$Taux_Anciennete =$_POST['taux_ANc'];





 
 
 
 
 
 $sql_str="INSERT INTO `anciennete`(`DebutTranche`,`FinTranche` ,`TauxAnciennete`) VALUES ($Debut_Tranche,'$Fin_Tranche','$Taux_Anciennete')";

             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/PageAnciente.php');
             }
               else
                {
                   header('location:../error.php');
                }


?>



