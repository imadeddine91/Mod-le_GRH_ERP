<?php



$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$ref = $_POST['refEmply'];
$typeprim =$_POST['typePrime'];
$nomprim =$_POST['nomPrimF'];
$valprim =$_POST['valeurPrif'];





 
 
 
 
 
 $sql_str="INSERT INTO `primesfixes`(`IdPrime`,`IdEmploye` ,`TypePrime`,`NomPrime`,`ValeurPrime`) VALUES (NULL,'$ref','$typeprim','$nomprim','$valprim')";

             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/prime.PHP');
             }
               else
                {
                   header('location:../error.php');
                }


?>





