
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="public/img/JPBC-logo-black.svg">
    <!-- CSS -->
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./stylebt.css">
    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/d70a89f18c.js" crossorigin="anonymous"></script>
    <!-- REFERENCEMENT -->
    <meta name="Description"
        content="JPBC agence de disgne d'interrieur salons, cuisines, salle de bain, chambres, tous styles, rénovation neuf ">

</head>

<body>
<header>
    <div>
        <!-- LOGO -->
        <a href="index.html" style="height: 100%;"><img alt="Logo JPBC" class="logo"
                                                        src="public/img/JPBC-logo-white.svg" style="padding: 15px 0 0;"></a>
        <!-- BTN NAVIGATION DESKTOP-->
        <nav class="navTop dropdown">
            <a href="profils.html">Qui sommes nous</a>
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                    data-bs-toggle="dropdown" aria-expanded="false">
                Réalisations
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="real/cuisine.html">Cuisines</a></li>
                <li><a class="dropdown-item" href="real/salon.html">Salons</a></li>
                <li><a class="dropdown-item" href="real/sdb.html">Salles de bain</a></li>
                <li><a class="dropdown-item" href="real/chambre.html">Chambres</a></li>
            </ul>
            <a href="contact.html">Contact</a>
        </nav>
        <!-- BTN NAVIGATION RESPONSIVE-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="dropdown-item">
                        <a class="nav-link active" aria-current="page" href="profils.html">Qui sommes nous</a>
                    </li>
                    <li class="dropdown-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                           data-bs-toggle="dropdown" aria-expanded="false">
                            Réalisations
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="real/cuisine.html">Cuisines</a></li>
                            <li><a class="dropdown-item" href="real/salon.html">Salons</a></li>
                            <li><a class="dropdown-item" href="real/sdb.html">Salles de bain</a></li>
                            <li><a class="dropdown-item" href="real/chambre.html">Chambres</a></li>
                        </ul>
                    </li>
                    <li class="dropdown-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<main>

