<?php 
    // session
    $pageType = "root";
    include('includes/scripts/ini.php'); 
    // page vars
    $currentPage = "Home";
    $pageRole = array("signin", "account");
?>


<?php if(!isset($_SESSION["userId"])){ ?>



    <?php include('includes/templates/common_links.php'); ?>
    <!--page links-->
    <link rel="stylesheet" href="layout/css/anmet.css">
    <link rel="stylesheet" href="layout/css/all.min.css.css">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!--page body-->
    <?php include('includes/templates/header.php'); ?> 




    <!--start elamemnt header-->
    <header class="header">
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <i class="fab fa-flipboard icon"></i>
                    <div class="row">
                        <h2 class="col-lg-12">Inverted card service to not forget words and phrases</h2>
                    </div>
                    <div class="row justify-content-center">
                      <p class="col-10 mb-5 d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae beatae ad nisi in ut explicabo quia architecto consectetur rem ullam sint laborum dolorum voluptatibus quam, placeat consequatur atque ab. </p>
                    </div>
                    <div class="row justify-content-center">
                        <button>getstarte</button>
                    </div>
                </div>

                <div class="swiper-slide">
                    <i class="fas fa-stream icon"></i>
                    <div class="row">
                      <h2 class="col-lg-12">The time line service for arranging your great ideas</h2>
                    </div>
                    <div class="row justify-content-center">
                        <p class="col-10 mb-5 d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae beatae ad nisi in ut explicabo quia architecto consectetur rem ullam sint laborum dolorum voluptatibus quam, placeat consequatur atque ab. </p>
                    </div>
                    <div class="row justify-content-center">
                        <button>getstarte</button>
                    </div>
                </div>

                <div class="swiper-slide">
                    <i class="fas fa-check-square icon"></i>
                    <div class="row">
                      <h2 class="col-lg-12">Daily tasks service in order to accomplish your daily tasks</h2>
                    </div>
                    <div class="row justify-content-center">
                        <p class=" col-10 mb-5 d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae beatae ad nisi in ut explicabo quia architecto consectetur rem ullam sint laborum dolorum voluptatibus quam, placeat consequatur atque ab. </p>
                    </div>
                    <div class="row justify-content-center">
                        <button>getstarte</button>
                    </div>
                </div>

                <div class="swiper-slide">
                    <i class="fas fa-sticky-note icon"></i>
                    <div class="row">
                      <h2 class="col-lg-12">You do not You do not have anyone with you to hear why </h2>
                    </div>
                    <div class="row justify-content-center">
                        <p class=" col-10 mb-5 d-none d-md-block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo recusandae beatae ad nisi in ut explicabo quia architecto consectetur rem ullam sint laborum dolorum voluptatibus quam, placeat consequatur atque ab. </p>
                    </div>
                    <div class="row justify-content-center">
                        <button>getstarte</button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,192L80,176C160,160,320,128,480,138.7C640,149,800,203,960,218.7C1120,235,1280,213,1360,202.7L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>

<!--end elamemnt header-->

    <!-- start section Services -->

    <section class="services">
        <div class="container">
            <div class="row">
                <div class="head col-12 col-lg-10">
                    <h2>our services</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste impedit, laboriosam voluptate, hic tempora fugiat dicta numquam dolores aut magnam, quo magni voluptas eaque blanditiis nulla voluptates! Tempora, quod quae.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="content">
                    <i class="fab fa-flipboard icon"></i>
                    <h3>flash card</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi praesentium molestiae iste vero, porro voluptatibus nulla atque illo voluptatem nemo</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="content">
                    <i class="fas fa-stream icon"></i>
                    <h3>tiemline</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi praesentium molestiae iste vero, porro voluptatibus nulla atque illo voluptatem nemo</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="content">
                        <i class="fas fa-check-square icon"></i>
                        <h3>todo day</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi praesentium molestiae iste vero, porro voluptatibus nulla atque illo voluptatem nemo</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="content">
                    <i class="fas fa-sticky-note icon"></i>
                    <h3>sticky not</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi praesentium molestiae iste vero, porro voluptatibus nulla atque illo voluptatem nemo</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ser">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 padd">
                    <div class="content">
                        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_kruf6wdm.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
                    </div>
                </div>
                <div class="col-lg-6 padd">
                    <div class="content">
                        <div class="text">
                            <h3>Inverted card service to not forget words and phrases</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 padd order-2 order-lg-1">
                    <div class="content">
                        <div class="text">
                            <h3>Lorem ipsum dolor sit amet consectetur</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 padd order-1 order-lg-2">
                    <div class="content">
                        <lottie-player src="https://assets3.lottiefiles.com/packages/lf20_epj8cm.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 padd">
                    <div class="content">
                        <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_XyfCyq.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
                    </div>
                </div>
                <div class="col-lg-6 padd">
                    <div class="content">
                        <div class="text">
                            <h3>Lorem ipsum dolor sit amet consectetur</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6 padd order-2 order-lg-1">
                    <div class="content">
                        <div class="text">
                            <h3>Lorem ipsum dolor sit amet consectetur </h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis dignissimos, magni inventore consequuntur eos quae obcaecati totam nulla sint maxime cumque. Itaque animi tempora fugit aliquid porro facilis ab magni.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 padd order-1 order-lg-2">
                    <div class="content">
                        <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_u157wnum.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end section Services -->

    <section class="team">
        <div class="container">
            <div class="header">
                <span>our team</span>
                <h2>MEET OUR TEAM</h2>
            </div>
            <div class="row">
                
                <div class="col-lg-4 col-md-4">
                    <div class="item">
                        <img src="layout/imgs/team (2).jpg" alt="">
                        <div class="info">
                            <h3 class="name">fadie steffe</h3>
                            <span>backend developer</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-square icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter-square icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-square icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="item">
                        <img src="layout/imgs/team (2).jpg" alt="">
                        <div class="info">
                            <h3 class="name">ahmedDeep28</h3>
                            <span>Frontend developer</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-square icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter-square icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-square icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4">
                    <div class="item">
                        <img src="layout/imgs/team (2).jpg" alt="">
                        <div class="info">
                            <h3 class="name">ahmedDeep28</h3>
                            <span>Frontend developer</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-square icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter-square icon"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-square icon"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <section class="blogs">
        <div class="container">
            <div class="header">
                <span>our bloge</span>
                <h2>the bloge our</h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="item-blog">
                        <div class="img">
                            <a href="./layout/pages/flashCard.html">
                                <img src="layout/imgs/stacknote.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h3>flsh card </h3>
                            <p>Lorem ipsum.blogs .item-blog .body dolor sit amet consectetur adipisicing elit. Ullam ipsa pariatur esse exercitationem placeat nobis similique eum quam neque accusamus amet accusantium voluptas corrupti porro voluptate, omnis alias hic quasi.</p>
                            <p>Lorem ipsum.blogs .item-blog .body dolor sit amet consectetur adipisicing elit. Ullam ipsa pariatur esse exercitationem placeat nobis similique eum quam neque accusamus amet accusantium voluptas corrupti porro voluptate, omnis alias hic quasi.</p>
                            <a href="./layout/pages/flashCard.html">go to start</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="item-blog">
                        <div class="img">
                            <a href="./layout/pages/tiemline.html">
                                <img src="layout/imgs/stacknote.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h3>creative tiemline</h3>
                            <p>Lorem ipsum.blogs .item-blog .body dolor sit amet consectetur adipisicing elit. Ullam ipsa pariatur esse exercitationem placeat nobis similique eum quam neque accusamus amet accusantium voluptas corrupti porro voluptate, omnis alias hic quasi.</p>
                            <p>Lorem ipsum.blogs .item-blog .body dolor sit amet consectetur adipisicing elit. Ullam ipsa pariatur esse exercitationem placeat nobis similique eum quam neque accusamus amet accusantium voluptas corrupti porro voluptate, omnis alias hic quasi.</p>
                            <a href="./layout/pages/tiemline.html">go to start</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="item-blog">
                        <div class="img">
                            <a href="./layout/pages/todo.html">
                                <img src="layout/imgs/stacknote.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h3>todo day</h3>
                            <p>Lorem ipsum.blogs .item-blog .body dolor sit amet consectetur adipisicing elit. Ullam ipsa pariatur esse exercitationem placeat nobis similique eum quam neque accusamus amet accusantium voluptas corrupti porro voluptate, omnis alias hic quasi.</p>
                            <p>Lorem ipsum.blogs .item-blog .body dolor sit amet consectetur adipisicing elit. Ullam ipsa pariatur esse exercitationem placeat nobis similique eum quam neque accusamus amet accusantium voluptas corrupti porro voluptate, omnis alias hic quasi.</p>
                            <a href="./layout/pages/todo.html">go to start</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="item-blog">
                        <div class="img">
                            <a href="#">
                                <img src="layout/imgs/stacknote.jpg" alt="">
                            </a>
                        </div>
                        <div class="body">
                            <h3>sticky note</h3>
                            <p>Lorem ipsum.blogs .item-blog .body dolor sit amet consectetur adipisicing elit. Ullam ipsa pariatur esse exercitationem placeat nobis similique eum quam neque accusamus amet accusantium voluptas corrupti porro voluptate, omnis alias hic quasi.</p>
                            <p>Lorem ipsum.blogs .item-blog .body dolor sit amet consectetur adipisicing elit. Ullam ipsa pariatur esse exercitationem placeat nobis similique eum quam neque accusamus amet accusantium voluptas corrupti porro voluptate, omnis alias hic quasi.</p>
                            <a href="#">go to start</a>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </section>
    <section class="tistmonal">
        <div class="container">
            <div class="header">
                <span>tistmonal</span>
                <h2>tistmonal tistmonal</h2>
            </div>
            <div class="swiper-container">
                <div class="swiper-wrapper">

                  <div class="swiper-slide">
                      <div class="img">
                        <img src="layout/imgs/team (2).jpg" alt="">
                      </div>
                      <div class="body">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos pariatur ratione atque esse, sit quibusdam porro minima tenetur sequi dolore in aut accusantium, ut voluptatum eligendi? Tempore labore doloremque laudantium.</p>
                      </div>
                      <div class="info">
                          <h3 class="name">stifn heron</h3>
                          <h3 class="job">none jobs</h3>
                      </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="img">
                        <img src="layout/imgs/team (2).jpg" alt="">
                    </div>
                    <div class="body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos pariatur ratione atque esse, sit quibusdam porro minima tenetur sequi dolore in aut accusantium, ut voluptatum eligendi? Tempore labore doloremque laudantium.</p>
                    </div>
                    <div class="info">
                        <h3 class="name">name clicnt</h3>
                        <h3 class="job">job clicnt</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img">
                        <img src="layout/imgs/team (2).jpg" alt="">
                    </div>
                    <div class="body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos pariatur ratione atque esse, sit quibusdam porro minima tenetur sequi dolore in aut accusantium, ut voluptatum eligendi? Tempore labore doloremque laudantium.</p>
                    </div>
                    <div class="info">
                        <h3 class="name">name clicnt</h3>
                        <h3 class="job">job clicnt</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img">
                        <img src="layout/imgs/team (2).jpg" alt="">
                    </div>
                    <div class="body">
                          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos pariatur ratione atque esse, sit quibusdam porro minima tenetur sequi dolore in aut accusantium, ut voluptatum eligendi? Tempore labore doloremque laudantium.</p>
                    </div>
                    <div class="info">
                        <h3 class="name">name clicnt</h3>
                        <h3 class="job">job clicnt</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img">
                        <img src="layout/imgs/team (2).jpg" alt="">
                    </div>
                    <div class="body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos pariatur ratione atque esse, sit quibusdam porro minima tenetur sequi dolore in aut accusantium, ut voluptatum eligendi? Tempore labore doloremque laudantium.</p>
                    </div>
                    <div class="info">
                        <h3 class="name">name clicnt</h3>
                        <h3 class="job">job clicnt</h3>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="img">
                        <img src="layout/imgs/team (2).jpg" alt="">
                    </div>
                    <div class="body">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos pariatur ratione atque esse, sit quibusdam porro minima tenetur sequi dolore in aut accusantium, ut voluptatum eligendi? Tempore labore doloremque laudantium.</p>
                    </div>
                    <div class="info">
                        <h3 class="name">name clicnt</h3>
                        <h3 class="job">job clicnt</h3>
                    </div>
                </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
              </div>
        </div>
    </section>
    <section class="conact-us" id="conact">
        <div class="back">
        <div class="container"> 
            <div class="header">
                <span>contact</span>
                <h2>call us now</h2>
            </div>
            <div class="all">
                <div class="conatct">
                    <div>
                      <span>name</span>
                      <input type="text" name="" id="" placeholder="name">
                    </div>
                    <div>
                      <span>phon number</span>
                      <input type="text" name="" id="" placeholder="phon number">
                    </div>
                     <div>
                      <span>email</span>
                      <input type="email" name="" id="" placeholder="email">
                    </div>
                  </div>
                  <div class="msg">
                    <div>
                        <span>Message</span>
                        <textarea placeholder="Message"></textarea>
                      </div>
                      <div>
                        <button>send<i class="fas fa-paper-plane fi"></i></button>
                      </div>
                  </div>
            </div>
        </div>
        </div>
      </section>




    <?php include('includes/templates/footer.php'); ?>
    <!--page scripts-->


    </body>
    </html>

<?php }
else{ /*header("location:login");*/ } ?>