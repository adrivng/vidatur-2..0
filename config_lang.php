<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'] === 'en' ? 'en' : 'es';
}

if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'es';
}

$lang = $_SESSION['lang'];

$texts = [
    'inicio' => ['es' => 'INICIO', 'en' => 'HOME'],
    'nosotros_menu' => ['es' => 'NOSOTROS', 'en' => 'ABOUT US'],
    'nacional' => ['es' => 'PERÚ', 'en' => 'PERU'],
    'internacional' => ['es' => 'INTERNACIONAL', 'en' => 'INTERNATIONAL'],
    'bloqueos' => ['es' => 'BLOQUEOS', 'en' => 'GROUP DATES'],
    'eventos' => ['es' => 'EVENTOS', 'en' => 'EVENTS'],
    'videos' => ['es' => 'VIDEOS', 'en' => 'VIDEOS'],
    'lgbt' => ['es' => 'LGBT', 'en' => 'LGBT'],
    'viajespe' => ['es' => 'CIRCUITOS PERÚ', 'en' => 'PERUVIAN JOURNEYS'],
    'lima' => ['es' => 'Lima', 'en' => 'Lima'],
    'telefono' => ['es' => 'Telefono:', 'en' => 'Phone:'],
    'celular' => ['es' => 'Celular:', 'en' => 'Mobile:'],
    'emergencias' => ['es' => 'Emergencias:', 'en' => 'Emergencies:'],
    'libro_reclamaciones' => ['es' => 'Libro de Reclamaciones', 'en' => 'Complaints Book'],
    'politicas_privacidad' => ['es' => 'Políticas de Privacidad', 'en' => 'Privacy Policy'],
    'terminos_condiciones' => ['es' => 'Términos y Condiciones', 'en' => 'Terms and Conditions'],
    'copyright' => ['es' => 'Copyright Vidatur', 'en' => 'Copyright Vidatur'],
];

function t($key) {
    global $texts, $lang;
    return $texts[$key][$lang] ?? $key;
}
?>