<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package material-blog
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
	<div class="site-branding">
		<div class="personal-avatar"><img src="<?php echo get_template_directory_uri() . '/img/show-256.jpg'; ?>" alt=""></div>
		<div class="site-info">
		<?php
		if ( is_front_page() && is_home() ) : ?>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<?php else : ?>
			<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>

			<?php
		endif;

		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) : ?>
			<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p></div>
			<?php
		endif; ?>
	</div><!-- .site-branding -->
	<div class="social">
		<a href="mailto:yujinyan@outlook.com" class="flaticon-message106"></a>
		<a href="" class="flaticon-weixin" id="wechat-button"></a>
		<a href="https://cn.linkedin.com/in/yujinyan/zh-cn" class="flaticon-linkedin11"></a>
		<a href="https://github.com/yujinyan" class="flaticon-github17"></a>
		<a href="http://codepen.io/yujinyan/" class="flaticon-3d80"></a>
	</div>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
