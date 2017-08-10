<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['TauxSalarial'];



      $req = $bdd->exec("DELETE FROM `CNSS` where TauxSalarial=".$id);

             if ($bdd->exec($req))
             {
                 echo 'heloo';
             }
               else
                {
                    header('location:../../Formulaire/pageCNSS.php');
                }
?>
