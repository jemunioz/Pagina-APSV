	</div><!-- #container -->

	<div class="push"></div>

</div><!-- #wrapper -->

<style type="text/css">
    .div_imagen{
		width:250px; 
		height:150px;
		background-color:#e9eaee; 
		border-radius:20px;
		padding:15px;
		text-align:justify;
        }
	.div_imagen2{
		width:250px; 
		height:150px;
		background-color:#01519a; 
		border-radius:20px;
		padding:15px;
		text-align:justify;
        }	
    </style>

<footer id="colophon" role="contentinfo">
		<div id="site-generator">
		
        <div id="contenedor-footer"> 
		<table>
            <tr>
             	<td>
                	<div class="div_imagen">
                    	<ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:12px; color:#03C">NORMATIVAS</ul>
                        <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10px;">Normativa Vigente</ul>
                        <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10px;">Ley 26.363</ul>
                        <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10px;">Ley 26.363</ul>
                        <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10px;">Información Práctica</ul>
                    </div>
             	</td>
             	<td>
                	<div class="div_imagen2">
                    <p style="color:#CCC; size:20px;">SEGUINOS!</p><br />
                    	<img id="imagen" src="wp-content/themes/the-newswire/facebook.png" height="50" width="50"/>
                        <img id="imagen" src="wp-content/themes/the-newswire/twitter.png" height="50" width="50" />
                        <img id="imagen" src="wp-content/themes/the-newswire/youtube.png" height="50" width="50" />
                        <img id="imagen" src="wp-content/themes/the-newswire/google.png "height="50" width="50" />
                    </div>
             	</td>
             	<td>
                	<div class="div_imagen">
                    <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:12px; color:#03C">INSTITUCIONAL</ul>
                        <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10px;">Misiones y Funciones</ul>
                        <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10px;">Autoridades</ul>
                        <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10px;">Organigrama</ul>
                        <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10px;">Contacto</ul>
                    </div>
             	</td>
             	<td>
                	<div class="div_imagen2">
                     <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:12px; color:#CCC">OBSERVATORIO VIAL</ul>
                        <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10px; color:#CCC">Información General</ul>
                        <ul style="font-family:'Trebuchet MS', Arial, Helvetica, sans-serif; font-size:10px; color:#CCC">Misión</ul>
                    </div>
             	</td>   
             </tr>
        </table>
        </div>
        <div>
			<img id="imagen" src="wp-content/themes/the-newswire/bannerppt.jpg" width="1000" height="110"/>
		</div>
        <hr style="height: 3px; background-color: #F5F5F5; border: 0;">
        <br>

						
			<?php  echo __('&copy; ', 'newswire') . esc_attr( get_bloginfo( 'name', 'display' ) );  ?>
            <?php // if ( is_front_page() && ! is_paged() ) : ?>
            <?php // _e('- Powered by ', 'newswire'); ?><a href="<?php //echo esc_url( __( '', '' ) ); ?>" title="<?php //esc_attr_e( 'Semantic Personal Publishing Platform', 'newswire' ); ?>"><?php _e('' ,''); ?></a>
			<?php // _e(' and ', 'newswire'); ?><a href="<?php //echo esc_url( __( '', '' ) ); ?>"><?php //_e('', ''); ?></a>
            <?php // endif; ?>

		</div>
	</footer><!-- #colophon -->


<?php wp_footer(); ?>


</body>
</html>