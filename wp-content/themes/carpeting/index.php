
   <!-- - - - - - - - -services- - -  - - - - - -  -->
<?php get_header();?> 
   <Section class="services" id="services">
    <div class="container">
      <h1>services</h1>
      <div class="line"></div>
        <div class="col-sm-6">
          <img src="<?php echo get_template_directory_uri()?>/images/serv1.png" class="img-responsive"/>
          <h2>Residential </h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled<br><br>
          it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing <br><br>
          Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
      <div class="col-sm-6">
        <img src="<?php echo get_template_directory_uri()?>/images/serv2.png" class="img-responsive"/>
        <h2>Commercial</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled<br><br>
        it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing <br><br>
        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      </div>
    </div>
  </section>

     <!-- - - - - - - - -contact- - -  - - - - - -  -->

<section class="contact" id="services">
  <div class="container">
    <h1>contact</h1>
      <div class="line-contct"></div>
        <div class="text-cntr">
          <div class="form-group">
          <label for="inputdefault">Your Name (required)</label>
          <input class="form-control" id="inputdefault" type="text">
        </div>
        <div class="form-group">
         <label for="inputlg">Your Email (required)</label>
         <input class="form-control input-lg" id="inputlg" type="text">
        </div>
        <div class="form-group">
          <label for="inputsm">Subject</label>
          <input class="form-control input-sm" id="inputsm" type="text">
        </div>
        <label for="inputlg">Your Message</label>
        <textarea placeholder=""></textarea>
        <br>
        <button class="btn3">SEND NOW!</button>
      </div>
    </div>
</section>
     <!-- - - - - - - - -footer- - -  - - - - - -  -->
 <?php get_footer();?>