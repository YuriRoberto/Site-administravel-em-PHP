<?php 

if(resolve('/admin')){
    render('admin/home','admin');

} elseif (resolve('/admin/pages.*')){
    include __DIR__ . '/pages/routes.php';

} elseif (resolve('/admin/users.*')){
    include __DIR__ . '/users/routes.php';

} elseif (resolve('/admin/upload/image')){
    echo json_encode();

} else {
    echo 'Página não encontrada';

}
