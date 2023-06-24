<?php get_header();?>

<div class="container">
    <h1><?php single_cat_title();?></h1>
    <div class="row">
        <div class="col">
            <?php if(have_posts()) : while(have_posts()) : the_post();?>
            <div class="card mb-4">
                <div class="card-body">
                    <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url('medium');?>" class="img-fluid"/> 
                    <?php endif;?>
                    <h3><?php the_title();?></h3>
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink();?>" class="btn btn-success">Lees meer</a>
                </div>
            </div>    
            <?php endwhile; endif;?>
        </div>
    </div>
</div> 

<?php get_footer();?>