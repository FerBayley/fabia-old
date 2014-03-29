<?php get_header();?>

      <div id="wrapper">
        <div id="contenedor">
      <div class="fondo_cuadros">
            

      </div> <!-- End of fondo_cuadros -->
            <div id="cabecera">
                <h1 class="titulo"><a href="http://www.flabiavit.com.ar">FLABIA VIT</a></h1>
                <h2 class="subtitulo">Psic&oacute;loga</h2>
                
                <div class="datos_personales">
                    <h3 class="datos_personales"><?php bloginfo('description');?></h3>
                </div> <!-- End of datos personales -->
                
                <ul id="navegacion">
		  			<?php wp_list_pages('title_li=');?>
                </ul> <!-- End of navegacion -->

               <div class="imagen_silider">
                    <img src="<?php bloginfo('template_directory')?>/images/flabia_principal.jpg" width="675" height="341" alt="imagen" title="imagen" class="imagenes_centrales" />
                </div> <!-- End of imagen_slider -->
                
                <div class="titulo_seccion">
                  <h3 class="titulos_de_seccion">Publicaciones de la Lic. Flabia Vit</h3>
                  </div> <!-- End of titulo_seccion -->                
                </div> <!-- End of cabecera -->
           
            <div id="menu">
                  <?php query_posts('showposts=1'); ?>
		     <?php $posts = get_posts('numberposts=7&offset=0'); foreach ($posts as $post) : start_wp(); ?>
		     <?php static $count1 = 0; if ($count1 == "1") { break; } else { ?>     
  
	<h2 class="titulo_de_los_posts"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 
	 <p class="texto_post"><?php the_content(_('seguir leyendo...')); ?></p>
	
	 <?php wp_link_pages(); ?>	
	
	 <?php $count1++; } ?>
	 <?php endforeach; ?>
	 
            </div> <!-- End of menu -->
	    
	    <!-- =============================================End of columna 1 ================================================================ -->
	    
           
            <div id="contenido">
                
              <div id="principal">
                <?php query_posts('showposts=1'); ?>
	        <?php $posts = get_posts('numberposts=8&offset=1'); foreach ($posts as $post) : start_wp(); ?>
		<?php static $count2 = 0; if ($count2 == "1") { break; } else { ?>
	 
	        <h2 class="titulo_de_los_posts"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	   
	        <p class="texto_post"><?php the_content(_('seguir leyendo...')); ?></p>

		  <?php $count2++; } ?>
		  <?php endforeach; ?>
	    </div> <!-- End of principal -->
	      
	      
	    <!-- =============================================End of columna 2 ================================================================ -->
           
              <div id="secundario">

		     <?php query_posts('showposts=1'); ?>
		     <?php $posts = get_posts('numberposts=5&offset=2'); foreach ($posts as $post) : start_wp(); ?>
		     <?php static $count3 = 0; if ($count3 == "1") { break; } else { ?>
		     
		     <h1 class="titulo_de_los_posts"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		     
		     <p class="texto_post"><?php the_content(_('seguir leyendo...')); ?></p>
		     
		     <?php $count3++; } ?>
		     <?php endforeach; ?>
	       
	       
              </div> <!-- End of secundario -->              
            </div> <!-- End of contenido -->

           
	   <!-- =============================================End of columna 3 ================================================================ -->
	          
	<div id="clearfix">
      
      <div id="dow"></div><!-- End of dow -->
      
      <div id="menu_2">
	 <h2 class="undinamizer">Desarrollarnos y transformarnos</h2>
	 
      <p class="texto_nota_flabia">
	 <img src="<?php bloginfo('template_directory');?>/images/flabia_vit.jpg" width="191" height="242" alt="Flabia Vit" title="Flabia Vit" class="foto_perfil_flabia" />
	 La Vida es estar disponibles al encuentro con uno mismo y con otros, es poder crecer, cambiar, desarrollarnos y transformarnos en personas
	 que contribuyen a un mundo mejor.Como psic&oacute;loga, he compartido y comparto con mis pacientes sus dolores y conflictos, sus alegr&iacute;as, sus
	 crecimientos, ayud&aacute;ndoles a buscar caminos de ser y sentirse mejor, he estado y estoy cerca de sus vidas, disfrutando de sus logros,
	 sue&ntilde;os y realizaciones. 	 
      </p>
      
      <div class="marcadores_2">
	 
      <!-- AddThis Button BEGIN -->
	 <div class="addthis_toolbox addthis_default_style ">
	 <a class="addthis_button_preferred_1"></a>
	 <a class="addthis_button_preferred_2"></a>
	 <a class="addthis_button_preferred_3"></a>
	 <a class="addthis_button_preferred_4"></a>
	 <a class="addthis_button_compact"></a>
	 <a class="addthis_counter addthis_bubble_style"></a>
	 </div>
	 <script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-4de7d73833807d24"></script>
	 <!-- AddThis Button END -->
	 
      </div> <!-- End of marcadores_2 -->
	       
      </div> <!-- End of menu_2 -->
      
      <div id="contenido_2">                
         <div id="principal_2">              
	 <a href="http://www.psicologasvitmonges.com.ar" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/banner_vitmonges.jpg" width="220" height="450" alt="Pauta" title="Pauta" class="pauta" /></a>
	  </div> <!-- End of principal -->

      
       <div id="secundario_2">
      
	 <a href="http://www.psicologasvitmonges.com.ar/terapia-online-3" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/terapia-on-line-banner-vit.jpg" width="205" height="450" alt="Pauta" title="Pauta" class="pauta" /></a>
	 
              </div> <!-- End of secundario -->
            </div> <!-- End of contenido -->


	   
<?php get_footer();?>