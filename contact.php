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
    <link rel="stylesheet" href="layout/css/contact.css">
    <!--page body-->
    <?php include('includes/templates/header.php'); ?>



    <!--start section contact-->
    <section class="contact">
        <div class="container">
          <div class="row mt-5">
            <div class="col-lg-6  order-2 order-lg-1">
                <div class="header">
                    <span>our contact</span>
                    <h2>please send your message</h2>
                  </div>
              <form>
                <div class="row name justify-content-center justify-content-lg-start">
                  <input type="text" class="col-11 p-3" placeholder="name">
                </div>
                <div class="row email justify-content-center justify-content-lg-start">
                  <input type="email" class="col-11 p-3 mt-3" placeholder="email">
                </div>
                <div class="row masg justify-content-center justify-content-lg-start">
                  <textarea  class="col-11 mt-3 p-2" placeholder="message"></textarea>
                </div>
                <div class="row btn justify-content-center justify-content-lg-start">
                  <button  class="col-5 mt-3 p-3">send</button>
                </div>
              </form>
            </div>
            <div class="col-lg-6  d-flex order-lg-2 order-1 justify-content-center">
              <div class="img">
                <lottie-player src="https://assets1.lottiefiles.com/packages/lf20_OZnTKS.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"  loop  autoplay></lottie-player>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--end section contact-->


    <?php include('includes/templates/footer.php'); ?>
    <!--page scripts-->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="layout/js/todo.js"></script>

    </body>
    </html>

<?php }
else{ /*header("location:login");*/ } ?>