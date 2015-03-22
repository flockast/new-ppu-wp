<?php if ( is_post_type_archive(get_post_type()) ) { get_template_part('templates/archives/archive', get_post_type() ); die(); } ?>

<?php get_header(); ?>
<div class="mainContent">
    <input type="hidden" name="data-file" value="archive.php">

    <h1 class="pageTitle"><span><?php echo single_cat_title( '', false ); ?></span></h1>

    <?php if (have_posts()): ?>
        <div class="listPosts">
            <?php while (have_posts()): the_post(); ?>
                <?php get_template_part('templates/articles/article', 'category'); ?>
            <?php endwhile; wp_reset_query(); ?>
        </div>
        <div class="buttonMore btn btn-primary" id="buttonMore" data-cat-title="<?php echo single_cat_title(); ?>">Еще интересных статей</div>
    <?php endif; ?>

</div>
<div class="mainSidebar">
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>