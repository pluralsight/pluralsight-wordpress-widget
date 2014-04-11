<?php
/**
 * Represents the view for the public-facing component of the plugin.
 *
 * This typically includes any information, if any, that is rendered to the
 * frontend of the theme when the plugin is activated.
 *
 * @package   Pluralsight_Author_Widget
 * @author    Chris Reynolds <me@chrisreynolds.io>
 * @license   GPL3
 * @link      http://chrisreynolds.io
 * @copyright 2014 Chris Reynolds
 */


function ps_basic_widget( $author = '', $tags = '', $limit = null, $logo_position = 'above', $style = 'light' ) {

	if ( isset( $author ) || isset( $tags ) ) {
		?>
		<script type="text/javascript" id="pluralsight-course-list-widget">
		(function() {
		  var authorId = '<?php echo $author; ?>';
		  function asyncLoadWidget() {
		    var s = document.createElement('script');
		    s.type = 'text/javascript';
		    s.async = true;
		    var theUrl = 'http://widgets.pluralsight.com/authors/' + authorId + '/courses.js';
		    s.src = theUrl +
		            ( theUrl.indexOf("?") >= 0 ? "&" : "?") +
		            'ref=' + encodeURIComponent(window.location.href);
		    var embedder =
		      document.getElementById('pluralsight-course-list-widget');
		    embedder.parentNode.insertBefore(s, embedder);
		  }
		  if (window.attachEvent)
		    window.attachEvent('onload', asyncLoadWidget);
		  else
		    window.addEventListener('load', asyncLoadWidget, false);
		})();
		</script>
		<?php
	} else {
		?>
		<p>
		<?php _e( 'No author or tags defined.', 'pluralsight-author-widget' ); ?>
		</p>
		<?php
	}
}

