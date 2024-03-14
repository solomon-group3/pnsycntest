<?php
include "dbconn.php";

//searching of content within database
if(isset($_POST['submit'])){
    $password = $_POST['pass'];
    $studentID = $_POST['studID'];

    $sql = "SELECT 'studentID' FROM `useraccount` WHERE studentID = '$studentID';";
    $result_check = mysqli_query($conn, $sql);
    $row_check = mysqli_fetch_assoc($result_check);
        if(isset($row_check)){
            $passcheck = "SELECT * FROM `useraccount` WHERE studentID = '$studentID' AND password = '$password';";
            $result = mysqli_query($conn, $passcheck);
            $row = mysqli_fetch_assoc($result);
        
            if(isset($row)){
                header("Location: index.php?msg=New record created succesfully");
            }
            else{
                header("Location: login.php?msg=Incorrect Password");
            }
        }
        else{
            header("Location: login.php?msg=User ID not Found");
        }
    // if(isset($row_check)){
    //     header("Location: index.php?msg=New record created succesfully");
    // }
    // else{
    //     echo "Failed: " . mysqli_error($conn);
    // }

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

    <div class="spacing">
        <!-- <p class>   </p> -->
    </div>
    
    <?php
    if(isset($_GET['msg'])){
        $msg = $_GET['msg'];
        echo '<div class="alert m-2 alert-danger alert-dismissible" role="alert">'.
        '   <div>' . $msg . '</div>'.
        '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>'.
        '</div>';
    }

    ?>
    <div class="d-flex justify-content-center">
        <div class="bg-trans centerform">
            <h1>LOG IN</h1>
            <form method="post">
            <div class="input-group mb-3">
                <span class="input-group-text form" id="basic-addon1">Student ID</span>
                <input type="text" class="form-control form" placeholder="Ex. Juan" aria-label="firstName" aria-describedby="basic-addon1" name="studID" required>
            </div>

            <div class="input-group mb-3">
                <span class="input-group-text form" id="basic-addon1">Password</span>
                <input type="password" class="form-control form" placeholder="Ex. Juan" aria-label="firstName" aria-describedby="basic-addon1" name="pass" required>
            </div>
                <button type="submit" name="submit" href="index.html" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><a><img src="Images/log.png" style="max-width: 200px; max-height: 200px;"></a></button>
                <!-- <a><img src="Images/log.png" style="max-width: 200px; max-height: 200px;" type="submit" name="submit"></a> -->
            </form>

            <!-- <button><a><img src="Images/register.png" style="max-width: 200px; max-height: 200px;" href=register.php></a><button> -->
            <div>
                <a href="register.php">
                    <img src="Images/register.png" class="click">
                </a>
            </div>
        </div> 
        
    </div>

</body>
</html>