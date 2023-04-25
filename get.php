<?php

$body = file_get_contents('php://input');
echo "req.body of node " . "<br>";
echo $body;

$name = $_POST['fname'];
$surname = $_POST['lname'];
$designation = $_POST['designation'];
$add1 = $_POST['add1'];
$add2 = $_POST['add2'];
$state= $_POST['state'];
$city = $_POST['city'];
$mail = $_POST['mail'];
$gender = $_POST['gender'];
$rel = $_POST['rel'];
$board = $_POST['board'];
$pass = $_POST['pass'];
$percent = $_POST['percent'];

echo '<br>'. 'Board is :' ,$board;
echo '<br>'. "passing year is: ", $pass;
echo '<br> '."Percentage is: ", $percent , "<br>" ; 

echo "name is:"."$name" , "<br>" , "Designation is: "."$designation" , "<br>" , "Mail is: "."$mail" , "<br>" , "Gender is: "."$gender" , "<br> " , "Relationship status is: ".$rel ; 

$servername = "localhost";
$username = "root";
$password = "";
$database = "job_application_form";

// Create connection
$conn = new mysqli($servername, $username, $password , $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "<br>"."Connected successfully";

$sql = "select * from job_application_form.option_master where opt_key=2";
echo "<br>".$sql;
$result = $conn->query($sql);
echo "from echo in array result " ."<br>";
echo [$result];
echo "<br>"."query executed successfully" . "<br>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "id: " . $row["id"]. " - Name: " . $row["option_value"]. "<br>";
    //   echo $result ; 
    }
  } else {
    echo "0 results";
  }

  


  $ins = "insert into job_application_form.basic_details(name,
                                                        surname,
                                                        designation,
                                                        permanent_address,
                                                        mail,
                                                        current_address,
                                                        gender,
                                                        relation,
                                                        state,
                                                        city) 
                                                        VALUES (
                                                        '$name' ,
                                                        '$surname' ,
                                                        '$designation' , 
                                                        '$add1', 
                                                        '$mail' , 
                                                        '$add2',
                                                        '$gender' ,
                                                        '$rel',
                                                        '$state',
                                                        '$city'
                                                        )";

  echo $ins;

  $inserting = mysqli_query($conn,$ins);
  echo $inserting. "executed successfully in basic details";



?>