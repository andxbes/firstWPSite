<?php
/*
 *Temolate name: Шаблон страницы фильма
 */
get_header();?>

<?php the_title();?>
<?php the_post();?>
<?php the_post_thumbnail('large');?>
<?php the_content();?>




<?php the_comment();?>





<?php
get_footer();

