<?php
/**
 * Template Name: Plantilla CONTENIDOS AUDI
 * Description: Plantilla base para los contenidos de AUDI
 */
// Add our custom loop
$pagina_audi = get_query_var('pagename') . '_loop';


add_action('genesis_loop', $pagina_audi);

$barrasuperior = '<div class="barrasuperior">
            <div class="menu_superior"></div>
            <div class="titulo_superior"><span>Audi</span> Premium Customer Experience</div>
            <div class="icono_superior"></div>
           </div>';

function audi_webisodios_loop()
{
    global $barrasuperior;
    echo $barrasuperior;
    echo '<div class="contenedor">
    <div class="logo"><img src="' . content_url() . '/uploads/2018/02/audi_logo_blanco.png" alt=""></div>
    <div class="titulo">Webisodios</div>

    <div class="enlace"><a href="/webisodios" class="button botonaudi">Ver episodios</a></div>
    <div class="loadmore"><a href="#mascontenido">Ver más <span class="center aui-icon-arrow-down-small"></span></a>
    </div>
</div>
<div id="mascontenido" class="enlaces">
    <div class="enlace_libro"><a href="#" class="button botonaudi botonmedio">Libro</a></div>
    <div class="enlace_preguntas"><a href="#" class="button botonaudi botonmedio">Preguntas frecuentes</a></div>
    <div class="enlace_novedades"><a href="#" class="button botonaudi botonmedio">Novedades Audi</a></div>
    <div class="enlace_clientes"><a href="#" class="button botonaudi botonmedio">Clientes Audi Foro</a></div>
</div>';
}

function webisodios_loop()
{
    global $barrasuperior;
    echo $barrasuperior;
    ?>
<div class="contenedor">
    <div class="titulopagina">Webisodios </div>
    <div class="videos">
        <div class="internovideo">
            <div class="videoplay"><a data-fancybox href="https://vimeo.com/161721395?color=bb0a30"><span class="aui-icon-system-play-small"></span></a></div>
            <div class="infovideo">
                <div class="nombrevideo">Principios de consulta sisas</div>
                <div class="referenciavideo">Cap 1. Tu cliente como un partner / socio</div>
            </div>
        </div>
        <div class="internovideo">
            <div class="videoplay"><a data-fancybox href="https://vimeo.com/120808993?color=bb0a30"><span class="aui-icon-system-play-small"></span></a></div>
            <div class="infovideo">
                <div class="nombrevideo">Proceso de compra del cliente</div>
                <div class="referenciavideo">Cap 2. Fase de orientación</div>
            </div>
            <!--<iframe width="auto" height="auto" src="https://www.youtube.com/embed/oXfptmrUrR8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
            <!--<iframe src="https://player.vimeo.com/video/149767046?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1"  width="100%"  frameborder="0" allowfullscreen="allowfullscreen"></iframe>-->
            <!--<iframe allowFullScreen frameborder="0" height="564" mozallowfullscreen src="https://player.vimeo.com/video/257030290" webkitAllowFullScreen width="640"></iframe>-->
        </div>
        <div class="internovideo">
            <div class="videoplay"><a data-fancybox href="https://vimeo.com/256834258?color=bb0a30"><span class="aui-icon-system-play-small"></span></a></div>
            <div class="infovideo">
                <div class="nombrevideo">Proceso de compra del cliente</div>
                <div class="referenciavideo">Cap 3. Fase de información </div>
            </div>
        </div>
        <!-- <a data-fancybox href="https://vimeo.com/191947042?color=f00">Vimeo video</a> -->
        <div class="internovideo">
            <div class="videoplay"><a data-fancybox href="https://vimeo.com/257033384?color=bb0a30"><span class="aui-icon-system-play-small"></span></a></div>
            <div class="infovideo">
                <div class="nombrevideo">Proceso de compra del cliente</div>
                <div class="referenciavideo">Cap 4. Fase de decisión</div>
            </div>
        </div>
        <div class="internovideo">
            <div class="videoplay"><a data-fancybox href="https://vimeo.com/34454806?color=bb0a30"><span class="aui-icon-system-play-small"></span></a></div>
            <div class="infovideo">
                <div class="nombrevideo">Proceso de venta</div>
                <div class="referenciavideo">Cap 5. Primer contacto</div>
            </div>
        </div>
        <div class="internovideo">
            <div class="videoplay"><a data-fancybox href="https://vimeo.com/129496585?color=bb0a30"><span class="aui-icon-system-play-small"></span></a></div>
            <div class="infovideo">
                <div class="nombrevideo">Proceso de venta</div>
                <div class="referenciavideo">Cap 6. Análisis de necesidades</div>
            </div>
        </div>
    </div>
</div>
    <?php
}

genesis();