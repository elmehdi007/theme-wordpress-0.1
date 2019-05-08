    <form role="search" method="get" id="searchform" class="searchform navbar-form navbar-left" action="<?php  echo esc_url( home_url( '/' )) ;?>">
                            <div class="form-group">            
                                <input type="text" name="s" id="input_search" class="form-control form_control_theme1" placeholder="Search" value="<?php echo the_search_query(); ?>">
                                  <button type="submit" id="btn_search" class="btn btn-default form_control_theme1">Submit</button>
			 </div>   
                      
                  </form>