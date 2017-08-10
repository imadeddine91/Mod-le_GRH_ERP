<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');
$id=$_GET['idContrat'];
        ob_start();

 ?>

<style type="text/css">
   
    #result{
        
        font-family: Arial;
    } 

    h3{
        font-size: 30px;
        width: 100%;
        text-align: center;
        color:#0000EE;
     }
  
     p{
         font-size: 18px;
        text-align: justify;
        font-style: italic;
        }

     
</style>

<page backtop="20mm"  backleft="10mm" backright="10mm" backbottom="30mm" style="border: 1px solid #a9db00"></page>

    
<h3 style="width:50%;"> Contrat de travail </h3>
<?PHP
                     $req=$bdd->query(" select * from employe where IdEmploye ='$id' ");
         ?> 
<br/>
 <?php  while($ligne=$req->fetch()) { ?>
<p>
      Entre l'entreprise  MAROC HRM <div class="result"> <?php echo ''; ?></div> et Monsieur :   <div class="result"> <?php echo $ligne['Nom'] ?>  -  <?php echo $ligne['prenom'] ?></div> Il a été convenu ce qui suit:
    <br/>
    Monsieur  :  <div class="result"><?php echo $ligne['Nom'] ?>  -  <?php echo $ligne['prenom'] ?> </div> été engagé à compter du en qualité de
       
   dont les attriutions consisteront Les conditions de rémunération sont les suivantes :
    Il pourra y être mis fin à la volonté de l'une ou l'autre partie en observant un préavis à la volonté de l'une ou l'autre des parties.Le présent contrat ne deviendra  définitif qu’à l’expiration de la période d’essai.
    
    <br/><br/>
    
    Les parties au contrat s’engagent à respecter les clauses et dispositions de la convention collective et à se conformer aux prescriptions du règlement intérieur et aux lois et règlement en vigueur. 
    <br/><br/><
    Monsieur : <div class="result"> <?php echo $ligne['Nom'] ?>  -  <?php echo $ligne['prenom'] ?> </div>  déclare expressément n’être lié actuellement à aucune 
    autre entreprise et avoir quitté son précédent emploi libre de tout engagement et en 
    conformité avec la législation et les règlements relatifs à l’emploi de la main-d’œuvre. 
    <br/><br/><br/><br/><
    Fait en double exemplaire à . OUJDA  <div class="result"><?php echo ''; ?> </div> , le <div class="result"> <?php echo date('l jS \of F Y ');; ?> </div> 

 
 </p>
   <?php }?>





                <?php
                
                $content = ob_get_clean();


                require_once('html2pdf/html2pdf.class.php');
                try 
                      {
                    $html2pdf = new HTML2PDF('P', 'A4', 'fr');
                    $html2pdf->WriteHTML($content);
                    $html2pdf->Output('exemple.pdf');
                      } 
                    catch (HTML2PDF_exception $e)
                    {
                    die($e);
                    }
                ?>

