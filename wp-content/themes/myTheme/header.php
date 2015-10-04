<?php $T_P = get_template_directory_uri();?>
<!DOCTYPE html>
<html<?php language_attributes(); ?>>
    <head>
        <title><?=the_title()?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	    <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
		<?php wp_admin_bar_header()?>
        <header class="fullscrtoWidth">
           
            <img  id="logo"  src="<?=$T_P?>/pic/logo.png" alt="logo"/>
			<?php 
			   topmenu();
			?>
		    	
<!--            <ul class="menuList" >
                <li> <a href="#">Что мы делаем?</a> </li>
                <li> <a href="#MeWork">ЗАКАЗАТЬ</a> </li>
                <li> <a href="#anchoreBenefit">О нас</a> </li>
                <li> <a href="#anchorWhyUS">Почему мы?</a> </li>
                <li> <a href="#anchorServicess">Наши товары </a> </li>
                <li> <a href="#anchorTeam">Наша команда</a> </li>
                <li> <a href="#anchorSocial">Где нас найти?</a> </li>
            </ul>-->

		<?php get_sidebar(); ?>	
			
        </header>

