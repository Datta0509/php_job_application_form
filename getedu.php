<?php
    echo "I'm in getedu.php". "<br>";
    $board = $_POST['board'];
    $passing_year = $_POST['pass'];
    $percent = $_POST['percent'];
    echo $board."<br>";

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "job_application_form";

// Create connection
    $conn = new mysqli($servername, $username, $password , $database);

    echo "$board" . " is passed in " . " $passing_year " . " with " . $percent. " Percentage"; 

    $ins_edu = "insert into educations(board,year,percent) VALUES ('$board','$passing_year','$percent')";

    $result = mysqli_query($conn , $ins_edu);


?>