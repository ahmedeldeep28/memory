<?php 
    // session
    $pageType = "root";
    include('includes/scripts/ini.php'); 
    // page vars
    $currentPage = "Timeline";
?>


<?php if(!isset($_SESSION["userId"])){ ?>



    <?php include('includes/templates/common_links.php'); ?>
    <!--page links-->
    <link rel="stylesheet" href="layout/css/tiemline.css">
    <script src="https://code.responsivevoice.org/responsivevoice.js?key=rXM6i3Oh"></script>
        <!--page body-->
    <?php include('includes/templates/header.php'); ?>



    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="control">
                        <div class="title">
                            <h2>Add a card from here </h2>
                        </div>
                        <form action="<?php echo "includes/scripts/data/timeline" ?>" method="POST">
                            <div class="inpt">
                                <input maxlenght="50" name="line_title" type="text" placeholder="title" id="title" required>
                                <textarea maxlenght="500" name="line_paragraph" placeholder="praghraph" id="text" required></textarea>
                            </div>
                            <div class="add">
                                <button name="line_add" id="btn-add">add</button>
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
    <section class="all-list" id="main">
        <?php
            $stmt = $db->prepare("SELECT * FROM timeline ORDER BY isFavorite DESC");
            $stmt->execute();
            $lines = $stmt->fetchAll();
            $count = $stmt->rowCount();
        ?>
        <?php if($count > 0){ ?>
            <div class="line"></div>
            <?php foreach($lines as $line){ ?>
                <div class="item <?php echo $line["lineDisplay"]; ?>">
                    <form action="<?php echo "includes/scripts/data/timeline" ?>" method="POST">
                    <input id="cardId" type="hidden" name="cardId" value="<?php echo $line["id"]; ?>">
                    <div class="content">
                        <div class="title">
                            <h2 id="lineTitle"><?php echo $line["lineTitle"]; ?></h2>
                            <button name="event" value="dlt" class="event"><i class="material-icons-outlined">cancel</i></button>
                        </div>
                        <p id="linePar"><?php echo $line["lineParagraph"]; ?></p>
                        <div class="fotr">
                            <span>oct 30, 2020<?php echo $line["isEdited"] == 1 ? " &bullet; (edited)" : "" ; ?></span>
                            <div class="icons">
                                <button name="event" value="<?php echo $line["isFavorite"] == 1 ? "nrml" : "fav" ; ?>"><i class="material-icons-outlined">star_border</i></button>
                                <button id="edit" class="edit" type="button"><i class="material-icons-outlined">edit</i></button>
                                <button type="button" value="Play" id="spek"><i class="material-icons-outlined">mic_none</i></button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            <?php } ?>
        <?php }else{ ?>
            <div class="msg_empty">
                <h1>No Line Card Inserted Yet</h1>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias quos laborum dicta quis quia eum libero numquam excepturi nemo! Asperiores ullam voluptate est unde consequatur maiores praesentium ab dolorem veritatis!</p>
            </div>
        <?php } ?>

        <!-- PoP -->

        <div id="popedit" class="popedit">
            <div class="container">
                <div class="row area_row">
                    <div class="col-12 col-lg-6">
                        <div class="edit">
                            <center>
                                <h2>Editing</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat vel tempore</p>
                            </center>
                            <form action="<?php echo "includes/scripts/data/timeline" ?>" method="POST">
                                <input id="editId" type="hidden" name="cardId">
                                <div class="inpt">
                                    <input id="editTitle" maxlenght="50" name="edit_line_title" type="text" placeholder="Title" required>
                                    <textarea id="editPar" maxlenght="500" name="edit_line_paragraph" placeholder="Paragraph" required></textarea>
                                </div>
                                <div class="add">
                                    <button id="cancel_edt" type="button"> Cancel</button>
                                    <button name="event" value="edt"> Edit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>




    <?php include('includes/templates/footer.php'); ?>
    <!--page scripts-->
    <script src="layout/js/tiemline.js"></script>
    </body>
</html>

<?php }
else{ /*header("location:login");*/ } ?>