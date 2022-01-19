<?php include("./helpers/config.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="#">
                <?= APP_NAME ?>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Produk</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="about.html" tabindex="-1" aria-disabled="true">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.html" tabindex="-1" aria-disabled="true">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="about.html" tabindex="-1" aria-disabled="true">Video</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="backoffices/login.php" class="btn btn-outline-success" type="submit">Login Admin</a>
                </form>
            </div>
        </div>
    </nav>

    <?php
    if (empty($_GET['page'])) {
        echo "<script>document.location.href='index.php?page=home'</script>";
    } else {
        $page = $_GET['page'];
        include "pages/$page.php";
    }
    ?>

    <div class="container">
        <footer class="py-3 my-4">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Beranda</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link px-2 text-muted">Kontak</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">Berita</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link px-2 text-muted">Video</a></li>

            </ul>
            <p class="text-center text-muted">&copy; Rizal Pahlevi</p>
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>