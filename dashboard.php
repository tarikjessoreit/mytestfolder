<?php include "header.php" ?>
<?php
if (!isset($_SESSION['logstatus']) && $_SESSION['logstatus']!=true) {
    header('location:index.php');
  }

?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Dashboard</h1>
      <p>Hello 
        <?php 
            if (isset($_SESSION['uname'])) {
                echo $_SESSION['uname'];
            }
            echo $_COOKIE['uname'];
            ?>


      </p>

      <a href="logout.php">Logout</a>
    </div>
  </div>
</div>
<?php include "footer.php" ?>
