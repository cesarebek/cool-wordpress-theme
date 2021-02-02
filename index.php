<?php 

//Advanced Custom Fields
$header_background_image = get_field('header_background'); 
$header_button = get_field('header_button'); 
//
$motto = get_field('motto'); 
$titolo_motto_1 = get_field('titolo_motto_1'); 
$titolo_motto_2 = get_field('titolo_motto_2'); 
$titolo_motto_3 = get_field('titolo_motto_3'); 
$descrizione_motto_1 = get_field('descrizione_motto_1'); 
$descrizione_motto_2 = get_field('descrizione_motto_2'); 
$descrizione_motto_3 = get_field('descrizione_motto_3'); 
//
$middle_section_background = get_field('middle_section_background');
$middle_section_title = get_field('middle_section_title');
$middle_section_subtitle = get_field('middle_section_subtitle');
$middle_section_para_1 = get_field('middle_section_para_1');
$middle_section_para_2 = get_field('middle_section_para_2');
$middle_section_para_3 = get_field('middle_section_para_3');
$middle_section_vertical_title = get_field('middle_section_vertical_title');
//
$phone = get_field('phone');
$email = get_field('email');
$address = get_field('address');
$open_hours = get_field('open_hours');
//
$salon_main_title = get_field('salon_title');
$salon_description_1 = get_field('salon_description_1');
$salon_description_2 = get_field('salon_description_2');
$salon_description_3 = get_field('salon_description_3');
$salon_image_1 = get_field('salon_image_1');
$salon_image_2 = get_field('salon_image_2');
$salon_image_3 = get_field('salon_image_3');
$salon_title_1 = get_field('salon_title_1');
$salon_title_2 = get_field('salon_title_2');
$salon_title_3 = get_field('salon_title_3');

get_header(); ?>
<div
  class="background-image-container white-text-container"
  style="background-image: url('<?php echo $header_background_image['url']?>')"
  >
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1><?php bloginfo('name') ?></h1>
            <p class=""><?php bloginfo('description') ?></p>
            <a
              href="#contact-section-container"
              class="btn btn-primary btn-lg anchor-link"
              title=""
              ><?php echo $header_button ?></a
            >
          </div>
        </div>
      </div>
    </div>

//Slogan Section
    <div class="section-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12 section-container-spacer">
            <h2 class="text-center"><?php echo $motto ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <div class="fa-container">
              <i class="fa fa-comment-o fa-3x" aria-hidden="true"></i>
            </div>
            <h3 class="text-center"><?php echo $titolo_motto_1 ?></h3>
            <p> <?php echo $descrizione_motto_1 ?></p>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="fa-container">
              <i class="fa fa-heart-o fa-3x" aria-hidden="true"></i>
            </div>
            <h3 class="text-center"><?php echo $titolo_motto_2 ?></h3>
            <p> <?php echo $descrizione_motto_2 ?></p>
          </div>
          <div class="col-xs-12 col-md-4">
            <div class="fa-container">
              <i class="fa fa-bell-o fa-3x" aria-hidden="true"></i>
            </div>
            <h3 class="text-center"><?php echo $titolo_motto_3 ?></h3>
            <p><?php echo $descrizione_motto_3 ?></p>
          </div>
        </div>
      </div>
    </div>


//Middle Section
    <div class="section-container section-half-background-image-container">
      <div
        class="image-column"
        style="background-image: url('<?php echo $middle_section_background['url'] ?>')"
      ></div>
      <div class="container">
        <div class="row">
          <div class="section-label reveal">
            <p><?php echo $middle_section_vertical_title ?></p>
          </div>
          <div class="col-md-6 col-md-offset-6 text-column">
            <h2><?php echo $middle_section_title ?></h2>
            <h3><?php echo $middle_section_subtitle?></h3>
            <p> <?php echo $middle_section_para_1 ?></p>
            <p> <?php echo $middle_section_para_2 ?></p>
            <p> <?php echo $middle_section_para_3 ?></p>
          </div>
        </div>
      </div>
    </div>

//Salon Section
    <div class="section-container">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-md-12 section-container-spacer">
            <h2 class="text-center"><?php echo $salon_main_title ?></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-md-4">
            <img
              src="<?php echo $salon_image_1['url'] ?>"
              alt=""
              class="img-responsive"
            />
            <h3 class="text-center"><?php echo $salon_title_1 ?></h3>
            <p><?php echo $salon_description_1 ?></p>
          </div>

          <div class="col-xs-12 col-md-4">
            <img
              src="<?php echo $salon_image_2['url'] ?>"
              alt=""
              class="img-responsive"
            />
            <h3 class="text-center"><?php echo $salon_title_2 ?></h3>
           <p><?php echo $salon_description_2 ?></p>
          </div>
          <div class="col-xs-12 col-md-4">
            <img
              src="<?php echo $salon_image_3['url'] ?>"
              alt=""
              class="img-responsive"
            />
            <h3 class="text-center"><?php echo $salon_title_3 ?></h3>
           <p><?php echo $salon_description_3 ?></p>
          </div>
        </div>
      </div>
    </div>

//Map Section
    <div class="">
      <div class="container-fluid">
        <div class="row map-container">
          <div id="map"></div>
          <div class="col-xs-10 col-md-4 contact-block-container reveal">
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <h3>Telefono</h3>
                <p><?php echo $phone ?></p>

                <h3>E-mail</h3>
                <p><?php echo $email ?></p>
              </div>

              <div class="col-xs-12 col-sm-6">
                <h3>Indirizzo</h3>
                <p><?php echo $address ?></p>

                <h3>Orari d'apertura</h3>
                <p><?php echo $open_hours ?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

//Get in touch
    <div class="section-container" id="contact-section-container">
      <div class="container contact-form-container">
        <div class="row">
          <div class="col-xs-12 col-md-offset-2 col-md-8">
            <div class="section-container-spacer">
              <h2 class="text-center">Get in touch</h2>
            </div>
            <form action="">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      placeholder="Name"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="email"
                      name="email"
                      class="form-control"
                      placeholder="Email"
                    />
                  </div>
                </div>
              </div>

              <div class="form-group">
                <textarea
                  class="form-control"
                  rows="3"
                  placeholder="Enter your message"
                ></textarea>
              </div>

              <div class="form-group">
                <label class="checkbox-inline">
                  <input
                    type="checkbox"
                    id="inlineCheckbox1"
                    value="option1"
                  />Email me a copy
                </label>
                <label class="checkbox-inline">
                  <input
                    type="checkbox"
                    id="inlineCheckbox2"
                    value="option2"
                  />I am a human
                </label>
              </div>

              <button type="submit" class="btn btn-primary">
                Send message
              </button>
              <a href="" class="btn btn-default">Reset</a>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php get_footer() ?>
