<?php get_header(); ?>

<?php echo do_shortcode( "[SlideDeck2 id=1644]" ); ?>


<!--Estilo del home-->
<style type="text/css">
    
        
    .cuadrosnuevos{
    margin:10px;    
    margin-left:10px;
    margin-right:10px;    
    border:#0193cf 1px solid;
    background-color:#EFEFFB;    
    width:300px;
    height:200px;
    }
    .otros{
    margin:10px;    
    margin-left:10px;
    margin-right:10px;    
    border:#0193cf 1px solid;
    background-color:#EFEFFB;    
    width:655px;
    height:200px;
    }
	.cuadrosnuevos-1{
    margin:10px;    
    margin-left:10px;
    margin-right:10px;    
    border:#0193cf 1px solid;
    background-color:#EFEFFB;    
    width:300px;
    height:200px;
    }
	.cuadrosnuevos img{
		opacity:0.8;
	 	
	}
	.cuadrosnuevos img:hover{ 
    /*margin-top: 2px;
	background-image:url(Prueba-1.jpg);*/
	opacity:1;
	
	} 
    .estiloletra{
    font-family:Varela, Lucida Sans Unicode, Arial, Trebuchet MS, Verdana; 
    font-size:0.7cm;
    font-weight:extra-light;
    }
	.cuadritos{
	margin:10px;    
    margin-left:10px;
    margin-right:10px;    
    border:#0193cf 1px solid;
    width:180px;
    height:100px;
	}
	.cuadritos-1{
		position:absolute;
		margin-top:-50px;
		background-color:rgba(45,45,45,0.8);
		width:180px;
		height:50px;
		color:#FFF;
		-webkit-transition:opacity 0.2s;
		font-family:"Lucida Sans Unicode", "Lucida Sans", "DejaVu Sans", Verdana, sans-serif;
		opacity:0;
		overflow:hidden;
		}
	div.cuadritos:hover div.cuadritos-1{
		opacity:0.8;		
		}
	p.headline{
		position:absolute;
		font-size:14px;
		margin-left:-70px;
		-webkit-transition: margin-left 0.4s;
		}
	div.cuadritos:hover p.headline{
		margin-left:45px;
		}		
</style>

<!--------------------------------------------------------------------Fin del estilo del home------------------------------------------------------>

<div style="height:20px;"></div><hr/>
	
<table style="width:100%">
    <tr>
        <td align="center">
            <div class="cuadrosnuevos">
            <p class="estiloletra"><img id="imagen" src="wp-content/themes/the-newswire/Prueba.png" /></p>
            </div>
        </td>
       <td align="center">
            <div class="cuadrosnuevos">
            <p class="estiloletra"><img src="wp-content/themes/the-newswire/Prueba4.png" /></p>
            </div>
        </td>
        <!--<td align="center" rowspan="2" bordercolor="#000000">
            <div class="cuadrosnuevos-1" style="background:#FFF; border-color:#FFF">
              <p class="estiloletra"><img src="wp-content/themes/the-newswire/banner.png" style="border-color:#EFEFFB" /></p> 
            </div>
        </td>-->
        <td align="center">
            <div class="cuadrosnuevos">
             <p class="estiloletra"><img src="wp-content/themes/the-newswire/Prueba3.png" /></p>
            </div>
        </td>     
        </tr>
        <tr>
        <td align="center">
            <div class="cuadrosnuevos">
                <iframe width="300" height="200" src="https://www.youtube.com/embed/7IJLAOaRgaY" frameborder="0" allowfullscreen></iframe>
            </div>
        </td>
       <!--td align="center">
            <div class="cuadrosnuevos">
            <p class="estiloletra"><img src="wp-content/themes/the-newswire/Prueba2.jpg" /></p>
            </div>
        </td-->            
        <td align="center" colspan="2">
            <div class="otros">
                <img src="wp-content/themes/the-newswire/ultimo.gif" />
            </div>
        </td>  
    </tr>
</table>
<div style="height:20px;"></div>

<table style="width:100%">
    	<tr>
        	<td align="center">
            					<div class="cuadritos">
            						<img src="wp-content/themes/the-newswire/logo-ansv.png" />
                                <div class="cuadritos-1">
                                	<p class="headline">Más<br>información</p>
                                </div>
                                </div>                
             </td>
            
            <td align="center"><div class="cuadritos">
            					<img src="wp-content/themes/the-newswire/seguridad.png" />
                                	<div class="cuadritos-1">
                                   	 <p class="headline">Más<br>información</p>
                                    </div>
                                </div>
            </td>
            <td align="center"><div class="cuadritos">
                                <img src="wp-content/themes/the-newswire/maver2.png" />
                                    <div class="cuadritos-1">
                                     <p class="headline">Más<br>información</p>
                                    </div>
                                </div>
            </td>
            <td align="center"><div class="cuadritos">
            					<img src="wp-content/themes/the-newswire/fortalecimiento.png" />
                                	<div class="cuadritos-1">
                                   	 <p class="headline">Fortalecimiento<br>Seguridad Vial</p>
                                    </div>
                                </div>
            </td>
        </tr>
    </table>
<?php get_footer(); ?>