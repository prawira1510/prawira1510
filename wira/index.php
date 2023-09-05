<?php
require_once('dbcontroller.php');

$db = new dbController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Wira</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar -->


    <!-- card jurusan -->
    <div class="container mt-3">
        <h1 class=" text-center mb-5 ">Jurusan SMKN 40</h1>
        <div class=" row text-center justify-content-center ">
            <?php
            $sql = "SELECT * FROM t_jurusan";
            $row = $db->getALL($sql);
            foreach ($row as $Jurusan) :
            ?>

                <div class="col-md-4 mb-5 ">
                    <div class="card " style="width: 18rem;">
                        <img src="../wira/img/<?php echo $Jurusan['f_nama']; ?>.jpg " class="card-img-top" style="height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $Jurusan['f_nama']; ?>
                            </h5>

                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-success ">selengkapnya</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- cards jurusan -->
    <!--cards guru-->
    <div class="container" id="guru">
        <h1 class=" text-center mb-5 ">Guru SMKN 40</h1>
        <div class="row text-center justify-content-center ">
            <?php
            $sql2 = "SELECT * FROM t_guru";
            $row2 = $db->getALL($sql2);
            foreach ($row2 as $guru) :
            ?>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="../guru/<?php echo $guru['f_nama']; ?>.jpg " class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><?= $guru['f_nama']; ?></h5>
                                <p class="card-text">Guru SMKN 40</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!--akhir cards guru-->
    <!--footer-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="1" d="M0,160L48,160C96,160,192,160,288,170.7C384,181,480,203,576,218.7C672,235,768,245,864,229.3C960,213,1056,171,1152,133.3C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    <footer class="bg-black text-white text-center pb-3 ">
        <p>Created with <i class="bi bi-heart-fill text-danger "></i> by
            <a href="https://www.instagram.com/prawira.s.htg/" class="text-white fw-bold ">Prawira Sebastian</a> </a>
        </p>
    </footer>
    <!--Akhir footer-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>