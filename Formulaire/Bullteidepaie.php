<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');
session_start();

$dbusername =$_SESSION['fonction'];

?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <link rel="stylesheet" type="text/css" href="css/stylestruc.css">
  
 <link href="./../include/css/bootstrap.css" rel="stylesheet">
 <link href="./../include/css/sb-admin.css" rel="stylesheet">
 <link href="./../include/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 

 
 <script src="../jqry/bootbox.min.js"></script>
<link href="css/style.css" rel="stylesheet">
<title> Contrat </title>
 



	   

 


</head>
<body>
<div class="contre">

     
     <div class="bardroit">
     
      <nav class="navbar navbar-inverse navbar-fixed-top" id="abs" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
                <a href="" title="Grand application de gestion "><img class="navbar-bran" width=225px height="60px" src="Original.png"></a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
              
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" title="voulez-vous déconecter"><i class="fa fa-user"></i> <?php echo $_SESSION['fonction']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../index.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
          
        </nav>
     
     
     </div>


  <div class="menuvert">
        <div class="colonegauche">
   
<div id="wrapper">

        <!-- Navigation -->
       
           
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="../main_principale.php"><i class="fa fa-home"></i> Accueil</a>
                    </li>
                    <?php   if($dbusername=='Respensable-GRH') {?>
                    <li>
                        <a  href="Liste Employe.php" ><i class="fa fa-users"></i> Employé</a>
                        
                       
                    </li>
                    <li>
                        <a  href="page_contrat.php" ><i class="fa fa-file-text"></i> Contrat</a>
                        
                       
                    </li>
                    
                    <?php } ?>
                    <li>
                        <a href="Bullteidepaie.php"><i class="fa fa-file-text-o"></i> Bulltie de Paie</a>
                    </li>
                   
                   
                    

                   <li>
                    <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-cog"></i> Configuration </a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a style="font-size: 15px ;color: background ;font-weight: bold;font-style: italic" href="pageIR.php"><i class="fa fa-plus-circle"></i> IR</a>
                            </li>
                            <li>
                                <a style="font-size: 15px ;color: background ;font-weight: bold;font-style: italic" href="pageAMO.php"><i class="fa fa-plus-circle"></i> AMO</a>
                            </li>
                             <li>
                                 <a style="font-size: 15px ;color: background ;font-weight: bold;font-style: italic" href="PageCNSS.php"><i class="fa fa-plus-circle"></i> CNSS</a>
                            </li>
                             <li>
                                 <a style="font-size: 15px ;color: background ;font-weight: bold;font-style: italic" href="PageCNSS.php"><i class="fa fa-plus-circle"></i>  CIMR</a>
                            </li>
                             <li>
                                 <a style="font-size: 15px ;color: background ;font-weight: bold;font-style: italic" v href="PageAnciente.php"> <i class="fa fa-plus-circle"></i>Ancienneté</a>
                            </li>
                             <li>
                                 <a style="font-size: 15px ;color: background ;font-weight: bold;font-style: italic" href="pageParametresocial.php"><i class="fa fa-plus-circle"></i> Paramétre Social</a>
                            </li>
                        </ul>
                    </li>
                    
                    <li>
                      
  <a id="dLabe"  href="" data-toggle="dropdown" aria-haspopup="true"  aria-expanded="false">
    <i class="fa fa-money"></i>
      Prime Salaire
    
  </a>

  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel" >
   <li style="">
       <a  style="font-size: 15px ;color: background ;font-weight: bold;font-style: italic"  href="prime.php"><i class="fa fa-plus-circle"></i>__Prime</a>
                            </li>
                            <li>
                                <a style="font-size: 15px ;color: background ;font-weight: bold;font-style: italic"  href="avantage.php"><i class="fa fa-plus-circle"></i>  Avantage</a>
                            </li>
                             <li>
                                 <a style="font-size: 15px ;color: background ;font-weight: bold;font-style: italic"  href="page_indemenite.php"><i class="fa fa-plus-circle"></i>  Indemnité</a>
                            </li>
  </ul>
 
                    </li>



                    <li>
                       
                        
                       
                    </li> 
                    
                </ul>
            </div>
            

    </div>
         </div>
        <div class="colonedroit">
            
          
      <div id ="IR">
        <form action="../Post/Post_add_Bullteinpaie.php" method="POST">
        <div class="Heure_Normale">
              <fieldset>
              <legend> Heure Normale </legend>  
                <table class="toptable" >
                    <tr>
                        <td> Réference Employe</td>
                        
                        <td>
                            <?PHP
                     $req=$bdd->query("select IdEmploye from employe ");
                     ?> 
                          <select name="refEmply" size="1" >
                               <?php  while($ligne=$req->fetch()) { ?> 
                                 <option><?php echo $ligne['IdEmploye']?></option><?php }?>
                            </select>
                        </td>
                      
                        <td> Nombre Heure Travailles</td><td><input type="number"  id="nbrheurTravail" name="NbrHeut" required></td>
                    
                    </tr>    
                </table>  
              </fieldset> 
            </div>
            
            <div class="Heure_Supplémentaire">  
                <fieldset>
              <legend> Heure Supplémentaire </legend>  
              <table class="toptable">
                  <tr><td>Nombre heure Sup25 </td><td><input type="number"  id="nbrheru25" name="nbrS25" required></td>
                      <td>Nombre heure Sup50</td><td><input type="number"  id="nbrheru50" name="Nbr50"  required></td>
                      <td>Nombre heure Sup100</td><td><input type="number"  id="nbrheru100" name="Nbr100" required></td></tr>
                 </table>
                </fieldset>
                 
            </div>  
          
            
            <table style="text-align: center">
                <tr><td > <div id = "center">
		<button type="submit" class="btn">Valider</button></td> 
		
         </div>	
           <td><div id = "center">
                   
                    <button type="reset" class="btn"> Annuler</button></td> 
		
         </div>
                
                </tr>
            </table>
            </form>


            

      <?PHP
                     $req=$bdd->query("select * from bulletinpaie");
         ?>     
           
        
        <div class="table-responsive">
            <table class="table table-hover" table border="5" style="text-align: center;">
                   <thead>
                       <tr>
                           <th>id bulletinpaie </th>
                            <th>Réference Employe</th>
                            <th>Nombre des heures travailles</th>
                            
                            <th>Option</th>
                       </tr>  
                   </thead>
                    <?php  while($ligne=$req->fetch()) { ?>
                   <tbody>
                        <tr>
                           <td><?php echo $ligne['IdBulletin']?></td>
                            <td><?php echo $ligne['IdEmploye']?></td>
                            <td><?php echo $ligne['NbrHeurTravailles']?></td>
                            
                            <td><a role="button" onClick="return conf(this,<?php echo $ligne['IdEmploye']?>)">
                                   <i class="fa fa-print"></i> Emprimer</a>
                            <a role="button" onClick="return confirmer(this,<?php echo $ligne['IdBulletin']?>)">
                               <i class="fa fa-trash-o"></i> Delete</a>
                               <a role="button" onclick="return edit(this,<?php echo $ligne['IdBulletin']?>)"> <i class="fa fa-pencil-square-o"></i> Edit</a>
                            </td> 
                       </tr>
                       
                       <?php }?>
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
        element.href='../Post/Delete/Delete_BulltiePaie.php?IdBulletin='+id;
              return true;
      }
      return false;
    }
    
    
    function conf(ele,id)
    {
      if(confirm("Voulez-vous vraiment imprimeer ce ficher ?"))
      {
        //element.setAttribute("href", 'post/confirmer.php?email='+email+'&id_cours='+id);
        ele.href='../EtatEmprition/DEVI.php?IdEmploye='+id;
              return true;
      }
      return false;
    }
    
    function edit(ele,id)
    {
      
      ele.href='EditeBulltiePaie.php?IdBulletin='+id;
              return true;
     
    }
    
    
   </script>

   <script src="./../include/js/jquery.js"></script>
<script src="./../include/js/bootstrap.min.js"></script>


</html>
