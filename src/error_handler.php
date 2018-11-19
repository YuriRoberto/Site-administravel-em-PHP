<?php 

function setInternalServerError($errno, $errstr, $errfile, $errline){
    echo '<h1>Error</h1>';
    
    echo '<span style="font-weight: bold; color: red">';
    switch ($errno){
        case E_USER_ERROR:
            echo '<strong>ERROR</strong> [' . $errno . '] ' . $errstr . "<br>\n";
            break;

        case E_USER_ERROR:
            echo '<strong>WARNING</strong> [' . $errno . '] ' . $errstr . "<br>\n";
            break;  
            
        case E_USER_ERROR:
            echo '<strong>NOTICE</strong> [' . $errno . '] ' . $errstr . "<br>\n";
            break;    
        
        default:
        echo 'Unknow error type: [' . $errno . '] ' . $errstr . "<br>\n";    
            
    }
    echo '</span>';

    echo '<ul>';
    foreach(debug_backtrace() as $error){
        if(!empty($error['file'])) {
            echo '<li>';
            echo $error['file'] . ':';
            echo $error['line'];
            echo '</li>';
        }
    }
    echo '</ul>';

    exit;
}

set_error_handler('setIternalServerError');
set_exception_handler('setIternalServerError');
