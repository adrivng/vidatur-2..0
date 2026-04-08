<?php
// Este archivo asume que $lang y t() ya existen
?>

<!-- FOOTER -->
<div id="footer">
    <footer class="row">
        <p class="back-top floatright">
            <a href="#top"><span></span></a>
        </p>
        <div class="four columns">
            <h1><?php echo t('lima'); ?></h1>
            Av. José Larco 930, Miraflores 15074<br>
            <big><b><?php echo t('telefono'); ?></b></big><b>(01) 7550071</b><br>
            <b><?php echo t('celular'); ?> 981-183-450 </b><br>
            <b><?php echo t('celular'); ?> 934-794-807 </b><br>
            <b><?php echo t('emergencias'); ?> 977-912-165 </b><br>
            <a href="#"><b>reservas@vidatur.net</b></a><br>
            <a href="#"><b>reservas3@vidatur.net</b></a><br>
            <a href="#"><b>reservas7@vidatur.net</b></a><br><br>
        </div>
        <div class="four columns"></div>
        <div class="four columns">
            <div style="display: flex; flex-direction: row; align-items: center; justify-content: center;">
                <img style="width: 40px; height: 20px" src="https://primesoft-rlatorre-backup-bucket-1.s3.amazonaws.com/ldr/icon-libro-reclamaciones_negro.png">
                <a style="font-weight:700" href="javascript:openLdr('vidatur_ope1', '22b16dca854d5ebbe10a6fb8a8a4d56a')">
                    <?php echo t('libro_reclamaciones'); ?>
                </a>
            </div>
            <br>
            <a href="/politicas_privacidad.php"><b><?php echo t('politicas_privacidad'); ?></b></a><br>
            <a href="/terminos_condiciones.php"><b><?php echo t('terminos_condiciones'); ?></b></a><br>
        </div>
        <hr>
    </footer>
</div>
<div class="copyright">
    <div class="row">
        <div class="six columns">
            &copy;<span class="small"> <?php echo t('copyright'); ?></span>
        </div>
    </div>
</div>

<!-- JAVASCRIPTS con RUTAS ABSOLUTAS -->
<script src="/javascripts/foundation.min.js"></script>
<script src="/javascripts/jquery.easing.1.3.js"></script>
<script src="/javascripts/elasticslideshow.js"></script>
<script src="/javascripts/jquery.carouFredSel-6.0.5-packed.js"></script>
<script src="/javascripts/jquery.cycle.js"></script>
<script src="/javascripts/app.js"></script>
<script src="/javascripts/modernizr.foundation.js"></script>
<script src="/javascripts/slidepanel.js"></script>
<script src="/javascripts/scrolltotop.js"></script>
<script src="/javascripts/hoverIntent.js"></script>
<script src="/javascripts/superfish.js"></script>
<script src="/javascripts/responsivemenu.js"></script>
<script src="/javascripts/jquery.tweet.js"></script>
<script src="/javascripts/jquery.isotope.min.js"></script>
<script src="/javascripts/jquery.prettyPhoto.js"></script>
<script src="/javascripts/custom.js"></script>

<script type="text/javascript">
    const track = document.querySelector('.carousel-track');
    if (track) {
        let index = 0;
        const logosPorVista = 4;
        const totalItems = document.querySelectorAll('.carousel-item').length;

        function moverCarrusel(direccion = 1) {
            index += direccion;
            if (index > totalItems - logosPorVista) index = 0;
            if (index < 0) index = totalItems - logosPorVista;
            track.style.transform = `translateX(-${index * 25}%)`;
        }
        track.style.transform = `translateX(0%)`;
        setInterval(() => {
            moverCarrusel(1);
        }, 2200);
    }
</script>

<script>
window.addEventListener("message", function (event) {
    const iframe = document.getElementById("xcaretFrame");
    if (iframe && event.data && event.data.height) {
        iframe.style.height = event.data.height + "px";
    }
});
</script>

<script src="/carrusel.js"></script>

<!--Start of librodereclamaciones.com.pe Script-->
<script type="text/javascript">
function openLdr(usuario, token){
    var form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "https://librodereclamaciones.com.pe/ingresar.php");
    form.setAttribute("target", "view");
    var hiddenField1 = document.createElement("input");
    hiddenField1.setAttribute("type", "hidden");
    hiddenField1.setAttribute("name", "usuario");
    hiddenField1.setAttribute("value", usuario);
    var hiddenField2 = document.createElement("input");
    hiddenField2.setAttribute("type", "hidden");
    hiddenField2.setAttribute("name", "token");
    hiddenField2.setAttribute("value", token);
    form.appendChild(hiddenField1);
    form.appendChild(hiddenField2);
    document.body.appendChild(form);
    window.open('', 'view');
    form.submit();
}

var links = [
    'http://vidatur.net/promocion/img/mail_promo_circuitos_colombia_2022_2.jpg',
    'http://vidatur.net/promocion/img/mail_promo_circuitos_colombia_2022_1.jpg',
];

function downloadAll(links) {
    var link = document.createElement('a');
    link.setAttribute('download', 'Programas');
    link.style.display = 'none';
    document.body.appendChild(link);
    for (var i = 0; i < links.length; i++) {
        link.setAttribute('href', links[i]);
        link.click();
    }
    document.body.removeChild(link);
}
</script>
<!--End of librodereclamaciones.com.pe Script-->

</body>
</html>