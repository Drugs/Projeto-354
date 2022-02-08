<?php
session_start();
$_SESSION['usuario_id'] = 'Mara'; // guarda no ip xxx.xxx.xxxx.xx
$_SESSION['nome'] = 'Mara'; 
$_SESSION['cpf'] = 'Mara'; 
print_r ($_SESSION);
?>