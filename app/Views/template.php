<!doctype html>
<html lang="pt-br">
<head>
    <title>RNApedia</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="<?= base_url('img/favicon3.png') ?>" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <link rel="stylesheet" href="<?= base_url('css/estilo.css') ?>">
    
</head>
<body>
   
    <nav class="py-2 bg-body-tertiary border-bottom menu link-light">
        <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
            <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 active" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">About</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Documentation</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Download</a></li>
            <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Explore</a></li>
        </ul>
        <ul class="nav">
            <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">BLAST</a></li>
        </ul>
        </div>
    </nav>
    <header class="py-3 mb-4 border-bottom">
        <div class="container d-flex flex-wrap justify-content-center">
        <a href="/" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
            <img src="<?= base_url('/img/logo.svg') ?>" width="300px">
        </a>
        <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
            <input type="search" class="form-control form-control-lg mt-2" placeholder="Search structure..." aria-label="Search">
        </form>
        </div>
    </header>

    <!-- PARTE DINÂMICA -->
    <main class="container-fluid">
        <?= $this->renderSection('conteudo') ?> 
    </main>
    <!-- / FIM PARTE DINÂMICA -->

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col ps-5">
                    <img src="<?= base_url('/img/logo2.svg') ?>" width="200px">
                    <p class="bege small pt-3 col-9">RNApedia is an innovative database designed to store and manage three-dimensional (3D) structures of protein-RNA complexes. RNApedia offer a comprehensive platform for researchers to access, share, and analyze 3D structural data, facilitating advancements in molecular biology, bioinformatics, and related fields.</p>
                </div>

                <div class="col">
                    <div class="row pt-5">
                        <div class="col"><img src="<?= base_url('/img/lbs.svg') ?>" width="220px"></div>
                        <div class="col"><img src="<?= base_url('/img/dcc_w.svg') ?>" width="170px"></div>
                        <div class="col"><img src="<?= base_url('/img/ufmg_w.svg') ?>" width="200px"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>
</html>
