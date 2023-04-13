<?php
    if(isset($_POST['delet'])){
        $files = glob('spravki/*'); 
        foreach($files as $file){ 
            if(is_file($file)) {
                unlink($file);
            }
        }
    }
    header("Location: /")
?>