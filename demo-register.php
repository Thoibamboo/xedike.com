<?php

$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$idStudent = $_POST['idStudent'];
$school = $_POST['school'];

if (!empty($name) || !empty($username) || !empty($password) || !empty($gender) || !empty($email) || 
  !empty($phone) || !empty($idStudent) || !empty($school)) {
                  $host = "localhost";
                  $dbUsername = "root";
                  $dbPassword = "";
                  $dbname = "xedike.com";
    //create connection
                  $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
                  if (mysqli_connect_error()) {
                        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
                  } else {
                            $SELECT = "SELECT email From register Where email = ? Limit 1";
                            $INSERT = "INSERT Into register (name,username, password, gender, email, phone,idStudent,school) values(?, ?, ?, ?, ?, ?, ?, ?)";
                                if($stmt = $conn->prepare($SELECT)){
                                //$stmt = $conn->prepare($SELECT);
                                $stmt->bind_param('s', $email);
                                $stmt->execute();
                                $stmt->bind_result($email);
                                $stmt->store_result();
                                $rnum = $stmt->num_rows;
                                                if ($rnum==0) {
                                                    $stmt->close();
                                                    $stmt = $conn->prepare($INSERT);
                                                    $stmt->bind_param("ssssiiii", $name, $username, 
                                                      $password, $gender, $email, $phone, $idStudent, 
                                                      $school);
                                                    $stmt->execute();
                                                    echo "New record inserted sucessfully";
                                                    header("location:xedike.html");
                                                } 
                                                else {
                                                    echo "Someone already register using this email";
                                                      }
                                         $stmt->close();
                                          $conn->close();
                                      } 
                                    }
                      }
?>