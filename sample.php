<?php
include "dbconn.php";
//searching of content within database
if(isset($_POST['submit'])){
    $studentID = $_POST['studentID'];
    $sql = "SELECT * FROM `student` INNER JOIN `useraccount` ON student.studentID = useraccount.studentID WHERE useraccount.studentID = '$studentID';";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    //line 5 states that variable studentID from the input forms would be placed on the variable $studentID
    //line 6 states that $studentID sould have a simillar content as a variable on the data base
    //line 7 states that $sql would find if there is a simillar content and will release a true or false output
    //line 8 states that $row would contain the data that is being located by $studentID
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
          <a class="navbar-brand img" href="index.html">
            <img src="Images/pnsync-logo.png" style="max-width: 200px; max-height: 200px;" title="PNSync Homepage">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav justify-content-end pad">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html"><p id="font" class="indent">Home</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="subjects.html"><p id="font">Subjects List</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><p id="font">Chat Space</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled"><p id="font">Disabled</p></a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
      
    <div class="bg-trans">
        <form method="post">
            <input type="text" name="studentID">
            <button type="submit" name="submit">Submit here</button>
        </form>

        <h1><?php echo isset($row['lastName']) ? $row['lastName']: ''; ?></h1>
        <!-- line 63 states that if there is a simillar content it would print out that content and if not, it would not print out anything-->
    </div>

</body>
</html>