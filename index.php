<h1>Welcome</h1>

<?php
    while(have_posts()) {
        the_post(); ?>
        hello
    <?php}

?>

<p>Footer</p>