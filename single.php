<?php get_header(); ?>

        <div class="row">
                <div class="col-md-9">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<?php
			 if(get_the_title()==""){
						$title = "(タイトルなし)";
					}else{
						$title = get_the_title();
				}
		 ?>

                    <h3 class="h-blog"><?php echo $title; ?></h3>
                    <br />
		        	<?php the_content(); ?>

                    <div class="topic-info text-secondary">
				        <div><i class="far fa-calendar-alt">&#x2002;</i><?php the_time('Y/m/d'); ?></div>
				        <div><i class="far fa-folder">&#x2002;</i><?php the_category(','); ?></div>
				        <div>
        					<?php
        					    if(get_the_tags()){
        						    the_tags('<i class="fas fa-tag"></i>&#x2002;');}
        					?>
						</div>
    				</div><!-- author  -->
				<br />

                <div class="row">
					<div class="col-sm-4">
						<?php previous_post_link('%link', "<i class='fas fa-arrow-alt-circle-left'></i>%title", FALSE, ''); ?>
					</div>
					<div class="col-sm-4">
						<a href="<?php echo esc_url(home_url('blog')); ?>">記事一覧へ戻る</a>
					</div>
					<div class="col-sm-4">
						<?php next_post_link('%link', "%title<i class='fas fa-arrow-alt-circle-right'></i>", FALSE, ''); ?>	
					</div>
		    	</div><!-- 前後記事へ おわり -->
				<br />

                </div><!-- col-md--9 -->
                <div class="col-md-3">
                    <?php get_sidebar(); ?>
                </div><!-- col-md-3 -->

        </div><!-- row --> 
<?php 
endwhile;
endif; ?>
<?php get_footer(); ?>
