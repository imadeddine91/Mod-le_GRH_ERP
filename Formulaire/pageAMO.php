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
<title> Page_AMO </title>
 



	   

 


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
    <form action="../Post/Post_add_AMO.php" method="POST">
  <legend> AMO  </legend>
  <table style="text-align: center;" id="tabe1">
      <tr>   <td>Taux AMO Salarial</td><td><input type="texte"  id="Debut Tranche"  required name="Taux_AmoS"></td>
             <td> Taux AMO Patronale </td> <td><input type="texte"  id="Fin Tranche" required name="Taux_AmoPatr"></td>
        </tr>
        <tr>
            <td>Taux Participation</td><td><input type="texte"  id="Debut Tranche"  required name="Taux_patrAmo"></td>
            <td></td><td></td>
        </tr>
	
	
    </table> 
  
    
	
	     <div id = "center">
                 <button type="submit" class="btn btn-primary">Valider</button>
		
         </div>
  </form>
    </fieldset>
        
      <?PHP
                     $req=$bdd->query("select * from amo ");
                   ?> 
  <div class="scrollbar" id="css_version">
      <div class="content">
  <div class="table-responsive">
               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>Taux AMO Salarial</th>
                            <th>Taux AMO Patronale</th>
                            <th>Taux Participation</th>
                            <th>OPTION</th>
                           
                       </tr>  
                   </thead>
                   <?php  while($ligne=$req->fetch()) { ?>  
                   <tbody>
                        <tr>
                           <td><?php echo $ligne['TauxAMOsalarial']?></td>
                            <td><?php echo $ligne['TauxAMOpartronale']?></td>
                            <td><?php echo $ligne['TauxParticipation']?></td>
                            <td><a role="button" onClick="return confirmer(this,<?php echo $ligne['TauxAMOsalarial']?>)">
                                    <i class="fa fa-trash-o"></i> Delete</a></td> 
                       </tr>
              
                   </tbody>
                    <?php }?>
                 </table>
            </div> 
      </div>
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
        element.href='../Post/Delete/Delet_AMO.php?TauxAMOsalarial='+id;
              return true;
      }
      return false;
    }
   </script>


   <script src="./../include/js/jquery.js"></script>
<script src="./../include/js/bootstrap.min.js"></script>


</html>
