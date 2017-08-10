<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="css/stylestruc.css">
  
 <link href="./../include/css/bootstrap.css" rel="stylesheet">
 <link href="./../include/css/sb-admin.css" rel="stylesheet">
 <link href="./../include/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
 
 
 
<link href="css/style.css" rel="stylesheet">
<title> Page_indemnite </title>
 



	 

</head>
<body>
<div class="contre">

     
     <div class="bardroit">
     
   <?php include './../include/menu_barH.php'; ?>
     
     </div>


  <div class="menuvert">
        <div class="colonegauche">
    <?php include './../include/menu_bareGauche.php'; ?>

         </div>
        <div class="colonedroit">
            
      
            
            
            
        
      
       </div>
</div>

        </div>

        
  


</body>
<script> 
   
    function confirmer(element,id)
    {
      if(confirm("Voulez-vous vraiment supprimer ce cours ?"))
      {
        //element.setAttribute("href", 'post/confirmer.php?email='+email+'&id_cours='+id);
        element.href='../Post/Delete/Delet_IR.php?DebutTranche='+id;
              return true;
      }
      return false;
    }
   </script>


   <script src="./../include/js/jquery.js"></script>
<script src="./../include/js/bootstrap.min.js"></script>


</html>


