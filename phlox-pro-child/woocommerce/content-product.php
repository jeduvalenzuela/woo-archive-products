<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

		<div <?php wc_product_class( '', $product ); ?>>
			<?php
			/**
			 * Hook: woocommerce_before_shop_loop_item.
			 *
			 * @hooked woocommerce_template_loop_product_link_open - 10
			 */
			//do_action( 'woocommerce_before_shop_loop_item' );
			?>
			<div class="loop-content">
			<div class="hover-service">
			
			<?php
			if(get_field('recomendada')==true){
				$top = "<div class='top-service'><div class='marca-top'><h2 class='top'>Top</h2></div></div>";
				$margin_top = "m-top";
			}
			else{
				$margin_top = "m-no-top";
			}
			echo $top;
		
			/**
			 * Hook: woocommerce_before_shop_loop_item_title.
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			//do_action( 'woocommerce_before_shop_loop_item_title' );
			//echo do_shortcode("[elementor-template id='2609']");
			?>
			<div class="header-loop <?php echo $margin_top; ?>">
				<div class="logo-loop">
					<img src="<?php the_field('imagen_marca'); ?>" alt="">
				</div>
				<div class="cobertura">
					<p class="title-cobertura">
						Cobertura
					</p>
					<p class="field-conbertura">
						<?php the_field('cobertura'); ?>
					</p>
				</div>

			</div>
			<?php
			/**
			 * Hook: woocommerce_shop_loop_item_title.
			 *
			 * @hooked woocommerce_template_loop_product_title - 10
			 */
			//do_action( 'woocommerce_shop_loop_item_title' );
			?>
			<br>
			<h4 class="title-loop">
				<?php the_title(); ?>
			</h4>
			<div class="condition-content">
				<div class="title-condition">
					<p>
						Condiciones
					</p>
				</div>
				<div class="link-details">
					<a href="#">Ver detalles</a>
				</div>
			</div>
			<p class="field-condition">
				<?php the_field('permanencia'); ?>
			</p>
			<?php
			if(empty(get_field('descripcion_fibra')) || get_field('descripcion_fibra')=='n/d'){
			}else{
				$field_internet = get_field('descripcion_fibra');
				$internet = "<div class='block-info'>
								<div class='title-info'>
									<p>
										Internet
									</p>
								</div>
								<div class='field-info'>
									<p>
										".$field_internet."
									</p>
								</div>

							</div>";
			}
			echo $internet;

			if(empty(get_field('descripcion_fijo')) || get_field('descripcion_fijo')=='n/d'){
			}else{
				$field_fijo = get_field('descripcion_fijo');
				$fijo = "<div class='block-info'>
								<div class='title-info'>
									<p>
										Fijo
									</p>
								</div>
								<div class='field-info'>
									<p>
										".$field_fijo."
									</p>
								</div>

							</div>";
			}
			echo $fijo;

			if(empty(get_field('descripcion_movil')) || get_field('descripcion_movil')=='n/d'){
			}else{
				$field_movil = get_field('descripcion_movil');
				$movil = "<div class='block-info'>
								<div class='title-info'>
									<p>
										Movil
									</p>
								</div>
								<div class='field-info'>
									<p>
										".$field_movil."
									</p>
								</div>

							</div>";
			}
			echo $movil;

			if(empty(get_field('descripcion_tv')) || get_field('descripcion_tv')=='n/d'){
			}else{
				$field_tv = get_field('descripcion_tv');
				$tv = "<div class='block-info'>
								<div class='title-info'>
									<p>
										Tv
									</p>
								</div>
								<div class='field-info'>
									<p>
										".$field_tv."
									</p>
								</div>

							</div>";
			}
			echo $tv;
			?>
		
			<div class="block-info">
				<div class="price-loop">
					<?php
						$price = number_format(get_post_meta( get_the_ID(), '_regular_price', true), 2);
						$sale = number_format(get_post_meta( get_the_ID(), '_sale_price', true), 2);
						

						if(empty($sale)){
							$promo = get_field('descripcion sin promocion');
							if(empty($promo)){
								$prices = "<p class='price-venta'>".$price."</p>
										<p class='moneda'>€/mes</p>";
							}else{
								$prices = "<p class='price-venta'>".$price."</p>
								<p class='moneda'>".$promo."</p>";
							}
						}
						else{
							$promo = get_field('con promoción');
							if(empty($promo)){
								$prices = "<p class='price-regular strikethrough'>".$price."</p>
											<p class='price-venta'>".$sale."</p>
											<p class='moneda'>€/3meses</p>";		
							}else{
								$prices = "<p class='price-regular strikethrough'>".$price."</p>
											<p class='price-venta'>".$sale."</p>
											<p class='moneda'>".$promo."</p>";
							}
						}
						echo $prices;
					?>
				</div>
				<div class="block-contact">
					<div class="block-info m-bottom">
						<div class="icon-tel">
							<i aria-hidden="true" class="fas fa-phone-alt i-tel"></i>
						</div>
						<div class="telephone">	
							<a class="link-phone" href="tel:+34876434043">									
								876 434 043
							</a>
							<p class="call-me">
								¡ Llama e infórmate !
							</p>
						</div>	
					</div>	
					<a class="want-it" href="<?php site_url(); ?>/contacto/?text_plan=Muy buenos dias, estoy interesado en el Plan: <?php the_title(); ?>#send">
						<i aria-hidden="true" class="fas fa-envelope"></i>
						¡Lo quiero!
					</a>
				</div>
			</div>
		</div>
	</div>
</div>