<?php get_header(); ?>

<main id="main-content">

    <?php if (have_posts()) : ?>
        <div class="container">
        <h1 class="text-center"><?php post_type_archive_title(); ?></h1>
            <div class="row">
                <?php while (have_posts()) : the_post(); 
                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
                    <div class="col-md-4">
                        <div class="card mb-2">
                            <?php if(!empty($image[0])){?>
                            <img src="<?php echo $image[0] ?>" class="card-img-top" alt="Post Thumbnail" />
                            <?php } else{ ?>
                                <img src="http://localhost/foodies/wp-content/uploads/2025/02/macaroni-pasta.jpeg" class="card-img-top" alt="No image" />
                            <?php } ?>
                            <div class="card-body">
                                <h2 class="card-title"><?php the_title(); ?></h2>
                                <p class="card-text"><?php echo wp_trim_words(get_the_content(),'20','');?></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                </div>
        </div>
        <?php endif; ?>
</main>

<?php get_footer(); ?>
