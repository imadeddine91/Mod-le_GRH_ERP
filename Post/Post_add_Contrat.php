<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$refEmply = $_POST['refEmply'];
$typecont =$_POST['typecont'];
$refprof =$_POST['refprof'];
$basepaie =$_POST['basepaie'];
$moderegle=$_POST['moderegle'];
$dateEmch=$_POST['dateEmch'];
$fcensepaie=$_POST['fcensepaie'];
$salairbase=$_POST['salairbase'];






 
$sql_str="INSERT INTO `contrat`(`id_Employe`,`Profession_id_profession`,`DateEmbauche`,`FrequencePaie`,`BasePaie`,`ModeRegelemnt`,`SalaireBase`,`TypeContart`)"
        . " VALUES ('$refEmply','$refprof','$dateEmch','$fcensepaie','$basepaie','$moderegle','$salairbase','$typecont')";
 


             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/page_contrat.php');
             }
               else
                {
                   header('location:../error.php');
                }


?>
