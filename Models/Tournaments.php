<?

require_once 'medoo.php';
 

class TournamentsModel
{
	
	function __construct()
	{ 

		// Initialize
		$database = new medoo([
		    'database_type' => 'mysql',
		    'database_name' => 'Tennis_Tournament',
		    'server' => 'localhost',
		    'username' => 'root',
		    'password' => '',
		    'charset' => 'utf8'
		]);

		$this->database=$database;
		$this->name="Tournaments";
		$this->data = array();
	}
	public function SelectAll()
	{
		$database=$this->database;
		return $database->select($this->name,"*");
	}
	public function SelectSpecific($columns,$where)
	{
	
		$database=$this->database;
		return $database->select($this->name,$columns,$where);
	}
	public function Insert($insertion)
	{
		$database=$this->database;
		 
		 return $database->insert($this->name,$insertion);
	}
	public function Update($data, $id)
	{
		$database=$this->database;
		return $database->update($this->name,$data,$id);
	
	}
	public function Delete( $id)
	{
		$database=$this->database;
		return $database->delete($this->name,$id);
		
	}
	/**Remove**/

}
/*
$n=new UsersModel();
var_dump($n->SelectAll());
*/

?>