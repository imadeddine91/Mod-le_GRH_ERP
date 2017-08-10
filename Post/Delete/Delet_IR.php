<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['DebutTranche'];



      $req = $bdd->exec("DELETE FROM `ir` where DebutTranche=".$id);

             if ($bdd->exec($req))
             {
                 echo 'heloo';
             }
               else
                {
                    header('location:../../Formulaire/pageIR.php');
                }
?>
