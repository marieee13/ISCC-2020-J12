html>

>
<title>Admin</title>
<meta sharset="UTF-8">
<d>
<header>
</header>
<main>

<form action="admin.php" method="post" enctype="multipart/form-data">
<input type="File" name="File" required>
<input type="Text" placeholder="login" name="login" required>
<input type="Text" placeholder="password" name="password" required>
<input type="submit">

</form>
<?php

$login = $POST['login'];
$password = $POST['password'];
$img = $FILES['File']['name'];
include ("connect_database.php");
$users = $pdo ->query("SELECT * FROM `uilisateurs` WHERE `login` LIKE '%$login%'")->fetchAll();
if (empty ($users[0]'login'])) {
    $pdo->query("INSERT INTO `utilisateurs` (`id` , `login` , `password` , `img-path`) VALUES (NULL, '$login', '$password', '$img')");

}
else {
    $pdo->query("UPDATE `BaseTest01`.`produit` SET `password`='$password', `img-path`='$img' WHERE `login` = '%$login%'");
}
?>
</main>
<footer></footer>
<y>
