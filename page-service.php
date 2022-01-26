<?php get_header( );?>
<div class="page-banner-area page-service" id="page-banner">
      <div class="overlay dark-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h1 class="text-white"><?php the_title(); ?></h1>
              <p>Мы оказываем весь спект диджитал услуг</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MAIN HEADER AREA END -->

        <?php the_content(  );?>

        <!--  SERVICE AREA START  -->
        <section class="section pt-0">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-5 col-sm-12 col-md-6 mb-4">
                <img src="images/bg/2-min.jpg" alt="feature bg" class="img-fluid" />
              </div>

              <div class="col-lg-7 pl-4">
                <div class="mb-5">
                  <h3 class="mb-4">Мы создаем эффективный <br />дизайн сайтов</h3>
                  <p>
                    Все наши проекты создаются креативными веб-дизайнерами, соблюдая все современнные тенденции в этой сфере. Лучшие специалисты будут создавать продукт для вас. 
                  </p>
                </div>

                <ul class="about-list">
                  <li>
                    <h5 class="mb-2"><i class="icofont icofont-check-circled"></i>Адаптивные сайты</h5>
                    <p>Сайты хорошо смотрятся на смартфонах.</p>
                  </li>

                  <li>
                    <h5 class="mb-2"><i class="icofont icofont-check-circled"> </i> Фреймворки</h5>
                    <p>В работе используются React, Bootstrap и др.</p>
                  </li>

                  <li>
                    <h5 class="mb-2"><i class="icofont icofont-check-circled"> </i>Кроссбраузерно</h5>
                    <p>Смотреться сайт будет одинаково хорошо во всех браузерах.</p>
                  </li>
                  <li>
                    <h5 class="mb-2"><i class="icofont icofont-check-circled"> </i>Retina Friendly</h5>
                    <p>Сайт создаются так, чтобы вся графика выглядела красиво на устройствах с Retina дисплеями.</p>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <!--  SERVICE AREA END  -->
        <?php echo get_template_part('template-parts/content','service ',['class'=> 'bg-feature']);?>
        <!--  SERVICE PARTNER START  -->
        <section id="service-head" class="service-style-two">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8 col-sm-12 m-auto">
                <div class="heading text-white text-center">
                  <h4 class="section-title text-white">Диджитал полного цикла</h4>
                  <p>
                    Это означает, что мы сможем выполнить любую цифровую задачу: <br />
                    видео, маркетинг, реклама, разработка или дизайн.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--  SERVICE PARTNER END  -->
        <!--  SERVICE AREA START  -->
    <section id="service">
      <div class="container">
        <div class="row">
          <?php
            	
          global $post;

          $query = new WP_Query( [
            'posts_per_page' => 6,
            'post_type'      => 'service',
          ] );

          if ( $query->have_posts() ) {
            while ( $query->have_posts() ) {
              $query->the_post();
              ?>
              <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="service-box">
                  <div class="service-img-icon">
                    <img src="<?php echo get_the_post_thumbnail_url(  );?>" alt="service-icon" class="img-fluid" />
                  </div>
                  <div class="service-inner">
                    <h4><?php the_title();?></h4>
                    <p>
                      <?php the_excerpt();?>
                    </p>
                  </div>
                </div>
              </div>
              
              <?php 
            }
          } else {
            // Постов не найдено
          }

          wp_reset_postdata(); // Сбрасываем $post
          ?>
        </div>
      </div>
    </section>
<?php get_footer( );?>