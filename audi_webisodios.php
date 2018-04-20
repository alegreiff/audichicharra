<?php
/**
 * Template Name: Plantilla CONTENIDOS AUDI
 * Description: Plantilla base para los contenidos de AUDI
 */
// Add our custom loop
if( is_front_page() ){ /* Para que funcione cuando es HOME. De repente sea mejor una plantilla por cada página*/
    $pagina_audi = 'audi_webisodios_loop';
}else{
    $pagina_audi = get_query_var('pagename') . '_loop';
}

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
    <!--<div class="logo"><img src="' . content_url() . '/uploads/2018/02/audi_logo_blanco.png" alt=""></div>-->
    <!-- <div class="titulo">Webisodios</div> -->
    <div class="titulo"><img src="' . content_url() . '/uploads/2018/04/logovitrina-400.png" alt="" class="logovitrina"></div>


    <div class="titulowebisodios">
        <div class="esloganserie">Una serie web más allá de la ficción</div>
        <div class="separaeslogan"></div>
        <div class="enlace"><a href="/serievideo" class="button botonaudi">Ver episodios</a></div>
    </div>
    
    <div class="loadmore"><a href="#mascontenido">Más contenido<span class="center aui-icon-arrow-down-small"></span></a>
    </div>
</div>
<div id="mascontenido" class="enlaces">
    <div class="enlace_manualvitrina"><a href="' . content_url() . '/uploads/2018/04/manual-audi-vitrina.pdf" target="_blank" class="button botonaudi botonmedio">Manual para vitrina</a></div>
    <div class="enlace_manualtaller"><a href="' . content_url() . '/uploads/2018/04/manual-audi-taller.pdf" target="_blank" class="button botonaudi botonmedio">Manual para taller</a></div>
    <div class="enlace_inspiracionaudi"><a href="/inspiracion-audi" class="button botonaudi botonmedio">Inspiración Audi</a></div>
    <!-- <div class="enlace_clientes"><a href="/foro" class="button botonaudi botonmedio">Clientes Audi Foro</a></div> -->
</div>';
    //echo do_shortcode( '[wise-chat]' );
}

function serievideo_loop()
{
    global $barrasuperior;
    echo $barrasuperior;
    ?>
<div class="contenedor">
    <div class="titulopagina"><img src="<?php echo content_url();?>/uploads/2018/04/logo_vitrina_250_rojo.png" alt="" class="logo-seccion-videos"> </div>
    <div class="videos">
        <div class="internovideo">
            <!--<div class="videoplay"><a data-fancybox href="https://vimeo.com/265012919?color=bb0a30"><span class="aui-icon-system-play-small"></span></a></div>-->
            <div class="videoplay"><a href="/bienvenida-guiada"><span class="aui-icon-system-play-small"></span></a></div>
            <div class="infovideo">
                <div class="nombrevideo">Bienvenida guiada</div>
                <div class="referenciavideo">. . .</div>
            </div>
        </div>
        <div class="internovideo">
            <div class="videoplay"><a href="/bienvenida-cordial"><span class="aui-icon-system-play-small"></span></a></div>
            <div class="infovideo">
                <div class="nombrevideo">Bienvenida cordial</div>
                <div class="referenciavideo">. . .</div>
            </div>

            <!--<iframe width="auto" height="auto" src="https://www.youtube.com/embed/oXfptmrUrR8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>-->
            <!--<iframe src="https://player.vimeo.com/video/149767046?title=0&amp;byline=0&amp;portrait=0&amp;autoplay=1"  width="100%"  frameborder="0" allowfullscreen="allowfullscreen"></iframe>-->
            <!--<iframe allowFullScreen frameborder="0" height="564" mozallowfullscreen src="https://player.vimeo.com/video/257030290" webkitAllowFullScreen width="640"></iframe>-->
        </div>
        <!--<div class="internovideo">
            <div class="videoplay"><a data-fancybox href="https://vimeo.com/256834258?color=bb0a30"><span class="aui-icon-system-play-small"></span></a></div>
            <div class="infovideo">
                <div class="nombrevideo">Proceso de compra del cliente</div>
                <div class="referenciavideo">Cap 3. Fase de información </div>
            </div>
        </div>

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
        </div>-->
    </div>
</div>
    <?php
}

genesis();