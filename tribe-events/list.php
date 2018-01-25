<?php
/**
 * List View Template
 * The wrapper template for a list of events. This includes the Past Events and Upcoming Events views
 * as well as those same views filtered to a specific category.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );
?>

	<!-- Tribe Bar -->
<?php tribe_get_template_part( 'modules/bar' ); ?>
<div class="row">
	<!-- List Title -->
	<?php do_action( 'tribe_events_before_the_title' ); ?>
	<h2 class="tribe-events-page-title"><?php echo tribe_get_events_title() ?></h2>
	<?php do_action( 'tribe_events_after_the_title' ); ?>
	
<div class="medium-9 columns">
	<!-- Main Events Content -->
<?php tribe_get_template_part( 'list/content' ); ?>
</div>
<div class="medium-3 columns">
  <?php get_sidebar(); ?>
</div>
</div>
	<div class="tribe-clear"></div>

<?php
do_action( 'tribe_events_after_template' );
