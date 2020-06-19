<?php

class framework {
    public function view($viewName,$mydata=[]){
        if(file_exists('../application/views/'.$viewName.'.php')){
            require_once('../application/views/'.$viewName.'.php');
        }else{
            echo 'View $viewName not found';
        }
    }
    public function model($modelName){
        if(file_exists('../application/models/'.$modelName.'.php')){
            require_once('../application/models/'.$modelName.'.php');
            return new $modelName;
        }else{
            echo 'File $modelName not found';
        }
    }
}
?>
