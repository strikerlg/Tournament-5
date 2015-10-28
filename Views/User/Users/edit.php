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


            <form  method="post">

            <input type="radio" name="Titre" value="Homme">Homme
            <input type="radio" name="Titre" value="Femme">Femme

            <input name="UserFirstName"  id="UserFirstName" placeholder="Nom" type="text"  title="Nom" value="<?echo $results["UserFirstName"];?>"  ?> required/>
            <input name="UserLastName"  id="UserLastName" placeholder="Prénom" type="text"  title="Prénom" value=<?echo quotes($results["UserLastName"]);  ?> required/> 
            <input name="UserBirthDate" id="UserBirthDate" type="date"  value=<?echo quotes($results["UserBirthDate"]);?> required/> 

            <input name="UserAddress"  id="UserAddress" placeholder="Adresse" type="text"  title="Adresse" value=<?echo quotes($results["UserAddress"]);?>required/>
            <input name="UserAddressN"  id="UserAddressN" placeholder="Numéro" type="number"  title="Adresse" value=<?echo quotes($results["UserAddressN"]);?> required/>
            <input name="UserAddressB"  id="UserAddressB" placeholder="Boite" type="number"  title="Adresse" value=<?echo quotes($results["UserAddressB"]);?> />

            <input name="UserAddressC"  id="UserAddressC" placeholder="Code postal" type="number"  title="Adresse" value=<?echo quotes($results["UserAddressC"]);?> required/>
            <input name="UserAddressL"  id="UserAddressL" placeholder="Localité" type="text"  title="Adresse"  value=<?echo quotes($results["UserAddressL"]);?>required/>

            
            <input name="UserPhone"  id="UserPhone" placeholder="Téléphone" type="number" value=<?echo quotes($results["UserPhone"]);?> title="Phone"/>

            
            <input name="UserMail"  id="UserMail" placeholder="Email" type="text"  title="Email"  value=<?echo quotes($results["UserMail"]);?> required/>

            <input type="submit" value="Confirmer"   />
            <input type="reset" value="Réinitialiser"   />
            </form  >