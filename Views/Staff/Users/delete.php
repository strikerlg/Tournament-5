<? 
// Include the file for the specific functions on Users
require_once '../../../Models/Users.php';
// New Helper to use the functions
$id=$_GET["id"];
$User= new UsersModel();
// Performing a select with all "*" and specifiying the RoleId=2 for selecting only users
$results = $User->Delete(array( "UserId" => $id ));

header("Location: ./index.php");

?>