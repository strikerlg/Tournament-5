<?
include_once '/Models/Users.php';

if(!empty($_POST))
{
	//die(var_dump($_POST));
  
 $data=$_POST;
 unset($data['UserWordPass2']);
 //Juste pour l'instant 
 //Il reste à faire le hash du mot de pass
 
 
  $data['Salt']=2;
  $data['RoleId']=2;
  
  $User= new UsersModel();
  $results = $User->SelectSpecific("*",array( "UserMail" => $data["UserMail"] ));


}
?>
<?include 'header.php'; ?>
<div class="welcome">
		<div class="container">



			<h2>Inscription au site</h2>
<form class="form-horizontal" data-toggle="validator" role="form" method="post" >
<fieldset>
<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Titre">Titre</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="Titre-0">
      <input type="radio" name="Titre" id="Titre-0" value="Homme" checked="checked">
      Homme
    </label>
	</div>
  <div class="radio">
    <label for="Titre-1">
      <input type="radio" name="Titre" id="Titre-1" value="Femme">
      Femme
    </label>
	</div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserFirstName">Prénom</label>  
  <div class="col-md-4">
  <input id="UserFirstName" name="UserFirstName" type="text" placeholder="Votre prénom" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserLastName">Nom de famille</label>  
  <div class="col-md-4">
  <input id="UserLastName" name="UserLastName" type="text" placeholder="Nom de famille" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserBirthDate">Date de naissance</label>  
  <div class="col-md-4">
  <input id="UserBirthDate" name="UserBirthDate" type="date" placeholder="Votre date de naissance" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddress">Rue </label>  
  <div class="col-md-5">
  <input id="UserAddress" name="UserAddress" type="text" placeholder="Rue" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressN">Numéro de rue</label>  
  <div class="col-md-4">
  <input id="UserAddressN" name="UserAddressN" type="number" placeholder="Numéro de rue" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressB">Boite</label>  
  <div class="col-md-4">
  <input id="UserAddressB" name="UserAddressB" type="text" placeholder="Numéro de boite" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressC">Code postal</label>  
  <div class="col-md-4">
  <input id="UserAddressC" name="UserAddressC" type="text" placeholder="Code postal" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressL">Localité</label>  
  <div class="col-md-4">
  <input id="UserAddressL" name="UserAddressL" type="text" placeholder="Localité" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressL">Numéro de téléphone</label>  
  <div class="col-md-4">
   <input name="UserPhone" type="number" class="form-control" id="UserPhone" placeholder="Numéro de téléphone" data-error="Veuillez vérifier votre numéro" class="form-control input-md" required>
	<div class="help-block with-errors"></div>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressL">E-mail</label>  
  <div class="col-md-4">
  <input name="UserMail" type="email" class="form-control" id="UserMail" placeholder="E-mail" data-error="Cet email est invalide" class="form-control input-md" required>
 <div class="help-block with-errors"></div>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressL">Mot de passe</label>  
  <div class="col-md-4">
  <input  name="Userpassword"  type="password" data-minlength="8" class="form-control" id="inputPassword" placeholder="Choisissez un mot de passe" class="form-control input-md" data-minlength-error="Nombre de caractères minimum non atteint" required>
  <span class="help-block">Minimum 8 caractères</span>
  <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Le mot de passe ne correspond pas"


   placeholder="Confirmez votre mot de passe" class="form-control input-md" required>
		      <div class="help-block with-errors"></div>
   
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button type="reset" id="singlebutton" class="btn btn-danger">Réinitialiser</button>
    <button type="submit" id="singlebutton" class="btn btn-primary">Soumettre</button>
  </div>
</div>

</fieldset>
</form>
		
		  



		  
		

		</div>
</div>
  


	
   <div class="clearfix"></div>   <div class="clearfix"></div>
  <?include 'footer.php'; ?>


