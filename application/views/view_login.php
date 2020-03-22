
    <div class="wrapper row-cols-sm-4 align-content-center ">
        <form class="form-signin" method="post" action="process">
          <h2 class="form-signin-heading">Please login</h2>
          <input type="text" class="form-control" name="login" placeholder="Логин" required/>
          <input type="password" class="form-control" name="password" placeholder="Пароль" required/>
            <?php if(isset($pages['error'])){
                echo "<span>${pages['error']}</span>";
            }?>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        </form>
      </div>

</body>
</html>