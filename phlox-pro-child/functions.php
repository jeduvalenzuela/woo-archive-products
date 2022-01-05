<?php 
/**
 * Add your custom php code below. 
 * 
 * We recommend you to use "code-snippets" plugin instead: https://wordpress.org/plugins/code-snippets/
 **/



add_action('template_redirect','custom_shop_page_redirect');
function custom_shop_page_redirect(){
    if (class_exists('WooCommerce')){
        if(is_product()){
			
			global $product;
			// If the WC_product Object is not defined globally
			if ( ! is_a( $product, 'WC_Product' ) ) {
				$product = wc_get_product( get_the_id() );
			}
			
			
            wp_redirect(home_url('/contacto/?text_plan=Muy buenos dias, estoy interesado en el Plan: '.$product->get_name().'#send'));
            exit();
        }
    } 
    return;
}

add_filter( 'woocommerce_page_title', 'QL_customize_woocommerce_page_title', 10, 1 );
function QL_customize_woocommerce_page_title( $page_title) {
    // Custom title for the product category 'fibra-movil'
  if ( is_product_category('fibra-movil') ) {
        $page_title = 'Something';
    }
    // Custom title for the product category 'hoodies'
  elseif ( is_product_category('hoodies') ) {
        $page_title = 'Something else';
    }
    return $page_title;
}


function kia_switch_loop_title(){
    remove_filter( 'woocommerce_product_loop_start', 'woocommerce_maybe_show_product_subcategories' );
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
    }
add_action( 'woocommerce_before_shop_loop', 'kia_switch_loop_title' );




//insersion de estilos para div Productos archive
function MyCustomDiv (){
    echo '<div style= "width: 33%; float:left;">';
    }
  
  function EndyCustomDiv (){
        echo '</div>';
    }
  
  add_action ( 'woocommerce_before_shop_loop_item' ,  'MyCustomDiv');
  add_action ( 'woocommerce_after_shop_loop_item' ,  'EndyCustomDiv');

/**
 * Add a sidebar.
 */
add_action ('wp_head','hook_inHeader');
function hook_inHeader() {
        echo "<link rel='stylesheet' type='text/css' media='all' href='https://lacasadelafibra.es/wp-content/themes/phlox-pro-child/style.css' />";
   
}
add_action ('wp_footer','hook_inFooter');
function hook_inFooter() {
   
}


//CONTEO POSTS
function product_cat_count( $atts ) {

    $atts = shortcode_atts( array(
        'product-cat' => null
    ), $atts );

    // get the category by slug.
    $term = get_term_by( 'slug', $atts['product-cat'], 'product-cat');

    return ( isset( $term->count ) ) ? $term->count : 0;
}
add_shortcode( 'product_cat_count', 'product_cat_count' );