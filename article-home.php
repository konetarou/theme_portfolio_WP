<!-- 記事一覧ループ -->
<?php  
// 変数設定
// thumbnail:150,150 medium:300,300 full:fullsize
$thumbnail = 'thumbnail';


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
<div class="card">
<div class="card-header"><a href="<?php the_permalink(); ?>"><?php echo $title; ?></a></div>
<div class="card-body">
    <div class="row">
    <div class="col-md-3">
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail($thumbnail,array('class'=>"img-thumbnail")); ?>
    <?php else : ?>
        <img class="<?php echo 'thumbnailsize-' .$thumbnail; ?> img-thumbnail" src="<?php bloginfo('template_url'); ?>/image/noimage.png" width="100" height="100" alt="デフォルト画像" />
    <?php endif ; ?>

    </div>
    <div class="col-md-9">
        <?php echo $excerpt; ?>
    </div>
    </div><!-- row -->

    
    <div class="topic-info text-secondary">
        <div><i class="far fa-calendar-alt">&#x2002;</i><?php the_time('Y/m/d'); ?></div>
        <div><i class="far fa-folder">&#x2002;</i><?php the_category(','); ?></div>
        <div>
        <?php
            if(get_the_tags()){
            the_tags('<i class="fas fa-tag"></i>&#x2002;');}
             ?></div>
    </div>
</div>
</div><!-- card -->
<br />
<?php endwhile; ?>
<?php else: ?>
記事が作成されていません。
<?php endif; ?>			

<!-- ページネーション -->
<?php bootstrap_pagination(); ?>