<? 
// Include the file for the specific functions on Users
require_once '../../../Models/Tournaments.php';
// New Helper to use the functions
$Tour= new TournamentsModel();
// Performing a select with all "*" and specifiying the RoleId=2 for selecting only users
$results = $Tour->SelectAll();
$labels = array("Année", "Catégorie" , "Type" );
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
<a href="create.php">Créer un nouveau tournoi</a>
<h4>Liste des tournois</h4>
<table>
<tr>
<?php foreach($labels as $label): ?>
    <td><?php echo $label; ?></td>
<?php endforeach; ?>
</tr>

<?php foreach($results as $result): ?>

  <tr>
    
    <td><?php echo $result["TournamentYear"]; ?></td>
    <td><?php echo $result["TournamentCategory"]; ?></td>
    <td><?php echo $result["TournamentType"]; ?></td>
    <td>
          <?  $edit = "'edit.php?id=".$result["TournamentId"]."'";  ?>  
          <a href=<?echo $edit; ?> >Editer<a/>
        
          - 

         <?  $delete = "'delete.php?id=".$result["TournamentId"]."'";  ?>
        <a href=<?echo $delete; ?> >Supprimer<a/>

    </td>
  </tr>
<?php endforeach; ?>
</table>
