<?php 
$appuntamento = get_field('navbar-button')
?>

<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width,initial-scale=1" name="viewport" />
    <meta content="description" name="description" />
    <meta name="google" content="notranslate" />
    <meta
      content="Mashup templates have been developped by Orson.io team"
      name="author"
    />
    <title><?php bloginfo('name') ?></title>

    <?php  wp_head(); ?>
  </head>

  <body>
    <!-- Add your content of header -->
    <header>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <div class="navbar-collapse">
            <button type="button" class="close" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a
                  href="./index.html#contact-section-container"
                  title=""
                  class="btn btn-default navbar-btn"
                  ><?php echo $appuntamento ?></a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>