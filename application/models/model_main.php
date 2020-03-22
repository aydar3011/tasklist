<?php
class Model_main extends Model{
    function getData($start, $perPage){

        $sql = "SELECT * FROM tasklist.tasks LIMIT ${start}, ${perPage}";

        $results = mysqli_query($this->link, $sql);

        return $results;
    }
    function getCountOfData(){
        $sql = "SELECT COUNT(*) FROM tasklist.tasks";
        return mysqli_query($this->link, $sql);
    }
    function saveData($result){
        $sql = "INSERT INTO tasklist.tasks(user,email,task) VALUES('${result['user']}','${result['email']}','${result['task']}')";

        mysqli_query($this->link, $sql);

    }
}