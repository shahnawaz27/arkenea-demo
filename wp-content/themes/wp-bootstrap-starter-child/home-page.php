<?php
/**
 * Template Name: Home Page
 */

get_header();
$id = $post->ID;
?>


    <section id="challange">
        <div class="container">
            <h2 class="text-center sub-title"><?php echo get_field('challange_title', $id); ?></h2>
            <p class="text-center"><?php echo get_field('challange_text', $id); ?></p>
        </div>
        <div class="screens">
            <div class="screen-img">
              <img src="<?php echo get_field('challange_image1', $id); ?>"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo get_field('challange_image2', $id); ?>"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo get_field('challange_image3', $id); ?>"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo get_field('challange_image4', $id); ?>"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo get_field('challange_image5', $id); ?>"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo get_field('challange_image6', $id); ?>"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo get_field('challange_image7', $id); ?>"/>
            </div>
        </div>
    </section>

    <section id="solution">
        <div class="container">
            <h2 class="text-center sub-title"><?php echo get_field('solution_title', $id); ?></h2>
            <p class="text-center"><?php echo get_field('solution_text', $id); ?></p>
        </div>
        <div class="full-width">
            
            <div class="container">
                <div class="screens-img">
                <img src="<?php echo get_field('solution_image1', $id); ?>"/>
                </div>
                <div class="screens-img">
                <img src="<?php echo get_field('solution_image2', $id); ?>"/>
                </div>
                <div class="screens-img">
                <img src="<?php echo get_field('solution_image3', $id); ?>"/>
                </div>
            </div>
            <div class="overlay"></div>
        </div>
    </section>

    <section id="key-solution">
        <div class="container">
            <h2 class="text-center sub-title">Key Heighlights of the Solution</h2>
            
        </div>

            
        <div class="container">
            <ul>
            <?php echo get_field('key_solution', $id); ?>
            </ul>
        </div>
    </section>

    <?php echo do_shortcode('[sp_testimonial id="31"]'); ?>

<?php
get_footer();