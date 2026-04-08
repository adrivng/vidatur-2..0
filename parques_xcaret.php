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
// TEXTO TRADUCIDO
// ============================================
$texts = [
    'representaciones' => ['es' => 'REPRESENTACIONES', 'en' => 'REPRESENTATIONS'],
    'parques_seaworld' => ['es' => 'PARQUES DE SEAWORLD', 'en' => 'SEAWORLD PARKS'],
    'parques_xcaret' => ['es' => 'PARQUES DE XCARET', 'en' => 'XCARET PARKS']
];

function t($key) {
    global $texts, $lang;
    return $texts[$key][$lang];
}
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $lang === 'en' ? 'Xcaret Parks' : 'Parques de Xcaret'; ?></title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f8f8f8;
      overflow: hidden;
    }
    
    .carousel-container {
      overflow: hidden;
      padding: 20px 0;
      max-width: 1200px;
      margin: auto;
    }
    .carousel-track {
      display: flex;
      gap: 15px;
      transition: transform 0.5s ease;
    }

    .carousel-track .card {
      flex: 0 0 calc(33.333% - 10px);
      border: 1px solid #ccc;
      border-radius: 6px;
      overflow: hidden;
      background: #fff;
      transition: transform 0.3s;
    }

    .carousel-track .card img {
      width: 100%;
      display: block;
    }
    
    .row {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .galeria {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      justify-content: center;
      padding: 20px;
    }

    .card {
      flex: 0 0 19%;
      border: 1px solid #ccc;
      border-radius: 6px;
      overflow: hidden;
      background: #fff;
      transition: transform 0.3s;
    }

    .galeria.seaworld .card {
      flex: 0 0 20%;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card img {
      width: 100%;
      display: block;
    }

    @media (min-width: 1024px) and (max-width: 1366px) {
      .galeria.seaworld .card {
        flex: 0 0 26%;
      }
    }

    @media (max-width: 768px) {
      .carousel-track .card {
        flex: 0 0 calc(50% - 10px);
      }
    }

    @media (max-width: 480px) {
      .carousel-track .card {
        flex: 0 0 100%;
      }
    }
  </style>
</head>
<body>

  <!-- Sección Representaciones -->
  <div class="row">
    <div class="twelve columns">
      <h2 style="color: #357d5c; font-size: 40px; text-align: center;"><?php echo t('representaciones'); ?></h2>
    </div>
  </div>

  <div class="galeria">
    <div class="card" style="border: none;">
      <img src="images/united_parks_resorts.png" alt="United Parks Resorts" />
    </div>
    <div class="card" style="border: none;">
      <img src="images/xcaret_mexico_repre.png" alt="Xcaret Mexico" />
    </div>
  </div>

  <!-- Sección Parques SeaWorld -->
  <div class="row">
    <div class="twelve columns">
      <h2 style="color: #357d5c; font-size: 40px; text-align: center;"><?php echo t('parques_seaworld'); ?></h2>
      <br />
    </div>
  </div>

  <div class="galeria seaworld">
    <div class="card">
      <img src="images/sea_world_2025.png" alt="Sea World" />
    </div>
    <div class="card">
      <img src="images/bush_garden_2025.png" alt="Bush Gardens" />
    </div>
    <div class="card">
      <img src="images/aquatica_2025.png" alt="Aquatica" />
    </div>
    <div class="card">
      <img src="images/discovery_cove.png" alt="Discovery Cove" />
    </div>
  </div>

  <!-- Sección Parques Xcaret -->
  <div class="row">
    <div class="twelve columns">
      <h2 style="color: #357d5c; font-size: 40px; text-align: center;"><?php echo t('parques_xcaret'); ?></h2>
      <br />
    </div>
  </div>

  <div class="carousel-container">
    <div class="carousel-track" id="xcaretTrack">
      <div class="card"><img src="images/parques_xcaret_mexico_update.png" alt="Xcaret México Espectacular"></div>
      <div class="card"><img src="images/parque_xcaret_xeiha.png" alt="Xcaret y Xel‑Há"></div>
      <div class="card"><img src="images/parque_xenotes.png" alt="Xenotes"></div>
      <div class="card"><img src="images/parque_xplor.png" alt="Xplor"></div>
      <div class="card"><img src="images/parque_xavage.png" alt="Xavage"></div>
      <div class="card"><img src="images/parques_xichen_update.png" alt="Xichén"></div>
      <div class="card"><img src="images/parques_xplor_fuego_update.png" alt="Xplor Fuego"></div>
      <div class="card"><img src="images/parques_xenenses_update.png" alt="Xenses"></div>
      <div class="card"><img src="images/parques_xomilco_update.png" alt="Xoximilco"></div>
    </div>
  </div>

  <script>
    const track = document.getElementById('xcaretTrack');
    let visibleCards = 3;

    function updateVisibleCards() {
      if (window.innerWidth <= 480) {
        visibleCards = 1;
      } else if (window.innerWidth <= 768) {
        visibleCards = 2;
      } else {
        visibleCards = 3;
      }
    }
    updateVisibleCards();
    window.addEventListener('resize', updateVisibleCards);

    function slideCarousel() {
      const cardWidth = track.querySelector('.card').offsetWidth + 15;
      track.style.transform = `translateX(-${cardWidth * visibleCards}px)`;

      setTimeout(() => {
        for (let i = 0; i < visibleCards; i++) {
          track.appendChild(track.firstElementChild);
        }
        track.style.transition = 'none';
        track.style.transform = 'translateX(0)';
        setTimeout(() => {
          track.style.transition = 'transform 0.5s ease';
        }, 50);
      }, 500);
    }

    setInterval(slideCarousel, 2500);

    function sendHeight() {
      const height = document.documentElement.scrollHeight;
      parent.postMessage({ height: height }, "*");
    }

    window.addEventListener("load", sendHeight);
    window.addEventListener("resize", sendHeight);
  </script>
</body>
</html>