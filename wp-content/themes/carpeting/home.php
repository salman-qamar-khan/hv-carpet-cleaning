<?php

/*



Template Name:home



*/

get_header();



?>



<Section class="services" id="services">

    <div class="container">

      <h1>services</h1>

      <div class="line"></div>
       
        <div class="col-sm-6">

          <img src="<?php the_field('image_1'); ?>" class="img-responsive"/>

          <h2><?php the_field('image_1_title'); ?></h2>

          <p><?php the_field('image_1_paragraph'); ?></p>
          <div class="button-about"><a href="#contact">Free Estimate</a></div>
        </div>

      <div class="col-sm-6">

        <img src="<?php the_field('image_2'); ?>" class="img-responsive"/>

        <h2><?php the_field('image_2_title'); ?></h2>

        <p><?php the_field('image_2_paraagraph'); ?></p>
        <div class="button-about"><a href="#contact">Free Estimate</a></div>
      </div>
      <div class='clearfix'></div>
      <div class="col-sm-6 col-sm-offset-3 new-sec">

        <img src="<?php the_field('image_3'); ?>" class="img-responsive"/>

        <h2><?php the_field('image_3_title'); ?></h2>

        <p><?php the_field('image_3_paraagraph'); ?></p>
        <div class="button-about"><a href="#contact">Free Estimate</a></div>
      </div>
    </div>
  </section>

<!-- - - - - - - - -what we offer start- - -  - - - - - -  -->
  <section class="what-offer" id="offer">
  	<div class="container">
  		<h1>WHAT WE OFFER</h1>
  		<div class="line"></div>
      <div class="col-sm-6">
       <div class="offer-content">
        <div class="inner-content">
        <h2><?php the_field('box1-head-text'); ?></h2>
        <table class="table-striped offer-tbl">
          <tr>
            <td><?php the_field('box1-text-1'); ?></td>
          </tr>
          <tr>
            <td><?php the_field('box1-text-2'); ?></td>
          </tr>
          <tr>
            <td><?php the_field('box1-text-3'); ?></td>
          </tr>
          <tr>
            <td><?php the_field('box1-text-4'); ?></td>
          </tr>
          <tr>
            <td class="last-td"><?php the_field('box1-text-5'); ?></td>
          </tr>
        </table>
        </div>
        </div>
      </div>

       <div class="col-sm-6 ">
        <div class="offer-content">
        <div class="inner-content">
        <h2><?php the_field('box2-head'); ?></h2>
        <table class="table-striped offer-tbl">
          <tr>
            <td><?php the_field('box2-text-1'); ?></td>
          </tr>
          <tr>
            <td><?php the_field('box2-text-2'); ?></td>
          </tr>
          <tr>
            <td><?php the_field('box2-text-3'); ?></td>
          </tr>
          <tr>
            <td><?php the_field('box2-text-4'); ?></td>
          </tr>
          <tr>
            <td style="visibility: hidden;">We also clean wool orientals, area rugs, all types of upholstery, chairs, sofas & even leather!</td>
          </tr>
        </table>
        </div>
        </div>
      </div>
  		<!--<h2>Every carpet cleaning job includes the following services</h2>
  		<ul class="offer-services">
  			<li>Deep cleaning process</li>
  			<li>Preconditioner</li>
  			<li>Liquify spots and soil</li>
  			<li>Residue-free rinsing agents to remove soil and spots</li>
  			<li>Carpet grooming for fast dry and best appearance</li>
  			<li>In addition to our basic service, you can add the following options at additional cost:</li>
  			<li>Scotchgard - Carpet and upholstery protection</li>
  			<li>Pet odor and stain treatment</li>
  			<li>Sanitizing</li>
  			<li>Deodorizing</li>
  			<li>We also clean wool orientals, area rugs, all types of upholstery, chairs, sofas & even leather!</li>
  		</ul>-->
  		
  	</div>
    <div class="estimate-btn"><a href="#contact">Get a Free Estimate</a></div>
  </section>	

<!-- - - - - - - - -what we offer end- - -  - - - - - -  -->
      <!-- - - - - - - - -Testimonial Strat- - -  - - - - - -  -->
<div class="section-carousel" id="testimonial">
  <div class="container">
  	<h6>TESTIMONIALS</h6>
  	<div class="line"></div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
       <div class="carousel-inner" role="listbox">
       	<?php $args = array( 'post_type' => 'testimonial', 'posts_per_page' => -1,'order' => 'ASC');
            $count=1;
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();?>  
          <div class="item <?php if($count==1){echo "active";}?>">
             <div class="heading">
                <?php the_content(); ?>
                <h1><?php the_title();?> <span><?php echo get_the_date('F, j, Y');   ?></span></h1>
                 <div class="text-cntr-line">
                 <div class="bodor-line-bottum"></div>
               </div>
              </div> 
              </div>
              <?php $count=2; endwhile; // end of the loop.
            wp_reset_query();  ?>
            </div>
             <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
         <h2><?php the_field('testimonial_text1'); ?></h2>
          <p><?php the_field('testimonial_text2'); ?></p>
          <p class="ownerr"><?php the_field('testimonial_text3'); ?></p>
          </div>
         
        </div>
      </div>
  </section>
  <!-- - - - - - - - -carousel End- - -  - - - - - -  -->


     <!-- - - - - - - - -contact- - -  - - - - - -  -->



<section class="contact" id="contact">

  <div class="container">

    <h1>FREE ESTIMATE</h1>

      <div class="line-contct"></div>
      <h2>Fill out the form below for a free carpet cleaning estimate for your home or business.</h2>
        
        <div class="text-cntr">
        <div  class="row">
        <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"]');?>
         </div>
      </div>

    </div>

</section>

     <!-- - - - - - - - -footer- - -  - - - - - -  -->

 <?php get_footer();?>











