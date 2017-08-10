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
            
     <div id ="IR">
     <fieldset>  
         <form action="../Post/Poste_indemnite.php" method="POST">

  <legend> indemnité </legend>
  
  <table style="text-align: center;" id="tabe1">
      <tr><td> Reférence Employe </td>
                <td>
                     <?PHP
                     $reqqq=$bdd->query("select IdEmploye from employe ");
                     ?> 
                          <select name="refEmply" size="1" >
                               <?php  while($lignee=$reqqq->fetch()) { ?> 
                                 <option><?php echo $lignee['IdEmploye']?></option><?php }?>
                            </select>
                 </td>
          
          
          
                 <td> Type d'indemnité</td><td><input type="text"  id="Type_indemnite" name="typeindemi"  required></td></tr>
      <tr><td>Valeur d'indemnité </td><td><input type="texte" id="valeur_indemnite" name="valindemnite" required></td>
          <td> Date d'indemnité</td><td><input type="Date"  id="Date_indenite" name="dateindemnite" required></td></tr>
	
    </table> 
  
    
	
	     <div id = "center">
		<button type="submit" class="btn">Valider</button>
		
         </div>	
  
  </form>
   </fieldset>  
      
       
      <?php
                    $req=$bdd->query("select * from indeminité");
          ?>     
           
  <div class="table-responsive">
               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>Reférence Employe</th>
                            <th>Type d'indemnité</th>
                             <th> Valeur d'indemnité </th>
                              
                               <th>OPTION</th>
                           
                       </tr>  
                   </thead>
                   
                   
                 <?php  while($ligne=$req->fetch()) { ?>
                   <tbody>
                      
                
                       <tr>
                  <td><?php echo $ligne['Employe_IdEmploye']?></td>
                  <td><?php echo $ligne['Type_Indemnité']?></td>
                  <td><?php echo $ligne['Valeur_Indemnité']?></td>
                  
                           
                  <td>
                     
                      <a role="button" onClick="return confirmer(this,<?php echo $ligne['id_endmeti']?>)">
                                          <i class="fa fa-trash-o"></i>  Delete
                                </a>
                  </td>
                           
                       </tr>
                       
                        <?php } ?>
                   </tbody>
                 
                 </table>
            </div> 

</div> 
            
            
            
        
      
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
