<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class('post'); ?>>

        <?php if(has_post_thumbnail()) : ?>
            <?php kicks_post_thumbnail(); ?>
        <?php endif; ?>

        <header class="entry-header">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="entry-meta">
                <?php get_template_part('templates/entry-meta', 'single'); ?>
            </div>
        </header>

        <div class="entry-content">
            <?php the_content(); ?>
        </div>
        
        <footer class="entry-footer">
            <?php
                wp_link_pages(array(
                    'before' => '<nav class="page-nav">' . __('Pages:', 'kicks'),
                    'after' => '</nav>',
                    'link_before' => '<span class="page-number">',
                    'link_after'  => '</span>',
                ));
            ?>
            <?php
                $tags_list = get_the_tag_list(
                    sprintf('<span class="fa fa-tags"></span><strong>%1$s</strong> ', __('Tags', 'kicks')),
                    _x(', ', 'Used between list items, there is a space after the comma.', 'kicks')
                );
                if ($tags_list) {
                    printf('<div class="post-tags">%1$s</div>', $tags_list);
                }
            ?>
        </footer>
        <?php if (comments_open() || get_comments_number()) : ?>
            <?php comments_template('/templates/comments.php', true); ?>
        <?php endif; ?>
    </article>
<?php endwhile; ?>
