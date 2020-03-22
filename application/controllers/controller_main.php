<?php
class Controller_main extends Controller{
    public $page;
    function __construct()
    {
        $this->model = new Model_Main();
        $this->view = new View();

    }
    function action_index(){
        $perPage = 3;
        $pageCount = $this->model->getCountOfData()->fetch_row();
        $pageCount = ceil($pageCount[0]/$perPage);
        if(empty($_GET['p']) || ($_GET['p'] < 0)){
            $this->page = 1;
        }
        else{
            $this->page = $_GET['p'];
        }
        $start = ($this->page - 1) * $perPage;
        $data = $this->model->getData($start, $perPage);
        $pages = array ('pageCount' => $pageCount,
           'page' => $this->page);
        $this->view->generate('view_main.php','template.php',$data, $pages);
    }
    function action_add()
    {
        if(isset($_POST['user'])) {

            $result = array(
                'user' => htmlentities($_POST['user']),
                'email' => htmlentities(trim($_POST['email'])),
                'task' => htmlentities(trim($_POST['task']))
            );
            $this->model->saveData($result);
        }
        $this->action_index();
    }
}