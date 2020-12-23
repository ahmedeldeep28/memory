<?php 
    // session
    $pageType = "root";
    include('includes/scripts/ini.php'); 
    // page vars
    $currentPage = "Flash Card";
    
    


?>


<?php if(!isset($_SESSION["userId"])){ ?>



    <?php include('includes/templates/common_links.php'); ?>
    <!--page links-->
    <link rel="stylesheet" href="layout/css/flashCard.css">
    <link rel="stylesheet" href="layout/css/all.min.css">
    <!--page body-->
    <?php include('includes/templates/header.php'); ?>

    <header id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="control">
                        <div class="title">
                            <h2>Add a card from here</h2>
                            <span id="err"></span>
                        </div><!--includes/scripts/data/flashcard.php-->
                        <form id="myForm" action="<?php echo "includes/scripts/data/flashcard" ?>" method="POST">
                            <div class="inpt">
                                <input type="text" maxlength="50" name="card_front" placeholder="front" id="front" required>
                                <input type="text" maxlength="50" name="card_back" placeholder="back" id="back" required>
                            </div>
                            <div class="add">
                                    <button name="card_add" id="btn-add">add</button>
                                    <label for="grade">Card Grade</label><input name="card_grade" id="grade" type="checkbox">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-6  d-none d-lg-block">
                    <div class="slider">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <span>Welcome, we hope you enjoy the flip card service</span>
                                </div>
                                <div class="swiper-slide">
                                    <span>You want to memorize some words and then make sure to memorize</span>
                                </div>
                                <div class="swiper-slide">
                                    <span>Whenever you do not need to write the word, translate it on the back of the card</span>
                                </div>
                                <div class="swiper-slide">
                                    <span>When you see the word, say it and make sure to say it</span>
                                </div>

                            </div>
                        </div>
                </div>
        </div>
    </header>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,192L80,176C160,160,320,128,480,138.7C640,149,800,203,960,218.7C1120,235,1280,213,1360,202.7L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>
    <section class="perant" id="perant">
        
        <?php
            $stmt = $db->prepare("SELECT * FROM flashcard ORDER BY id DESC");
            $stmt->execute();
            $cards = $stmt->fetchAll();
            $count = $stmt->rowCount();
        ?>
        <?php if($count > 0){ ?>
            <?php foreach($cards as $card){ ?>
                <div class="card">
                    <div class="front">
                        <div class="eg head">
                            <div class="date"><span><?php echo EnglishDate($card["addDate"]); ?></span></div>
                            <div class="icons">
                                <form action="<?php echo "includes/scripts/data/flashcard" ?>" method="post">
                                    <button name="stared" value="<?php echo $card["cardGrade"] !== "normal" ? "del" : "add" ; ?>"><i class="material-icons-outlined" 
                                        <?php echo $card["cardGrade"] !== "normal" ? "favorite" : "normal" ; ?>>
                                        star_border
                                    </i></button>
                                    <button name="delete" value="del"><i class="material-icons-outlined" >delete</i></button>
                                    <input type="hidden" name="id" value="<?php echo $card["id"]; ?>">
                                </form>
                            </div>
                        </div>
                        <div class="content">
                            <?php echo $card["cardFront"]; ?>  
                        </div>
                        <div class="eg botm">
                            <div class="datal"><span>front &bullet; <?php echo strlen($card["cardFront"])." char" ?></span></div>
                            <div class="datar"><b><?php echo substr($card["cardBack"], 0, 6); ?></b></div>
                        </div>
                    </div>
                    <div class="back">
                        <div class="eg head">
                            <div class="date"><span><?php echo $card["cardGrade"]." card"; ?></span></div>
                        </div>
                        <div class="content">
                            <?php echo $card["cardBack"]; ?>  
                        </div>
                        <div class="eg botm">
                            <div class="datal"><span>back &bullet; <?php echo strlen($card["cardBack"])." char" ?></span></div>
                            <div class="datar"><b><?php echo substr($card["cardFront"], 0, 6); ?></b></div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php }else{ ?>
            <div class="msg_empty">
                <h1>No Card Inserted Yet</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga repellat, quibusdam possimus vero dolorem ipsam error veniam dolor minus iusto molestiae labore laborum explicabo maiores? Recusandae voluptate rem esse itaque?</p>
            </div>
        <?php } ?>

    </section>




    <?php include('includes/templates/footer.php'); ?>
    <!--page scripts-->
    <script src="layout/js/flashCard.js"></script>
    <script src="layout/js/script.main.js"></script>


    </body>
    </html>

<?php }
else{ /*header("location:login");*/ } ?>