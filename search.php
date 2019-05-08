<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
get_header(); ?>
	<section id="" class="">
		<main id="" class="main_search" role="main">
                    <div class="contaner_search_result">
			<header class="search_page_header">
				<h1 class="search_page_title text-center"><?php printf( __( 'Resultat de recherche pour: %s', THEME_NAME), get_search_query() ); ?></h1>
			</header><!-- .page-header -->

                        <?php
                            $s=get_search_query();
                            $args = array('s' =>$s);
                                // The Query
                            $the_query = new WP_Query( $args );
                            if ( $the_query->have_posts() ) {
                                ?> <ul class="list_result_search"> <?php 
                                    while ( $the_query->have_posts() ) {
                                       $the_query->the_post();
                                             ?>
                                               <div class="contaner_line_result">
                                                    <li>
                                                        <h3 ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                        <div class="info_search_post">
                                                           <table class="text-center">
                                                               <tbody>
                                                                <tr>
                                                                     <td class="th"><label>Author</label></td>
                                                                     <td><label>Categories</label></td>
                                                                     <td><label>Date</label></td>
                                                                     <td><label>comments</label></td>
                                                                </tr>
                                                                <tr>
                                                                  <td><span class="post_attribute_val post_author_name"><?php the_author_meta('display_name',$post->post_author) ; ?></span></td>    
                                                                  <td><span class="post_attribute_val post_categorie_name"><?php echo get_the_category_list(','); ?> </span></td>
                                                                  <td><span class="post_attribute_val post_date"><?php the_time('d M Y'); ?> </span></td>
                                                                  <td><span class="post_attribute_val post_date"><?php echo $post->comment_count; ?> </span></td>
                                                                </tr>                 
                                                               </tbody>
                                                            </table>
                                                         
                                                        </div>                                                       
                                                        <div class="text-justify extrat_post">
                                                            <?php the_excerpt(); ?>
                                                        </div>
                                                    </li>
                                                </div>
                                             <?php
                                    }
                                    ?> </ul> <?php 
                                }else{
                            ?>
                                    <div class="alert alert-info alert_not_found_result">
                                      <p>Désolé, mais rien ne correspond à vos critères de recherche. Veuillez réessayer avec d'autres mots-clés.</p>
                                    </div>
                            <?php }
                                    wp_reset_query();
                            ?>
                    </div>
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php get_footer(); ?>
