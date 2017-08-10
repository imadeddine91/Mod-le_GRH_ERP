

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Employe</title>

    <!-- Bootstrap -->
    <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/sclorbarr.css" rel="stylesheet">
    <link href="css/StyleEmploye.css" rel="stylesheet">

   
  </head>
  <body>
      
   
      
      <div class="container">
          
          <div role="tabpanel">

  <!-- Nav tabs -->
  <div class="menubare">
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#Personnel" aria-controls="Personnel" role="tab" data-toggle="tab">Information Personnel</a></li>
    
    <li role="presentation"><a href="#Prime" aria-controls="Prime" role="tab" data-toggle="tab">Prime</a></li>
        <li role="presentation"><a href="#Avantage" aria-controls="Avantage" role="tab" data-toggle="tab">Avantage</a></li>
        <li role="presentation"><a href="#Indemnité" aria-controls="Indemnité" role="tab" data-toggle="tab">Indemnité</a></li>
       
    <li role="presentation"><a href="#Congés" aria-controls="Congés" role="tab" data-toggle="tab">Congés</a></li>
    

  </ul>
</div>
 
  <div class="tab-content">
    
      <div role="tabpanel" class="tab-pane active" id="Personnel">
         <form action="Post/Post_add_Employe.php" method="POST">  
        <fieldset>
            
             
            
 <table>
	
     <tr>  <td> Matricule  </td><td><input type="texte"  id="Matricule" name="Matricule"  required></td>
         <td> Nom  </td><td><input type="texte" id="Nom" name="Nom"  required></td>
          <td> Prenom  </td><td><input type="texte" id="Adresse" name="prenome" required></td>
         <td> CIN  </td><td><input type="texte" id="CIN" name="CIN"  required></td>
        
        
        </tr>
	<tr>
            <td> Adresse   </td><td><textarea rows="2" cols="19" style="resize: none; " name="addres"></textarea></td>
            <td> Date de naissance</td><td><input type="Date" id="date de naissance " name="datenais" required>
            <td> Citoyenneté</td><td><input type="texte" id="Cityonnete" name="cityennet"  required></td>
            <td> sexe</td><td><input type="texte" id="Adresse" name="sexe" required> </td>
             
         </tr>

	<tr>
            <td> Situation-familiale</td><td><input type="texte" id="Situation familiale" name="situfam" required></td>
            <td> Nbr-Enfant</td><td><input type="texte" id=" NbrEnfant" name="nbrEnfa"  required></td>
            <td>  Email</td><td><input type="texte" id=" Email" name="email"  required></td>
            <td>  Tel </td><td><input type="texte" id=" Tel INT" name="tel" required></td>
        </tr>
	<tr>
            <td>  CompteBancaire </td><td><input type="texte" id="  CompteBancaireINT " name="comptbanq" required></td>
            <td> Num-CNSS </td><td><input type="texte" id=" NumCnss" name="numcnss"  required></td><
            <td>   Num-CIMR</td><td><input type="texte" id=" NumCimr" name="nucimr" required></td>
            <td>   Num-Mituelle</td><td><input type="texte" id=" NumCimr" name="nummut"  required></td></tr>
       
    </table> 
            <div id = "center">
                <button type="submit" class="btn btn-primary">Valider</button>
		
         </div>
	
</fieldset>
         
             </form>

          
      </div>
     
      <div role="tabpanel" class="tab-pane" id="Prime">
          <fieldset>
              <legend style="text-align: center"> Primes Fixe </legend> 
             <table>
               <tr><td>Type de Prime </td><td><input type="texte" id="Type_PrimeF"  required></td>
               </tr>
               
                <tr><td> DateAffectation </td><td><input type="Date"  id="DateAffectationF"  required></td>
              
                </tr>  
               
               
             </table>
             <div class="center">
		<button type="button" class="btn btn-primary">Valider</button>
		
         </div>
          </fieldset>
           <fieldset>
             <legend style="text-align: center"> Primes variable </legend>  
             <table>
                <tr><td>Type de Prime </td><td><input type="texte" id="Type_PrimeV"  required></td>
                <td>Non de Prime </td><td><input type="texte" id="nom_PrimeV"  required></td></tr>
                <tr><td> DateAffectation </td><td><input type="Date"  id="DateAffectationV"  required></td>
                <td>valeur de Prime </td><td><input type="texte" id="valer_PrimeV"  required></td></tr>  
             </table>
              <div class = "center">
		<button type="button" class="btn btn-primary">Valider</button>
		
         </div>
          </fieldset>
          
          
          <div class="scrollbar" id="css_version">
      <div class="content">
  <div class="table-responsive">
               <table class="table table-hover">
                   <thead>
                       <tr>
                           <th>Type de Prime</th>
                            <th>Non de Prime</th>
                            <th>DateAffectation</th>
                            <th>valeur de Prime</th>
                             <th>Option</th>
                       </tr>  
                   </thead>
                   <tbody>
                        <tr>
                           <td>prime fixe</td>
                            <td>cadre</td>
                            <td>10/02/2012</td>
                            <td>500</td>
                            
                            <td><a href="#"> <span class="glyphicon glyphicon-print"> Emprimer</span></a><br/>
                            <a href="#"> <span class="glyphicon glyphicon-trash"> Delete</span></a>
                            </td> 
                       </tr>
                       
                      
                   </tbody>
                 </table>
            </div> 
      </div>
      </div>
          
          
          
      </div>
      
      <div role="tabpanel" class="tab-pane" id="Avantage">
          <div class="Avantage_argent">
          <fieldset>
              <legend> Avantage_argent</legend>
              <table>
                     <tr><td>Employe </td><td><input type="texte" id="idEmployeAVN"  required></td>
                        <td>Type d'avantage </td><td><input type="texte" id="Type_avantageArg"  required></td> 
                           <td>Montant d'avantage </td><td><input type="texte" id="Mantant_AvatgArg"  required></td></tr> 
              </table>
              
          </fieldset>
          </div>
          
          <div class="Avantage_nature">
              <fieldset>
                  <legend> Avantage_nature</legend>
                  <table>
                     <td>Employe </td><td><input type="texte" id="idEmployeNAT"  required></td>
                      <td>Type d'avantage </td><td><input type="texte" id="Type_avantageNat"  required></td>
                      <tr><td>Montant d'avantage </td><td><input type="texte" id="Mantant_AvatgNat"  required></td></tr> 
                      
                  </table>
              </fieldset>
              
          </div>
          
          
          
          
          
      </div>
      <div role="tabpanel" class="tab-pane" id="Bulletins">
          
             
          
                  
         
        
         
          <div class="bulltienpaie">
              <table>
                  
              </table>
              
              
          </div>
          
      </div >
      <div role="tabpanel" class="tab-pane" id="Congés">
         <fieldset>
             <legend> Congés </legend>  
             <table>
                <tr><td>Duré Conge </td><td><input type="texte" id="Duré_Conge"  required></td>
                <td> Date début </td><td><input type="Date"  id="Date_début"  required></td>
                <td>Type de Prime </td><td><input type="texte" id="Type_de_Prime"  required></td></tr>  
             </table>
          </fieldset> 
      </div>
      
      <div role="tabpanel" class="tab-pane" id="Indemnité">
          <div class="indemnité">
            <fieldset>
             <legend> Indemnité </legend>  
             <table>
                 <tr><td>Employe</td><td><input type="text" id="idEmploye"  required></td>
                <td> Type d'indemnité</td><td><input type="text"  id="Type_indemnite"  required></td></tr>
                <tr><td>Valeur d'indemnité </td><td><input type="texte" id="valeur_indemnite"  required></td>
                  <td> Date d'indemnité</td><td><input type="Date"  id="Date_indenite"  required></td></tr>
                  
             </table>
          </fieldset>   
          </div>
          
      </div>
  </div>

</div>
          
      </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jqry/jquery-1.11.2.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script  src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
  </body>
</html>
