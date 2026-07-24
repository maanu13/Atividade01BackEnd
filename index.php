<?php
header("Content-type: application/json:charset+utf-8");
header("Access-Control-Allow-Origin: *"); 

$resposta = [
    "mensagem" => "Back-end respondendo com sucesso!",
    "status" => "Estável.",
    "nação" => "Brasil.",
    "lingua" => "Português.",
    "criador" => "Manueli.",
    "idade" => "16.",
    "navegador" => "Google Chrome."
];
echo json_encode($resposta);
?>