
<?php 

class DataAccessHelper {
 	private $conn;
 	public function connect(){
 		$servername = "localhost:3306";
 		$username = "root";
 		$password = "";
 		$dbname = "dixeke.com";


 		// Create connection
 		$GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);

		// Check connection
 		if ($GLOBALS['conn']->connect_error) {
 			die("Connection failed: " . $conn->connect_error);
 		}
 		echo "Connected successfully <br>";
 	}

 	public function executeNonQuery($sql){
 		if ($GLOBALS['conn']->query($sql) === TRUE) {
 			echo "Your query has been executed successfully";
 		} else {
 			echo "Error: " . $sql . "<br>" . $GLOBALS['conn']->error;
 		}
 	}

 	public function executeQuery($sql){
 		$result = $GLOBALS['conn']->query($sql);
 		return $result;
 	}

 	public function close(){
 		mysqli_close($GLOBALS['conn']);
 	}
 }


	// $db = new DataAccessHelper;
	// $db->connect();
	// $price = $db->executeQuery("SELECT *From bookxe where Price>25000000");
	// if(mysqli_num_rows($price) > 0){
	// 	while ($row =mysqli_fetch_assoc($price)) {
	// 		echo "id:".$row["ID"]."- Name" .$row["ProductName"]."- price".$row["Price"]."- category".$row["Category"]. " -img link".$row["ImageUrl"].""."<br>";
	// 	}
	// }
	// else{
	// 	echo "Không tìm thấy sản phẩm <br>";
	// }
	// $db->close();
?>

