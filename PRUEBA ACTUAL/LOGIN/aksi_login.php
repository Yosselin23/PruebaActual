<?php
if($_POST['username']==""){
  ?>
  <script>
    $("#username").focus();
    Materialize.toast('<span>Username required!</span>', 4000);
  </script>
  <?php
}elseif($_POST['password']==""){
  ?>
  <script>
    $("#password").focus();
    Materialize.toast('<span>Password required!</span>', 4000);
  </script>
  <?php
}else{
  $username=mysql_real_escape_string(htmlspecialchars($_POST['username']));
  $password=htmlspecialchars($_POST['password']);

  $user = "admin";
  $pass = "admin";
    
  if($user==$username && $pass=$password){
    ?>
    <script>Materialize.toast('<span>Welcome to My Website  Design and Developed By <a href="http://www.impardi.pe.hu">Im Pardi</a>!</span>', 400000)</script>
    <?php
  }else{
    ?>
    <script>Materialize.toast("<span>Username or Password you entered don't match.!</span>", 4000)</script>
    <?php
  }
}

?>