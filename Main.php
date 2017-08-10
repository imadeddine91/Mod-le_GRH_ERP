



<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		
		<title>Gestion Des Ressources Humaines</title>
		
                <link rel="stylesheet" href="css/styles.css">
                <link rel="stylesheet" href="bootstrap-3.3.4-dist/css/bootstrap.min.css">
               
                <script src="bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
                <script src="jqry/jquery-1.11.2.min.js"></script>
                 
                 
                 <link rel="stylesheet/less" type="text/css" href="LESS/style.less" />
                 <script type="text/javascript" src="LESS/less.min.js"></script> 
                 
                 
                 <link rel="stylesheet"  href="dist/semantic.min.css" />
                      <script type="text/javascript" src="dist/semantic.min.js"></script> 
                 
                 
                 
                 
                 
		
	</head>
        <body id="bod" >
   
    <header class="main-header">  
    
           
       
 <div class="dropdown">
     <p></p>
     
     <div id="btnlogin">
   <div class="ui red button">Logout</div>
  
 </div>
     
      </div>

    </header>      
    
    <section class="menuver">     
  <div class="ui action input">
  <input type="text" placeholder="Search...">
  <button class="ui icon button">
    <i class="search icon"></i>
  </button>
</div>
  
<div id="container">

	<ul class="menu">
            <li class="item1"> <a  href="#"><span class="Calculator"></span> Accueil </a>
			<ul>
				
			</ul>
		</li>
                <li class="item2"><a href="#">Ressources Humaines</a> 
			<ul>
				<li class="subitem1"><a href="#">Employés</a></li>
                                <li class="subitem2"><a href="#">Contrats</a></li>
                                <li class="subitem3"><a href="#">Evalution RH</a></li>
				
			</ul> 
                    
                    <li class="item3"><a href="#">Paye</a>
			<ul>
				<li class="subitem1"><a href="#">Bulletin de Paie</a></li>
				<li class="subitem2"><a href="#">Livre de Paie</a></li>
                                <li class="subitem3"><a href="#">Attestation</a>
                                    <ul>
                                        <li class="subitem11"><a href="#">Certificat de travail</a></li>
                                        <li class="subitem12"><a href="#">Contrat de Travail</a></li>
                                        <li class="subitem13"><a href="#">Reçu pour Solde</a></li>
                                        
                                    </ul>
                                
                                
                                </li>
                                
                                
			</ul>
		</li>
                    
		</li>
		<li class="item4"><a href="#">Configuration</a>
			<ul>
                                <li class="subitem8"><a href="#">IR</a></li>
			        <li class="subitem11"><a href="#">AMO</a></li>	
                                <li class="subitem2"><a href="#">CNSS</a></li>
				<li class="subitem3"><a href="#">CIMR</a></li>
                                <li class="subitem6"><a href="#">Anciennete</a></li>
				<li class="subitem7"><a href="#">Paramétre_Social</a></li>
                                <li class="subitem8"><a href="#">Allocation_Famille</a></li>
                              
                               
                             
                                
			</ul>
		</li>
                
                <li class="item5"><a href="#">Calendrier</a>
                    
                    
                </li>
		
	</ul>

</div>
    </section>

<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
	
	    var menu_ul = $('.menu > li > ul'),
	           menu_a  = $('.menu > li > a');
	    
	    menu_ul.hide();
	
	    menu_a.click(function(e) {
	        e.preventDefault();
	        if(!$(this).hasClass('active')) {
	            menu_a.removeClass('active');
	            menu_ul.filter(':visible').slideUp('normal');
	            $(this).addClass('active').next().stop(true,true).slideDown('normal');
	        } else {
	            $(this).removeClass('active');
	            $(this).next().stop(true,true).slideUp('normal');
	        }
	    });
	
	});
</script>




       

</body>
</html>