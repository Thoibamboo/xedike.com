<?php 
	
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$school = $_POST['school'];
	$idStudent = $_POST['idStudent'];

	if ((!empty($firstName) || (!empty(!$lastName) || (!empty($school) || (!empty($idStudent)) {
		$host = "localhost"
		$dbUsername="root";
		$dbPassword="";
		$dbname="dixeke.com";

		//create connection
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

		if (mysqli_connect_error()) {
			die('Connect Error(' . mysqli_connect_error(). ')'. mysqli_connect_error());
		} else	
		{
			$SELECT = "SELECT firstName FROM  xedike.com where firstName = ?Limit 1";
			$INSERT = "INSERT Into xedike.com (firstName,lastName,school,idStudent) values(?,?,?,?) ";
			//prepare statement
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s",$firstName);
			$stmt->exeute();
			$stmt->bind_result($firstName);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			if ($rnum==0) {
				$stmt->close();

				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ssssi",$firstName,$lastName,$school,$idStudent);
				$stmt->execute();
				echo 'New record inserted successfully';
			} else {
				echo 'Someone already register using this email';
			}
			$stmt->close();
			$conn->close();
		}
	} else {
		echo 'All field are require!';
		die();
	}

	// $firstName="";
	// $lastName="";
	// $school="";
	// $idStudent="";

	// $connect= mysql_connect("localhost",$firstName,$lastName,$school,$idStudent);
	// @mysql_select_db($xedike.com) or ("Database not found");
	// $queryFirst = "SELECT * FROM 'bookxe' WHERE 'firstName'='$inputfirst' ";
	// $queryLast = "SELECT * FROM 'bookxe' WHERE 'lastName'='$inputlast' ";
	// $querySchool = "SELECT * FROM 'bookxe' WHERE 'school'='$inputschool' ";
	// $queryId = "SELECT * FROM 'bookxe' WHERE 'idStudent'='$inputid' ";

	// $resultFirst= mysql_query($queryFirst);
	// $resultLast= mysql_query($queryLast);
	// $resultSchool= mysql_query($querySchool);
	// $resultId= mysql_query($queryId);

	// echo $resultFirst;
	// echo $resultLast;
	// echo $resultSchool;
	// echo $resultId;

	// mysql_close();

 ?>