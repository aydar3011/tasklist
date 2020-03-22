<div class="text-right"><button class="btn btn-primary"><a href="/login" class="text-white">Войти</a></button></div>
<form action="/main/add" method="post" class="row align-items-start">

    <div class="col-sm-3">
        <label for="name">Имя</label>
        <input type="text" name="user" id="name" required>
    </div>
    <div class="col-sm-3">
        <label for="email">Email</label>
        <input type="email" name="email" id = "email" required>
    </div>
    <div class="col-sm-3">
        <label for="task">Задача</label>
        <input type="text" name="task" id="task" required>
    </div>
    <div class="col-sm-3">
        <input type="submit" value="Отправить">
    </div>
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo "<script>alert('Задача добавлена')</script>";
}?>
<div class="container">
    <table class="table-bordered">
        <?php foreach($data as $row){
            echo "<tr>
                <td class=\"col-4\">${row['user']}</td>
                <td class=\"col-4\">${row['email']}</td>
                <td class=\"col-4\">${row['task']}</td>";
              if(strpos($row['status'], 'Невыполнено') === false){
                  echo "<td class=\"col - 4\">${row['status']}</td></tr>";
              }
              else{
                  echo "<td class=\"col - 4\"></td></tr>";
              }

        }?>
    </table>
   <nav aria-label="pagination">
       <ul class="pagination">
           <?php

           for($i = 1; $i <= $pages['pageCount']; $i++){
               if($pages['page'] == $i){
                   echo "<li class='page-item active'><a class='page-link' href='/main/index/?p=$i'>$i <span class='sr-only'>(current)</span></a></li>";
               }
               else{
                   echo "<li class='page-item'><a class='page-link' href='/main/index/?p=${i}'>${i}</a></li>";
               }
           }
           ?>
       </ul>
   </nav>
</div>
</body>
</html>