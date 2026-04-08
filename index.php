<?php
// PRIMERO: config_lang.php (define $lang y t())
require_once 'config_lang.php';

// SEGUNDO: header.php (usa $lang y t())
require_once 'header.php';
?>

<!-- CONTENIDO ESPECÍFICO DE INDEX -->
<!-- TARJETAS PRINCIPALES
================================================== -->
<div class="row">
	<div class="grid-container">
		<?php if ($lang === 'en'): ?>
			<div class="grid-item">
				<center>
					<p>
						<strong><h5>Loyalty Program</h5></strong>
						<a href="club_vidatur.html" class="boton verde">
							<strong>
								<h3 style="color: white;"><img src="images/club_vidatur.png" width="120"></h3>
							</strong>
						</a>
					</p>
				</center>
			</div>
		
			<div class="grid-item">
				<center>
					<p>
						<strong><h5>Online Quote Registration</h5></strong>
						<a href="vidatur_online_formulario.html" class="boton verde">
							<strong>
								<h3 style="color: white;"><img src="images/cotizador_online_logo.png" width="120"></h3>
							</strong>
						</a>
					</p>
					<a href="https://vidatur.paquetedinamico.com/home">
						<strong><p style="color: blue; text-decoration: underline; margin-top: 0px;">Access Vidatur Online Quote.</p></strong>
					</a>
				</center>
			</div>
		
			<div class="grid-item">
				<center>
					<p>
						<strong><h5>GEA Agencies Benefits</h5></strong>
						<a href="beneficios_agencias_gea.html" class="boton verde">
							<strong>
								<h3 style="color: white;"><img src="images/gea_logo.png" width="120"></h3>
							</strong>
						</a>
					</p>
				</center>
			</div>
		
			<div class="grid-item">
				<center>
					<p>
						<strong><h5>Reward Program</h5></strong>
						<a href="programa_de_recompensa.html" class="boton verde">
							<strong>
								<h3 style="color: white;"><img src="images/logo-programa-recompensa.png" width="120"></h3>
							</strong>
						</a>
					</p>
				</center>
			</div>
		<?php else: ?>
			<div class="grid-item">
				<center>
					<p>
						<strong><h5>Programa De Lealtad</h5></strong>
						<a href="club_vidatur.html" class="boton verde">
							<strong>
								<h3 style="color: white;"><img src="images/club_vidatur.png" width="120"></h3>
							</strong>
						</a>
					</p>
				</center>
			</div>
		
			<div class="grid-item">
				<center>
					<p>
						<strong><h5>Registro del cotizador online</h5></strong>
						<a href="vidatur_online_formulario.html" class="boton verde">
							<strong>
								<h3 style="color: white;"><img src="images/cotizador_online_logo.png" width="120"></h3>
							</strong>
						</a>
					</p>
					<a href="https://vidatur.paquetedinamico.com/home">
						<strong><p style="color: blue; text-decoration: underline; margin-top: 0px;">Ingresar al cotizador Vidatur Online.</p></strong>
					</a>
				</center>
			</div>
		
			<div class="grid-item">
				<center>
					<p>
						<strong><h5>Beneficios agencias GEA</h5></strong>
						<a href="beneficios_agencias_gea.html" class="boton verde">
							<strong>
								<h3 style="color: white;"><img src="images/gea_logo.png" width="120"></h3>
							</strong>
						</a>
					</p>
				</center>
			</div>
		
			<div class="grid-item">
				<center>
					<p>
						<strong><h5>Programa De Recompensa</h5></strong>
						<a href="programa_de_recompensa.html" class="boton verde">
							<strong>
								<h3 style="color: white;"><img src="images/logo-programa-recompensa.png" width="120"></h3>
							</strong>
						</a>
					</p>
				</center>
			</div>
		<?php endif; ?>
	</div>
</div>

<!-- SLIDER 
================================================== -->
<div id="ei-slider" class="ei-slider" style="z-index: 3;">
	<ul class="ei-slider-large">
		<li>
			<a href="promociones.php#salidas.php"> <img src="images/banner_salidas_confirmadas_1.jpg" alt="image02" class="responsiveslide"></a>
		</li>
		<li>
			<a href="#"> <img src="images/vender_estados_unidos.png" alt="image02" class="responsiveslide"></a>
		</li>
		<li>
			<a href="https://sw.vidatur.net"> <img src="images/banner_parques_seaworld.jpg" alt="image02" class="responsiveslide"></a>
		</li>
		<li>
			<a href="https://www.excursiontravelperu.com"> <img src="images/banner_parques_xcaret_1.jpg" alt="image02" class="responsiveslide"></a>
		</li>
		<li>
			<a href="https://www.excursiontravelperu.com"> <img src="images/banner_parques_xcaret_2.jpg" alt="image02" class="responsiveslide"></a>
		</li>
	</ul>
	<!-- slider-thumbs -->
	<ul class="ei-slider-thumbs">
		<li class="ei-slider-element">Current</li>
		<li><a href="#">Slide 4</a><img src="images/banner_salidas_confirmadas_1.jpg" class="slideshowthumb" alt="thumb02" /></li>
		<li><a href="#">Slide 4</a><img src="images/vende_estados_unidos.png" class="slideshowthumb" alt="thumb02" /></li>
		<li><a href="#">Slide 4</a><img src="images/banner_parques_seaworld.jpg" class="slideshowthumb" alt="thumb02" /></li>
		<li><a href="#">Slide 4</a><img src="images/banner_parques_xcaret_1.jpg" class="slideshowthumb" alt="thumb02" /></li>
		<li><a href="#">Slide 4</a><img src="images/banner_parques_xcaret_2.jpg" class="slideshowthumb" alt="thumb02" /></li>
	</ul>
</div>

<br>

<!-- FRANJA NUESTRAS FORTALEZAS -->
<div class="franja">
	<h1><?php echo $lang === 'en' ? 'Our Strengths' : 'Nuestras Fortalezas'; ?></h1>
</div>
<br>

<iframe id="xcaretFrame" src="parques_xcaret.php?lang=<?php echo $lang; ?>" 
  width="100%" 
  style="border: none; overflow: hidden; display: block; margin-bottom: 0;" scrolling="no">
</iframe>

<!-- TÍTULO ALIADOS -->
<div class="row">
	<div class="twelve columns">
		<h2 style="color: #357d5c; font-size: 40px;font-family: 'Montserrat', sans-serif;"><center><?php echo $lang === 'en' ? 'ALLIES' : 'ALIADOS'; ?></center></h2>
	</div>
</div>

<!-- CARRUSEL DE ALIADOS -->
<div class="carousel-container">
  <div class="carousel-track">
  	<div class="carousel-item"><img src="images/aliado_copa_airlens.png" alt="Logo 1"></div>
    <div class="carousel-item"><img src="images/aliado_latam.png" alt="Logo 2"></div>
    <div class="carousel-item"><img src="images/aliado_plus_ultra.png" alt="Logo 3"></div>
    <div class="carousel-item"><img src="images/aliado_jet_smart.png" alt="Logo 4"></div>
    <div class="carousel-item"><img src="images/aliado_avianca.png" alt="Logo 5"></div>
    <div class="carousel-item"><img src="images/aliado_arajet.png" alt="Logo 6"></div>
    
    <div class="carousel-item"><img src="images/best_wester.png" alt="Logo 1"></div>
    <div class="carousel-item"><img src="images/blue_diamond_6.png" alt="Logo 2"></div>
    <div class="carousel-item"><img src="images/bth_hoteles.png" alt="Logo 3"></div>
    <div class="carousel-item"><img src="images/cartagena_plaza.png" alt="Logo 4"></div>
    <div class="carousel-item"><img src="images/casa_andina.png" alt="Logo 5"></div>
    <div class="carousel-item"><img src="images/arangua.png" alt="Logo 6"></div>
    
    <div class="carousel-item"><img src="images/bahia_principe.png" alt="Logo 1"></div>
    <div class="carousel-item"><img src="images/barcelo.png" alt="Logo 2"></div>
    <div class="carousel-item"><img src="images/costa_blanca.png" alt="Logo 3"></div>
    <div class="carousel-item"><img src="images/catalonia.png" alt="Logo 4"></div>
    <div class="carousel-item"><img src="images/coral_costa_caribe.png" alt="Logo 5"></div>
    <div class="carousel-item"><img src="images/corendon.png" alt="Logo 6"></div>
    
    <div class="carousel-item"><img src="images/dorado_plaza.png" alt="Logo 1"></div>
    <div class="carousel-item"><img src="images/faranda.png" alt="Logo 2"></div>
    <div class="carousel-item"><img src="images/hacienda_la_caravedo.png" alt="Logo 3"></div>
    <div class="carousel-item"><img src="images/hacienda_san_juan.png" alt="Logo 4"></div>
    <div class="carousel-item"><img src="images/HELICONIA.png" alt="Logo 5"></div>
    <div class="carousel-item"><img src="images/costa_sol.png" alt="Logo 6"></div>
    
    <div class="carousel-item"><img src="images/irapay.png" alt="Logo 1"></div>
    <div class="carousel-item"><img src="images/hotel_san_agustin.png" alt="Logo 2"></div>
    <div class="carousel-item"><img src="images/hotel_viña_de_queirolo.png" alt="Logo 3"></div>
    <div class="carousel-item"><img src="images/iberostar.png" alt="Logo 4"></div>
    <div class="carousel-item"><img src="images/impressive.png" alt="Logo 5"></div>
    <div class="carousel-item"><img src="images/inkaterra.png" alt="Logo 6"></div>
    
	<div class="carousel-item"><img src="images/melia.png" alt="Logo 1"></div>
    <div class="carousel-item"><img src="images/nickelodeon.png" alt="Logo 2"></div>
    <div class="carousel-item"><img src="images/norte_swites.png" alt="Logo 3"></div>
    <div class="carousel-item"><img src="images/oasis.png" alt="Logo 4"></div>
    <div class="carousel-item"><img src="images/princess.png" alt="Logo 5"></div>
    <div class="carousel-item"><img src="images/isla_del_encanto.png" alt="Logo 6"></div>
    
    <div class="carousel-item"><img src="images/ivice.png" alt="Logo 1"></div>
    <div class="carousel-item"><img src="images/libertador.png" alt="Logo 2"></div>
    <div class="carousel-item"><img src="images/sauce_resort.png" alt="Logo 3"></div>
    <div class="carousel-item"><img src="images/sirenis.png" alt="Logo 4"></div>
    <div class="carousel-item"><img src="images/terra_adina.png" alt="Logo 5"></div>
    <div class="carousel-item"><img src="images/tierra_viva.png" alt="Logo 6"></div>
    
    <div class="carousel-item"><img src="images/vista_sol.png" alt="Logo 1"></div>
    <div class="carousel-item"><img src="images/punta_sal_suites.png" alt="Logo 2"></div>
    <div class="carousel-item"><img src="images/raddison.png" alt="Logo 3"></div>
    <div class="carousel-item"><img src="images/riu.png" alt="Logo 4"></div>
  </div>
</div>

<iframe src="carrusel.php?lang=<?php echo $lang; ?>" 
    width="100%" 
    height="500" 
    style="border: none; overflow: hidden;" 
    scrolling="no">
</iframe>

<div class="social">
	<a href="https://www.tiktok.com/@vidaturperu"><img src="../promocion/img/tiktok.png" alt="Videos Vidatur" title="Videos Vidatur" width="50px"></a>
	<a href="https://www.facebook.com/vidatur.pe"><img src="../promocion/img/FACEBOOK.png" alt="FACEBOOK" title="Facebook"></a>
	<a href="https://www.instagram.com/vidaturperu/"><img src="../promocion/img/INSTAGRAM.png" alt="Instagram" title="Instagram"></a>
</div>

<?php
// FINAL: footer.php
require_once 'footer.php';
?>