<?php 
function verificarURL($url) {
    return $url == parse_url
    ($_SERVER['REQUEST_URI'],
    PHP_URL_PATH);
}
function verificarMetodo
($metodo){
    return $metodo == $_SERVER
    ['REQUEST_METHOD'];
}
$rotas = [
    [
        "url" => "/parque",
        "metodo" => "GET",
        "conteudo" => "Parabéns, você entrou no parque!"
    ],
    [ 
        "url" => "/parque/roda gigante",
        "metodo" => "GET",
        "conteudo" => "Parabéns, você está na roda gigante!"
    ],
    [
        "url" => "/parque/montanha russa",
        "metodo" => "GET",
        "conteudo" => "Parabéns, você está na montanha russa! Aproveite!"
    ],
    [
        "url" => "/parque/montanha russa/kamikaze",
        "metodo" => "GET",
        "conteudo" => "Parabéns, você está no kamikaze! Divirta-se!"
    ],
    [
        "url" => "/parque/carrossel",
        "metodo" => "GET",
        "conteudo" => "Parabéns, você está no carrossel!"
    ],
    [
        "url" => "/parque/carrinhobatebate",
        "metodo" => "GET",
        "conteudo" => "Parabéns, você está nos carrinhos de bate-bate!"
    ],
    [
        "url" => "/parque/pendulo",
        "metodo" => "GET",
        "conteudo" => "Parabéns, você está no pêndulo!"
    ],
    [
        "url" => "/parque/cadeirasvoadoras",
        "metodo" => "GET",
        "conteudo" => "Parabéns, você está nas cadeiras voadoras!"
    ]
    ];
    foreach ($rotas as $rota) {
        if(verificarURL($rota['url']) && verificarMetodo($rota['metodo'])) {
            echo $rota['conteudo'];
        }
    }
?>