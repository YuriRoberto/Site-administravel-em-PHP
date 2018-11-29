<?php 

$pages_all = function() use($conn){
    $result = $conn->query('SELECT * FROM pages');
    return $result->fetch_all(MYSQLI_ASSOC);
};

$pages_one = function($id){
    
};

$pages_create = function(){
    flash('Criou registro com sucesso','sucess');
};

$pages_edit = function($id){
    flash('Atualizou registro com sucesso','sucess');
};

$pages_delete = function($id){
    flash('Removeu registro com sucesso','sucess');
};
