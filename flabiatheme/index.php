<?php get_header();?>

      <div id="wrapper">
        <div id="contenedor">
      <div class="fondo_cuadros"></div> <!-- End of fondo_cuadros -->
	
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
                  <h3 class="titulos_de_seccion">Lic. Flabia Vit</h3>
                  </div> <!-- End of titulo_seccion -->                
                </div> <!-- End of cabecera -->


   
   <div id="contenedorPost" class="clearfix">
           

               		<!-- Post 001 -->

               		<div id="postUno">
                  	<?php query_posts('showposts=1'); ?>
		    	 	<?php $posts = get_posts('numberposts=7&offset=0'); foreach ($posts as $post) : start_wp(); ?>
		   			<?php static $count1 = 0; if ($count1 == "1") { break; } else { ?>     
  
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
 
				 	<span><?php the_content(_('seguir leyendo...')); ?></span>
	
				 	<?php wp_link_pages(); ?>	
	
				 	<?php $count1++; } ?>
				 	<?php endforeach; ?>
				    </div> <!-- End of postUno -->
					<!-- Final Post 001 -->
	 
           
           
                <!-- Post 002 -->
                <div id="postDos">
                <?php query_posts('showposts=1'); ?>
	            <?php $posts = get_posts('numberposts=8&offset=1'); foreach ($posts as $post) : start_wp(); ?>
		        <?php static $count2 = 0; if ($count2 == "1") { break; } else { ?>
	 
	            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	   
	            <span><?php the_content(_('seguir leyendo...')); ?></span>

		        <?php $count2++; } ?>
		        <?php endforeach; ?>
		        </div> <!-- End of postDos --> 
		        <!-- Final Post 002 -->

	      
  
		        <!-- Post 003 -->
		        <div id="postTres">
		     	<?php query_posts('showposts=1'); ?>
		     	<?php $posts = get_posts('numberposts=5&offset=2'); foreach ($posts as $post) : start_wp(); ?>
		     	<?php static $count3 = 0; if ($count3 == "1") { break; } else { ?>
		     
		     	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		     
		     	<span><?php the_content(_('seguir leyendo...')); ?></span>
		     
		     	<?php $count3++; } ?>
		     	<?php endforeach; ?>
		        </div> <!-- End of postTres -->
		     	<!-- Final Post 003 -->
	              
	</div> <!-- End of contenedorPost -->	  

<hr>


	<div id="contenedorFinal" class="clearfix">

		<div id="colInfoVit">

			<h2>Desarrollarnos y transformarnos</h2>

			<p>
				<img src="<?php bloginfo('template_directory')?>/images/flabia_vit.jpg" />
				Flabia Vit La Vida es estar disponibles al encuentro con uno mismo y con 
				otros, es poder crecer, cambiar, desarrollarnos y transformarnos en personas 
				que contribuyen a un mundo mejor.Como psic&oacute;loga, he compartido y comparto 
				con mis pacientes sus dolores y conflictos, sus alegr&iacute;as, sus 
				crecimientos, ayud&aacute;ndoles a buscar caminos de ser y sentirse mejor, he 
				estado y estoy cerca de sus vidas, disfrutando de sus logros, sue&ntilde;os y 
				realizaciones.

			</p>

			<div class="share">
			<!-- AddThis Button BEGIN -->
			<div class="addthis_toolbox addthis_default_style ">
			<a class="addthis_button_preferred_1"></a>
			<a class="addthis_button_preferred_2"></a>
			<a class="addthis_button_preferred_3"></a>
			<a class="addthis_button_preferred_4"></a>
			<a class="addthis_button_compact"></a>
			</div>
			<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=xa-50138aa33c496709"></script>
			<!-- AddThis Button END -->
		</div> <!-- End of share -->

		</div> <!-- End of colInfoVit -->


		<div id="banner001">

			<img src="<?php bloginfo('template_directory')?>/images/banner_vitmonges.jpg" />

		</div> <!-- End of banner001 -->

		<div id="banner002">

			<img src="<?php bloginfo('template_directory')?>/images/terapia-on-line-banner-vit.jpg" />

		</div> <!-- End of banner002 -->


	</div> <!-- End of contenedorFinal -->   	

	   
<?php get_footer();?>