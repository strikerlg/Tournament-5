<?
// Include the file for the specific functions on Courts
$CourtGroundType= array( "Dur","Gazon","Synthétique","Terre battue" );

require_once '../../../Models/Courts.php';
if(!empty($_POST))
{
    $data=$_POST;
    if (!isset($data["CourtAvailSat"])) {
    $data["CourtAvailSat"]="off";
      }
       if (!isset($data["CourtAvailSun"])) {
        $data["CourtAvailSun"]="off";
      }
    $Court= new CourtsModel();
    $Court->Insert($data);

}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
          <h4>Ajouter un terrain</h4>
     
            <form  method="post">
                <select name="CourtGroundType" required>
                  <? foreach ($CourtGroundType as $Type):?> 
                        <option value="<? echo $Type; ?>"><? echo $Type;?></option>           
                <? endforeach;?>
                </select> 

                <input name="CourtAddress"   placeholder="Adresse du terrain" type="address" required/>
                <input name="CourtAddressN"  placeholder="Numéro" type="number" required/>
                <input name="CourtAddressC"  placeholder="Code postal" type="number" required/>
                <input name="CourtAddressL"  placeholder="Localité" type="text"required />   
                <select name="CourtType" required>
                  <option value="Privé">Privé</option>
                    <option value="Club">Club</option>
                </select> 
                <input  name="CourtAvailSat" type="checkbox" />
                  Le terrain est disponible samedi
                <input  name="CourtAvailSun" type="checkbox" />
                  Le terrain est disponible dimanche             
                <textarea name="CourtAccessComments" rows=4 cols=40></textarea>
                  
                <textarea name="CourtOwnerComments" rows=4 cols=40></textarea>
                
                <textarea name="CourtStaffComments" rows=4 cols=40></textarea>


            <input type="submit" value="Confirmer"   />
            <input type="reset" value="Réinitialiser"  />

            </form  >

