<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-task
 */

get_header();
?>

<main id="primary" class="site-main ">

  <div class="hero_page">
    <div class="hero_text">
      <h1>Xeory Extension</h1>
      <p>Xeory Extensionはワンコラムのサイト型テーマです。ユーザーに対して重要なコンテンツを効率的に届けられるようにデザインされています。５種類のカラーバリエーションを用意しています。</p>
    </div>
  </div>


  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();
  ?>
      カテゴリは <?php the_category() ?>
      <div class="frontpage_recentpost_container">
        <p class="frontpage_recentpost_year"><?php echo get_the_date('Y') ?></p>
        <p><?php echo get_the_date('n') ?>/<?php echo get_the_date('j') ?></p>

        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail() ?>
        <?php else : ?>
          <img src="https://placehold.jp/500x300.png" alt="アイキャッチ画像がありません">
        <?php endif ?>
      </div>
      <h2>
        <!-- リンクを出力する -->
        <a href="<?php the_permalink() ?>">
          <!-- タイトルを表示する -->
          <?php the_title(); ?>
        </a>
      </h2>


      <hr>
    <?php
    endwhile;
  else :
    ?>
    <p>現在準備中です。</p>
  <?php
  endif;
  ?>


</main><!-- #main -->
<h1>test</h1>

<?php
get_sidebar();
get_footer();
