<h1>Welcome</h1>

<?php
    while(have_posts()) {
        the_post(); ?>
        <div>
            <h2><?php the_title() ?></h2>
            <div class="content">the_content()</div>
        </div>
    <?php }

?>

<p>Footer</p>