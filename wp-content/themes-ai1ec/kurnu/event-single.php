<div class="timely ai1ec-single-event
	ai1ec-event-id-<?php echo $event->post_id; ?>
	<?php if ( $event->get_multiday() ) echo 'ai1ec-multiday'; ?>
	<?php if ( $event->allday ) echo 'ai1ec-allday'; ?>">

<a name="ai1ec-event"></a>

<div class="ai1ec-event-details clearfix">
	<div class="ai1ec-time">
		<div class="ai1ec-label"><?php _e( 'Ajankohta', AI1EC_PLUGIN_NAME ); ?></div>
		<div class="ai1ec-field-value"><?php echo $event->get_timespan_html(); ?></div>
	</div>

	<?php if ( $location ) : ?>
		<div class="ai1ec-location">
			<div class="ai1ec-label"><?php _e( 'Paikka', AI1EC_PLUGIN_NAME ); ?></div>
			<div class="ai1ec-field-value"><?php echo $location; ?></div>
		</div>
	<?php endif; ?>

	<?php if ( $event->cost ) : ?>
		<div class="ai1ec-cost">
			<div class="ai1ec-label"><?php _e( 'Cost:', AI1EC_PLUGIN_NAME ); ?></div>
			<div class="ai1ec-field-value"><?php echo esc_html( $event->cost ); ?></div>
		</div>
	<?php endif; ?>

	<?php if ( $contact ) : ?>
		<div class="ai1ec-contact">
			<div class="ai1ec-label"><?php _e( 'Contact:', AI1EC_PLUGIN_NAME ); ?></div>
			<div class="ai1ec-field-value"><?php echo $contact; ?></div>
		</div>
	<?php endif; ?>

	<?php if ( $tags ) : ?>
		<div class="ai1ec-tags">
			<div class="ai1ec-label ai1ec-hidden-narrow-phone" title="<?php _e( 'Tags', AI1EC_PLUGIN_NAME ); ?>">
				<i class="icon-tags icon-large"></i>
			</div>
			<div class="ai1ec-label ai1ec-visible-narrow-phone">
				<i class="icon-tags"></i>
				<?php _e( 'Tags:', AI1EC_PLUGIN_NAME ); ?>
			</div>
			<div class="ai1ec-field-value"><?php echo $tags; ?></div>
		</div>
	<?php endif; ?>

</div>

<?php
	if ( ! $event->get_content_img_url() ) {
		echo $event->get_event_avatar(
			array( 'post_thumbnail', 'location_avatar', 'category_avatar' ),
			'timely alignleft',
			false
		);
	}
?>

</div>
