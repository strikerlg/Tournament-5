<? 
// Include the file for the specific functions on Users
require_once '../../../Models/Users.php';
// New Helper to use the functions
$User= new UsersModel();
// Performing a select with all "*" and specifiying the RoleId=2 for selecting only users
$results = $User->SelectSpecific("*",array( "RoleId" => 2 ));
$labels = array("Nom complet", "Date de naissance" , " Adresse" , "Numéro de téléphone", "Email", "Actions")
?>
       


<? include 'header.php';?>


        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Gestion des utilisateurs</h1>
                        <br>
                        <br>
                        

                        <a href="create.php">Créer un nouvel utilisateur</a>
                        <table class="table table-hover table-condensed table-striped">
                        <tr>
                        <?php foreach($labels as $label): ?>
                            <th><?php echo $label; ?></th>
                        <?php endforeach; ?>
                        </tr>

                        <?php foreach($results as $result): ?>

                          <tr>
                            <td><?php echo $result["UserFirstName"]." ".$result["UserLastName"]; ?></td>
                            <td><?php echo $result["UserBirthDate"]; ?></td>
                            <td><?php echo $result["UserAddress"]." ".$result["UserAddressN"]." ".$result["UserAddressB"]." ".$result["UserAddressC"]." ".$result["UserAddressL"]; ?></td>
                            <td><?php echo $result["UserPhone"]; ?></td>
                            <td><?php echo $result["UserMail"]; ?></td>
                            <td>
                                  <?  $edit = "'edit.php?id=".$result["UserId"]."'";  ?>
                                  <?  $delete = "'delete.php?id=".$result["UserId"]."'";  ?>
                                  <a href=<?echo $edit; ?> >Editer<a/>
                                
                                  - 
                                <a href=<?echo $delete; ?> >Supprimer<a/>

                            </td>
                          </tr>
                        <?php endforeach; ?>
                        </table>








<? include 'footer.php';?>