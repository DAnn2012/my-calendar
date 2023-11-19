<?php
/**
 * Template: Single Event, Grid view.
 *
 * @category Templates
 * @package  My Calendar
 * @author   Joe Dolson
 * @license  GPLv2 or later
 * @link     https://www.joedolson.com/my-calendar/
 */

?>
<div class="mc-event mc-single mc-grid <?php mc_event_classes( $data->event, 'calendar' ); ?>">
	<?php mc_template_tag( $data, 'image' ); ?>
	<?php mc_template_tag( $data, 'datetime' ); ?>
	<?php mc_template_tag( $data, 'description' ); ?>
</div>
