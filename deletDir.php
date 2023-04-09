<?php
    $dir = './spravki';
    $files = scandir($dir);
    if(isset( $_POST['btn'])){
        echo '[eqwe';
        foreach($files as $key => $value){ 
            if(is_file($value)) {
                unlink($value);
            }
        }
    }      
?>