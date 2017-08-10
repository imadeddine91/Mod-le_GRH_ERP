
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Application_GRH</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                <link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.c" rel="stylesheet">
                <link href="css/styleLogin.css" rel="stylesheet">
	</head>
	<body>
<div class="container-full" >

    <div class="row">
       
        <div class="col-lg-12 text-center v-center">
          
         
		  
          
            <form class="col-lg-12"  action="Post/post_logine.php" method="POST">
             <div class="input-group" style="width:320px;text-align:center;margin:0 auto;">
                 <div class="bor" style=" ">
                     <table align='center'> <tr><td><img class="navbar-bran" width=280px height="60px" src="include/Original.png"></td></tr>
                         <tr><td style="text-align: center"><label class="control-label" for="InputEmail1_" style="font-size: 20px ;font-family: bold;color: black ;">login</label></td></tr>
							<tr><td ><input type="text" class="form-control input-lg"  placeholder="Votre login" name="username" required /></td></tr>
							  
							  
							  <tr><td style="text-align: center"><label for="InputPasse_" style="font-size: 20px ;font-family: bold;color: black " >Mot de passe</label></td></tr>
								<tr><td><input type="password" class="form-control input-lg" name="password" placeholder="Votre mot de passe" required /></td></tr>
							  </div>
							
								<div class="checkbox">
								  <br>
										<label>
										 
				</table>
                     <br/>
                     <button type="submit" class="btn btn-primary"><b>Se connecter</b></button> 
							 <button type="reset" class="btn btn-danger btn"> ANNULER</button>
                     </div>	
			</div>
							
							
							 
          
            </div>
          </form>
        </div>
        
  
</div> 
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>

