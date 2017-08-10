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
            
            <tr>
                <td><div id = "center">
                    <button type="submit" class="btn">Valider</button>
                   
		
         </div></td>
         <td><div id = "center">
                   
                    <button type="reset" class="btn"> Annuler</button>
		
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
                            <td>   <a role="button" onClick="return conf(this,<?php echo $ligne['idContrat']?>)">
                                   <i class="fa fa-print"></i> Emprimer</a>
                                <a role="button" onclick="return edit(this,<?php echo $ligne['idContrat']?>)"> <i class="fa fa-pencil-square-o"></i> Edit</a>      
                                <a role="button" onClick="return confirmer(this,<?php echo $ligne['idContrat']?>)">
                                 <i class="fa fa-trash-o"></i> Delete</a>
                           
                                 
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
        element.href='../Post/Delete/Delet_contrat.php?idContrat='+id;
              return true;
      }
      return false;
    }
    
      function edit(ele,id)
    {
      
      ele.href='EditContrat.php?idContrat='+id;
              return true;
     
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

   <script src="./../include/js/jquery.js"></script>
<script src="./../include/js/bootstrap.min.js"></script>


</html>
