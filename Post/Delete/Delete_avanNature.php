<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['IdAvantageArg'];



      $req = $bdd->exec("DELETE FROM `avantage_nature` where IdAvantageArg=".$id);

             if ($bdd->exec($req))
             {
                 echo 'heloo';
             }
               else
                {
                    header('location:../../Formulaire/avantage.php');
                }
?>
