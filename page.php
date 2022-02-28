<?php

get_header();

while (have_posts()) {
    the_post(); ?>
    <h1>Este es una Pagina no un Post</h1>
    <h2><?php the_title() ?></h2>
    <h2><?php the_content() ?></h2>
    <hr>
<?php
}

get_footer();
?>