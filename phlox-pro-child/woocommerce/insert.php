<?php


        $products_args = array(
            'post_type'     => 'product',// we want to get products
            'orderby'       => '_price',
            'order'         => 'ASC',
            'tax_query'     => array(
                'relation'      => 'AND',
                array(
                    'taxonomy' => 'product_cat', // the product taxonomy
                    'field'    => 'slug', // we want to use the term_id not slug
                    'terms'    => $conectividad, // here we enter the ID of the current term *this is where the magic happens*
                ),
                array(
                    'taxonomy' => 'product_tag', // the product taxonomy
                    'field'    => 'slug', // we want to use the term_id not slug
                    'terms'    => $gral_fibramovil, // here we enter the ID of the current term *this is where the magic happens*
                ),
            ),
        );

        $products = new WP_Query( $products_args );

        if ( $products->have_posts() ) { // only start if we hace some products

            // START some normal woocommerce loop, as you already posted in your question

            //woocommerce_product_loop_start(); // this will generate the start of the default products list UL

            while ( $products->have_posts() ) : $products->the_post();

                wc_get_template_part( 'content', 'product' ); // we are using the default product template from woocommerce

            endwhile; // end of the loop.

            //woocommerce_product_loop_end(); // this generates the end of the default woocommerce product list UL

            // END the normal woocommerce loop

            // Restore original post data, maybe not needed here (in a plugin it might be necessary)
            wp_reset_postdata();

        } else { // if we have no products, show the default woocommerce no-product loop

            // no posts found
            

        }//END if $products
        wp_reset_postdata();

