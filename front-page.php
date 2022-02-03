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

<main id="primary" class="site-main hero_page">

    <div class="hero_text">
        <h1>Xeory Extension</h1>
        <p>Xeory Extensionはワンコラムのサイト型テーマです。ユーザーに対して重要なコンテンツを効率的に届けられるようにデザインされています。５種類のカラーバリエーションを用意しています。</p>
    </div>

</main><!-- #main -->
<h1>test</h1>

<?php 
get_sidebar();
get_footer();