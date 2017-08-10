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
<title> Contrat </title>
</head>
                   
<body>  
 <div id ="IR">            
<fieldset>
    <form action="../Post/Post_add_Contrat.php" method="POST">
  <legend> Contrat </legend>
  <table class="toptable">
       <tr>
            <td> Reférence Employe </td>
                <td>
                     <?PHP
                     $req=$bdd->query("select IdEmploye from employe ");
                     ?> 
                          <select name="refEmply" size="1" >
                               <?php  while($ligne=$req->fetch()) { ?> 
                                 <option><?php echo $ligne['IdEmploye']?></option><?php }?>
                            </select>
                 </td>
              
         <td> Type de contrat </td><td><input type="text"  id="typContrat " name="typecont"  required></td>
         
         
         
           <?PHP
                     $req=$bdd->query("select id_profession from profession ");
           ?>  
         <td>  Profession </td>
         
         <td> 
                 <select name="refprof">
                 <?php  while($ligne=$req->fetch()) { ?> 
                 <option><?php echo $ligne['id_profession']?></option><?php }?>
                </select>
         </td>
        
        </tr>
        <tr><td> BasePaie </td><td><input type="text" id="BasePaie" name="basepaie" required></td>
            <td> ModeReglement</td><td><input type="text" id="ModeReglement" name="moderegle" required></td>
          <td> DateEmbauche </td><td><input type="Date"  id="inp_blue" name="dateEmch" required></td>
        <tr>
            <td> FrequencePaie </td><td><input type="text" id="FrequencePaie" name="fcensepaie" required></td>
            <td>SalaireBase </td><td><input type="number" id="SalaireBase" name="salairbase"  required></td></tr>
            
            <td><div id = "center">
                    <button type="submit" class="btn">Valider</button>
		
         </div></td>
        </tr>

  </table> 
    </form>
</fieldset>
      <?PHP
                     $req=$bdd->query("select * from contrat");
         ?>     
           
        
        <div class="table-responsive">
               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>id de contrat</th>
                            <th>Réferance Employe</th>
                            <th>DateEmbauche</th>
                            <th>Type de contrat </th>
                            <th>SalaireBase </th>
                            <th>Option</th>
                       </tr>  
                   </thead>
                   
                    <?php  while($ligne=$req->fetch()) { ?>
                   <tbody>
                        <tr>
                           <td><?php echo $ligne['idContrat']?></td>
                            <td><?php echo $ligne['id_Employe']?></td>
                            <td><?php echo $ligne['DateEmbauche']?></td>
                            <td><?php echo $ligne['TypeContart']?></td>
                            <td><?php echo $ligne['SalaireBase']?></td>
                            <td>
                                
                                <a role="button" onClick="return conf(this,<?php echo $ligne['idContrat']?>)">
                                   <i class="fa fa-print"></i> Emprimer</a>
                                
                                <a role="button" onClick="return confirmer(this,<?php echo $ligne['idContrat']?>)">
                                <span class="glyphicon glyphicon-trash"> Delete</span></a>
                            </td> 
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
        element.href='../Post/Delete/Delet_contrat.php?idContrat='+id;
              return true;
      }
      return false;
    }
    
    
    
    function conf(ele,id)
    {
      if(confirm("Voulez-vous vraiment imprimeer ce ficher ?"))
      {
        //element.setAttribute("href", 'post/confirmer.php?email='+email+'&id_cours='+id);
        ele.href='../EtatEmprition/Contra.php?idContrat='+id;
              return true;
      }
      return false;
    }
   </script>
</body>


</html>