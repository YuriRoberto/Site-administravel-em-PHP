<?php

function resolve($route){
    $path = $_SERVER['PATH_INFO'] ?? '/';

    $route = '/^\/([a-z]+)$/';

    if (preg_match($route, '/')){
        echo 'encontrou';
    } else {
        echo 'não deu';
    }

}



if($path == '/'){
    require __DIR__ . '/site/routes.php';
} elseif ($path == 'admin'){
    require __DIR__ . '/admin/routes.php';
} else {
    echo 'Página não encontrada';
}
