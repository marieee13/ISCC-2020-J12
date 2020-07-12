<DOCTYPE !>
<html>

<head>
<title>mini-site-routing</title>
<meta charset="utf-8">
<meta name="viexport" content = "width-device-width, initial-scale-1.0">
</head>

<body>
<header>

<nav>
<ul>
<li><a href="mini-site-routing.php?page=1">Accueil</a></li>
<li><a href="mini-site-routing.php?page=2">Page 2</a></li>
<li><a href="mini-site-routing.php?page=3">Page 3</a></li>
<li><a href="mini-site-routing.php?page=connexion">Connexion</a></li>
</ul>
</nav>
</header>


<?php
session_start ();

if (isset($_SESSION["id"])) 
        echo "<p> Login : ". ($_SESSION["id"]) . "</p>";

else if (!isset($_SESSION["id"])) {
    if (isset($_COOKIE["id"])) {
        $_SESSION["id"] = $_COOKIE["id"];
    }
    else {
        header ( "Location: mini-site-routing.php?page=connexion");
    }
}

if ($_GET ['page'] == 1)
     echo "<p> Accueil </p>"; 
else if ($_GET['page'] == 2) 
        echo "<p> Page 2 </p>";
else if ($_GET['page'] == 3) 
        echo "<p> Page 3 </p>"; 
else if ($_GET['page'] == "connexion") 
        include "connexion.php"; 
?>

</body>
</html>