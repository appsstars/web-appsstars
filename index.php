<?php require_once 'layouts/header.php'; ?>

<div class="contenido">
  <section id="intro" class="clearfix" style="background:url(assets/img/inicio/banner_inicio.jpg) center bottom no-repeat" >
        <div class="container">

          <div class="intro-img">
            <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
          </div>

          <div class="intro-info">
            <h2>Apps Stars<br><small>Soluciones efectivas a tu medida</small></h2>
            <div>
              <a [routerLink]='["/contacto"]' class="btn-get-started scrollto">Contáctenos</a>
              <a [routerLink]='["/servicios"]' class="btn-services scrollto">Asesoria</a>
            </div>
          </div>

        </div>
      </section><!-- #intro -->

      <main id="main" class="inicio">

        <!--==========================
          About Us Section
        ============================-->
        <section id="about">
          <h3 class="text-center" style="font-weight: bold;">SERVICIOS</h3>
          <span class="divider-small"></span>
          <div class="container">
            <div class="row about-container">

              <div class="col-xs-12 col-md-4">
                <div class="card">
                  <img src="./assets/img/banner/banner_small_web.jpg" class="card-img-top" alt="paginas web y sitios crm plataformas en tunja" title="paginas web en tunja">
                      <div class="card-body">
                        <h5 class="card-title text-center">Sitios Web</h5>
                        <a href="#" class="btn btn-outline-success btn-web">VER PLANES</a>
                      </div>
                  </div>
              </div>

              <div class="col-xs-12 col-md-4">
                <div class="card">
                  <img src="assets/img/banner/banner_small_apps.jpg" class="card-img-top" alt="paginas web y sitios crm plataformas en tunja" title="paginas web en tunja">
                      <div class="card-body">
                        <h5 class="card-title text-center">Apps moviles</h5>
                        <a href="#" class="btn btn-outline-success btn-web">VER PLANES</a>
                      </div>
                  </div>
              </div>

              <div class="col-xs-12 col-md-4">
                <div class="card">
                  <img src="assets/img/banner/banner_small_visual.jpg" class="card-img-top" alt="paginas web y sitios crm plataformas en tunja" title="paginas web en tunja">
                      <div class="card-body">
                        <h5 class="card-title text-center">Desarrollo de software</h5>
                        <a href="#" class="btn btn-outline-success btn-web">VER PLANES</a>
                      </div>
                  </div>
              </div>

              <div class="col-xs-12 col-md-3" style="display: none;">
                <div class="card">
                  <img src="https://static.vecteezy.com/system/resources/previews/000/260/777/non_2x/modern-flat-design-isometric-concept-of-web-development-for-banner-and-website-landing-page-template-teamwork-project-web-agency-and-new-company-project-vector-illustration.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title">Redes sociales</h5>
                        <p class="card-text">Creacion de sitios web, CRM, Tiendas en linea.</p>
                        <a href="#" class="btn btn-primary">Solicitar cotización</a>
                      </div>
                  </div>
              </div>


            </div>

            <div class="row about-extra" style="display: none;">
              <div class="col-lg-6 wow fadeInUp">
                <img src="assets/img/about-extra-1.svg" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
                <p>
                  Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
                </p>
                <p>
                  Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
                </p>
              </div>
            </div>

            <div class="row about-extra" style="display: none;">
              <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                <img src="assets/img/about-extra-2.svg" class="img-fluid" alt="">
              </div>

              <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
                <p>
                 Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt. 
                </p>
                <p>
                  Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
                </p>
                <p>
                  Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
                </p>
              </div>
              
            </div>

          </div>
        </section><!-- #about -->

        <!--==========================
          Services Section
        ============================-->
        <section id="services" class="section-bg">
          <div class="container">

            <header class="section-header">
              <h3>¿Qué hacemos?</h3>
              <br>
            </header>

            <div class="row">

              <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                  <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                  <h4 class="title"><a href="">POCICIONAMIENTO SEO</a></h4>
                  <div class="description">
                    <p>Utilizamos metodos efectivos para posicionar tu web.</p>
                    <ul>
                      <li>Implementación  palabras clave para ayudar a los buscadores a encontrar su web.</li>
                      <li>Optimización de contenidos para acelerar el tiempo de carga.</li>
                      <li>Indexación en los motores de busqueda.</li>
                    </ul>
                  </div>
                </div>
              </div>


              <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                  <div class="icon"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
                  <h4 class="title"><a href="">WEB Y APLICACIONES</a></h4>
                  <div class="description">
                    <p>Desarrollo de:</p>
                    <ul>
                      <li>Landing Pages & Sitios Web.</li>
                      <li>Plataformas a la medida.</li>
                      <li>Aplicaciones moviles.</li>
                      <br><br>
                    </ul>
                  </div>
                </div>
              </div>



              <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box">
                  <div class="icon"><i class="ion-ios-bookmarks-outline" style="color: #e9bf06;"></i></div>
                  <h4 class="title"><a href="">MARKETING</a></h4>
                  <p class="description"></p>
                  <ul>
                    <li>Administración de Redes Sociales.</li>
                    <li>Creación de campañas <b>SEM</b>.</li>
                    <li>Pauta en Redes Sociales</li>
                    <br>
                  </ul>
                </div>
              </div>

              <div class="col-md-6 col-lg-6 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
                <div class="box">
                  <div class="icon"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
                  <h4 class="title"><a href="">PRODUCCIÓN VISUAL</a></h4>
                  <ul>
                    <li>Animaciones</li>
                    <li>Edición de fotografias y videos.</li>
                    <li>Toma de fotografia y video</li>
                    <br>
                  </ul>              
                </div>
              </div>
            </div>

          </div>
        </section><!-- #services -->

        <!--==========================
          Why Us Section
        ============================-->
        <section id="why-us" class="wow fadeIn">
          <div class="container">
            <header class="section-header">
              <h3>¿Por que elegirnos?</h3>
              <p>Las siguientes son algunas de las razones por las cuáles deberías elegir los servicios de AppsStars.</p>
            </header>

            <div class="row row-eq-height justify-content-center">

              <div class="col-lg-4 mb-4">
                <div class="card wow bounceInUp">
                    <i class="fa fa-diamond"></i>
                  <div class="card-body">
                    <h5 class="card-title">Excelente equipo de profesionales a su servicio</h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-4">
                <div class="card wow bounceInUp">
                    <i class="fa fa-language"></i>
                  <div class="card-body">
                    <h5 class="card-title">Compromiso con la satisfacción del cliente.</h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-4">
                <div class="card wow bounceInUp">
                    <i class="fa fa-object-group"></i>
                  <div class="card-body">
                    <h5 class="card-title">Honestidad e integridad.</h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-4">
                <div class="card wow bounceInUp">
                    <i class="fa fa-diamond"></i>
                  <div class="card-body">
                    <h5 class="card-title">Confiabilidad.</h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-4">
                <div class="card wow bounceInUp">
                    <i class="fa fa-language"></i>
                  <div class="card-body">
                    <h5 class="card-title">Nuestros productos son de calidad.</h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-4">
                <div class="card wow bounceInUp">
                    <i class="fa fa-object-group"></i>
                  <div class="card-body">
                    <h5 class="card-title">Trabajamos de la mano con el cliente.</h5>
                    <p class="card-text"></p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </section>

        <!--==========================
          Portfolio Section
        ============================-->
        <section id="portfolio" class="clearfix" style="display: none;">
          <div class="container">

            <header class="section-header">
              <h3 class="section-title">Our Portfolio</h3>
            </header>

            <div class="row">
              <div class="col-lg-12">
                <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-app">App</li>
                  <li data-filter=".filter-card">Card</li>
                  <li data-filter=".filter-web">Web</li>
                </ul>
              </div>
            </div>

            <div class="row portfolio-container">

              <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/app1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><a href="#">App 1</a></h4>
                    <p>App</p>
                    <div>
                      <a href="img/portfolio/app1.jpg" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/web3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><a href="#">Web 3</a></h4>
                    <p>Web</p>
                    <div>
                      <a href="img/portfolio/web3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/app2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><a href="#">App 2</a></h4>
                    <p>App</p>
                    <div>
                      <a href="img/portfolio/app2.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/card2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><a href="#">Card 2</a></h4>
                    <p>Card</p>
                    <div>
                      <a href="img/portfolio/card2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/web2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><a href="#">Web 2</a></h4>
                    <p>Web</p>
                    <div>
                      <a href="img/portfolio/web2.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/app3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><a href="#">App 3</a></h4>
                    <p>App</p>
                    <div>
                      <a href="img/portfolio/app3.jpg" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/card1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><a href="#">Card 1</a></h4>
                    <p>Card</p>
                    <div>
                      <a href="img/portfolio/card1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/card3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><a href="#">Card 3</a></h4>
                    <p>Card</p>
                    <div>
                      <a href="img/portfolio/card3.jpg" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
                <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/web1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <h4><a href="#">Web 1</a></h4>
                    <p>Web</p>
                    <div>
                      <a href="img/portfolio/web1.jpg" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                      <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section><!-- #portfolio -->

        <!--==========================
          Clients Section
        ============================-->
        <section id="testimonials" style="display: none;" class="section-bg">
          <div class="container">

            <header class="section-header">
              <h3>Testimonials</h3>
            </header>

            <div class="row justify-content-center">
              <div class="col-lg-8">

                <div class="owl-carousel testimonials-carousel wow fadeInUp">
        
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    </p>
                  </div>
        
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    </p>
                  </div>
        
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    </p>
                  </div>
        
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    </p>
                  </div>
        
                  <div class="testimonial-item">
                    <img src="assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    </p>
                  </div>

                </div>

              </div>
            </div>


          </div>
        </section><!-- #testimonials -->

        <!--==========================
          Team Section
        ============================-->
        <section id="team" style="display: none;">
          <div class="container">
            <div class="section-header">
              <h3>Team</h3>
              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
            </div>

            <div class="row">

              <div class="col-lg-3 col-md-6 wow fadeInUp">
                <div class="member">
                  <img src="assets/img/team-1.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Walter White</h4>
                      <span>Chief Executive Officer</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="member">
                  <img src="assets/img/team-2.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Sarah Jhonson</h4>
                      <span>Product Manager</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="member">
                  <img src="assets/img/team-3.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>William Anderson</h4>
                      <span>CTO</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="member">
                  <img src="assets/img/team-4.jpg" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>Amanda Jepson</h4>
                      <span>Accountant</span>
                      <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

          </div>
        </section><!-- #team -->

        <!--==========================
          Clients Section
        ============================-->
        <section id="clients" class="section-bg">

          <div class="container">

            <div class="section-header">
              <h3>Nuestros clientes</h3>
              <p>Marcas que decidieron confiar en nosotros</p>
            </div>

            <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div>
              </div>
              
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>
              </div>
            
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>
              </div>
              
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>
              </div>
              
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>
              </div>
            
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>
              </div>
              
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                </div>
              </div>
              
              <div class="col-lg-3 col-md-4 col-xs-6">
                <div class="client-logo">
                  <img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                </div>
              </div>

            </div>

          </div>

        </section>

        <!--==========================
          Contact Section
        ============================-->
        <section id="contact">
          <div class="container-fluid">

            <div class="section-header">
              <h3>Contacto</h3>
              <p>Déjanos tus datos y en breve nos comunicaremos con tigo</p>
            </div>

            <div class="row wow fadeInUp">

              <div class="col-lg-6">
                <div class="map mb-4 mb-lg-0">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
                </div>
              </div>

              <div class="col-lg-6">
                <div class="row">
                  <div class="col-md-5 info">
                    <i class="ion-ios-location-outline"></i>
                    <p>A108 Adam Street, NY 53502</p>
                  </div>
                  <div class="col-md-4 info">
                    <i class="ion-ios-email-outline"></i>
                    <p>info@appsstars.com.co</p>
                  </div>
                  <div class="col-md-3 info">
                    <i class="ion-ios-telephone-outline"></i>
                    <p>+1 5589 55488</p>
                  </div>
                </div>

                <div class="form">
                  <div id="sendmessage">Su mensaje ha sido enviado. Pronto estaremos en contacto!</div>
                  <div id="errormessage"></div>
                  <form action="" method="post" role="form" class="contactForm">
                    <div class="form-row">
                      
                      <div class="form-group col-lg-6">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validation"></div>
                      </div>

                      <div class="form-group col-lg-6">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validation"></div>
                      </div>

                      <div class="form-group col-lg-6">
                      <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                      <div class="validation"></div>
                    </div>

                    <div class="form-group col-lg-6">
                      <input type="text" class="form-control" name="whatsapp" id="WhatsApp" placeholder="WhatsApp" data-rule="minlen:4" data-msg="Please enter at least 8 chars of WhatsApp" />
                      <div class="validation"></div>
                    </div>

                    </div>
                    <div class="form-group">
                      <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                      <div class="validation"></div>
                    </div>
                    <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
                  </form>
                </div>
              </div>

            </div>

          </div>
        </section><!-- #contact -->

      </main>

      <!--==========================
        Footer
      ============================-->


      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
      <!-- Uncomment below i you want to use a preloader -->
      <!-- <div id="preloader"></div> -->

      <!-- JavaScript Libraries -->
      <!--
      <script src="lib/jquery/jquery.min.js"></script>
      <script src="lib/jquery/jquery-migrate.min.js"></script>
      <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/mobile-nav/mobile-nav.js"></script>
      <script src="lib/wow/wow.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/counterup/counterup.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="lib/isotope/isotope.pkgd.min.js"></script>
      <script src="lib/lightbox/js/lightbox.min.js"></script>
      <script src="contactform/contactform.js"></script>
      <script src="js/main.js"></script>

      -->

</div>
    