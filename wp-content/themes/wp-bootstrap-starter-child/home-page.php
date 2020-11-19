<?php
/**
 * Template Name: Home Page
 */

get_header();
?>


    <section id="challange">
        <div class="container">
            <h2 class="text-center sub-title">The Challenge</h2>
            <p class="text-center">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book</p>
        </div>
        <div class="screens">
            <div class="screen-img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/11/apps5.png"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/11/apps5.png"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/11/apps5.png"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/11/apps5.png"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/11/apps5.png"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/11/apps5.png"/>
            </div>
            <div class="screen-img">
              <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/11/apps5.png"/>
            </div>
        </div>
    </section>

    <section id="solution">
        <div class="container">
            <h2 class="text-center sub-title">The Solution</h2>
            <p class="text-center">Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero's De Finibus Bonorum et Malorum for use in a type specimen book</p>
        </div>
        <div class="full-width">
            
            <div class="container">
                <div class="screens-img">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/11/apps5.png"/>
                </div>
                <div class="screens-img">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/11/apps5.png"/>
                </div>
                <div class="screens-img">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2020/11/apps5.png"/>
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
                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum, or lipsum as it is sometimes known</li>
                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum, or lipsum as it is sometimes known</li>
                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum, or lipsum as it is sometimes known</li>
                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum, or lipsum as it is sometimes known</li>
                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum, or lipsum as it is sometimes known</li>
                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum, or lipsum as it is sometimes known</li>
                <li><i class="fas fa-angle-double-right"></i> Lorem ipsum, or lipsum as it is sometimes known</li>
            </ul>
        </div>
    </section>

    <?php echo do_shortcode('[sp_testimonial id="31"]'); ?>

<?php
get_footer();