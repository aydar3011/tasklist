<?php
class Model_login extends Model {
    function getUser($login){
        $sql = "SELECT * from tasklist.user where username = '${login}'";
        echo $sql;
        return mysqli_query($this->link, $sql);
    }
    function upadateAutorization($result){
        $sql = "update tasklist.user set autorized = ${result['autorized']} where id=${result['id']}";
        mysqli_query($this->link,$sql);
    }
}
?>

