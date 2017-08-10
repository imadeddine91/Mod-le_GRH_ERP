<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['TauxAMOsalarial'];



      $req = $bdd->exec("DELETE FROM `amo` where TauxAMOsalarial=".$id);

             if ($bdd->exec($req))
             {
                 echo 'heloo';
             }
               else
                {
                    header('location:../../Formulaire/pageAMO.php');
                }
?>
