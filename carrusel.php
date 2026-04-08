<?php
// ============================================
// DETECTAR IDIOMA DESDE LA URL
// ============================================
$lang = 'es'; // español por defecto

if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
    if ($lang !== 'en' && $lang !== 'es') {
        $lang = 'es';
    }
}

// ============================================
// TEXTO TRADUCIDO PARA EL EQUIPO
// ============================================
$texts = [
    'titulo_equipo' => ['es' => 'EQUIPO VIDATUR', 'en' => 'VIDATUR TEAM'],
    'gerente_general' => ['es' => 'Gerente General', 'en' => 'General Manager'],
    'gerente_operaciones' => ['es' => 'Gerente de Operaciones', 'en' => 'Operations Manager'],
    'reserva' => ['es' => 'Reserva', 'en' => 'Reservation'],
    'counter' => ['es' => 'Counter', 'en' => 'Counter'],
    'ejecutivo_comercial_lima' => ['es' => 'Ejecutivo Comercial Lima', 'en' => 'Commercial Executive Lima'],
    'ejecutivo_comercial_arequipa' => ['es' => 'Ejecutivo Comercial Arequipa', 'en' => 'Commercial Executive Arequipa'],
    'producto_internacional' => ['es' => 'Producto Internacional', 'en' => 'International Product'],
    'producto_nacional' => ['es' => 'Producto Nacional', 'en' => 'National Product'],
    'atencion_cliente' => ['es' => 'Atención al cliente', 'en' => 'Customer Service'],
    'atencion_cliente_mayus' => ['es' => 'Atención al Cliente', 'en' => 'Customer Service'],
    'administracion' => ['es' => 'Administración', 'en' => 'Administration'],
    'contactar_whatsapp' => ['es' => 'Contactar por WhatsApp', 'en' => 'Contact via WhatsApp']
];

function t($key) {
    global $texts, $lang;
    return isset($texts[$key][$lang]) ? $texts[$key][$lang] : $key;
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="UTF-8">
  <title><?php echo $lang === 'en' ? 'Vidatur Sales Team' : 'Equipo de Ventas'; ?></title>
  <style>
  
    body {
      margin: 0;
      font-family: 'Arial', sans-serif;
      background: #f9f9f9;
    }

    .titulo-principal {
      text-align: center;
      color: #357d5c;
      font-size: 40px;
      font-family: 'Montserrat', sans-serif;
      margin: 40px 0 20px;
    }

.carousel-container {
  max-width: 1300px;
  margin: 0 auto;
  overflow: hidden;
  padding-left: 10px;
  padding-right: 40px;
}
    .carousel-track {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .carousel-slide {
      flex: 0 0 calc(100% / 3);
      display: flex;
      justify-content: center;
      padding: 20px;
      box-sizing: border-box;
    }

    .card-contacto {
      display: flex;
      align-items: center;
      background: #fff;
      border-radius: 25px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      padding: 20px;
      max-width: 400px;
      width: 100%;
      transition: transform 0.3s ease;
    }

    .card-contacto:hover {
      transform: translateY(-5px);
    }

    .foto-contacto {
      width: 170px;
      height: 170px;
      object-fit: cover;
      border-radius: 15px;
      margin-right: 20px;
    }

    .info-contacto {
      flex: 1;
    }

    .nombre {
      font-size: 18px;
      font-weight: bold;
      margin: 0 0 5px 0;
    }

    .cargo {
      font-size: 14px;
      color: #555;
      margin: 0 0 10px 0;
    }

    .correo {
      font-size: 14px;
      margin-bottom: 12px;
      color: #333;
    }

  .btn-whatsapp {
  display: inline-block;
  background-color: #357d5c;
  color: #fff;
  padding: 10px 18px;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
  font-size: 13px;
  white-space: nowrap;
  transition: background 0.3s ease;
}

    @media screen and (max-width: 1024px) {
      .carousel-slide {
        flex: 0 0 calc(100% / 2);
      }
    }

    @media screen and (max-width: 600px) {
      .carousel-slide {
        flex: 0 0 100%;
      }
    }
  </style>
</head>
<body>

<h2 class="titulo-principal"><?php echo t('titulo_equipo'); ?></h2>

<div class="carousel-container">
  <div class="carousel-track" id="carouselTrack">
    <!-- Tarjeta 1 - Miguel Angel Portugal -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/miguel_angel_gerente_4.jpg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Miguel Angel Portugal</h4>
          <p class="cargo"><?php echo t('gerente_general'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span>gerencia@vidatur.net</p>
          <a href="https://wa.link/z9cmto" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div>
    <!-- Tarjeta 2 - Mirko Arrunategui -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/mirko_producto.png" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Mirko Arrunategui</h4>
          <p class="cargo"><?php echo t('gerente_operaciones'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span>ventas@vidatur.net</p>
          <a href="https://wa.link/70rl0f" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div>
    <!-- Tarjeta 3 - Brendha Juarez -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/brendha_juarez_counter.jpg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Brendha Juarez</h4>
          <p class="cargo"><?php echo t('reserva'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span> reservas4@vidatur.net</p>
          <a href="https://wa.link/9eev1k" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div> 
    <!-- Tarjeta 4 - Brenda Cornejo -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/brenda_cornejo_counter_2.jpg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Brenda Cornejo</h4>
          <p class="cargo"><?php echo t('counter'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span> reservas3@vidatur.net</p>
          <a href="https://wa.link/3lc0hz" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div>
    <!-- Tarjeta 5 - Giuliana Portugal -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/giuliana_portugal_2.jpg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Giuliana Portugal</h4>
          <p class="cargo"><?php echo t('counter'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span> reservas@vidatur.net</p>
          <a href="https://wa.link/922o9c" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a> 
        </div>
      </div>
    </div>
    <!-- Tarjeta 6 - Liz Tavara -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/liz_tavera_counter.jpg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Liz Tavara</h4>
          <p class="cargo"><?php echo t('counter'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span> reservas8@vidatur.net</p>
          <a href="https://wa.link/98c7h3" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div>
    <!-- Tarjeta 7 - Daniel Campo Verde -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/Daniel_campo_verde_ventas_3.jpg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Daniel Campo Verde</h4>
          <p class="cargo"><?php echo t('ejecutivo_comercial_lima'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span>ventaslim@vidatur.net</p>
          <a href="https://wa.link/kczmac" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div>
    <!-- Tarjeta 8 - Miluska Chachaima -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/milureduc.jpg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Miluska Chachaima Gicaro</h4>
          <p class="cargo"><?php echo t('ejecutivo_comercial_arequipa'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span> ventas3@vidatur.net</p>
          <a href="https://wa.link/qehlrm" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div>
    <!-- Tarjeta 9 - Yulieth Alarcon -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/yulieth_producto_2.jpg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Yulieth Alarcon</h4>
          <p class="cargo"><?php echo t('producto_internacional'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span> producto@vidatur.net</p>
          <a href="https://wa.link/ha4b9y" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div>
    <!-- Tarjeta 10 - Naomi Yamashiro -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/naomi_producto_2.jpg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Naomi Yamashiro</h4>
          <p class="cargo"><?php echo t('producto_nacional'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span> producto2@vidatur.net</p>
          <a href="https://wa.link/428gra" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div>
    <!-- Tarjeta 11 - Lady Guillén -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/lady_guillen_3.jpg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Lady Guillén</h4>
          <p class="cargo"><?php echo t('atencion_cliente'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span> atencionalcliente@vidatur.net</p>
          <a href="https://wa.link/0393y5" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div>
    <!-- Tarjeta 12 - Victor Cárdenas -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/victor_cardenas_atc.jpg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Victor Cárdenas</h4>
          <p class="cargo"><?php echo t('atencion_cliente_mayus'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span> atencionalcliente@vidatur.net</p>
          <a href="https://wa.link/awc2zk" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div>
    <!-- Tarjeta 13 - Rose Damian -->
    <div class="carousel-slide">
      <div class="card-contacto">
        <img src="images/administracion_rouse.jpeg" alt="Foto" class="foto-contacto" loading="lazy">
        <div class="info-contacto">
          <h4 class="nombre">Rose Damian</h4>
          <p class="cargo"><?php echo t('administracion'); ?></p>
          <p class="correo"><span class="icono">&#9993;</span>contabilidad@vidatur.net</p>
          <a href="https://wa.link/bba0py" target="_blank" class="btn-whatsapp"><?php echo t('contactar_whatsapp'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const track = document.getElementById('carouselTrack');
  const slides = document.querySelectorAll('.carousel-slide');

  let currentIndex = 0;

  const slidesPerView = () => {
    if (window.innerWidth <= 600) return 1;
    if (window.innerWidth <= 1024) return 2;
    return 3;
  };

  const updateCarousel = () => {
    const slideWidth = slides[0].offsetWidth;
    const viewCount = slidesPerView();
    const totalSlides = slides.length;
    const maxIndex = Math.ceil(totalSlides / viewCount) - 1;

    currentIndex = (currentIndex + 1) % (maxIndex + 1);

    const offset = slideWidth * viewCount * currentIndex;
    track.style.transform = `translateX(-${offset}px)`;

    slides.forEach(slide => {
      slide.style.justifyContent = 'flex-start';
    });

    const start = currentIndex * viewCount;
    const end = Math.min(start + viewCount, totalSlides);
    const visibleSlides = Array.from(slides).slice(start, end);

    if (visibleSlides.length < viewCount) {
      const padding = (viewCount - visibleSlides.length) * (slideWidth / 2);
      track.style.transform = `translateX(-${offset - padding}px)`;
    }
  };

  setInterval(updateCarousel, 3000);

  window.addEventListener('resize', () => {
    currentIndex = 0;
    track.style.transform = 'translateX(0)';
  });

  function sendHeight() {
    const height = document.documentElement.scrollHeight;
    parent.postMessage({ height: height }, "*");
  }

  window.addEventListener("load", sendHeight);
  window.addEventListener("resize", sendHeight);
</script>

</body>
</html>