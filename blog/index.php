<?php include('header.php');?>
<div class="main-content">



<div class="cp-category-page2 cp-news-grid-style-2">
<div class="container">
<div class="row">

<div class="col-md-8">
<ul class="cp-category-list">
<?php
$page=$_REQUEST['p'];
$limit=1;
if($page=='')
{
 $page=1;
 $start=0;
}
else
{
 $start=$limit*($page-1);
}
$query=mysql_query("select * from blog_posts ORDER BY postDate DESC limit $start, $limit") or die(mysql_error());
$tot=mysql_query("select * from blog_posts") or die(mysql_error());
$total=mysql_num_rows($tot);
$num_page=ceil($total/$limit);
while($res=mysql_fetch_array($query))
{
?>
<li class="cp-fullwidth-news-post-excerpt">
<div class="cp-thumb"><img src="<?php echo $res['image'];?>" alt="<?php echo $res['postTitle'];?>"></div>
<div class="cp-post-content">
<h3><a href="../<?php echo $res['postID']?>/<?php echo str_replace(' ','-',$res['postTitle']);?>_blog.html"><?php echo $res['postTitle'];?></a></h3>
<ul class="cp-post-tools">
<li><i class="icon-1"></i> <?php echo date('d M, Y',strtotime($res['postDate'])) ;?></li>
<li><i class="icon-2"></i> Maxwell Relocations</li>

</ul>
<p><?php echo $res['postDesc'];?></p>
<a href="../<?php echo $res['postID']?>/<?php echo str_replace(' ','-',$res['postTitle']);?>_blog.html" class="cp-readmore waves-effect waves-button">Read More <i class="fa fa-angle-right"></i></a>
</div>
</li>
<?php } ?>
</ul>
<div class="pagination-holder">
<nav>
<ul class="pagination">
<?php
function pagination($page,$num_page)
{

  ?>

 <li> <a aria-label="Previous" href="index.php?p=<?php
 if($page<=1){
 	echo $page;
 }
 else{
 	echo $page-1;
 }

 ?>"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a> </li>
 <li><a href="index.php?p=1">1 <span class="sr-only">(current)</span></a></li>
<li><a href="index.php?p=2">2</a></li>
<li><a href="index.php?p=3">3</a></li>
 <li> <a aria-label="Next" href="index.php?p=<?php
if($page>$num_page-1){
echo $page;
}
else{
echo $page+1;
	}
 ?>"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a> </li>

<?php
}
if($num_page>1)
{
 pagination($page,$num_page);
}
?>



</ul>
</nav>
</div>
</div>


<?php include('sidebar.php');?>

</div>
</div>
</div>

</div>



<?php include('footer.php') ;?>
