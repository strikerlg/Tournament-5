<? 
// Array Helpers
$TourCat= array( "Pré-minimes","Minimes","Cadets","Scolaires","Juniors","Seniors","Elites"
    );
$TourType= array( "Hommes","Femmes","Mixte","Famille");

$TourYear= array( date('Y'),date('Y', strtotime('+1 year')) ,date('Y', strtotime('+2 year')));
require_once '../../../Models/Tournaments.php';


// New Helper to use the functions
$id=$_GET["id"];
$Tour= new TournamentsModel();


// Performing a select with all "*" and specifiying the TournamentId to edit
$results = $Tour->SelectSpecific("*",array( "TournamentId" => $id ));
$results=$results[0];

//If an edit is performed
if(! empty($_POST))
{
      $data=$_POST;
      $answer=$Tour->Update($data,array( "TournamentId" => $id ));
      header("Location: ./index.php");
}

?>            

<h4>Ajouter un tournoi</h4>

             <form  method="post">

            <select name="TournamentYear"> 
                  <option value="<? echo $results["TournamentYear"]; ?>"><? echo $results["TournamentYear"];?></option> 
                  <? foreach ($TourYear as $Year):?> 
                        <? if ($Year==$results["TournamentYear"]) continue; ?>
                        <option value="<? echo $Year; ?>"><? echo $Year;?></option>           
                  <? endforeach;?>
            </select>

            <select name="TournamentCategory">
                  <option value="<? echo $results["TournamentCategory"]; ?>"><? echo $results["TournamentCategory"];?></option> 
                  <? foreach ($TourCat as $Cat):?> 
                        <? if ($Cat==$results["TournamentCategory"]) continue; ?>
                        <option value="<? echo $Cat; ?>"><? echo $Cat;?></option>           
                  <? endforeach;?>
            </select>

             <select name="TournamentType">
                  <option value="<? echo $results["TournamentType"]; ?>"><? echo $results["TournamentType"];?></option> 
                  <? foreach ($TourType as $Type):?> 
                        <? if ($Cat==$results["TournamentType"]) continue; ?>
                        <option value="<? echo ($Type); ?>"><? echo $Type;?></option>           
                   <? endforeach;?>
            </select>

            <input type="submit" value="Confirmer"   />
            <input type="reset" value="Réinitialiser"  />

            </form  >