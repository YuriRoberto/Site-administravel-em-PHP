<?php 

function pages_get_data($redirectOnError){
    $title = filter_input(INPUT_POST, 'title');
    $url = filter_input(INPUT_POST, 'url');
    $body = filter_input(INPUT_POST, 'body');

    if(is_null($title) or is_null($url)){
        flash('Informe os campos de título e url', 'error');
        header('location: ' . $redirectOnError);
        die();

    }

    return compact('title', 'body', 'url');

}

$pages_all = function() use($conn){
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function($id){
    
};

$pages_create = function() use ($conn) {
    
    $data = pages_get_data('/admin/pages/create');

    $sql = 'INSERT INTO pages (title, body, url, updated, created) VALUES (?, ?, ?, NOW(), NOW())';

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $data['title'], $data['body'], $data['url'] );

    flash('Criou registro com sucesso','sucess');

    return $stmt->execute();

};

$pages_edit = function($id){
    flash('Atualizou registro com sucesso','sucess');
};

$pages_delete = function($id){
    flash('Removeu registro com sucesso','sucess');
};
