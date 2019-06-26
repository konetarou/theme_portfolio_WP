
<?php  
// 変数設定
// thumbnail:150,150 medium:300,300 full:fullsize
$thumbnail = 'thumbnail';
$article_num = 0;

?>

<?php
    if(is_home()){ // 普通の記事ページ

    }
    elseif(is_search()){ // 検索ページ
        printf( __( '%s の検索結果', 'altitude' ), '<span>' . get_search_query() . '</span>' );
    }
    else{
        if(is_category()){single_cat_title();}
        elseif(is_tag()){single_tag_title();}
        elseif(is_tax()){single_term_title();}
        elseif(is_day()){echo "日別アーカイブ (" .get_the_time('Y/m/d') .")";}
        elseif(is_month()){echo "月別アーカイブ (" .get_the_time('Y/m') .")";}
        elseif(is_year()){echo "年別アーカイブ (" .get_the_time('Y') .")";}
        elseif(is_author()){echo "投稿者アーカイブ (" .esc_html(get_queried_object()->display_name) .")";}
        else{echo "ブログアーカイブ";}
        printf( __( '%s の検索結果', 'altitude' ), '<span>' . get_search_query() . '</span>' );
    }
?>


<?php if(have_posts()): while(have_posts()): the_post(); ?>
<?php // タイトル・本文無し表記
if(get_the_title()==""){
    $title = "(タイトルなし)";
}else{
    $title = get_the_title();
}
if(get_the_excerpt()==""){
    $excerpt = "(この記事は本文がありません)<br />";
}else{
    $excerpt = get_the_excerpt();
}				
?>


<div class="blog-card <?php if($article_num % 2 == 1){echo 'alt';} ?>"><!-- option class _ alt -->
    <div class="meta">

    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail($thumbnail,array('class'=>"img-thumbnail")); ?>
        <div class="photo" style="background-image: url(<?php the_post_thumbnail_url('medium'); ?>)"></div>
    <?php else : ?>
        <?php $thumbnail_url = "background-image: url(" .get_bloginfo('template_url')."/image/noimage.png)"; ?>
        <div class="photo" style="<?php echo $thumbnail_url; ?>"></div>
    <?php endif ; ?><!-- thumbnail -->

      <ul class="details">
        <li class="date details-link"><?php the_time('Y/m/d'); ?></li>
        <li class="category"><?php the_category(','); ?></li>
        <?php if(get_the_tags()){
            echo '<li class="tags">';
            the_tags('');
            echo "</li>";
        }
        ?>
      </ul>
    </div>
    <div class="description">
      <h1><?php echo $title; ?></h1>
      <p><?php echo $excerpt; ?></p>
      <p class="read-more">
        <a href="<?php the_permalink(); ?>">続きを読む</a>
      </p>
    </div>
  </div><!-- blog-card -->

<?php $article_num++; ?>
<br />
<?php endwhile; ?>
<?php else: ?>
記事が作成されていません。
<?php endif; ?>	


<br />
		

<!-- ページネーション -->
<?php bootstrap_pagination(); ?>