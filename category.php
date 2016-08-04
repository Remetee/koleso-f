<?php get_header(); ?>
<?php get_template_part('head'); ?>
<body>

<div class="container-fluid">

    <div class="row">
        <?php get_template_part('header'); ?>
    </div>

    <?php if($_SERVER['REQUEST_URI']=="/category/news/"){  ?>

    <div class="row">
        <div class="col-lg-12 line_blue">
            Свежие новости
        </div>
    </div>

    <div class="row">

        <div class="container">

        <div class="col-lg-12">

            <?php $posts = get_posts ("category=95&orderby=date"); ?>
            <?php if ($posts) : ?>
                <?php foreach ($posts as $post) : setup_postdata ($post); ?>

                    <div class="col-lg-12">
                        <div class="news_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                        <div class="news_tools"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $post->post_date; ?></div>
                        <p><?php the_content(); ?></p>
                    </div>

                <?php
                endforeach;
                wp_reset_postdata();
                ?>
            <?php endif; ?>







        </div>

        </div>

    </div>

    <?php } elseif($_SERVER['REQUEST_URI']=="/category/blog/"){ ?>

        <div class="row">
            <div class="col-lg-12 line_blue">
                Блог
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <?php $posts = get_posts ("category=1&orderby=date"); ?>
                    <?php if ($posts) : ?>
                        <?php foreach ($posts as $post) : setup_postdata ($post); ?>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <div class="news_name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div><?php the_post_thumbnail(); ?></div>
                                <div class="news_tools"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $post->post_date; ?></div>
                                <p><?php the_content(); ?></p>
                            </div>
                        <?php
                        endforeach;
                        wp_reset_postdata();
                        ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>




    <?php } ?>

  
</div>








<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/wp-content/themes/koleso-f/js/jquery.js"></script>
<script src="/wp-content/themes/koleso-f/js/bootstrap.js"></script>

<?php get_footer(); ?>
</body>
</html>