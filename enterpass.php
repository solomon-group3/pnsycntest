<?php
include "dbconn.php";

//searching of content within database
if(isset($_POST['submit'])){
    $pass = $_POST['pass'];
    $stud = $_POST['studID'];
    // $studID = "SELECT * FROM `student` INNER JOIN `useraccount` ON student.studentID = useraccount.studentID WHERE useraccount.studentID = '$stud';";
    // $studID = "SELECT `studentID` FROM `student` WHERE 'studentID' = '$stud';";

    $sql = "INSERT INTO `useraccount`(`studentID`, `password`) VALUES ('$stud','$pass')";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: index.php?msg=New record created succesfully");
    }
    else{
        echo "Failed: " . mysqli_error($conn);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>PNSync</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-color colorbg navs">
        <div class="container-fluid">
          <a class="navbar-brand img">
            <img src="Images/pnsync-logo.png" style="max-width: 200px; max-height: 200px;" title="PNSync Homepage">
          </a>
        </div>
    </nav>

    <div class="bg-trans">
        <h1>Create Password</h1>
        <form method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Student ID</span>
            <input type="text" class="form-control" placeholder="Ex. Juan" aria-label="firstName" aria-describedby="basic-addon1" name="studID" required>
        </div>

        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="password" class="form-control" placeholder="Ex. Juan" aria-label="firstName" aria-describedby="basic-addon1" name="pass" required>
        </div>

            <button type="submit" class="btn btn-success" name="submit" href="index.php">Submit</button>
            <!-- <button type="submit" name="submit" href="index.html">Submit</button> -->
        </form>
    </div>
</body>
</html>