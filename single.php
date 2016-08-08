<!-- <?php get_header(); ?>
	<section id="content" role="main">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
		<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
		<?php endwhile; endif; ?>
			<footer class="footer">
				<?php get_template_part( 'nav', 'below-single' ); ?>
			</footer>
	</section>
	<?php get_sidebar(); ?>
<?php get_footer(); ?>
 -->
<?php
global $more;
while( have_posts() ) : the_post();
$more = 1; // отображаем полностью всё содержимое поста
?>
<?php get_template_part('head'); ?>

<body>

<div class="container-fluid">

    <div class="row">
        <?php get_template_part('header'); ?>
    </div>



    <div class="row">
        <div class="col-lg-12 line_blue">
            <?php the_title(); ?>
        </div>
    </div>

    <div class="row">

        <div class="container">

            <div class="col-lg-8 col-lg-offset-2">

                <?php
                the_content(); // выводим контент
                endwhile;

                ?>
                <ul>
<?php  echo wp_list_categories('title_li='); ?>
</ul>
            </div>

        </div>

    </div>

</div>








<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/wp-content/themes/koleso-f/js/jquery.js"></script>
<script src="/wp-content/themes/koleso-f/js/bootstrap.js"></script>

<?php wp_footer(); ?>
</body>
</html>