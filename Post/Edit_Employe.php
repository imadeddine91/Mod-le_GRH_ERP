<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$Matricule=$_POST['Matricule']; 
$Nom=$_POST['Nom']; 
$prenome=$_POST['prenome'];
$cin=$_POST['CIN'];
//$id=$_POST['IdEmploye'];
//$refep=$_SESSION['IdEmploye'];
 


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



$sql_str="UPDATE  `projet_pfa_grh`.`employe` SET  `Matricule` =  '$Matricule',
`Nom` =  '$Nom',
`prenom` =  '$prenome',
`CIN` =  '$cin',
`Adresse` =  '$addres',
`Date_naissance` =  '$datenais',
`Sexe` =  '$sexe',
`SituationFamiliale` =  '$situfam',
`NbrEnfants` =  '$nbrEnfa',
`Email` =  '$email',
`Tel` =  '$tel',
`CompteBancaire` =  '$comptbanq',
`NumCnss` =  '$numcnss',
`NumCimr` =  '$nucimr',
`NulMutuelle` =  '$nummut' WHERE   `employe`.`Matricule` =  '$Matricule';";
 


             if ($bdd->exec($sql_str))
             {
                
                   header('location:../Formulaire/Liste Employe.php');
                   
             }
               else
                {
                   header('location:../error.php');
                }


?>
