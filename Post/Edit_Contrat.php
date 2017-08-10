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
$idcontrat=$_POST['idcontrat'];






 
$sql_str="UPDATE  `projet_pfa_grh`.`contrat` SET  `DateEmbauche` =  '$dateEmch',
`FrequencePaie` =  '$fcensepaie',
`BasePaie` =  '$basepaie',
`ModeRegelemnt` =  '$moderegle',
`SalaireBase` =  '$salairbase',
`TypeContart` =  'CDD' WHERE  `contrat`.`idContrat` ='$idcontrat' AND  `contrat`.`id_Employe` ='$refEmply'";
 


             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/page_contrat.php');
             }
               else
                {
                   header('location:../error.php');
                }


?>
