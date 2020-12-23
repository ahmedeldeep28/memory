<?php 
    // session
    $pageType = "root";
    include('includes/scripts/ini.php'); 
    // page vars
    $currentPage = "contact";
    $pageRole = array("signin", "account");
?>


<?php if(!isset($_SESSION["userId"])){ ?>



    <?php include('includes/templates/common_links.php'); ?>
    <!--page links-->
    <link rel="stylesheet" href="layout/css/signin.css">
    <!--page body-->
    <?php include('includes/templates/header.php'); ?>



    <!--start section signin-->
    <!-- <section class="table">
          <div class="container">
                <div class="row">
              <form class="col-lg-6">
                    <div class="sign-up mt-5">
                        <div class="col-10">
                            <div class="title">
                                <h3>sign up</h3>
                            </div>
                            <div class="name">
                                <input type="text" class="col-12 mt-3" placeholder="frist name">
                            </div>
                            <div class="last">
                                <input type="text" class="col-12 mt-3" placeholder="list name">
                            </div>
                            <div class="email">
                                <input type="email" class="col-12 mt-3" placeholder="email">
                            </div>
                            <div class="password ">
                                <input type="password" class="col-12 mt-3" placeholder="password">
                            </div>
                            <div class="button">
                                <button  type="button" class="col-4 p-2 mt-3">sign up</button>
                            </div>
                        </div>
                    </div>
              </form>
                
              <form  class="col-lg-6">
                <div class=" login-in mt-5 d-flex justify-content-lg-start justify-content-lg-end">
                    <div class="col-10">
                        <div class="title">
                            <h3>login in</h3>
                        </div>
                        <div class="name ">
                            <input type="text" class="col-12 mt-3" placeholder="username">
                        </div>
                        <div class="password ">
                            <input type="password" class="col-12 mt-3" placeholder="password">
                        </div>
                        <div class="button">
                            <button  type="button" class="col-4 p-2 mt-3">login in</button>
                        </div>
                    </div>
                </div>
              </form>
                </div>
          </div>
      </section> -->
    <!--end section signin-->

      <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="row justify-content-center">
            <div class="sign-up col-md-6 col-11">
                <div class="title col-12">
                    <h3>sign up</h3>
                </div>
                <div class="name">
                    <input type="text" class="col-12 mt-3" placeholder="frist name">
                </div>
                <div class="last">
                    <input type="text" class="col-12 mt-3" placeholder="list name">
                </div>
                <div class="email">
                    <input type="email" class="col-12 mt-3" placeholder="email">
                </div>
                <div class="password ">
                    <input type="password" class="col-12 mt-3" placeholder="password">
                </div>
                <div class="button">
                    <button  type="button" class="col-4 p-2 mt-3">sign up</button>
                </div>
            </div> 
        </div>
      </div>

      <div class="swiper-slide">
        <div class="row justify-content-center">
            <div class="login-in col-md-6 col-11">
                <div class="title col-12">
                    <h3>login in</h3>
                </div>
                <div class="name">
                    <input type="text" class="col-12 mt-3" placeholder="username">
                </div>
                <div class="password ">
                    <input type="password" class="col-12 mt-3" placeholder="password">
                </div>
                <div class="button">
                    <button  type="button" class="col-4 p-2 mt-3">login in</button>
                </div>
            </div> 
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

    <?php include('includes/templates/footer.php'); ?>
    <!--page scripts-->
    <script src="layout/js/sigin.js"></script>

    </body>
    </html>

<?php }
else{ /*header("location:login");*/ } ?>