<?php get_header();?>
	<div id="" class="">
		<main id="" class="" role="main">

			<section class="error_404 not_found text-center space_betwen_section">
				<header class="not_found_header">
					<h1 class="not_found_page_title"><?php _e( 'Page Non Trouve', THEME_NAME ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo ("On dirait que rien n'a été trouvé à cet endroit. Peut-être essayer une recherche?"); ?></p>
                                        <div class="not_found_page_search_form">
                                                <?php get_search_form(); ?>
                                         </div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
