<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">

    <!--google font-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!--bootstrap javascript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>PNSync</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-color colorbg navs">
        <div class="container-fluid">
          <a class="navbar-brand img" href="index.php">
            <img src="Images/pnsync-logo.png" style="max-width: 200px; max-height: 200px;" title="PNSync Homepage">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav justify-content-end pad">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><p id="font" class="indent">Home</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="subjects.php"><p id="font">Subjects List</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><p id="font">Log out</p></a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
      
    <div class="bg-trans d-flex justify-content-center">
        <div class="tablepad">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Course Code</th>
                    <th scope="col"></th>
                </tr>
                </thead>   
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Web Development</td>
                    <td>WDEV</td>
                    <td>
                        <a href="./Subjects/webdev.php"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>General Chemistry</td>
                    <td>CHEM2</td>
                    <td>
                        <a href="./Subjects/genchem.php"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Empowerment Technologies: ICT for Professional Tracks</td>
                    <td>MTEC</td>
                    <td>
                        <a href="./Subjects/mtec.php"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Contemporary Philippine Arts in the Regions</td>
                    <td>CPAR</td>
                    <td>
                        <a href="./Subjects/cpar.php"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>General Physics 2</td>
                    <td>PHSY2</td>
                    <td>
                        <a href="./Subjects/physics.php"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Physical Education 4</td>
                    <td>PE4</td>
                    <td>
                        <a href="./Subjects/pe.php"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>