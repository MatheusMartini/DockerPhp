<h2>Home</h2>
<p>Bem Vindo
<?php
    echo($_SESSION['login']['name']);
?>
<br>
seu login é: 
<?php
    echo($_SESSION['login']['user']);
?>

e seu id é:
<?php
    echo($_SESSION['login']['idUser']);
?>
</p>
