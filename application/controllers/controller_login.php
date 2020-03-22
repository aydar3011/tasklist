<?php
class Controller_login extends Controller{
    function __construct()
    {
        $this->model = new Model_login();
        $this->view = new View();
    }
    function action_index(){
        $this->view->generate('view_login.php','template.php',null,null);
    }
    function action_index1($pages){
    $this->view->generate('view_login.php','template.php',null,$pages);
    }
    function action_proccess(){
        $login = htmlentities($_POST['login']);
        $password = htmlentities(md5($_POST['password']));
        $err = '';
        $result=$this->model->getUser($login);
        echo "${result['password']}";
        if($password == $result['password']){
           $result['autorized'] = 1;

        }
        else{
            $pages = array('error' => 'Вы ввели неправильный логин или пароль');
            $this->action_index1($pages);
        }
    }
}