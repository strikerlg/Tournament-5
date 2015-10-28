<? 
// Include the file for the specific functions on Users
require_once '../../../Models/Users.php';
// New Helper to use the functions
$id=$_GET["id"];
$User= new UsersModel();
// Performing a select with all "*" and specifiying the RoleId=2 for selecting only users
$results = $User->SelectSpecific("*",array( "UserId" => $id ));
$results=$results[0];

//If an edit is performed
if(! empty($_POST))
{
      $data=$_POST;
      
      $answer=$User->Update($data,array( "UserId" => $id ));
      header("Location: ./index.php");
}
function  quotes($string)
{
      return "'".$string."'";
}
?>            
<? include "header.php";?>





                  <h2>Editer un utilisateur</h2>
<form class="form-horizontal" data-toggle="validator" role="form" method="post" >
<fieldset>


<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Titre">Titre</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="Titre-0">
      <input type="radio" name="Titre" id="Titre-0" value="Homme" <?if ($results["UserMail"]=="Homme") echo "checked"; ?>>
      Homme
    </label>
      </div>
  <div class="radio">
    <label for="Titre-1">
      <input type="radio" name="Titre" id="Titre-1" value="Femme" <?if ($results["UserMail"]=="Homme") echo "checked"; ?>>
      Femme
    </label>
      </div>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserFirstName">Prénom</label>  
  <div class="col-md-4">
  <input id="UserFirstName" name="UserFirstName" type="text" placeholder="Votre prénom" class="form-control input-md" required value="<?echo $results["UserFirstName"] ;?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserLastName">Nom de famille</label>  
  <div class="col-md-4">
  <input id="UserLastName" name="UserLastName" type="text" placeholder="Nom de famille" class="form-control input-md" required value="<?echo $results["UserLastName"] ;?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserBirthDate">Date de naissance</label>  
  <div class="col-md-4">
  <input id="UserBirthDate" name="UserBirthDate" type="date" placeholder="Votre date de naissance" class="form-control input-md" required value="<?echo $results["UserBirthDate"] ;?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddress">Rue </label>  
  <div class="col-md-5">
  <input id="UserAddress" name="UserAddress" type="text" placeholder="Rue" class="form-control input-md" required value="<?echo $results["UserAddress"] ;?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressN">Numéro de rue</label>  
  <div class="col-md-4">
  <input id="UserAddressN" name="UserAddressN" type="number" placeholder="Numéro de rue" class="form-control input-md" required value="<?echo $results["UserAddressN"] ;?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressB">Boite</label>  
  <div class="col-md-4">
  <input id="UserAddressB" name="UserAddressB" type="text" placeholder="Numéro de boite" class="form-control input-md" value="<?echo $results["UserAddressB"] ;?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressC">Code postal</label>  
  <div class="col-md-4">
  <input id="UserAddressC" name="UserAddressC" type="text" placeholder="Code postal" class="form-control input-md" required value="<?echo $results["UserAddressC"] ;?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressL">Localité</label>  
  <div class="col-md-4">
  <input id="UserAddressL" name="UserAddressL" type="text" placeholder="Localité" class="form-control input-md" required value="<?echo $results["UserAddressL"] ;?>">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressL">Numéro de téléphone</label>  
  <div class="col-md-4">
   <input name="UserPhone" type="number" class="form-control" id="UserPhone" placeholder="Numéro de téléphone" data-error="Veuillez vérifier votre numéro" class="form-control input-md" required value="<?echo $results["UserPhone"];?>">
      <div class="help-block with-errors"></div>
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="UserAddressL">E-mail</label>  
  <div class="col-md-4">
  <input name="UserMail" type="email" class="form-control" id="UserMail" placeholder="E-mail" data-error="Cet email est invalide" class="form-control input-md" required value="<?echo $results["UserMail"];?>">
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
            
              



              

      
   <div class="clearfix"></div>   <div class="clearfix"></div>
  <?include 'footer.php'; ?>














