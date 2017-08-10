<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$Matricule=$_POST['Matricule']; 
$Nom=$_POST['Nom']; 
$prenome=$_POST['prenome'];
$cin=$_POST['CIN'];
 


$addres=$_POST['addres'];
$datenais=$_POST['datenais'];
$sexe=$_POST['sexe'];
 


$situfam=$_POST['situfam'];
$nbrEnfa=$_POST['nbrEnfa'];
$email=$_POST['email'];
$tel=$_POST['tel'];



$comptbanq=$_POST['comptbanq'];
$numcnss=$_POST['numcnss'];
$nucimr=$_POST['nucimr'];
$nummut=$_POST['nummut'];


$sql_str="INSERT INTO `employe`(`IdEmploye`,`Matricule`,`Nom`,`prenom`,`CIN`,`Adresse`,`Date_naissance`,`Sexe`,`SituationFamiliale`,`NbrEnfants`,`Email`,`Tel`,`CompteBancaire`,`NumCnss`,`NumCimr`,`NulMutuelle`) VALUES "
        . "(null,'$Matricule','$Nom','$prenome','$cin','$addres','$datenais','$sexe','$situfam','$nbrEnfa','$email','$tel','$comptbanq','$numcnss','$nucimr','$nummut')";
 


             if ($bdd->exec($sql_str))
             {
                
                   header('location:../Formulaire/CONFIRM_ADD_EMPLOY.php');
                   
             }
               else
                {
                   header('location:../error.php');
                }


?>
