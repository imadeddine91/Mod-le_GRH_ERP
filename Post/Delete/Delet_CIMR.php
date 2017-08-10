<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['idCIMR'];



      $req = $bdd->exec("DELETE FROM `cimr` where idCIMR=".$id);

             if ($bdd->exec($req))
             {
                 echo 'heloo';
             }
               else
                {
                    header('location:../../Formulaire/pageCIMR.php');
                }
?>
