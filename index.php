<?php get_header(); ?>

        <!-- section -->
        <section>

            <!-- page tiitle -->
            <h1 class="content-subhead">Latest Posts</h1>
            <!-- page title -->

            <?php get_template_part('loop'); // include posts loop ?>
            <?php purepress_pagination(); ?>

        </section>
        <!-- /section -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
