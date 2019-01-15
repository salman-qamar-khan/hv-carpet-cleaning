<?php $src = wp_get_attachment_image_src(get_post_thumbnail_id(), false, '');?>

<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php wp_title(); ?></title>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

    <?php wp_head(); ?>

</head>

<body <?php body_class($class);?>>

   <!-- - - - - - - - -Header - - -  - - - - - -  -->

<header class="section-slider" id="home">

    <div class="navbar navbar-default navbar-fixed-top">

        <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-target="#navbar-container" data-toggle="collapse">

          <span class="sr-only">show And hide the nav</span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

          <span class="icon-bar"></span>

        </button>

        <div class="logo"><a href="#"><img src="http://i--demo.com/projects/carpeting/wp-content/uploads/2016/11/raylogosmall.png" class="img-responsive"/></a>

      </div>

    </div>

    <div class="collapse navbar-collapse" id="navbar-container">

      <ul class="nav navbar-nav set-li1"></ul>

      <ul class="nav navbar-nav navbar-right set-li2">

        <ul class="icon-2">

         <li><i class="fa fa-phone-square" aria-hidden="true"></i><font size="4"><?php the_field('phone_no'); ?></font></li>

         <li><i class="fa fa-envelope" aria-hidden="true"></i><font size="4"><?php the_field('email'); ?></font></li>

       </ul>

        <?php

           wp_nav_menu( array(

           'theme_location' => 'header-menu',

            'items_wrap' => '%3$s',

               'container' => '',

                 'menu_class' => '') );

                   ?>

      </ul>

      </ul>

    </div>

  </div>

  </div>

  <div class="img-sldr">

    <img src="<?php echo $src[0]; ?>" class="img-responsive"/>

        <div class="btn-slider">

          <div class="postion-ap">

            <h1><?php the_field('header_text');?></h1> 
            <h3><?php the_field('header_text2');?></h3>
           

            <div class="btn-slider">

            <a href="#contact" class="btn-slid">FREE ESTIMATE</a>

          </div>

        </div>

        </div>

      </div>

    </div>

  </div>

</header>

