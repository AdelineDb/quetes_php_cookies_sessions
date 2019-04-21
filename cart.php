<?php

require 'inc/head.php';  ?>

<section class="cookies container-fluid">
    <div class="row">

      <?php if (!empty($_SESSION['cart'][46])) {
          echo 'Number of Pecan Nuts cookies : ' . $_SESSION['cart'][46] . '<br>';
          }
          if (isset($_SESSION['cart'][49])) {
          echo 'Number of Chocolate chips cookies : ' . $_SESSION['cart'][49] . '<br>';
          }
          if (isset($_SESSION['cart'][58])) {
          echo 'Number of Chocolate cookies : ' . $_SESSION['cart'][58] . '<br>';
          }
          if (isset($_SESSION['cart'][32])) {
          echo 'Number of M&Ms cookies : ' . $_SESSION['cart'][32] . '<br>';

      } ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
