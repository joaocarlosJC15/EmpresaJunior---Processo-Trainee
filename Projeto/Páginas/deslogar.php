<?php
session_start();

unset($_SESSION["autenticacao"]);
session_destroy();


header("Location: sucesso2.php");
?>