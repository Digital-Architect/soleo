<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * Please see /external/bootstrap-utilities.php for info on BsWp::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Bootstrap 5.0.1
 * @autor 		Digital Architect
 */
?>
<?php BsWp::get_template_parts( array( 
	'parts/shared/html-header', 
	'parts/shared/header' 
) ); ?>

<?php if ( have_posts() ): ?>

<?php if ( is_day() ) : ?>
	<h1>
		<?php echo __('Archive', 'wp_soleo'); ?>: <?php echo  get_the_date( 'D M Y' ); ?>
	</h1>
<?php elseif ( is_month() ) : ?>
	<h1>
		<?php echo __('Archive', 'wp_soleo'); ?>: <?php echo  get_the_date( 'M Y' ); ?>
	</h1>
<?php elseif ( is_year() ) : ?>
	<h1>
		<?php echo __('Archive', 'wp_soleo'); ?>: <?php echo  get_the_date( 'Y' ); ?>
	</h1>
<?php else : ?>
	<h1>
		<?php echo __('Archive', 'wp_soleo'); ?>
	</h1>
<?php endif; ?>

<ul class="list-unstyled">
	<?php while ( have_posts() ) : the_post(); ?>
	<li>
		<h2 class="media-heading">
			<a href="<?php esc_url( the_permalink() ); ?>" title="<?php the_title(); ?>" rel="bookmark">
				<?php the_title(); ?>
			</a>
		</h2>
		<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate>
			<?php the_date(); ?> <?php the_time(); ?>
		</time>
		<?php comments_popup_link(__('Leave a Comment', 'wp_soleo'), __('1 Comment', 'wp_soleo'), __('% Comments', 'wp_soleo')); ?>
		<?php the_content(); ?>
	</li>
	<?php endwhile; ?>
</ul>

<?php else: ?>
	<h1>
		<?php echo __('No posts to display', 'wp_soleo'); ?>
	</h1>
<?php endif; ?>

<?php BsWp::get_template_parts( array( 
	'parts/shared/footer',
	'parts/shared/html-footer' 
) ); ?>