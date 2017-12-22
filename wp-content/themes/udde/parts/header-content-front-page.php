<div class="container-about">
    <h1 class="about-hello">
        <!-- Fetches and displays the "Welcome Message" set in General Settings -->
        <?php echo "{" . get_option( 'welcomemessage' ) . "}"; ?>
    </h1>

    <!-- Fetches and displays the "Blog Description" set in General Settings -->
    <p class="about-description"><?php echo get_bloginfo( 'description' ); ?></p>
    
    <div class="arrow"><a href="#jump-to-feed"><i class="fa fa-angle-down" aria-hidden="true"></a></i></div>
</div>