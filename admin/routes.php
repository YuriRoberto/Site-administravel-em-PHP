<?php 

if(resolve('/admin')){
    render('admin/home','admin');

} elseif (resolve('/admin/pages.*')){
    include __DIR__ . '/pages/routes.php';

}  else {
    echo 'Página não encontrada';

}
