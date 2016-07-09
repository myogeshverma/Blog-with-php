<?php include('header.php'); ?>

<?php $id = $_GET['id'];
$query = "SELECT * FROM blog_posts WHERE postID = $id";
$query_data = mysql_query($query);
$row = mysql_fetch_assoc($query_data);

?>
	<div class="main-content">

<div class="cp-post-details">
<div class="container">
<div class="row">

<div class="col-md-8">
<div class="cp-single-post">

<div class="cp-thumb"><img src="<?php echo $row['image'];?>" alt=""></div>
<div class="cp-post-content">
<h3><a href="#"><?php echo $row['postTitle'];?></a></h3>
<ul class="cp-post-tools">
<li><i class="icon-1"></i><?php echo date('d M, Y',strtotime($row['postDate'])) ;?></li>
<li><i class="icon-2"></i> Maxwell Relocations</li>

</ul>
<div><?php echo html_entity_decode($row['postCont']);?></div>
</div>

<div class="cp-post-share-tags">
<div class="row">
<!-- <div class="col-md-6">
<ul class="cp-post-share">
<li><span><i class="fa fa-share-alt"></i></span></li>
<li><a href="#"><i class="fa fa-twitter"></i></a></li>
<li><a href="#"><i class="fa fa-facebook"></i></a></li>
<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
<li><a href="#"><i class="fa fa-youtube"></i></a></li>
</ul>
</div> -->
<div class="col-md-12">
<ul class="cp-post-tags">
<li><span><i class="fa fa-tags"></i></span></li>
<li><a href="#"><?php echo $row['tags'];?></a></li>
</ul>
</div>
</div>
</div>






</div>
</div>


<?php include('sidebar.php');?>

</div>
</div>
</div>

</div>
<?php include('footer.php');?>
