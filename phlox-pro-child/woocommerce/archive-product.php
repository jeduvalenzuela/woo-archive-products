<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header();





//TOMO COMO PARAMETRO LA URL PARA DEFINIR PRODUCT-CAT
$uriData=explode("/",$_SERVER["REQUEST_URI"]);
$host = $_SERVER['SERVER_NAME'].'/'.$uriData[1].'/'.$uriData[2].'/';

$conectividad = '';

if($host == 'lacasadelafibra.es/categoria-producto/fibra-movil/') {
        $conectividad = 'fibra-movil';
        $pagetitle = 'Fibra + Movil';
        $active_fibramovil = 'active';

    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/hasta-100-mb/')
    {
        $conectividad = 'hasta-100-mb';
        $pagetitle = 'Fibra + Movil';
        $active_fm_100mb = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/hasta-300-mb/')
    {
        $conectividad = 'hasta-300-mb';
        $pagetitle = 'Fibra + Movil';
        $active_fm_300mb = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/hasta-600-mb/')
    {
        $conectividad = 'hasta-600-mb';
        $pagetitle = 'Fibra + Movil';
        $active_fm_600mb = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/hasta-1000-mb/')
    {
        $conectividad = 'hasta-1000-mb';
        $pagetitle = 'Fibra + Movil';
        $active_fm_1000mb = 'active';
    }

    elseif($host == 'lacasadelafibra.es/categoria-producto/solo-fibra/')
    {
        $conectividad = 'solo-fibra';
        $pagetitle = 'Sólo Fibra';
        $active_solofibra = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/hasta-100-mb-solo-fibra/')
    {
        $conectividad = 'hasta-100-mb-solo-fibra';
        $pagetitle = 'Sólo Fibra';
        $active_sf_100mb = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/hasta-600-mb-solo-fibra/')
    {
        $conectividad = 'hasta-600-mb-solo-fibra';
        $pagetitle = 'Sólo Fibra';
        $active_sf_600mb = 'active';
    }    
    elseif($host == 'lacasadelafibra.es/categoria-producto/hasta-1000-mb-solo-fibra/')
    {
        $conectividad = 'hasta-1000-mb-solo-fibra';
        $pagetitle = 'Sólo Fibra';
        $active_sf_1000mb = 'active';
    }    
    
    elseif($host == 'lacasadelafibra.es/categoria-producto/solo-movil/')
    {
        $conectividad = 'solo-movil';
        $pagetitle = 'Sólo Movil';
        $active_solomovil = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/mayores-solo-fijo/')
    {
        $conectividad = 'mayores-solo-fijo';
        $pagetitle = 'Sólo Movil';
        $active_sm_mayores = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/para-los-mas-peques/')
    {
        $conectividad = 'para-los-mas-peques';
        $pagetitle = 'Sólo Movil';
        $active_sm_peques = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/hasta-10-gb/')
    {
        $conectividad = 'hasta-10-gb';
        $pagetitle = 'Sólo Movil';
        $active_sm_10gb = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/hasta-20-gb/')
    {
        $conectividad = 'hasta-20-gb';
        $pagetitle = 'Sólo Movil';
        $active_sm_20gb = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/hasta-30-gb/')
    {
        $conectividad = 'hasta-30-gb';
        $pagetitle = 'Sólo Movil';
        $active_sm_30gb = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/gb-ilimitados/')
    {
        $conectividad = 'gb-ilimitados';
        $pagetitle = 'Sólo Movil';
        $active_sm_gbilimitados = 'active';
    }
    
    elseif($host == 'lacasadelafibra.es/categoria-producto/toda-la-tv-a-tu-medida/')
    {
        $conectividad = 'toda-la-tv-a-tu-medida';
        $pagetitle = '¡ Toda la TV, a tu medida !';
        $active_tv_a_medida = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/tv-con-mi-fibra/')
    {
        $conectividad = 'tv-con-mi-fibra';
        $pagetitle = '¡ Toda la TV, a tu medida !';
        $active_tv_con_fibra = 'active';
    }
    elseif($host == 'lacasadelafibra.es/categoria-producto/tv-de-suscripcion-online/')
    {
        $conectividad = 'tv-de-suscripcion-online';
        $pagetitle = '¡ Toda la TV, a tu medida !';
        $active_tv_online = 'active';
    }



//CHECKED
if($_GET['masmovil']=='red-masmovil'){ 
    $check_masmovil='checked';
}
if($_GET['movistar']=='red-movistar'){ 
    $check_movistar='checked';
}
if($_GET['netllar']=='red-netllar'){ 
    $check_netllar='checked';
}
if($_GET['orange']=='red-orange'){ 
    $check_orange='checked';
}
if($_GET['vodafone']=='red-vodafone'){ 
    $check_vodafone='checked';
}

//CONTADOR PUBLICACIONES
//FIBRA-MOVIL
$fm_100mb = do_shortcode("[product_cat_count category='hasta-100-mb']");
$fm_300mb = do_shortcode("[product_cat_count category='hasta-300-mb']");
$fm_600mb = do_shortcode("[product_cat_count category='hasta-600-mb']");
$fm_1000mb = do_shortcode("[product_cat_count category='hasta-1000-mb']");


//ACTIVE CATEGORY


//FORMULARIO FIBRAMOVIL
$fomrfibramovil = "<form action='' method='GET' id='filter' class='form-filter'>
                        <a class='link-clean-filter' href='https://lacasadelafibra.es/categoria-producto/fibra-movil'>
                            <i aria-hidden='true' class='fas fa-filter'></i>
                            <span class='clean-filter'> Limpiar filtros</span>
                        </a>
                        <div class='accordion'>
                            <div class='contentBx active'>
                                <div class='label'>Conectividad</div>
                                <div class='cont'>
                                    <ul>
                                        <li class='radio ". $active_fibramovil ."'>
                                            <a href='https://lacasadelafibra.es/categoria-producto/fibra-movil'>Todos los planes</a><br>
                                        </li>
                                        <li class='radio ". $active_fm_100mb ."'>
                                            <a href='https://lacasadelafibra.es/categoria-producto/hasta-100-mb'>Hasta 100MB</a><br>
                                        </li>
                                        <li class='radio ". $active_fm_300mb ."'>
                                            <a href='https://lacasadelafibra.es/categoria-producto/hasta-300-mb'>Hasta 300MB</a><br>
                                        </li>
                                        <li class='radio ". $active_fm_600mb ."'>
                                            <a href='https://lacasadelafibra.es/categoria-producto/hasta-600-mb'>Hasta 600MB</a><br>
                                        </li>
                                        <li class='radio ". $active_fm_1000mb ."'>
                                            <a href='https://lacasadelafibra.es/categoria-producto/hasta-1000-mb'>Hasta 1000MB</a><br>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class='contentBx active'>
                                <div class='label'>Cobertura</div>
                                <div class='cont'>
                                    <fieldset style='font-size:13px; font-family:Gotham Light; border:none; margin:0; padding:0;' onchange='this.form.submit'>
                                        <input value='red-masmovil' name='masmovil' type='checkbox'". $check_masmovil .">Red Mas Movil<br>
                                        <input value='red-movistar' name='movistar' type='checkbox'". $check_movistar .">Red Movistar<br>
                                        <input value='red-netllar' name='netllar' type='checkbox'". $check_netllar .">Red Netllar<br>
                                        <input value='red-orange' name='orange' type='checkbox'". $check_orange .">Red Orange<br>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <button class='btn-filter' type='submit'>Filtrar</button>
                    </form>";
//FORM SOLO FIBRA
$formsolofibra = "<form action='' method='GET' id='filter' class='form-filter'>
                        <a class='link-clean-filter' href='https://lacasadelafibra.es/categoria-producto/solo-fibra'>
                            <i aria-hidden='true' class='fas fa-filter'></i>
                            <span class='clean-filter'> Limpiar filtros</span>
                        </a>
                        <div class='accordion'>
                            <div class='contentBx active'>
                                <div class='label'>Conectividad</div>
                                <div class='cont'>
                                    <ul>
                                        <li class='radio ". $active_solofibra ."'>
                                            <a class='radio' href='https://lacasadelafibra.es/categoria-producto/solo-fibra'>Todos los planes</a><br>
                                        </li>
                                        <li class='radio ". $active_sf_100mb ."'>
                                            <a class='radio' href='https://lacasadelafibra.es/categoria-producto/hasta-100-mb-solo-fibra'>Hasta 100MB</a><br>
                                        </li>
                                        <li class='radio ". $active_sf_600mb ."'>
                                            <a class='radio' href='https://lacasadelafibra.es/categoria-producto/hasta-600-mb-solo-fibra'>Hasta 600MB</a><br>
                                        </li>
                                        <li class='radio ". $active_sf_1000mb ."'>
                                            <a class='radio' href='https://lacasadelafibra.es/categoria-producto/hasta-1000-mb-solo-fibra'>Hasta 1000MB</a><br>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class='contentBx active'>
                                <div class='label'>Cobertura</div>
                                <div class='cont'>
                                    <fieldset style='font-size:13px; font-family:Gotham Light; border:none; margin:0; padding:0;' onchange='this.form.submit'>
                                        <input value='red-netllar' name='netllar' type='checkbox'". $check_netllar .">Red Netllar<br>
                                        <input value='red-orange' name='orange' type='checkbox'". $check_orange .">Red Orange<br>
                                        <input value='red-vodafone' name='vodafone' type='checkbox'". $check_vodafone .">Red Vodafone<br>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <button class='btn-filter' type='submit'>Filtrar</button>
                    </form>";
//FORM SOLO MOVIL
$formsolomovil = "<form action='' method='GET' id='filter' class='form-filter'>
                        <a class='link-clean-filter' href='https://lacasadelafibra.es/categoria-producto/solo-movil'>
                            <i aria-hidden='true' class='fas fa-filter'></i>
                            <span class='clean-filter'> Limpiar filtros</span>
                        </a>
                        <div class='accordion'>
                            <div class='contentBx active'>
                                <div class='label'>Conectividad</div>
                                <div class='cont'>
                                    <ul>
                                        <li class='radio ". $active_solomovil ."'>
                                            <a class='radio' href='https://lacasadelafibra.es/categoria-producto/solo-movil'>Todos los planes</a><br>
                                        </li>
                                        <li class='radio ". $active_sm_mayores ."'>
                                            <a class='radio' href='https://lacasadelafibra.es/categoria-producto/mayores-solo-fijo'>MAYORES solo fijo</a><br>
                                        </li>
                                        <li class='radio ". $active_sm_peques ."'>
                                            <a class='radio' href='https://lacasadelafibra.es/categoria-producto/para-los-mas-peques'>Para los más peques</a><br>
                                        </li>
                                        <li class='radio ". $active_sm_10gb ."'>
                                            <a class='radio' href='https://lacasadelafibra.es/categoria-producto/hasta-10-gb'>Hasta 10GB</a><br>
                                        </li>
                                        <li class='radio ". $active_sm_20gb ."'>
                                            <a class='radio' href='https://lacasadelafibra.es/categoria-producto/hasta-20-gb'>Hasta 20GB</a><br>
                                        </li>
                                        <li class='radio ". $active_sm_30gb ."'>
                                            <a class='radio' href='https://lacasadelafibra.es/categoria-producto/hasta-30-gb'>Hasta 30GB</a><br>
                                        </li>
                                        <li class='radio ". $active_sm_gbilimitados ."'>
                                            <a class='radio' href='https://lacasadelafibra.es/categoria-producto/gb-ilimitados'>ILIMITADO</a><br>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class='contentBx active'>
                                <div class='label'>Cobertura</div>
                                <div class='cont'>
                                    <fieldset style='font-size:13px; font-family:Gotham Light; border:none; margin:0; padding:0;' onchange='this.form.submit'>
                                        <input value='red-movistar' name='movistar' type='checkbox'". $check_movistar .">Red Movistar<br>
                                        <input value='red-orange' name='orange' type='checkbox'". $check_orange .">Red Orange<br>
                                        <input value='red-vodafone' name='netllar' type='checkbox'". $check_netllar .">Red Vodafone<br>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                        <button class='btn-filter' type='submit'>Filtrar</button>
                    </form>";
//FROM TV
$formtv = "<form action='' method='GET' id='filter' class='form-filter'>
                <a class='link-clean-filter' href='https://lacasadelafibra.es/categoria-producto/toda-la-tv-a-tu-medida'>
                    <i aria-hidden='true' class='fas fa-filter'></i>
                    <span class='clean-filter'> Limpiar filtros</span>
                </a>
                <div class='accordion'>
                    <div class='contentBx active'>
                        <div class='label'>Conectividad</div>
                        <div class='cont'>
                            <ul>
                                <li class='radio ". $active_tv_a_medida ."'>
                                    <a class='radio' href='https://lacasadelafibra.es/categoria-producto/toda-la-tv-a-tu-medida'>Todos los planes</a><br>
                                </li>
                                <li class='radio ". $active_tv_con_fibra ."'>
                                    <a class='radio' href='https://lacasadelafibra.es/categoria-producto/tv-con-mi-fibra'>Tv con mi fibra</a><br>
                                </li>
                                <li class='radio ". $active_tv_online ."'>
                                    <a class='radio' href='https://lacasadelafibra.es/categoria-producto/tv-de-suscripcion-online'>Suscripción online</a><br>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>                  
            </form>";
//DISPLAY FORM BY CATEGORY
?>
<div class="title-archive-mobile">	
    <h1>
        <?php echo $pagetitle;?>
    </h1>
</div>
<div class="content-archive">
    <div class="sidebar-archive">
        <div id="sticky" class="menu-filter">
            <?php if($host == 'lacasadelafibra.es/categoria-producto/fibra-movil/' || $host == 'lacasadelafibra.es/categoria-producto/hasta-100-mb/' || $host == 'lacasadelafibra.es/categoria-producto/hasta-300-mb/' || $host == 'lacasadelafibra.es/categoria-producto/hasta-600-mb/' || $host == 'lacasadelafibra.es/categoria-producto/hasta-1000-mb/' ) {
                echo $fomrfibramovil;
                }       
                elseif($host == 'lacasadelafibra.es/categoria-producto/solo-fibra/' || $host == 'lacasadelafibra.es/categoria-producto/hasta-100-mb-solo-fibra/' || $host == 'lacasadelafibra.es/categoria-producto/hasta-600-mb-solo-fibra/' || $host == 'lacasadelafibra.es/categoria-producto/hasta-1000-mb-solo-fibra/')
                {
                echo $formsolofibra;
                }
                elseif($host == 'lacasadelafibra.es/categoria-producto/solo-movil/' || $host == 'lacasadelafibra.es/categoria-producto/mayores-solo-fijo/' || $host == 'lacasadelafibra.es/categoria-producto/para-los-mas-peques/' || $host == 'lacasadelafibra.es/categoria-producto/hasta-10-gb/' || $host == 'lacasadelafibra.es/categoria-producto/hasta-20-gb/' || $host == 'lacasadelafibra.es/categoria-producto/hasta-30-gb/' || $host == 'lacasadelafibra.es/categoria-producto/gb-ilimitados/')
                {
                echo $formsolomovil;
                }
                elseif($host == 'lacasadelafibra.es/categoria-producto/toda-la-tv-a-tu-medida/' || $host == 'lacasadelafibra.es/categoria-producto/tv-con-mi-fibra/' || $host == 'lacasadelafibra.es/categoria-producto/tv-de-suscripcion-online/')
                {
                echo $formtv;
                }
            ?>
        </div>              
    </div>
<?php
//DISPLAY PAGE TITLE
?>

    <div class="loop-archive">
        <div class="title-archive">	
            <h1>
                <?php echo $pagetitle;?>
            </h1>
        </div>
        
        <?php   
            $masmovil = $_GET['masmovil'];
            $movistar = $_GET['movistar'];
            $netllar  = $_GET['netllar'];
            $orange   = $_GET['orange'];
            $vodafone = $_GET['vodafone'];
            
            $total_tags =  array($masmovil, $movistar, $netllar, $orange, $vodafone);
 
            if(empty($masmovil) && empty($movistar) && empty($netllar) && empty($orange) && empty($vodafone)){
                $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

                $products_args = array(
                    'post_type'     => 'product',
                    'post_per_page' => 9,
                    'paged'         => $paged,
                    'orderby'       => 'meta_value_num',
                    'meta_key'      => '_regular_price',
                    'order'         => 'ASC',
                    'tax_query'     => array(
                        'relation'      => 'AND',
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'slug',
                            'terms'    => $conectividad,
                        ),
                    ),
                );
            }else{
                $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

                $products_args = array(
                    'post_type'     => 'product',
                    'post_status'   => 'publish',
                    'post_per_page' => 9,
                    'paged'         => $paged,
                    'orderby'       => 'meta_value_num',
                    'meta_key'      => '_regular_price',
                    'order'         => 'ASC',
                    'tax_query'     => array(
                        'relation'      => 'AND',
                        array(
                            'taxonomy' => 'product_cat',
                            'field'    => 'slug',
                            'terms'    => $conectividad,
                        ),
                        array(
                            'taxonomy' => 'product_tag',
                            'field'    => 'slug',
                            'terms'    => $total_tags,
                        ),
                    ),
                );
            }

            



            $products = new WP_Query( $products_args );
      
            if ( $products->have_posts() ) {
                ?><div><?php
                while ( $products->have_posts() ) : $products->the_post();
                    
                        wc_get_template_part( 'content', 'product' );
                    
                endwhile;// Restore original post data, maybe not needed here (in a plugin it might be necessary)
                
                ?></div>
                
                <div class="paginator"><?php

                //previous_posts_link("« ");
                
                echo paginate_links(array(
                    'total' => $products->max_num_pages,
                    'prev_text'=>'« ',
                    'next_text'=>' »',
                ));
                //next_posts_link(" »", $products->max_num_pages);
                //posts_nav_link( '  ', '<<--', '-->>' );
                
                wp_reset_postdata();
                
                ?></div><?php
            } else {
                echo "<div class='e-messege'><h3>No se encontraron resultados para su busqueda</h3></div>";
            }
            
            wp_reset_postdata();
        ?>  
    </div>
</div>

</div>
<!--script>
    //script acordion filtros
    const accordion = document.getElementsByClassName('contentBx');
    for (i = 0; i<accordion.length; i++){
        accordion[i].addEventListener('click', function(){
            this.classList.toggle('active')
        })
    }
</script-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
    $(function(){
        if($('#sticky').length){
            var el = $('#sticky');
            var stickyTop = $('#sticky').offset().top;
            var stickyHeight = $('#sticky').height();

            $(window).scroll(function(){
                var limit = $('.aux-elementor-footer').offset().top - stickyHeight - 20;

                var windiwTop = $(window).scrollTop();

                if(stickyTop < wondowTop){
                    el.css({
                        position: 'fixed';
                        top: 0
                    });
                }else{
                    el.css('position', 'static');
                }

                if(limit < windowTop){
                    var diff = limit - windowTop;
                    el.css({
                        top:diff
                    });
                }
            });
        }
    });
</script>
<?php
get_footer();


/*'category_name'  => 'prensa',*/