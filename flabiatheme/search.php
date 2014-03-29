<?php get_header();?>

      <div id="wrapper">
        <div id="contenedor">
      <div class="fondo_cuadros">
            

      </div> <!-- End of fondo_cuadros -->
           
            <div id="cabecera_single">
                <h1 class="titulo"><a href="http://www.flabiavit.com.ar">FLABIA VIT</a></h1>
                <h2 class="subtitulo">Psic&oacute;loga</h2>
                
                <div class="datos_personales">
                    <h3 class="datos_personales"><?php bloginfo('description');?></h3>
                </div> <!-- End of datos personales -->
                
                <ul id="navegacion">
		  <?php wp_list_pages('title_li=');?>
                    <li><a href="#"><img src="<?php bloginfo('template_directory')?>/images/facebook.png" width="16" height="16" alt="Facebook" title="Facebook" class="redes_facebook" /></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory')?>/images/twitter.png" width="16" height="16" alt="Twitter" title="Twitter" class="redes_twitter" /></a></li>
                    <li><a href="#"><img src="<?php bloginfo('template_directory')?>/images/linkedin.png" width="18" height="18" alt="Linkedin" title="Linkedin" class="redes_linkedin" /></a></li> 
                </ul> <!-- End of navegacion -->

                
                <div class="titulo_seccion">
		  
                  <h3 class="titulos_de_seccion_single">Flabiavit.com.ar</h3>
                  </div> <!-- End of titulo_seccion -->                
                </div> <!-- End of cabecera -->
           
            <div id="menu_single">
             
	    <?php if (have_posts()) : ?>
  <h2 class="titulo_de_los_posts_single">Resultados de la b&uacute;squeda</h2>
  <div class="navigation">
    <div class="alignleft"><?php next_posts_link('&laquo; Entradas anteriores') ?></div>
    <div class="alignright"><?php previous_posts_link('Entradas siguientes &raquo;') ?></div>
  </div>
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <div class="menu_single">
      <h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Enlace Permanente a <?php the_title(); ?>"><?php the_title(); ?></a></h3>
      <small><?php the_time('l, j \d\e F, Y') ?></small>
      <p class="postmetadata">
        Clasificado bajo: 
        <?php the_category(', ') ?> | 
        <?php edit_post_link('Editar','',' | '); ?>  
        <?php comments_popup_link('Sin comentarios &#187;', '1 comentario &#187;', '% comentarios &#187;'); ?>
      </p>
    </div>
  <?php endwhile; ?>
  <div class="navigation">
    <div class="alignleft"><?php next_posts_link('&laquo; Entradas anteriores') ?></div>
    <div class="alignright"><?php previous_posts_link('Entradas siguientes &raquo;') ?></div>
  </div>
<?php else : ?>
  <h2 class="resultados">No encontramos lo que esta buscando.&iquest;Desea hacer otra b&uacute;squeda?</h2>
  
  <?php include (TEMPLATEPATH . '/searchform.php'); ?>
  
<?php endif; ?>

            </div> <!-- End of menu_single -->
	    
	    <!-- =============================================End of columna 1 ================================================================ -->
	   
<?php get_footer();?>