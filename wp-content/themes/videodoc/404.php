<?php get_header(); ?>

<div class="row section-header post-header">
	<div class="column small-12">
		<div class="alert alert-warning">
		  <?php _e('Sorry, but the page you were trying to view does not exist.', 'ix'); ?>
		</div>

		<p><?php _e('It looks like this was the result of either:', 'ix'); ?></p>
		<ul>
		  <li><?php _e('a mistyped address', 'ix'); ?></li>
		  <li><?php _e('an out-of-date link', 'ix'); ?></li>
		</ul>
    <?php get_search_form(); ?>
	</div>
</div>

<?php get_footer(); ?>