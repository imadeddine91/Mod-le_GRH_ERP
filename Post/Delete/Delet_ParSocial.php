<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['nbrHeureJour'];



      $req = $bdd->exec("DELETE FROM `ParameSocial` where nbrHeureJour=".$id);

             if ($bdd->exec($req))
             {
                 echo 'heloo';
             }
               else
                {
                    header('location:../../Formulaire/pageParametresocial.php');
                }
?>
