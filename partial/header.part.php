 <header>
            <?php if ( is_active_sidebar( CONTENT_TOP_BAR_ID ) ) {
                echo '<section class="top_bare">';
                dynamic_sidebar( CONTENT_TOP_BAR_ID );
                echo '</section>';
            }
            ?>
            <nav class="navbar navbar-default ">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
              
                    <div id="content_toogle_menu" >
                        <div class="toogle_menu " style="visibility: hidden;"> 
                             <i id="icon_toogle_main_menu" class="glyphicon glyphicon-menu-hamburger"></i>
                                 <ul class="menu_toogle hidden" >
                                 <?php /** if (has_nav_menu( 'menu_toogle' )) {
                                       wp_nav_menu( array(
                                                'theme_location' => 'menu_toogle',
                                                'container'      => true,
                                                'items_wrap'     => '%3$s'
                                        ) );
                                }**/
                                ?>
                             </ul>
                        </div>
                        <div id="div_logo">
                              <a class="logo-link-img" href="<?php echo esc_url( home_url( '/' )); ?>"><img class='responsive-img logo' src="<?php echo get_template_directory_uri().'/asset/img/g.png' ?>"/></a>
                        </div>
                    </div>
                    
                  </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                   <?php
                          //require_once '/searchform.part.php';
                   /**     if (has_nav_menu( 'primary' )) {
                                        wp_nav_menu( array(
                                                'theme_location' => 'primary',
                                                'container'      => true,
                                                'items_wrap'     => '%3$s'
                                        ) );
                                }      **/         
                    ?>
                <ul class="nav navbar-nav navbar-right">

                    <?php  
					 $menu;
					if (has_nav_menu( 'primary' )) {
                                      $menu= wp_nav_menu( array(
                                                'theme_location' => 'primary',
                                                'container'      => false,
                                                'items_wrap'     => '%3$s',
                                       ));
                                       
                                }
                            $menu=  wp_nav_menu(array(
                                       'theme_location'  => 'primary',
                                       'menu'            => 'primary_menu',
                                       'container'       => 'div',
                                       'container_class' => 'menu_wrap',
                                       'menu_class'      => 'nav sf-menu',
                                       'echo'            => false,
                                       'items_wrap'      => '<ul class="%2$s nav navbar-nav navbar-right">%3$s</ul>',
                                       'depth'           => 1     
                            
                                   ));
                                echo  str_replace('class="sub-menu"', 'class="sub-menu"', $menu);
                                ?>
                </ul>
                 <!-- <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Link</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                      </ul>
                    </li>
                  </ul>-->
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </header>