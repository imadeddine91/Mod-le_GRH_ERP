<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['idContrat'];



      $req = $bdd->exec("DELETE FROM `contrat` where idContrat=".$id);

             if ($bdd->exec($req))
             {
               header('location:../../Formulaire/page_contrat.php');
             }
               else
                {
                   header('location:../../Formulaire/page_contrat.php');
                }
?>
