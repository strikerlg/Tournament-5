<? 
// Array Helpers

$CourtGroundType= array( "Dur","Gazon","Synthétique","Terre battue" );
$CourtType=array("Public","Privé");
require_once '../../../Models/Courts.php';


// New Helper to use the functions
$id=$_GET["id"];
$Court= new CourtsModel();


// Performing a select with all "*" and specifiying the CourtId to edit
$results = $Court->SelectSpecific("*",array( "CourtId" => $id ));
$results=$results[0];

//If an edit is performed
if(! empty($_POST))
{
  $data=$_POST;
  if (!isset($data["CourtAvailSat"])) {
    $data["CourtAvailSat"]="off";
  }
   if (!isset($data["CourtAvailSun"])) {
    $data["CourtAvailSun"]="off";
  }
      
      $answer=$Court->Update($data,array( "CourtId" => $id ));
      header("Location: ./index.php");
}

?>            


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
          <h4>Modifier un terrain</h4>
     
              <form  method="post">
                <select name="CourtGroundType" required>
                  option value="<? echo $results["CourtGroundType"]; ?>"><? echo $results["CourtGroundType"];?></option> 
                  <? foreach ($CourtGroundType as $Type):?> 
                        <? if ($Type==$results["CourtGroundType"]) continue; ?>
                        <option value="<? echo $Type; ?>"><? echo $Type;?></option>           
                 <? endforeach;?>
                </select> 

                <input name="CourtAddress"   placeholder="Adresse du terrain" type="address" value="<? echo $results["CourtAddress"];?>" required/>
                <input name="CourtAddressN"  placeholder="Numéro" type="number" value="<? echo $results["CourtAddressN"];?>"required/>
                <input name="CourtAddressC"  placeholder="Code postal" type="number" value="<? echo $results["CourtAddressC"];?>"required/>
                <input name="CourtAddressL"  placeholder="Localité" type="text" value="<? echo $results["CourtAddressL"];?>"required />



               
                <select name="CourtType" required>
                  <? foreach ($CourtType as $Type):?> 
                        <? if ($Type==$results["CourtType"]) continue; ?>
                        <option value="<? echo $Type; ?>"><? echo $Type;?></option>           
                <? endforeach;?>
                </select> 

                <input  name="CourtAvailSat" type="checkbox" <? echo $results["CourtAvailSat"]=="on"? "checked":"" ;?>/>
                Le terrain est disponible samedi
                <input  name="CourtAvailSun" type="checkbox" <? echo $results["CourtAvailSun"]=="on"? "checked":"" ;?> />
                Le terrain est disponible dimanche 


               
                <textarea name="CourtAccessComments" rows=4 cols=40> <? echo $results["CourtAccessComments"];?> </textarea>
                  
                <textarea name="CourtOwnerComments" rows=4 cols=40> <? echo $results["CourtOwnerComments"];?> </textarea>
                
                <textarea name="CourtStaffComments" rows=4 cols=40> <? echo $results["CourtStaffComments"];?> </textarea>

                <input  name="CourtOwner"   type="text" value="<? echo $results["CourtOwner"];?>" required/>

            <input type="submit" value="Confirmer"   />
            <input type="reset" value="Réinitialiser"  />

            </form  >

