<?php

//print_r($_POST);

$pdo = new PDO('mysql:host=localhost:3307;dbname=empresax','root','usbw');
$sql = $pdo->prepare("INSERT INTO `usuarios` VALUES (null,?,?,?)");
$sql->execute(array($_POST['nome'],$_POST['end'],$_POST['num']));

echo "Dados gravados com sucesso!";
echo "<meta http-equiv='refresh' content='3; URL=../index.php'/>";
?>