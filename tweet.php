<?php
$query = "SELECT * FROM posts ORDER BY post_id DESC ";
$data = mysqli_query($con,$query);
 while($row = mysqli_fetch_assoc($data))
{
$post_text = $row['post_text'];
$post_date = $row['post_date'];
}
?>
<div class="tweet__box">
    <div class="tweet__left">
        <img src="" alt="">
    </div>
    <div class="tweet__body">
        <div class="tweet__header">
            <p class="tweet__name">code Addilct</p>
            <p class="tweet__username">@codeAddlict</p>
            <p class="tweet__date"><?php echo $post_date = date('M d');?></p>
        </div>
        <p class="tweet__text"><?php echo $post_text; ?></p>
        <div class="tweet__icons">
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
            <a href=""></a>
        </div>
    </div>
    <div class="tweet__del">
            <div class="dropdown">
                <button class="dropbtn"><span class="fa fa-ellipsis-h"></span></button>
                <div class="dropdown-content">
                    <a href="index.php?del=<?php echo $row['post_id'];?>"><i class="fa fa-transh-alt"></i><span>Delete</span></a>
                </div>
            </div>
        </div>
</div>
<?php 
?>
