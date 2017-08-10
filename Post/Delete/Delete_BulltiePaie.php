<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['IdBulletin'];



      $req = $bdd->exec("DELETE FROM `bulletinpaie` where IdBulletin=".$id);

             if ($bdd->exec($req))
             {
               header('location:../../Formulaire/CONFIRM_DELET_BulttinPaie.php');
             }
               else
                {
                   header('location:../../Formulaire/Bullteidepaie.php');
                }
?>
