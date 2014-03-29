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
                </ul> <!-- End of navegacion -->

                
                <div class="titulo_seccion">
		  
                  <h3 class="titulos_de_seccion_single">Flabiavit.com.ar</h3>
                  </div> <!-- End of titulo_seccion -->                
                </div> <!-- End of cabecera -->
           
            <div id="menu_single">
             
	     <?php if (have_posts()) : ?>
		     <?php while (have_posts()) : ?>
		       <?php the_post(); ?>
		       <div class="post" id="post-<?php the_ID(); ?>">
			 <h2 class="titulo_de_los_posts_single"><?php the_title(); ?></h2>
			 <div class="entry">
			   <?php the_content('<p class="serif">Leer el resto de esta p&aacute;gina &raquo;</p>'); ?>
			   <?php wp_link_pages(array('before' => '<p><strong>P&aacute;ginas:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			 </div>
		       </div>
		     <?php endwhile; ?>
		   <?php endif; ?>
		   <?php edit_post_link('Editar esta p&aacute;gina.', '<p>', '</p>'); ?>
	    
            </div> <!-- End of menu_single -->
	    
	    <!-- =============================================End of columna 1 ================================================================ -->
	    
           
  <?php get_sidebar();?>

	   
<?php get_footer();?>