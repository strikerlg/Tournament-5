<? 
// Include the file for the specific functions on Users
require_once '../../../Models/Courts.php';
// New Helper to use the functions
$id=$_GET["id"];
$Court= new CourtsModel();
// Performing a select with all "*" and specifiying the RoleId=2 for selecting only users
$results = $Court->Delete(array( "CourtId" => $id ));

header("Location: ./index.php");

?>