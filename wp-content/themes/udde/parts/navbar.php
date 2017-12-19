<!-- NAVBAR USING BOOTSTRAP 4.0 -->
<nav class="navbar navbar-expand-lg navbar-trans navbar-dark justify-content-end">

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamburgerMenu">
    <i class="fa fa-bars" aria-hidden="true"></i>
  </button>

  <!-- Navbar links, connecting to collapsed-toggle with id  -->
  <div class="collapse navbar-collapse justify-content-end" id="hamburgerMenu">
    <ul class="navbar-nav">
        <?php 
          /* Fetches custom $navbar from functions.php */
          echo '<a>' . $navbar . '</a>';
        ?>
    </ul>
  </div> 
</nav>