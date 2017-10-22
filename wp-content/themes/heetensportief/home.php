<?php /* Template Name: Homepage */ ?>

<?php get_header(); ?>

<?php echo do_shortcode('[metaslider id=26]'); ?>

<div class="slider-attachment">
    <h4><?php echo get_field('slider_onderschrift'); ?></h4>
</div>

<div class="sub-navigation">
    <div class="nav-block">
        <a href="">
            <img src="<?php echo get_field('navigatie_blok_1_foto'); ?>" alt="nav-block-1">
            <p>
                Ga naar<span><?php echo get_field('navigatie_blok_1_tekst'); ?></span>
            </p>
        </a>
    </div>
    <div class="nav-block">
        <a href="">
            <img src="<?php echo get_field('navigatie_blok_2_foto'); ?>" alt="nav-block-2">
            <p>
                Ga naar<span><?php echo get_field('navigatie_blok_2_tekst'); ?></span>
            </p>
        </a>
    </div>
    <div class="nav-block">
        <a href="">
            <img src="<?php echo get_field('navigatie_blok_3_foto'); ?>" alt="nav-block-3">
            <p>
                Ga naar<span><?php echo get_field('navigatie_blok_3_tekst'); ?></span>
            </p>
        </a>
    </div>
    <div class="nav-block">
        <a href="">
            <img src="<?php echo get_field('navigatie_blok_4_foto'); ?>" alt="nav-block-4">
            <p>
                Ga naar<span><?php echo get_field('navigatie_blok_4_tekst'); ?></span>
            </p>
        </a>
    </div>
    <div class="nav-block">
        <a href="">
            <img src="<?php echo get_field('navigatie_blok_5_foto'); ?>" alt="nav-block-5">
            <p>
                Ga naar<span><?php echo get_field('navigatie_blok_5_tekst'); ?></span>
            </p>
        </a>
    </div>
</div>

<main role="main">

    <!--    Agenda items    -->
    <div class="agenda-container">
        <h2>Ons laatste nieuws</h2>
        <?php

        // The get posts Query
        $the_query = new WP_Query( $args = array(
            'category' => 0,
            'orderby' => 'date',
            'order' => 'DESC',
            'post_type' => 'post',
            'posts_per_page' => 3)
        );

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                if($the_query->current_post % 2 == 0) {
                    echo '<div class="agenda-content-container even">';
                } else {
                    echo '<div class="agenda-content-container uneven">';
                }
                $the_query->the_post();
                echo '<h3>' . get_the_title() . '</h3>';
                echo '<h4>' . get_the_author() . ' - ' . get_the_date() . '</h4>';
                echo '<p>' . substr(get_the_content(),0,375) . '...' . '</p>';
                echo '<a href="' . get_permalink() . '">Lees meer ></a>';
                echo '</div>';
            }
            /* Restore original Post Data */
            wp_reset_postdata();
        } else {
            // no posts found
        }
        ?>
    </div>
</main>

<!--  Sponsor block  -->
<div class="sponsor-container">
    <div class="sponsors-container-content">
        <h2>Heeten Sportief <span>bedankt</span> al onze sponsors voor het mogelijkmaken van deze sportvereniging</h2>
        <img src="/wp-content/themes/heetensportief/img/arrow-right.png">
        <p>Klik <a href="/sponsors.php">hier</a> om al onze sponsors te bekijken</p>
    </div>
</div>

<main>
    <!-- fotoalbum blok -->
    <div class="fotoalbum-container">
        <div class="fotoalbum-container-images">
            <div class="image-round-big">
                <img src="<?php echo get_field("fotoalbum_afbeelding_1"); ?>" alt="afbeelding_1">
            </div>
            <div class="image-round-small">
                <img src="<?php echo get_field("fotoalbum_afbeelding_2"); ?>" alt="afbeelding_2">
            </div>
        </div>
        <div class="fotoalbum-container-content">
            <h2><?php echo get_field("fotoalbum_titel"); ?></h2>
            <p><?php echo get_field("fotoalbum_ondertekst"); ?></p>
        </div>
    </div>
</main>

<?php get_footer(); ?>
