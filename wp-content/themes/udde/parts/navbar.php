<!-- NAVBAR USING BOOTSTRAP 4.0 -->
<nav class="navbar navbar-expand-lg navbar-trans navbar-dark justify-content-end">

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#hamburgerMenu">
  <span class="navbar-toggler-icon"></span>
</button>

  <!-- Navbar links, connecting to collapsed-toggle with id  -->
  <div class="collapse navbar-collapse justify-content-end" id="hamburgerMenu">
    <ul class="navbar-nav justify-content-end">
        <a><?php wp_list_pages(); ?></a>
    </ul>
  </div> 
</nav>