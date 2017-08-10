<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['IdEmploye'];




      $req = $bdd->exec("DELETE FROM `employe` where IdEmploye=".$id);

             if ($bdd->exec($req))
             {
                 echo 'heloo';
             }
               else
                {
                    header('location:../../Formulaire/CONFIRM_DELET_EMPloy.php');
                }
     
     
?>