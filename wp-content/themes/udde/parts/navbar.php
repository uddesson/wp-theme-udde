<!-- NAVBAR USING BOOTSTRAP 4.0 -->
<nav class="navbar navbar-toggleable-md navbar-trans navbar-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#hamburgerMenu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Main navbar, connecting to collapsed-toggle with id  -->
    <div class="collapse navbar-collapse justify-content-end" id="hamburgerMenu">
        <div class="navbar-nav">
            <ul>
                <li><a class="nav-item nav-link"><?php wp_list_pages(); ?></a></li>
            </ul>
        </div>
    </div>
</nav>