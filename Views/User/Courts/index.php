<? 
// Include the file for the specific functions on Courts
require_once '../../../Models/Courts.php';
// New Helper to use the functions
$Tour= new CourtsModel();
// Performing a select with all "*" and specifiying the RoleId=2 for selecting only Courts
$results = $Tour->SelectAll();
$labels = array("Numéro de terrain","Type de terrain", "Adresse" , "Propriété","Commentaires","Disponible Samedi","Disponible Dimanche", "Nom du proprietaire","Actions" );
?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />  
<a href="create.php">Créer un nouveau terrain</a>
<h4>Liste des terrain</h4>
<table>
<tr>
<?php foreach($labels as $label): ?>
    <td><?php echo $label; ?></td>
<?php endforeach; ?>
</tr>

<?php foreach($results as $result): ?>

  <tr>
    
    <td><?php echo $result["CourtId"]; ?></td>
    <td><?php echo $result["CourtGroundType"]; ?></td>
    <td><?php echo $result["CourtAddress"]." ".$result["CourtAddressN"]." ".$result["CourtAddressC"]." ".$result["CourtAddressL"]; ?></td>
    <td><?php echo $result["CourtType"]; ?></td>
    <td><?php echo $result["CourtStaffComments"];  ?></td>
    <td><?php echo $result["CourtAvailSat"];  ?></td>
    <td><?php echo $result["CourtAvailSun"];  ?></td>
    <td><?php echo $result["CourtOwner"];  ?></td>
    <td>
          <?  $edit = "'edit.php?id=".$result["CourtId"]."'";  ?>  
          <a href=<?echo $edit; ?> >Editer<a/>
        
          - 

         <?  $delete = "'delete.php?id=".$result["CourtId"]."'";  ?>
        <a href=<?echo $delete; ?> >Supprimer<a/>

    </td>
  </tr>
<?php endforeach; ?>
</table>
