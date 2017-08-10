<?php



$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$refEmply = $_POST['refEmply'];
$NbrHeut =$_POST['NbrHeut'];
$nbrS25 =$_POST['nbrS25'];
$Nbr50 =$_POST['Nbr50'];
$Nbr100 =$_POST['Nbr100'];
$idbf =$_POST['idBulttien'];


 
 
 $sql_str="UPDATE  `projet_pfa_grh`.`bulletinpaie` SET  `NbrHeurTravailles` =  '$NbrHeut',
`NbrHeurSup50` =  '$Nbr50',
`NbrHeurSup100` =  '$Nbr100',
`NbrHeurSup25` =  '$nbrS25' WHERE  `bulletinpaie`.`IdBulletin` ='$idbf';";

             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/Bullteidepaie.php');
             }
               else
                {
                   header('location:../error.php');
                }


?>





