<? 
// Include the file for the specific functions on Users
require_once '../../../Models/Tournaments.php';
// New Helper to use the functions
$id=$_GET["id"];
$Tour= new TournamentsModel();
// Performing a select with all "*" and specifiying the RoleId=2 for selecting only users
$results = $Tour->Delete(array( "TournamentId" => $id ));

header("Location: ./index.php");

?>