<?php

class Model{
    public $link;
    function __construct()
    {

        $this->link = mysqli_connect("127.0.0.1", "test", "testqwerty", "tasklist", "3306");
        mysqli_set_charset($this->link,"utf-8");
    }
    function getData($start, $perPage){
    }
    function saveData($result){
    }
}
