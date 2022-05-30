<?php 

    $controllerFiles= scandir('./controllers');

    foreach($controllerFiles as $file){
        if($file == '.' || $file == '..'){
            continue;
        }
        require_once './controllers/'.$file;
    }

    $modelsFiles= scandir('./models');
    foreach($modelsFiles as $model){
        if($model=='.' || $model=='..'){
            continue;
        }
        if(is_file('./models/'.$model)){

            require_once './models/'.$model;
        }
    }

?>