<?php 
    // session
    $pageType = "root";
    include('includes/scripts/ini.php'); 
    // page vars
    $currentPage = "Todo";
    $pageRole = array("signin", "account");
?>


<?php if(!isset($_SESSION["userId"])){ ?>



    <?php include('includes/templates/common_links.php'); ?>
    <!--page links-->
    <link rel="stylesheet" href="layout/css/todo.css">
    <!--page body-->
    <?php include('includes/templates/header.php'); ?>



    <section class="header">
        <div class="container">
            <div class="title">
                <h1>What will you accomplish today?</h1>
            </div>
            <div class="row">
                <div class="col-12 offset-0 col-lg-10 offset-lg-1">
                    <div class="add-to-do">
                        <form action="<?php echo "includes/scripts/data/todo" ?>" method="POST">
                            <input type="text" maxlength="250" name="todo_content" placeholder="I will perform today" required>
                            <input type="text" maxlength="20" name="todo_comment" placeholder="Comment">
                            <input type="time" name="todo_time" required>
                            
                            <button name="todo_add"><i class="material-icons-outlined">post_add</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,192L80,176C160,160,320,128,480,138.7C640,149,800,203,960,218.7C1120,235,1280,213,1360,202.7L1440,192L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>


    <section class="all-element">
        <div class="container">
            <?php
                $stmt = $db->prepare("SELECT * FROM todo ORDER BY todoTime ASC"); //
                $stmt->execute();
                $missions = $stmt->fetchAll();
                $count = $stmt->rowCount();
            ?>
            <?php if($count > 0){ ?>
                <?php foreach($missions as $mission){ ?>
                    <form id="form<?php echo $mission["id"]; ?>" action="<?php echo "includes/scripts/data/todo" ?>" method="POST">
                    <input type="hidden" name="id" value="<?php echo $mission["id"]; ?>">
                    <div class="item">
                        <div class="content">
                            <div class="top">
                                <input 
                                    onchange="document.getElementById('form<?php echo $mission['id']; ?>').submit();" 
                                    type="checkbox" 
                                    id="todo<?php echo $mission["id"]; ?>" 
                                    name="doing" 
                                    value="<?php echo $mission["isDoing"] == 1 ? 1 : 0; ?>" 
                                >
                                <label for="todo<?php echo $mission["id"]; ?>">
                                    <?php echo $mission["todoContent"]; ?>
                                </label>
                            </div>
                            <div class="bottom">
                                <span>
                                    <span><?php echo $mission["todoComment"]; ?></span>
                                    <?php echo !empty($mission["todoComment"]) ? "&bullet;" : ""; ?> 
                                    <span><?php echo substr($mission["todoTime"], 0, 5); ?></span>
                                </span>
                            </div>
                        </div>
                        <div class="icons">
                          <!-- <button type="button" value="Play" id="spek"><i class="material-icons-outlined">mic_none</i></button> -->
                            <button id="edit" class="edit" type="button"><i class="material-icons-outlined">edit</i></button>
                            <button name="edel" value="delete"><i class="material-icons-outlined">delete</i></button>
                        </div>
                    </div>
                    </form>
                <?php } ?>
            <?php }else{ ?>
                <div class="msg_empty">
                    <h1>No Task Added Yet Today</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque sequi error harum amet beatae incidunt quidem reiciendis ab, animi ullam sint facilis minima ex recusandae minus molestiae asperiores sit at?</p>
                </div>
            <?php } ?>
            

        </div>




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
                            <form action="<?php echo "includes/scripts/data/todo" ?>" method="POST">
                                <input id="editId" type="hidden" name="id">
                                <div class="inpt">
                                    <input type="text" maxlength="250" name="edt_todo_content" id="edt_todo_content" placeholder="I will perform today" required>
                                    <input type="text" maxlength="20" name="edt_todo_comment" id="edt_todo_comment" placeholder="Comment">
                                    <input type="time" name="edt_todo_time" id="edt_todo_time" required>
                                </div>
                                <div class="add">
                                    <button id="cancel_edt" type="button">Cancel</button>
                                    <button name="edel" value="edit">Edit</button>
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
    <script src="layout/js/todo.js"></script>

    </body>
    </html>

<?php }
else{ /*header("location:login");*/ } ?>