<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['IdPrime'];



      $req = $bdd->exec("DELETE FROM `primesfixes` where IdPrime=".$id);

             if ($bdd->exec($req))
             {
                 echo 'heloo';
             }
               else
                {
                    header('location:../../Formulaire/prime.php');
                }
?>
