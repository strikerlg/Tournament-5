<?
// Include the file for the specific functions on Users
require_once '../../../Models/Users.php';
if(!empty($_POST))
{
  
 $data=$_POST;
 unset($data['UserWordPass2']);
 //Juste pour l'instant 
 //Il reste à faire le hash du mot de pass
 unset($data['Titre']);
 
$data['Salt']=2;
$data['RoleId']=2;
  
  $User= new UsersModel();
  
  $answer=$User->Insert($data);


}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
          <h4>Créer un compte</h4>
     
            <form  method="post">

            <input type="radio" name="Titre" value="Homme">Homme
            <input type="radio" name="Titre" value="Femme">Femme

            <input name="UserFirstName"  id="UserFirstName" placeholder="Nom" type="text"  title="Nom" required/>
            <input name="UserLastName"  id="UserLastName" placeholder="Prénom" type="text"  title="Prénom" required/> 
            <input name="UserBirthDate" id="UserBirthDate" type="date"  required/> 

            <input name="UserAddress"  id="UserAddress" placeholder="Adresse" type="text"  title="Adresse" required/>
            <input name="UserAddressN"  id="UserAddressN" placeholder="Numéro" type="number"  title="Adresse" required/>
            <input name="UserAddressB"  id="UserAddressB" placeholder="Boite" type="number"  title="Adresse" />

            <input name="UserAddressC"  id="UserAddressC" placeholder="Code postal" type="number"  title="Adresse" required/>
            <input name="UserAddressL"  id="UserAddressL" placeholder="Localité" type="text"  title="Adresse" required/>

            
            <input name="UserPhone"  id="UserPhone" placeholder="Téléphone" type="number"  title="Phone"/>

            
            <input name="UserMail"  id="UserMail" placeholder="Email" type="text"  title="Email" required/>

            <input type="submit" value="Confirmer"   />
            <input type="reset" value="Réinitialiser"  />
            </form  >
