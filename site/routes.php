<?php

if (resolve('/admin')){
   echo 'administracao';
} elseif (resolve('/admin/pages')){
    echo 'administracao de paginas';
} else{
    echo 'Página não encontrada';
}
