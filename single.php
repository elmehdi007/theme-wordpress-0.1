<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

//var_dump(wp_get_post_tags($post->ID)[0]->slug);die();
get_header();
//wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
$nextPost=get_next_post();
$prevPost= get_previous_post();
?>
<!--<div class="row">
  <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
  <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
</div-->

</div>
<main id="blog" class="site-blog" role="main">
    <div class=" post">   
        <section class="header_blog" style="background-image: url(<?php the_post_thumbnail_url(); ?>)" >
            <div class="content_header" >
                <div class="post_info">
                    
                    <?php $linkCurrentPost= get_permalink($post->ID);
                            the_title("<h1 class='text-center'><a href='{$linkCurrentPost}'>", "</a></h1>"); ?>
                    <div class="post_attribute text-center">
                        <table class="text-center">
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

                        </table>
                    </div>
                </div>
            </div>
            </section>
        <section class="row content_post">         
            
            <article class="col-md-8 article">
          
                 <?php 
                 echo($post->post_content);
                 ?>
          <?php              
           if($prevPost->ID!=="" || $nextPostPost->ID!=="") {//die("true");
                $linkPrevPost=get_permalink($prevPost->ID );
                echo'<div class="row container_navigation_post space_betwen_section"><div class="navigation_post">';
               if($prevPost->ID!=null){
                  echo "<div class='btn_nav_post btn_prev_post'>
                       <a href='{$linkPrevPost}'><i class='glyphicon glyphicon-chevron-left' aria-hidden='true;'></i><span>$prevPost->post_title</span></a>
                        <!--<div class='next_post_title '><h4>$prevPost->post_title</h4></div>-->
                   </div>";                
               }

               if($nextPost->ID!=null){
                  $linkNextPost=get_permalink($nextPost->ID );
                  echo "<div class='btn_nav_post btn_next_post'>
                         <a href='{$linkNextPost}'><span>$nextPost->post_title </span><i class='glyphicon glyphicon-chevron-right' aria-hidden='true'></i></a>
                         <!--<div class='prev_post_title'><h4>$nextPost->post_title</h4></div>-->
                     </div>";
           }
               echo "</div></div>";
           }
           ?> 
           <div class="space_betwen_section post_comment_form">
               <?php comments_template(); ?>
           </div>
           <div class="related_post space_betwen_section">
               <?php 
                    //for use in the loop, list 5 post titles related to first tag on current post
                   $tags = wp_get_post_tags($post->ID);
                   
                   if ($tags) {
                       // $first_tag = $tags[0]->term_id;
                        $tagSlug="";
                        for($i=0;$i<count($tags);$i++){$tagSlug.=$tags[$i]->slug.',';}
                        $args=array(
                       // 'tag__in' => $first_tag,
                        'tag'=> $tagSlug,
                        'post__not_in' => array($post->ID),
                        'posts_per_page'=>5,
                        'caller_get_posts'=>1
                        );
                        $my_query = new WP_Query($args);
                         if($my_query->have_posts())  :  ?>
                          <h3 class="motif_related_post">Ca peut vous Interesse</h3>
                         <?php $nbr=1;
                        while ($my_query->have_posts()  && $nbr<2) : $my_query->the_post(); ?>
                       <div class="container_related_post" style="background: blanchedalmond;">
                           <ul class="list_container_related_post">
                               <li>
                                   <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                        <img src="<?php the_post_thumbnail_url() ?>" style="width: 352px;height: 208px;"/>
                                        <div class="text-center related_post_title"><h3><?php the_title_attribute(); ?></h3></div>
                                   </a>  
                               </li>
                               <li>
                                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                                        <img src="<?php the_post_thumbnail_url() ?>" style="width: 352px;height: 208px;"/>
                                        <div class="text-center related_post_title"><h3><?php the_title_attribute(); ?></h3></div>
                                   </a>  
                               </li>                         
                           </ul>                   
                       </div>
                   <?php
                        $nbr++;
                        endwhile;
                    endif;
                        wp_reset_query();
                   }
               ?>
           </div>
            </article>
                   <?php if ( is_active_sidebar(CONTENT_SIDEBAR_LEFT_ID ) ) {
                         echo ("<div class='col-md-4 sidebare'>");
                         dynamic_sidebar( CONTENT_SIDEBAR_LEFT_ID );
                         echo ("</div>");
                  }
               ?>
    </section>     
       
    </div >
    
</main><!-- .site-main -->


</div><!-- .content-area -->


<?php get_footer();