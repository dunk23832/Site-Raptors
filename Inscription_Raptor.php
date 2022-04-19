<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Toronto Raptors</title>
    <link rel="stylesheet" type="text/css" href="Inscription_Raptors.css" />
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/css/uikit.min.css" />

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.13.7/dist/js/uikit-icons.min.js"></script>




</head>

<body>
    <header>
        <nav>


            <ul class="navbar-nav">
                <img id="logo" src="assets/Logo-Raptors.png" alt="Logo" />
                <li>
                    <a href="#">Accueil</a>
                </li>
                <li>
                    <a href="#">Palmarès</a>
                </li>
                <li>
                    <a href="#">maillots</a>
                </li>
                <li>
                    <a href="#">Inscription</a>
                </li>
            </ul>

        </nav>
    </header>
    <form action="welcome.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>








</body>

</html>