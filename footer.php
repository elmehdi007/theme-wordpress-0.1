


<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info">
                            <div class="row">
                                <div class="col-xs-12 .col-md-2 col-sm-3"> 
                                    <?php if ( is_active_sidebar( CONTENT_FOOTER1_ID ) ) {
                                        dynamic_sidebar( CONTENT_FOOTER1_ID );
                                       }?>
                                </div>
                                <div class="col-xs-12 .col-md-2 col-sm-3">
                                   <?php if ( is_active_sidebar( CONTENT_FOOTER2_ID ) ) {
                                        dynamic_sidebar( CONTENT_FOOTER2_ID );
                                       }?>
                                </div>

                                <!-- Add the extra clearfix for only the required viewport -->
                                <div class="clearfix visible-xs-block"></div>

                                <div class="col-xs-12 .col-md-2 col-sm-3">
                                    <?php if ( is_active_sidebar(CONTENT_FOOTER3_ID ) ) {
                                        dynamic_sidebar(CONTENT_FOOTER3_ID);
                                       }?></div>
                                <div class="col-xs-12 .col-md-2 col-sm-3">                               
                                <?php if ( is_active_sidebar(CONTENT_FOOTER4_ID) ) {
                                        dynamic_sidebar(CONTENT_FOOTER4_ID );
                                       }?>
                                </div>
                              </div>
             
 
                            
			</div><!-- .site-info -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->
<?php wp_footer(); ?>
<script src="http://localhost/wordpressdev/wp-content/themes/theme1/asset/js/theme1_js.js">
   
</script>
</body>
</html>
