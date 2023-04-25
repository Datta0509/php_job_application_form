<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>FORM</title>
   
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <a class="navbar-brand" href="http://localhost/form/">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="http://localhost/form/index.ejs">Basic Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/form/edu.ejs">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/form/exp.ejs">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="http://localhost/form/lang.php">Language<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/form/tech.ejs">Technology</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/form/ref.ejs">Reference</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost/form/pref.ejs">Preference</a>
                </li>
               
                
            </ul>
            
        </div>
    </nav>
    <?php 
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
     else{
        echo "<br>"."Connected successfully";
     }
     

    $lang = `select option_value from job_application_form.option_master where opt_key = 1`;
    echo $lang;
    $result = conn->query($lang);

    echo "<br>"."query executed successfully" . "<br>";
    // if ($result->num_rows > 0) {
    // // output data of each row
    //     while($row = $result->fetch_assoc()) {
    //      echo "id: " . $row["id"]. " - Name: " . $row["option_value"]. "<br>";
    // //   echo $result ; 
    //     }
    //  } else {
    //  echo "0 results";
    // }

    ?>
    <form action="getlang.php" method="post">
        <fieldset style="display: flex;">

            <legend>Languages Known</legend>
        <div class="container">
          
            <label for="exp" ></label>
            <input type="radio" value="beginner" id="beginner"  name="lang_exp" />Beginner
            <input type="radio" value="mediator" id="beginner" name="lang_exp" />Mediator
            <input type="radio" value="expert" id="beginner" name="lang_exp" />Expert
        </div>
        
            




        </fieldset>

        <center>
            <input type="submit" value="submit" />
        </center>
    </form>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>