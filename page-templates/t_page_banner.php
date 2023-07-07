<?php
/*
Template Name:Page with Banner
*/
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página Banner</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>
   <div class="container-txt">
      <div class="header">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                <a class="txt-logo navbar-brand" href="#">PLANET</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               <li class="nav-item">
                 <a class="nav-link" href="#home">Home</a>
               </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faq">FAQ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#newsletter">Newsletter</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <section class="banner" id="home" >
          <div class="container-fluid">
              <div class="row">
                  <div class="txt-I col-sm-12 col-md-6 col-lg-6 col-12" data-aos="fade-up">
                     <h2>DISCORVER THE</h2>
                     <h1>PLANET</h1>
                     <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. <br>
                     Nulla itaque animi laudantium nam. Consequuntur accusamus <br>
                     ratione eligendi odio, porro dolor modi eum praesentium.
                     </p>
                     <button type="button" class="btn btn-outline-warning">Warning</button>
                  </div>
                  <div class="txt-img col-sm-12 col-md-6 col-lg-6 col-12" data-aos="zoom-in-left">
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1.jpg" alt="Descripción de la imagen">
                  </div>
              </div>
          </div>
      </section>

      <!----->
    <div class="grey "></div>

    <!---services--->
<section class="txt-services my-5 text-center" id="services" data-aos="fade-up">
      <div class="container">
          <div class="text-center my-5">
             <h1>Our<span class="text-warning"> Services</span></h1>
             <hr / class="w-25 m-auto">
          </div>

          <!--card--->
  <div class="row">
  <div class="col-sm-12 col-md-4 col-lg-4 col-12 py-2" >
    <div class="card">
      <i class="fas fa-plane fa-5x text-warning py-5"></i>
      <div class="txt-title card-body">
        <h5 class="card-title custom-title">Travels and Tourism</h5>
        <p class="card-text custom-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui nobis voluptates natus magnam molestiae nesciunt quibusdam.</p>
        <button type="button" class="btn btn-outline-warning custom-button">Warning</button>
      </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-4 col-lg-4 col-12 py-2">
    <div class="card" data-aos="zoom-in-down">
      <i class="fa-solid fa-camera fa-5x text-warning py-5"></i>
      <div class="card-body">
        <h5 class="card-title custom-title">Photography</h5>
        <p class="card-text custom-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui nobis voluptates natus magnam molestiae nesciunt quibusdam.</p>
        <button type="button" class="btn btn-outline-warning custom-button">Warning</button>
      </div>
    </div>
  </div>

  <div class="col-sm-12 col-md-4 col-lg-4 col-12 py-2">
    <div class="card" data-aos="zoom-in-down">
      <i class="fa-solid fa-person fa-5x text-warning py-5"></i>
      <div class="card-body">
        <h5 class="card-title custom-title">Translation and interpretation</h5>
        <p class="card-text custom-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui nobis voluptates natus magnam molestiae nesciunt quibusdam.</p>
        <button type="button" class="btn btn-outline-warning custom-button">Warning</button>
      </div>
    </div>
  </div>
</div>

      </div>
    </section>

   <!----FAQ--->
    <section class="txt-faq my-5 text-center" id="faq" data-aos="fade-down">
        <div class="container">
            <div class="text-center my-5">
               <h1>Our<span class="text-warning"> FAQ</span></h1>
               <hr / class="w-25 m-auto">
           </div>
        </div>
        <!----->
       
        <div class="container">
        <?php
          $args = array(
            'post_type' => 'post_type_faq',
            'posts_per_page' => -1,
          );

          $query = new WP_Query($args);

          if ($query->have_posts()) {
            echo '<div class="accordion" id="accordionExample">';
            $counter = 1;
            while ($query->have_posts()) {
              $query->the_post();
              $accordion_item_id = 'collapse' . $counter;
              $aria_expanded = ($counter === 1) ? 'true' : 'false';
              $show_class = ($counter === 1) ? 'show' : '';
              ?>
              <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button <?php echo $show_class; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $accordion_item_id; ?>" aria-expanded="<?php echo $aria_expanded; ?>" aria-controls="<?php echo $accordion_item_id; ?>">
                      <?php the_title(); ?>
                    </button>
                  </h2>
                  <div id="<?php echo $accordion_item_id; ?>" class="accordion-collapse collapse <?php echo $show_class; ?>" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <?php the_content(); ?>
                    </div>
                  </div>
                </div>
              <?php
              $counter++;
            }
            echo '</div>';
            wp_reset_postdata();
          }
          ?>
        </div>
    </section>

    <!--newsletter-->
    <section class="txt-newsletter" id="newsletter">
    <div class="container">
        <div class="text-center my-5">
            <h1>Our<span class="text-warning"> Newsletter</span></h1>
            <hr class="w-25 m-auto" />
        </div>
        <div class="row">
          <div class="txt-new col-sm-12 col-md-6 col-lg-6 col-12 newsletter-section" data-aos="zoom-in">
              <form method="post" action="<?php echo esc_url(admin_url('admin-post.php')); ?>">
                  <input type="hidden" name="action" value="newsletter_subscribe">
                  <div class="form-group">
                      <label for="first_name">Name:</label>
                      <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Enter your name" required>
                  </div>
                  <div class="form-group">
                      <label for="last_name">Last name:</label>
                      <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Enter your last name" required>
                  </div>
                  <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
                  </div>
                  <button type="submit" class="btn btn-outline-warning w-100 mt-3">Send</button>
              </form>          </form>
                 <div class="txt-contact container my-4">
                    <ul class="list-unstyled">
                        <li class="py-2"><i class="fas fa-map-marker-alt text-light"></i> 123 Street, City, Country</li>
                        <li class="py-2"><i class="fas fa-envelope text-light"></i> info@example.com</li>
                        <li class="py-2"><i class="fas fa-phone text-light"></i> +1234567890</li>
                    </ul>
                </div>

            </div>
            <div class="txt-img-II col-sm-12 col-md-6 col-lg-6 col-12" data-aos="fade-right">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2.jpg" alt="Descripción de la imagen">
            </div>
        </div>
    </div>
</section>


<footer class="bg-warning text-light">
    <div class="container py-4">
        <div class="row text-center">
            <div class="col-md-3">
                <h3>
                  <a class="nav-link" href="#home">Home</a>
                </h3>
            </div>
            <div class="col-md-3">
                <h3>
                  <a class="nav-link" href="#services">Services</a>
                </h3>
            </div>
            <div class="col-md-3">
                <h3>
                  <a class="nav-link" href="#faq">FAQ</a>
                </h3>
            </div>
            <div class="col-md-3">
                <h3>
                   <a class="nav-link" href="#newsletter">Newsletter</a>
                </h3>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br>
                  Nullam at ligula vitae turpis eleifend bibendum at id lorem. <br>
                Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="text-center py-1">
        <p>&copy; kjgomez26programation All rights reserved. | <a href="#">Privacy Policy</a></p>
    </div>
    </div>
</footer>



    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
       AOS.init();
    </script>
</body>
</html>
