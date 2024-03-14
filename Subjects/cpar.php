<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--bootstrap css link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="/PNSync/style.css" rel="stylesheet">

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
            <img src="/PNSync/Images/pnsync-logo.png" style="max-width: 200px; max-height: 200px;" title="PNSync Homepage">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav justify-content-end pad">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/PNSync/index.php"><p id="font" class="indent">Home</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/PNSync/subjects.php"><p id="font">Subjects List</p></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/PNSync/login.php"><p id="font">Log out</p></a>
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
                    <th scope="col">ID#</th>
                    <th scope="col">Module Name</th>
                    <th scope="col">Instructor</th>
                    <th scope="col"></th>
                </tr>
                </thead>   
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>CPAR Week 1 PPT</td>
                    <td>Sir Celestino Samuya</td>
                    <td>
                        <a href="https://drive.google.com/file/d/1k5CsNHg4AolLmmdDanRODGdBkvOMjt53/view?usp=sharing"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>CPAR Week 1 PPT</td>
                    <td>Sir Eruel Lamis</td>
                    <td>
                        <a href="https://www.canva.com/design/DAF7-UTcpUM/vw9j6ujs9IK_iVpuPfbFrg/view?utm_content=DAF7-UTcpUM&utm_campaign=designshare&utm_medium=link&utm_source=editor"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Psychology of Colors</td>
                    <td>Sir Celestino Samuya</td>
                    <td>
                        <a href="https://drive.google.com/file/d/1I05QuQytXpei1s48G1AUQzK09dCGprd7/view?usp=sharing"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>CPAR Week 2 PPT</td>
                    <td>Sir Celestino Samuya</td>
                    <td>
                        <a href="https://drive.google.com/file/d/1hwFRfZcHvmaZxwp7WaitwE0tZzo4cn2A/view?usp=sharing"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>CPAR Week 2 PPT</td>
                    <td>Sir Eruel Lamis</td>
                    <td>
                        <a href="https://www.canva.com/design/DAF818W-WKw/7v3abfZGRrujneE1RnWAXQ/view?utm_content=DAF818W-WKw&utm_campaign=designshare&utm_medium=link&utm_source=editor"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>CPAR Week 3 PPT</td>
                    <td>Sir Celestino Samuya</td>
                    <td>
                        <a href="https://drive.google.com/file/d/1LEZw6nnbw44riT42yyNOL8xd4ae_X5QU/view?usp=sharing"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>CPAR Week 3 PPT</td>
                    <td>Sir Eruel Lamis</td>
                    <td>
                        <a href="https://www.canva.com/design/DAF-zLwiS4A/KriscMmmh9gaaxlVRqCg4Q/view?utm_content=DAF-zLwiS4A&utm_campaign=designshare&utm_medium=link&utm_source=editor"><button type="button" class="btn btn-outline-secondary">Open Course</button></a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </div>

</body>
</html>