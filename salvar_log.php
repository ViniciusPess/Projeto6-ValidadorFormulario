<?php
$data = file_get_contents("php://input");
$logFile = "C:\Users\vinic\OneDrive\Pastas\Projetos\Projeto 6 - Validador de Formulário\log.txt";


file_put_contents($logFile, $data . "\n", FILE_APPEND);
?>
