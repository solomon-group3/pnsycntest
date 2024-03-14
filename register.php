<?php
include "dbconn.php";

//adding information to database
if(isset($_POST['submit'])){
    $studentID = $_POST['studentID'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];

    $sql = "INSERT INTO `student`(`studentID`, `firstName`, `lastName`) VALUES ('$studentID','$firstName','$lastName');";

    $result = mysqli_query($conn, $sql);

    if($result){
        header("Location: enterpass.php?msg=New record created succesfully");
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
        <h1>Input new user Info</h1>
        <form method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">First Name</span>
                <input type="text" class="form-control" placeholder="Ex. Juan" aria-label="firstName" aria-describedby="basic-addon1" name="firstName" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Last Name</span>
                <input type="text" class="form-control" placeholder="Ex. Dela Cruz" aria-label="Username" aria-describedby="basic-addon2" name="lastName" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon2">Student ID</span>
                <input type="text" class="form-control" placeholder="Enter your student numer" aria-label="Recipient's username" aria-describedby="basic-addon3" name="studentID">
            </div>

            <!-- <button type="submit" name="submit" href="enterpass.php">submit</button> -->
            <button type="submit" class="btn btn-success" name="submit" href="enterpass.php">Submit</button>
        </form>
    </div>
</body>
</html>