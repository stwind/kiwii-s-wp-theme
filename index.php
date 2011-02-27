<?php get_header(); ?>

    <?php if (have_posts()): ?>
    <section class="posts">
    <?php while(have_posts()): the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('group'); ?>>
        <header class="post-header">
            <time datetime="<?php the_time('Y-m-dT12:00:00+08:00'); ?>" pubdate><?php the_time('Y-m-d'); ?></time>
            <h1 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>へのパーマリンク"><?php the_title(); ?></a></h1>
        </header>
        <p class="cat-links">
            <span>カテゴリ:</span><?php the_category(', '); ?>
        </p>
        <section class="post-content">
            <?php the_content('続き読む'); ?>
        </section>
        <footer class="post-footer">
            <div class="post-metadata">
                <span class="author eutemia"><?php the_author(); ?></span>
            </div>
        </footer>
    </article>

    <?php endwhile; ?>
    </section>

    <section class="pagination group">
        <p class="older"><?php next_posts_link('←古い投稿'); ?></p>
        <p class="newer"><?php previous_posts_link('新しい投稿→'); ?></p>
    </section>
</div><!--column-inner-->
</div><!--main-->

    <?php else: ?>
        <article <?php post_class('group'); ?>>
            <header class="post-header">
                <h1 class="post-title">ここでは何も無い</h1>
            </header>
            <section class="post-content">
                <p>ない</>
            </section>
            <footer class="post-footer">
                <div class="post-metadata">
                    <span class="author eutemia"><?php the_author(); ?></span>
                </div>
            </footer>
        </article>
    <?php endif; ?>
    
    <?php get_sidebar(); ?>
<?php get_footer(); ?>
