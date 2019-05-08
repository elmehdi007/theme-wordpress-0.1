<?php 
class theme1Search extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		$widget_ops = array( 
			'classname' => 'theme1Search',
			'description' => 'Andvanced search', 
		);
		parent::__construct( 'theme1Search', 'Recherche theme 1', $widget_ops );
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
            $val_search= "".the_search_query().""; 
            $action_search=esc_url( home_url( '/' )) ;     
            echo <<< END
              <form role="search" method="get" id="searchform" class="searchform navbar-form navbar-left" action="$action_search">
                            <div class="form-group">            
                                <input type="text" name="s" id="input_search" class="form-control form_control_theme1" placeholder="Search" value="$val_search">
                                  <button type="submit" id="btn_search" class="btn btn-default form_control_theme1">Submit</button>
			 </div>   
                  </form>
END;
          	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
	}
}

add_action( 'widgets_init', function(){register_widget( 'theme1Search' );});
