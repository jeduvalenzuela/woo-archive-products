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

get_header();?>



<?php/*
$post_id = get_the_ID();
$cat_ids = array();
$categories = get_the_category( $post_id );

if ( $categories && ! is_wp_error( $categories ) ) {
	 
	foreach ( $categories as $category ) {
 
		array_push( $cat_ids, $category->term_id );
 
	}
	 
}



$params = array(
	'posts_per_page' => 100, //No of product to be fetched
	'post_type' => 'product',
	//'cat' => $category,
	//'orderby' => '_price',
	//'order' => 'ASC',
	'post__not_in' => array( $post_id )
);

echo $post_id;
*/?>

<!--ul>
	
<?php
$wc_query = new WP_Query($params);
if ($wc_query->have_posts()) :
	while ($wc_query->have_posts()) :
		$wc_query->the_post();
		?>
		<li>
			
			<?php

			the_title(); ?>
		</li>
<?php
	endwhile;
		wp_reset_postdata();
else:  ?>
	<p><?php _e( 'No Products' );?></p>	
<?php endif;?>
</ul-->

<!--ul class="products">
    <?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 9,
			'orderby'=>'date',
			'order'=>'ASC',
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );

			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
	?>
</ul-->

<?php
$products_cats = array();

$args = array(
	'post_type'         => 'product',
	'posts_per_page'    => 100, //No of product to be fetched
    'orderby'           => '_price',
	'order'             => 'ASC',
);


$products = new WP_Query( $args );

if( $products->have_posts() ){
	while( $products->have_posts() ){
		$products->the_post();
		//echo get_the_title();

		$products_categories = get_the_terms( get_the_id(), 'product_cat' );

		foreach( $products_categories as $products_category ){
			if( ! in_array($products_category->name, $products_cats, true ) ){
				array_push( $products_cats, $products_category->name );
			}
		}
		//var_dump($products_cats);
	}
	?>

	<ul>
	
	<?php
	$counter = 0;
	$class = '';

	foreach( $products_cats as $key => $products_cat ){
		$counter++;
		if( $counter == 1 ){
			$class = 'active';
		}else{
			$style = '';
		}
?>

		<li role="presentation">
			<a class="<?php echo $class; ?>" href="#<?php echo $products_cat; ?>" id="<?php echo $products_cat; ?>-tab" data-toggle="tab" role="tab" aria-controls="<?php echo $products_cat; ?>" aria-selected="false">
				<?php echo $products_cat; ?>
			</a>
		</li>
 
<?php
	}
	?>

</ul>
<div>
<?php
	$counter = 0;
	$class = '';

	foreach( $products_cats as $key => $products_cat ){
		$counter++;
		if( $counter == 1 ){
			$class = 'show active';
		}else{
			$style = '';
		}
?>
		<div class="tab-pane fade" id="<?php echo $products_cat; ?>" role="tabpanel" aria-labelledby="<?php echo $products_cat; ?>-tab">	<?php echo $products_cat; ?>

			<?php

				$args = array(
					'post_type' => 'product',
					'post_per_page' => -1,
					'tax_query' => array(
						array(
							'taxonomy' => 'product_cat',
							'field' => 'slug',
							'terms' => array($products_cat),
							'operator' => 'IN'
						)
					),
				);

				$div_products = new WP_Query( $args );
?>

<ul>

<?php
				if( $div_products->have_posts() ){
					while( $div_products->have_posts() ){
						$div_products->the_post();
						?>

						<li>

						<?php					
						echo get_the_title();
						?>

						</li>

						<?php
					}
				}
				wp_reset_postdata();
			?>
</ul>
		</div>
 
<?php
	}
	?>
</div>

<?php
}else{
    echo "no se encontraron resultados";
}

wp_reset_postdata();

//var_dump($products);

get_footer();