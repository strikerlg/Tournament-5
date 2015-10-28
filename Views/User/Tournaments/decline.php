<?
// Include the file for the specific functions on Users
$TourCat= array( "Pré-minimes","Minimes","Cadets","Scolaires","Juniors","Seniors","Elites" );

$TourType= array( "Hommes","Femmes","Mixte","Famille");

$TourYear= array( date('Y'),date('Y', strtotime('+1 year')) ,date('Y', strtotime('+2 year')));

require_once '../../../Models/Tournaments.php';
if(!empty($_POST))
{
    
    $data=$_POST;
    $Tour= new TournamentsModel();
    $Tour->Insert($data);

}
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
          <h4>Ajouter un tournoi</h4>
     
            <form  method="post">
            <select name="TournamentYear">
              <? foreach ($TourYear as $Year):?> 
                        <option value="<? echo $Year; ?>"><? echo $Year;?></option>           
                <? endforeach;?>
            </select>
           <select name="TournamentCategory">
                <? foreach ($TourCat as $Cat):?> 
                      <option value="<? echo $Cat; ?>"><? echo $Cat;?></option>           
                <? endforeach;?>
            </select>
             <select name="TournamentType">
                <? foreach ($TourType as $Type):?> 
                      <option value="<? echo ($Type); ?>"><? echo $Type;?></option>           
                <? endforeach;?>
            </select>
            <input type="submit" value="Confirmer"   />
            <input type="reset" value="Réinitialiser"  />
            </form  >
