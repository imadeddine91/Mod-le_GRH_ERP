<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['IdAvantageArgent'];



      $req = $bdd->exec("DELETE FROM `avantage_argent` where IdAvantageArgent=".$id);

             if ($bdd->exec($req))
             {
                 echo 'heloo';
             }
               else
                {
                    header('location:../../Formulaire/avantage.php');
                }
?>
