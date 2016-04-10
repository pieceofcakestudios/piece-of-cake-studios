<?php
/**
 * piece of cake studios
 * the template for displaying our work
 *
 */

get_header(); ?>

<div id="work-page">
    
    <?php while ( have_posts() ) : the_post(); 
        $size = "full";
        $logo = get_field('logo');
        $medium = get_field('medium');
        $year = get_field('year');
        $image_1 = get_field('image_1');
        $overview_bg_color = get_field('overview_bg_color');
        $main_bg_color = get_field('main_bg_color');
        $image_2 = get_field('image_2');
        $image_3 = get_field('image_3'); 
        $client = get_field('client'); 
        $deliverables = get_field('deliverables');
        $brief = get_field('brief'); 
        $live_site = get_field('live_site'); 
        $image_4 = get_field('image_4'); ?>
  
        <div id="work-page-header">
            <div class="container text-center center-block">
                <div id="work-page-header-text">
                    <div class="row">
                        <div class="col-md-offset-5 col-md-2">
                            <div id="work-page-header-logo">
                                <?php if($logo) { ?>
                                    <?php echo wp_get_attachment_image( $logo, $size ); ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-4 col-md-4">
                            <p><?php echo $medium; ?> • <?php echo $year; ?></p>
                            <h2><?php the_title(); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-offset-2 col-xs-8">
                        <?php if($image_1) { ?>
							<?php echo wp_get_attachment_image( $image_1, $size ); ?>
						<?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <div id="work-page-overview" style="background-color: <?php echo $overview_bg_color; ?>;">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <h2>Overview</h2>
                        <p><?php the_content(); ?></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="work-page-main">
                <div class="row">
                    <div class="col-md-12 img-responsive">
                        <?php if($image_2) { ?>
							<?php echo wp_get_attachment_image( $image_2, $size ); ?>
						<?php } ?>  
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php if($image_3) { ?>
							<?php echo wp_get_attachment_image( $image_3, $size ); ?>
						<?php } ?>
                    </div>
                </div>
        </div>

        <div id="work-page-info">
            <div class="row">
                <div class="col-md-6">
                    <p>Client:</p>
                    <h4><?php echo $client; ?></h4>
                    <p>Deliverables:</p>
                    <h4><?php echo $deliverables; ?></h4>
                    <p><?php echo $brief; ?></p>
                    <?php if($live_site) { ?>
				        <p><a href="<?php echo $live_site; ?>">Launch website</a></p>
                    <?php } ?>
                </div>
                <div class="col-md-6 center-block img-responsive">
                    <?php if($image_4) { ?>
				        <?php echo wp_get_attachment_image( $image_4, $size ); ?>
				    <?php } ?>
                </div>
            </div>
        </div>
    
    <?php endwhile; // end of the loop. ?>

</div><!--#work-page-->

<?php get_footer(); ?>