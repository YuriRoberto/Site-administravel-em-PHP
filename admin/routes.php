<?php 

if(resolve('/admin')){
    echo ' administracao ';
} elseif (resolve('/admin/pages')){
    echo 'Administracao de páginas';
} else {
    echo 'Página não encontrada';
}
