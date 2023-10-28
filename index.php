<?php require_once "header.php";?>
<body>
    <?php
    if(isset($_post['btn_add_post'])){
        $post_Text - $_post['post_text'];
        if($post_Text != ""){
            $sql = "INSERT INTO posts(post_text,post_data)VALUES('$post_Text',now())";
           $result = mysqli_query($con,$sql); 
        }
    }
    ?>
    <div class="grid_container">
        <?php require_once "left-sidebar.php";?>
        <div class="main">
            <p class="page_title">Home</p>
            <div class="tweet__box tweet__add">
                <div class="tweet__left">
                    <img src="img/download.png" alt="">
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                 <textarea name="post-text" id="" cols="100%" rows="3" placeholder="what is happening?"></textarea>
                 <div class="tweet__icons-wrapper">
                    <div class="tweet__icons-add">
                        <i class="fa-solid fa-image"></i>
                        <i class="fa-solid fa-chart-bar"></i>
                        <i class="fa-solid fa-face-smile"></i>
                        <i class="fa-solid fa-calendar-days"></i>
                    </div>
                    <button class="button__tweet"  type="submit" name="btn_add_post">Tweet</button>
                 </div>
                </form>
            </div>
        </div>
        <?php require_once "tweet.php";?>
    </div>
    </div>
    <?php require_once "right-sidebar.php";?>
    <?php
    if(isset($_GET['del']))
    {
        $Del_ID = $_GET['del'];
        $sql = "delete from posts where post_id = '$Del_ID'";
        $post_query = mysqli_query($con,$sql);
        if($sql){
            header("location:index.php");
        }
    }
    ?>