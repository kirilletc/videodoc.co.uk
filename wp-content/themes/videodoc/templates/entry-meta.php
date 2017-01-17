<?php 
  $categories = get_the_category();
  if(!empty($categories)) {
    echo '<span class="categories">'._x('Posted in ', 'Used to show categories assigned to post', 'ix');
    foreach($categories as $index => $category) {
      echo $category->cat_name;
      if($index !== count($categories) - 1) {
        echo ', ';
      }
    }
    echo '</span>';
  }
?>
<span class="byline author">
  <?php echo __('by', 'ix'); ?> 
  <?php echo get_the_author(); ?>
</span>

<?php
  printf(
    '%1$s <time class="updated" datetime="%2$s">%3$s</time>',
    _x('on', 'Used before publish date.', 'ix'),
    get_the_time('c'),
    get_the_date()
  );
?>