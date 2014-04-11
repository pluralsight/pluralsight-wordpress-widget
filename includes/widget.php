<?php
/**
 * Pluralsight Widget
 *
 * @package   Pluralsight_Author_Widget
 * @author    Chris Reynolds <me@chrisreynolds.io>
 * @license   GPL3
 * @link      http://chrisreynolds.io
 * @copyright 2014 Chris Reynolds
 */

/**
 * @package Pluralsight_Widget
 * @author  Chris Reynolds <me@chrisreynolds.io>
 */
class Pluralsight_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'pluralsight_widget', // base id
			__( 'Pluralsight Widget', 'pluralsight-author-widget' ), // widget name
			array( 'description' => __( 'Displays a list of Pluralsight courses by author or tag(s).', 'pluralsight-author-widget' ) ) // arguments
		);
	}

	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );
		if ( !empty( $instance['author'] ) ) {
			$author = $instance['author'];
		} else {
			$author = null;
		}

		echo $args['before_widget'];
		if ( !empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];

		// do other widget stuff here
		ps_basic_widget( $author );

		echo $args['after_widget'];

	}

	public function form( $instance ) {
		if ( isset( $instance['title'] ) ) {
			$title = $instance['title'];
		} else {
			$title = __( 'Courses', 'pluralsight-author-widget' );
		}

		if ( isset( $instance['author'] ) ) {
			$author = $instance['author'];
		} else {
			$author = null;
		}

		// form is here
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
		</p>
		<p>
			<label for="<?php echo $this->get_field_id( 'author' ); ?>"><?php _e( 'Author ID:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'author' ); ?>" name="<?php echo $this->get_field_name( 'author' ); ?>" type="text" value="<?php echo esc_attr( $author ); ?>"><br />
			<small><?php _e( 'Must match author ID on Pluralsight.com, e.g. <tt>\'chris-reynolds\'</tt>.', 'pluralsight-author-widget' ); ?></small>
		</p>
		<?php

	}

	public function update( $new_instance, $old_instance ) {

		$instance = array();
		$instance['title'] = ( !empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		$instance['author'] = ( !empty( $new_instance['author'] ) ) ? sanitize_title( $new_instance['author'] ) : '';

		return $instance;

	}
}