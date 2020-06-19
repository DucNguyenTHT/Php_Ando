<?php
    Class userController extends framework{
        public function index(){
            echo 'UserController';
        }
        public function userMethod(){
            //về postdata
            // $mydata = [
            //     'title' =>'Myfirstpost',
            //     'body' =>'myfirstbody',
            // ];
            // $this->view('userView',$mydata);
            //realdata
            $myModel = $this->model('userModel');
            $myModel->myData();
        }
    }

?>