<?php
 
$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$Nbr_Enf =$_POST['Nbr_Enf']; 
 $Mtn_Enf =$_POST['Mtn_Enf']; 
 

                
    
                
                $sql_str="INSERT INTO `allocations_familiales`(`nbr_enfan`,`montant`) VALUES ('$Nbr_Enf','$Mtn_Enf')";
 


             if ($bdd->exec($sql_str))
             {
                   header('location:../Formulaire/PageAlocationFam.php');
             }
               else
                {
                   header('location:../error.php');
                }

        
?>

