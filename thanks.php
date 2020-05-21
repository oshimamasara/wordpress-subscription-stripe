<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 * Template Name: thank you
 * Template Post Type: page
 */

get_header();
?>

<main id="site-content" role="main">

  <?php
    if(!empty($_GET['tid'] )) {
      $GET = filter_var_array($_GET, FILTER_SANITIZE_STRING);

      $tid = $GET['tid'];
    } else {
      header('Location: https://sugukesu.o-namae.com/error/');
    }
  ?>

    <header class="entry-header has-text-align-center header-footer-group">
      <div class="entry-header-inner section-inner medium">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </div>
    </header>
    <div class="post-inner thin ">
      <div class="entry-content">

        <p>ご登録内容</p>
        <ul>
            <li>購入商品： メルマガ</li>
            <li>ご購入価格： 300 円</li>
          <li>お取引 ID: <?php echo $tid; ?></li>
          <li>メルマガday： 毎月15日</li>
        </ul>
        <p>初回メルマガ送信までしばらくお待ちください。</p>
        <hr>
        <p><a href="index.php" class="btn btn-light mt-2">もどる</a></p>
      </div>
    </div>

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>