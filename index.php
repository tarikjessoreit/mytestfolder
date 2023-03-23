<?php include "header.php" ?>
<?php

if (isset($_SESSION['logstatus']) && $_SESSION['logstatus']===true) {
  header('location:dashboard.php');
}

if (isset($_POST['loginbtn'])) {
  $un = $_POST['uname'];
  $up = $_POST['upass'];

  if($un === 'admin'){
    if ($up === '12345') {
      $_SESSION['uname'] = $un;
      $_SESSION['logstatus'] = true;
      
      setcookie('uname', true, time() + 20, "/");
      setcookie('logstatus', true, time() + (86400*30*12), "/");
      header('location:dashboard.php');
    }else{
      echo "Wrong password";
    }
  }else{
    echo "Wrong username";
  }

}

?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Home</h1>
      <form method="post" action="">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="uname" class="form-control" id="username" placeholder="Enter username">
        </div>
      <form>
        <div class="mb-3">
          <label for="userpass" class="form-label">Password</label>
          <input type="password" name="upass" class="form-control" id="userpass" placeholder="Enter User Password">
        </div>
        <div class="mb-3">
          <button type="submit" name="loginbtn" class="btn btn-primary">Login</button>
        </div>
      </form>

    </div>
  </div>
</div>

<?php include "footer.php" ?>