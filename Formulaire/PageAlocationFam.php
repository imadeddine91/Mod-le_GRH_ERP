<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');
?>
<!DOCTYPE html>
<html lang="Fr">
<head>
<meta charset="utf-8">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
	    <!-- Custom styles for this template -->
           
            <link href="css/style.css" rel="stylesheet">
<title> Page_Allocation Famille </title>
</head>

<body>
<div id ="IR">
           <form action="../Post/Post_AlocationFam.php" method="POST">

 
  <legend> Allocation Famille </legend>
  <table style="text-align: center;" id="tabe1">
      <tr><td> Nombre d'Enfant</td><td><input type="texte"  id="Debut Tranche"  required name="Nbr_Enf"></td>
            <td> Mantant </td> <td><input type="texte"  id="Fin Tranche" required name="Mtn_Enf"></td>
        </tr>
	
	
    </table> 
  
    
	
	     <div id = "center">
		<button type="submit" class="btn btn-primary">Valider</button>
		
         </div>	
  
           </form>
      <?PHP
                     $req=$bdd->query("select * from allocations_familiales");
                   ?> 
  <div class="table-responsive">
               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>Nombre d'Enfant</th>
                            <th>Mantant</th>
    
                               <th>OPTION</th>
                           
                       </tr>  
                   </thead>
                   <?php  while($ligne=$req->fetch()) { ?>  
                   <tbody>
                        <tr>
                           <td><?php echo $ligne['nbr_enfan']?></td>
                            <td><?php echo $ligne['montant']?></td>
                          
                           
                            <td><a role="button" onClick="return confirmer(this,<?php echo $ligne['nbr_enfan']?>)">
                                           <span class="glyphicon glyphicon-trash"> Delete</span>
                                </a></td>
                           
                       </tr>
                        <?php }?>
              
                   </tbody>
                 </table>
            </div> 

</div>

<script> 
   
    function confirmer(element,id)
    {
      if(confirm("Voulez-vous vraiment supprimer ce cours ?"))
      {
        //element.setAttribute("href", 'post/confirmer.php?email='+email+'&id_cours='+id);
        element.href='../Post/Delete/Delet_AloFam.php?nbr_enfan='+id;
              return true;
      }
      return false;
    }
   </script>
</body>

</html>