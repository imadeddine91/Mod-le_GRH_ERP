<?php
$bdd = new PDO('mysql:host=localhost;dbname=projet_pfa_grh','root', '');
$id=$_GET['IdEmploye'];
                ob_start();
                
                
                
                ?>
<style type="text/css">
    table{width: 100%;
       
       border: 1px solid black; 
       border-collapse: collapse;
       font-size: 15px;
            }
    h3{width: 100%;
    text-align: center;
    color:#0000EE;
}
ul{
    text-decoration:none;
     list-style-type: none;
}
td{border: 1px solid black
       ;}
    
</style>
<page backtop="5mm"  backleft="5mm" backright="5mm" backbottom="5mm" style="border: 1px solid #a9db00"></page>
<h3 style="width:50%;"> BULLETIN DE PAIE</h3>
<?PHP
                     $req=$bdd->query("set @sar_base = 0;
set @prim_enc = 0;
set @sal_indem = 0;
set @total_gain = 0;
set @cnss = 0;
set @cimr = 0;
set @ir = 0;
set @assurance = 0;
set @total_retenus = 0;
set @net_paye = 0;
call projet_pfa_grh.MT_bulltien_paie('$id', @sar_base, @prim_enc, @sal_indem, @total_gain, @cnss, @cimr, @ir, @assurance, @total_retenus, @net_paye);
select @sar_base, @prim_enc, @sal_indem, @total_gain, @cnss, @cimr, @ir, @assurance, @total_retenus, @net_paye;
");
         ?> 
<table>
    <tbody>
    <tr >
        <td  style="background:#ffffcb;height: 50px; width:50% ;  text-align: center;"> ENTREPRISE ERMADEC </td>
        <td style="background:#ffffcb;width:50%; height: 50px; "> BULLETIN DE PAIE N°  1 </td>
    </tr>
    
    <tr> 
        <td width=50% style="background:#d9edf7;height: 35px; ">MATRICULE  : F15 </td>
        <td width=50% style="background:#d9edf7; height: 35px;"> NOM ET PRENOME : Boushaba Imad-eddine    </td>
   
    </tr>
     
    <tr> <td style="width:50% ;background:#d9edf7; height: 30px; "> ECHELLE : 10 </td>
        <td style="width:50% ;background:#d9edf7; height: 30px; "> N°CNSS : 1478520 </td></tr>
    <tr> <td style="background:#d9edf7; height: 30px; "> DATE DE NAISSANCE : 1991-02-05 </td>
        <td style="background:#d9edf7; height: 30px;"> DATE DE RECRUTEMENT :  </td>
        </tr>
    
        <tr>
            
            <td colspan="2" style="width:50% ;background:#ffffcb;  text-align: center; height: 35px; "> GAINS</td>
           
        </tr>
        <tr>
            <td style="width:50% ; height: 30px;"> LIBELLES</td>
            <td style="width:50% ; height: 30px; ">Montant</td>
            
        </tr>
        
        <tr>
            <td style="width:50% ;">
                <ul >
                    <li>Salaire de base</li>
                    <li>Prime d'ancienneté</li>
                    <li>Autre Prime   </li>
                    <li>Indemnnité</li>
                    
                </ul>
                
            </td>
            <td style="width:50% ;">
                <ul>
                <?php  while($ligne=$req->fetch()) { ?>    <li><?php echo $ligne['@sar_base']?> </li><?php }?>
                    <li><?php ?> 1800 DH</li>
                    <li><?php ?> 200 DH   </li>
                    <li><?php ?> 1100 DH </li>
                </ul>
            </td>
        </tr>
        
    <br/>
    
        <tr>
            
            <td colspan="2" style="width:50% ;background:#ffffcb;  text-align: center; height: 35px; "> Retenues</td>
           
        </tr>
        <tr>
            <td style="width:50% ;height: 30px;"> LIBELLES</td>
            <td style="width:50% ; height: 30px; ">Montant </td>
            
        </tr>
        
        <tr>
            <td style="width:50% ;">
                <ul >
                    <li>Cotisation CNSS</li>
                    <li>Cotisation CIMR</li>
                    <li>Assurance Group</li>
                    <li>IR</li>
                    
                </ul>
                
            </td>
            <td style="width:50% ;">
                <ul>
                    <li>200 DH<?php ?></li>
                    <li>450 DH<?php ?></li>
                    <li>200 DH<?php ?>   </li>
                    <li>320 DH<?php ?></li>
                </ul>
            </td>
        </tr>
        <tr>
            <td style="width:50%; height: 35px;;">Totale des gains 4500 </td>
            <td style="width:50%; height: 35px;;">Totale des retenus 1170 DH</td>
        </tr>
      
     <tr>
            
            <td colspan="2" style="width:50% ;background:#ffffcb; height: 35px; "> NET A PAYER                 3330 DH  </td>
           
        </tr>
        
        <tr>
            <td colspan="2" style="width:50% ;background:#d9edf7;  ">
                
                <ul>
                    <li>MODE PAIEMENT : Verement bancaire</li>
                    <li> Compte N° : 1478522</li>
                    <li>  Banaque : BMCE</li>
                    
                </ul>
            </td>
        </tr>
    
    </tbody>
   
</table>

                <?php
                $content = ob_get_clean();


                require_once('html2pdf/html2pdf.class.php');
                try {
                    $html2pdf = new HTML2PDF('P', 'A4', 'fr');
                    $html2pdf->WriteHTML($content);
                    $html2pdf->Output('exemple.pdf');
                } catch (HTML2PDF_exception $e) {
                    die($e);
                }
                ?>