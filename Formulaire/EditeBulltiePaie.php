<?php

$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');

$id=$_GET['IdBulletin'];
//$refep=$_SESSION['$id'];
session_start();
$dbusername =$_SESSION['fonction'];

?>



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
                        <a href=../main_principale.php"><i class="fa fa-home"></i> Accueil</a>
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
            
          <?PHP
                     $req=$bdd->query("select * from bulletinpaie where IdEmploye='$id'");
         ?>  
      <div id ="IR">
          <form action="../Post/Edit_BulltiePaie.php" method="POST">
               <?php  while($ligne=$req->fetch()) { ?>
        <div class="Heure_Normale">
              <fieldset>
              <legend> Heure Normale </legend>  
                <table>
                    <tr>
     
      <td> Id Bulltien</td>
                        
     <td><input type="texte"  id="refEmply" name="idBulttien"  value="<?php echo $ligne['IdBulletin']?>"> </td>  
     
      <td> Réference Employe</td>
                        
     <td><input type="texte"  id="refEmply" name="refEmply"  value="<?php echo $ligne['IdEmploye']?>"> </td>
                        
     <td> Nombre Heure Travailles</td>
     <td><input type="number"  id="nbrheurTravail" name="NbrHeut" value="<?php echo $ligne['NbrHeurTravailles']?>"></td>
                    
                   </tr>    
               </table>  
              </fieldset> 
            </div>
            
            <div class="Heure_Supplémentaire">  
                <fieldset>
              <legend> Heure Supplémentaire </legend>  
              <table>
                  <tr><td>Nombre heure Sup25 </td><td><input type="number"  id="nbrheru25" name="nbrS25" value="<?php echo $ligne['NbrHeurSup25']?>"></td>
                      <td>Nombre heure Sup50</td><td><input type="number"  id="nbrheru50" name="Nbr50"   value="<?php echo $ligne['NbrHeurSup50']?>"></td>
                      <td>Nombre heure Sup100</td><td><input type="number"  id="nbrheru100" name="Nbr100"  value="<?php echo $ligne['NbrHeurSup100']?>"></td></tr>
                 </table>
                </fieldset>
                 
            </div>  
          
           
            
            <div id = "center">
		 <button type="submit" class="btn btn-primary">Eddit</button>
		
         </div>	
              <?php }?>
            </form>


            

     
        
        
        </div>
 
            
            
        
      
       </div>
</div>

        </div>

        
  


</body>




</html>
