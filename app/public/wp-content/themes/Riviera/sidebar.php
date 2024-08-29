<?php
    $args = array(
            'numberposts' => 3,
            'offset' => 0,
            'category' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'include' => '',
            'exclude' => '',
            'meta_key' => '',
            'meta_value' =>'',
            'post_type' => 'post',
            'post_status' => 'publish',
            'suppress_filters' => true
        );

    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
    #echo "<PRE>";print_r($recent_posts);
?>
<div class="odd-bg blog-right">
    <div class="top-post"> 
        <div class="blg-titl">
            <h3>RECENT POSTS</h3>
            <div class="tit-line"></div>
        </div>
        <ul class="rpost">
            <?php 
            if(!empty($recent_posts)){
                foreach ($recent_posts as $key => $value) {
                    ?>
                        <li> 
                             <a class="recent-post-a" href="<?php echo get_permalink($value['ID'] ); ?>">
                               <!--  <div><img src="<?php echo get_the_post_thumbnail_url($value['ID'], 'thumbnail' ); ?>" /></div> -->

                                <div><?php echo $value['post_title']; ?></div>
                            </a>
                        </li>
                    <?php
                }
            }
            ?>
        </ul>
    </div>
    <div class="botm-post">
        <div class="blg-titl">
            <h3>categories</h3>
            <div class="tit-line"></div>
        </div>
        <ul class="categpost">
            <?php 
                $args = array(
                'show_option_all'    => '',
                'orderby'            => 'id',
                'style'              => 'list',
                'use_desc_for_title' => 0,
                'hierarchical'       => 0,
                'title_li'           => '',
                'current_category'   => 0
                );
                wp_list_categories( $args ); 
            ?>  
        </ul>
    </div>
    <div class="botm-post">
        <div class="blg-titl">
            <h3>Archives</h3>
            <div class="tit-line"></div>
        </div>
        <?php
            global $wpdb;
            $limit = 0;
            $year_prev = null;
            $months = $wpdb->get_results("SELECT DISTINCT MONTH( post_date ) AS month ,  YEAR( post_date ) AS year, COUNT( id ) as post_count FROM $wpdb->posts WHERE post_status = 'publish' and post_date <= now( ) and post_type = 'post' GROUP BY month , year ORDER BY post_date DESC");

            $option_name = 'page_for_posts';
            $postId = get_option($option_name);
            $blogPage = str_replace(home_url(),'',get_permalink($postId));

               foreach($months as $month) :
                    $year_current = $month->year;
                    if ($year_current != $year_prev){
                        if ($year_prev != null){?>
                            </ul>
                            <!-- End of Archive -->
                        </div>
                    </div><!-- End of Card Body -->
                        <?php } ?>
                          <h3 class="archive-h3"><a data-toggle="collapse" href="#multiCollapseExample-<?php echo $month->year; ?>" role="button" aria-expanded="false" aria-controls="multiCollapseExample-<?php echo $month->year; ?>"> <?php echo $month->year; ?></a></h3>                    

                         <div class="collapse multi-collapse" id="multiCollapseExample-<?php echo $month->year; ?>">
                            <div class="card card-body">


                                 <ul class="archive-list">
                                        <!-- <li class="archive-year"><a href="<?php bloginfo('url') ?>/<?php echo $month->year; ?>/"><?php echo $month->year; ?></a></li> -->
                                         
                                        <?php } ?>
                                        <li><a href="<?php bloginfo('url') ?><?php echo $blogPage;?><?php echo $month->year; ?>/<?php echo date("m", mktime(0, 0, 0, $month->month, 1, $month->year)) ?>/"><span class="archive-month"><?php echo date_i18n("F", mktime(0, 0, 0, $month->month, 1, $month->year)) ?> (<?php echo $month->post_count; ?>)</span></a></li>
                                    <?php $year_prev = $year_current;
                                     
                                    //if(++$limit >= 18) { break; }
                                     
                                    endforeach; ?>
                                </ul>

                            </div>
                        </div><!-- End of Card Body -->
    </div>

</div>