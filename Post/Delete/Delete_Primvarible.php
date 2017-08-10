<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['IdPrimesVariables'];



      $req = $bdd->exec("DELETE FROM `primesvariables` where IdPrimesVariables=".$id);

             if ($bdd->exec($req))
             {
                 echo 'heloo';
             }
               else
                {
                    header('location:../../Formulaire/prime.php');
                }
?>
