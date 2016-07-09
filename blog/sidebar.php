<?php include('admin/connection.php');?>

<div class="col-md-4">
<div class="sidebar side-bar right-sidebar">

<div class="widget sidebar-newsletter">
<h3 class="side-title">Contact Us Now</h3>
<div class="cp-newsletter-holder">
<h3>1800-123-1234</h3>
<h4>info@test.com</h4>
<form>

</form>
</div>
</div>








<div class="widget popular-post">
<h3 class="side-title">Popular Posts</h3>
<div class="cp-sidebar-content">
<ul class="small-grid">
<?php
$query = "SELECT * FROM blog_posts ORDER BY RAND() LIMIT 10";
$query_data = mysql_query($query);
while($row = mysql_fetch_assoc($query_data)){
?>
<li>
<div class="small-post">
<div class="cp-thumb"><img alt="" src="/blog/admin/<?php echo $row['image'];?>"></div>
<div class="cp-post-content">
<h3><a href="../<?php echo $row['postID']?>/<?php echo str_replace(' ','-',$row['postTitle']);?>_blog.html"><?php echo $row['postTitle'];?></a></h3>
<ul class="cp-post-tools">
<li><i class="icon-1"></i> <?php echo date('d M, Y',strtotime($row['postDate'])) ;?></li>
<li><i class="icon-2"></i> Author</li>

</ul>
</div>
</div>
</li>
<?php } ?>
</ul>
</div>
</div>

 <div class="widget popular-post">
<h3 class="side-title">Latest Posts</h3>
<div class="cp-sidebar-content">
<ul class="small-grid">
<?php
$query = "SELECT * FROM blog_posts ORDER BY postDate DESC LIMIT 0,10";
$query_data = mysql_query($query);
while($row = mysql_fetch_assoc($query_data)){
?>
<li>
<div class="small-post">
<div class="cp-thumb"><img alt="" src="/blog/admin/<?php echo $row['image'];?>"></div>
<div class="cp-post-content">
<h3><a href="../<?php echo $row['postID']?>/<?php echo str_replace(' ','-',$row['postTitle']);?>_blog.html"><?php echo $row['postTitle'];?></a></h3>
<ul class="cp-post-tools">
<li><i class="icon-1"></i> <?php echo date('d M, Y',strtotime($row['postDate'])) ;?></li>
<li><i class="icon-2"></i> Author</li>

</ul>
</div>
</div>
</li>
<?php } ?>
</ul>
</div>
</div>





</div>
</div>
