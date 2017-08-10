<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['nbr_enfan'];



      $req = $bdd->exec("DELETE FROM `allocations_familiales` where nbr_enfan=".$id);

             if ($bdd->exec($req))
             {
                 echo 'heloo';
             }
               else
                {
                    header('location:../../Formulaire/PageAlocationFam.php');
                }
?>
