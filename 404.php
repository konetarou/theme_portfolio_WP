<!-- page.php -->
<?php get_header(); ?>
<!-- <link rel="stylesheet" href="<?php bloginfo ('stylesheet_directory'); ?>/animation.css" type="text/css" /> -->

<!--
<p>
  Spice up your type with CSS
  <span>
    TEST
  </span>
  &mdash; no JavaScript required &mdash;
</p>
-->

<style>
  .card1 {
        width: 80%;
        margin: 20px;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0 3px 6px #ccc;
    }
    .image1 {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 5px 5px 0 0;
    }
    .title1 {
        font-size: 150%;
        margin: 10px;
        color: #444;
    }
    .content1 {
        padding: 10px;
        color: #666;
    }
</style>


<div class="row">
  <div class="col-md-4">
  <div class="card1">
    <img src="<?php bloginfo('template_url'); ?>/image/noimage.png"" class="image1">
    <p class="title1">タイトル</p>
    <p class="content1">本文</p>
</div>
  </div>
  <div class="col-md-4">
    2
  </div>
  <div class="col-md-4">
    3
  </div>
</div>


<?php get_footer(); ?>