<?php
// Recebe os dados JSON do cliente
$jsonData = file_get_contents("php://input");

// Converte os dados JSON para um array
$data = json_decode($jsonData, true);

// Salva os dados em um arquivo JSON no servidor
file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));

echo 'Dados salvos com sucesso!';
